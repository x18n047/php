<!-- pdo.php -->
<?php
    // Data Source Name
    $dsn = "pgsql:host=localhost dbname=x18n047 port=5432";
    $id = "x18n047";   // DBのID
    $pw = "n990906";   // DBのパスワード

    // データベースへの接続
    try {
        $pdo = new PDO($dsn, $id, $pw);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    // 接続確認
    //var_dump($pdo);

    // テーブルを作成する
    $tbl = 'pokemon';
    $sql = "CREATE TABLE ${tbl}(
        id INT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        type VARCHAR(30),
        update TIMESTAMP NOT NULL DEFAULT now())";
    // データを追加する
    $sql = "INSERT INTO 
    ${tbl}(id, name, type)
    VALUES(1, 'プリン',
    'フェアリー')";
    // // データの更新
    // $sql = "UPDATE ${tbl}
    //     SET name = 'ピカチュウ'
    //     WHERE id = 1";


    // //     // データ削除
    // // $sql = "DELETE FROM ${tbl}
    // // WHERE id = 1";
     // 自分で好きなポケモンを追加して
     // ください
     $sql = "INSERT INTO ${tbl}
         (id, name, type)
         VALUES (3, 'ホーホー', 'とり')";

     // テーブルの削除
     //$sql = "DROP TABLE ${tbl}";
     // クエリを実行(発行)する
     // $res = $pdo->query($sql);

     // クエリを実行(発行)する
     $res = $pdo->query($sql);
     // 結果の確認
     var_dump($res);
     if (!$res) {
         // クエリが失敗した時の処理
         echo "失敗<br>";
     }


    // // データベースから切断する
     $pdo = null;

    ?>
