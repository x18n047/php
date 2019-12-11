<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <title>入力フォーム2</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name ="MSG">
        <input type="submit">
    <p><?php
        if (isset ($_POST['MSG'])){
             echo $_POST['MSG'];
        }
    ?></p>
</body>
</html>