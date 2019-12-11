<!DOCTYPE html>
    <html><head>
    <meta charset="utf-8">
    <title>php</title></head>
    <body>
    <?php
        $loop = $_GET['LOOP'];
        for($i = 0; $i < $loop; $i++){
    ?>
    <p>Hello, PHP.</p>
    <?php
        }
    ?>
    </body></html>