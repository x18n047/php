<!-- pdo_select.php -->
<?php
require_once "../dsn.php";
require_once "lib.php";

$pdo = dbcon();

$sql = "SELECT * FROM pokemon";
$res = $pdo->query($sql);
// 見出しだけ表示
for ($i = 0;
    $col = $res->getColumnMeta($i);
    $i++) {
        echo $col['name'] . ",";
}

//テーブルの内容を表示する
$data = $res->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $rows){
    //var_dump($rows);
    echo $rows["id"] . ",";
    echo $rows["name"] . ",";
    echo $rows["type"] . ",";
    echo $rows["update"] . ",";
}

$tbl = "pokemon";
show($pdo, $tbl);

$pdo = null;



?>
