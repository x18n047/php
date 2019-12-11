<?php

    if(isset($_GET['name'])){
        $name = $_GET['name'];
    }else{
        $name = '名無し';
    }
    echo "${name}さん、PHPですよPHP!<br>";
?>