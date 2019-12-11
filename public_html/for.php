<?php
    $cmd = "ip";
    for ($i = 0; $i < 10; $i++){
        echo "${i}回目のくりかえり<br>";
        switch ($cmd){
            case "ip":
            echo $_SERVER["SERVER_ADDR"];
            break;
        case "host":
            echo $_SERVER["SERVER_NAME"];
        default:    
        }
    }

?>