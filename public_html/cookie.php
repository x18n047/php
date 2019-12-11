<?php
    $cnt = 0;

    if (isset($_COOKIE['COUNT'])){
        $cnt = $_COOKIE['COUNT'];
    }

    $cnt++;
    //cookieにデータを保存する
    setcookie('COUNT', $cnt, time()+3600);
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