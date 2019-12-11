
<?php
if (isset($_GET['X'])) {
    $x = $_GET['X'];
} else {
    $x = '';
}
if (isset($_GET['Y'])) {
    $y = $_GET['Y'];
} else {
    $y = '';
}
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <title>入力フォーム2</title>
</head>
<body>
    <form action="" method="GET">
    X=
        <input value="<?php echo $x; ?>" type="text" name="X" size="4" maxlength="3">
        <br>
        Y=
        <input value="<?= $y ?>" type="text" name="Y" size="4" maxlength="3">
        <br>
        <input type="submit" name="ADD" value="足す" >
        <input type="submit" name="SUB" value="引く" >
        <input type="submit" name="MUL" value="かける" >
         <input type="submit" name="DIV" value="わる" >
    </form>
    <hr>
    <p>
        <?php 
         if (isset($_GET['ADD'])) {
            // 足し算の処理
            echo "${x} + ${y} = ".($x+$y)."<br>";
        } else if (isset($_GET['SUB'])) {
            echo "${x} - ${y} = ".($x-$y)."<br>";
        }
        ?>
    </p>
</body>
</html>