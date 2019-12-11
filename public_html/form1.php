<!-- form1.php -->

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>入力フォーム</title>
    </head>
    <body>
        <h1>入力フォーム<h1>
        <form action="form1_get.php" method="GET">
            <input type="text" name="MSG"> <!--name属性 -->
            <input type="submit" value="投稿" name="SEND">
            <br>
            <input type="password">
            <input type="checkbox">
            <input type="radio" name="r">
            <input type="radio" name="r">
            <input type="date">
            <textarea>改行できる</textarea>

        </form>
    </body>
</html>