<?php
    // 論理演算子の確認
    // & && AND
    // | || OR
    // | NOT
    echo "true & true = ". (true & true) ."<br>";
    echo "true & false = ". (true & false) ."<br>";
    echo "false & false = ". (false & false) ."<br>";

    echo "true && true = ". (true && true) ."<br>";
    echo "true && false = ". (true && false) ."<br>";
    echo "false && false = ". (false && false) ."<br>";

    echo "true | true = ". (true | true) ."<br>";
    echo "true | false = ". (true | false) ."<br>";
    echo "false | false = ". (false | false) ."<br>";

    echo "true || true = ". (true || true) ."<br>";
    echo "true || false = ". (true || false) ."<br>";
    echo "false || false = ". (false || false) ."<br>";

    echo "!true = ". (!true) ."<br>";
    echo "!false = ". (!false) ."<br>";
    
    echo "デバック用関数を使った表示<br>";
    var_dump(true); echo "<br>";
    var_dump(false);
?>