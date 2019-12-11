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

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>足し算</title>
</head>
<body>
<h1>入力データの合計を求める</h1>

<form action="" method="GET">
<fieldset>
	<!-- ▼テキストボックス1を配置 -->
    <input type="text" name="X" size="10" maxlength="255" value="<?php echo $x;?>" autofocus>
	<!-- ▼テキストボックス2を配置 -->
    <input type="text" name="Y" size="10" maxlength="255" value="<?= $y ?>">
	<!-- ▼送信ボタンを配置 -->
    <input type="submit" name="ADD" value="　足し算　">
</fieldset>
</form>

<p>
<!-- ▼ここでPHPによる計算と出力を行う -->
        <?php 
         if (isset($_GET['ADD'])) {
            // 足し算の処理
            echo "${x} + ${y} = ".($x+$y)."<br>";
        } 
        ?>
</p>
</body>
</html>