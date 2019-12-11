<!-- pdo_mgmt.php -->
<?php
require_once '../dsn.php';
require_once 'lib.php';

    // 変数の初期化
    $id = '';
    $name = '';
    $tbl = 'pokemon';   // テーブル名

    // DB接続
    $pdo = dbcon();

    // 入力フォームのデータが存在すれば各変数へ代入
    if (isset($_POST['ID'])) $id = $_POST['ID'];
    if (isset($_POST['NAME'])) $name = $_POST['NAME'];
    if (isset($_POST['TYPE'])) $type = $_POST['TYPE'];
    if (empty($type)) $type = null;     // TYPEは省略可能なので、空文字の場合はnullを代入する
    if (isset($_POST['ADD'])) {
    // 追加
      if(!empty($id) && !empty($name)) {
        $sql = "INSERT INTO ${tbl}(
            id,name,type) VALUES(
            :id, :name, :type)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id,
            PDO::PARAM_INT);
        $stmt->bindValue(':name', $name,
            PDO::PARAM_STR);
        $stmt->bindValue(':type', $type,
            PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt) $msg="${name}を追加";
      }
    } else if (isset($_POST['UPD'])) {
    // 更新
      if (!empty($id) && 
        (!empty($name) ||
         !empty($type))) {
        $sql = "UPDATE ${tbl} SET ";
        if (!empty($name)) {
          $sql .= "name = :name ";
        }
        if (!empty($type)) {
          if (!empty($name)) $sql.=",";
          $sql .= "type = :type ";
        }
        $sql .= "WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id", $id,
          PDO::PARAM_INT);
        if (!empty($name))
          $stmt->bindValue(":name", $name,
          PDO::PARAM_STR);
        if (!empty($type))
          $stmt->bindValue(":type", $type,
          PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt)
          $msg = "ID [${id}] を更新";
    }

    } else if (isset($_POST['DEL'])) {
    // 削除
      if (!empty($id)) {
        $sql = "DELETE FROM ${tbl}
                WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id,
            PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt) $msg="${id}を削除";
      }

    }


    // 登録用IDの取得
    $sql = "SELECT MAX(id) AS id
            FROM ${tbl}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $maxid = $stmt->fetchAll(
        PDO::FETCH_ASSOC)[0]['id']+1;
?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>DB Management</title>
</head>
<body>
    <form action="" method="POST">
    ID:<input type="text" name="ID" size="3" value="<?php if (isset($maxid) && !empty($maxid)) echo $maxid; ?>"><br>
    名前:<input type="text" name="NAME"><br>
    タイプ:<input type="text" name="TYPE"><br>
    <input type="submit" name="ADD" value="追加">
     <input type="submit" name="UPD" value="更新">
     <input type="submit" name="DEL" value="削除"><br>
    </form>
    <hr>
<?php
    // 表示するメッセージがあるようならば、それを表示する
    if (isset($msg) && !empty($msg)) {
        echo "<p>$msg</p>";
    }

    // テーブルの内容を表示する
    $sql = "SELECT * FROM ${tbl} ORDER BY id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    show($stmt);

    // DB切断
    $pdo = null;
?>
</body></html>
