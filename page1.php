<?php
    // クッキーを発行
    setcookie('value', 100);
?>
<html>
    <body>
<?php
    $getcookie = $_COOKIE['value'];
    print "このページ1のクッキーの値は「".$getcookie."」です<br />";
?>
        <a href = "page2.php">ページ2へ</a>
    </body>
</html>