<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <title>入力フォーム2</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name ="MSG">
        <input type="submit">
    <p><?php
    //変数名MSGがあるか確認
        if(isset($_GET['MSG'])){
            //あれば表示する
            echo $_GET['MSG'];
        }
    ?></p>
</body>
</html>