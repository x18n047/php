<?php

    $x = htmlspecialchars($_GET['X']. ENT_QUOFTES, 'UTF-8');
    $y = $_GET['Y'];
    echo "$x + $y = ".($x + $y)."<br>";

?>