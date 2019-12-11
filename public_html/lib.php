<?php
//データベースに接続する
function dbcon(){
    try{
        $pdo = new PDO(DSN, DBID, DBPW);
    }catch(PDOException $e){
        die($e->getMessage());
    }
    return $pdo;
}

// 指定されたテーブルのデータをすべて
// 表示する
function show($res) {
    //$sql = "SELECT * FROM ${t}";
    //$res = $db->query($sql);
    $data = $res->fetchAll(PDO::FETCH_ASSOC);
    echo "<table border=\"1\">";
    echo "<tr>";
    for($i = 0;
       $col=$res->getColumnMeta($i);
       $i++) {
        echo "<th>".$col["name"]."</th>";
       }
    echo "</tr>";
    foreach ($data as $rows) {
        echo "<tr>";
        foreach($rows as $v) {
            echo "<td>${v}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}