<!-- pdo_prepare.php -->
<?php
require_once '../dsn.php';
require_once 'lib.php';

$pdo = dbcon();
if(isset($_POST['NAME']))
$name = '%'.$_POST['NAME'].'%';
$sql = "SELECT * FROM pokemon
        WHERE name like :name";
//echo "sql = ${sql}<br>";
// prepareを使ってクエリの準備
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name,
                PDO::PARAM_STR);
// クエリの実行
$stmt->execute();

show($stmt);

$pdo = null;

?>
<html><head>
<meta charset="utf-8">
</head><body>
<form action="" method="POST">
<input type="text" name="NAME">
<input type="submit">
</form>
</body></html>