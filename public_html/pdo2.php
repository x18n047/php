<!-- pdo2.php -->
<?php
    // Data Source Name
    $dsn = "pgsql:host=localhost dbname=x18n047 port=5432";
    $user = "x18n047";
    $password = "n990906";

    // データベースに接続
    try {
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    // 接続確認用
    var_dump($pdo);

    // データベースから切断
    $pdo = null;

?>
