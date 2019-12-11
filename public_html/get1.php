<?php

    if(isset($_GET['NAME'])){
        $name = $_GET['NAME'];
    }else{
        $name = '名無し';
    }
    echo "こんにちは、${name}さん<br>";
?>