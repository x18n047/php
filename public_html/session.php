<?php
//セッション
//サーバ上にデータを」一時保存しておく機能
session_start();

echo "セッションの名の確認<br>";
var_dump(session_name());
echo "<br>";
echo "セッションIDの確認<br>";
var_dump(session_id());
echo "<br>";
if(isset($_POST['SEND'])){
    if(isset($_POST['NAME'])){
        //セッションにデータを保存する
        $_SESSION['NAME'] = $_POST['NAME'];
    }
}else if(isset($_POST['CLR'])){
    //セッションの削除
    unset($_SESSION['NAME']);
    //セッションIDの削除
    session_destroy();
}

    //セッション内の情報を使う
    if(isset($_SESSION['NAME'])){
        echo "セッションNAMEには".
            $_SESSION['NAME'].
            "が保存されているか<br>";
        }else{
            echo "セッションがない<br>";
        }
?>

<html><head>
<meta charset="utf-8">
</head><body>
<form action="" method="POST">
Name:
<input type="text" method="NAME"><br>
<input type="submit" name="SEND" value="送信">
<input type="submit" name="CLR" value="削除">
</form>
</body>
</html>