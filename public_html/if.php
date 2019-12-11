<?php
    $x = 700;
    $y = 334;
    if($x<$y){
        //条件が正しいときに実行
        echo "xのほうが小さい<br>";
    }else if($_SERVER{"REMOTE_ADDR"} == '172.16.27.112'){
        echo "見せられないよ (:p<br>";
    }else {
        echo "それ以外の時<br>";
    }

?>