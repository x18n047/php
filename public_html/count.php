<?php
    $cnt = 0;
    $file = 'dat/count.dat';
    $fp = @fopen($file, 'r');

    if($fp){
        flock($fp, LOCK_EX);
        $cnt = fgets($fp);
        if (empty($cnt)) $cnt=0;
        $cnt++;
        fputs($fp, $cnt);
        flock($fp, LOCK_UN);
        fclose($fp);
    }

    if (empty($cnt)) $cnt = 0;

    $cnt++;
    //cookieにデータを保存する
    $fp = fopen($file, 'w');
    
        fputs($fp, $cnt);
        fclose($fp);
    

?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>cookieカウンタ</title>
</head>
<body>
    <h1>cookie</h1>
    <p>
    このページに<?php echo $cnt; ?>回アクセスした
    </p>
</body>
</html>