<!-- calc.php -->
<?php
    // <!-- --> はHTMLのコメント
    echo "1 + 1 = " . (1 + 1) ."<br>";
    // 好きな数字を使った答えを表示するコードを追加
    // 条件:引き算、掛け算、割り算、余りを用いる

    echo "1.5 * 1.5 = " . (1.5 * 1.5)  . "<br>";
    echo "1.5555 * 1.55555 = " . (1.55555 * 1.555)  . "<br>";
    echo "155555 * 15555 = " . (1555 * 155)  . "<br>";
    echo "3 / 3 = " . (3 / 3 )  . "<br>";
    
    // 変数を使って表現する
    $x = 6;
    $y = 5;
    echo $x. "+" .$y. "=" .($x + $y)."<br>";
    echo "$x + $y =" .($x + $y)."<br>";
    echo '$x+$y= '.($x + $y).'<br>';
    echo "${x}a+$y=" .($x + $y)."<br>";
    
    ?>