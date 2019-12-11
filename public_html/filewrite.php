<!-- filewrite.php -->
<?php
    $msg = "";
    $filename = 'test.dat';
    if (isset($_POST['MSG'])) {
        $msg = $_POST['MSG'];
    }
    // 投稿データの加工例
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date('c');
    $msg = "$ip,$msg,$date".PHP_EOL;

    //var_dump($msg);
    // データの保存
    // ファイルを開く
    // 'w'は上書きを表す
    // 'a'は追記を表す
    $fp = fopen($filename, 'a');
    // 開いたファイルにデータを書込み
    fwrite($fp, $msg);
    // ファイルを閉じる
    fclose($fp);

?>
<!DOCTYPE html>
<html><head><meta charset="utf-8">
<title>ファイルに保存</title>
</head><body>
<form action="" method="POST">
<input type="text" name="MSG">
<input type="submit">
</form>
<p>
<?php
    // ファイルのデータを読み込む
    $fp = fopen($filename, 'r');
    if ($fp) {
        // ファイルが開けていれば処理を行う
        // ファイル内のデータを
        // すべて読み込むまで繰り返す
        while ($line = fgets($fp)) {
            //echo "$line<br>";
            list($ip, $msg, $date) = explode(',', $line);
            echo "${ip}：「${msg}」(${date})<br>";
        }
        fclose($fp);
    }

?>
</p>
</body></html>
