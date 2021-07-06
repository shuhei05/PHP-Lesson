<html>
 <head>
  <title>for</title>
 </head>
 <body>
 <?php
    // 外側のループ
    for ($a = 0; $a <= 3; $a++) {
        print '■ここは外側のループです。';
        print '$aの値は'.$a.'です<br />';

        // 内側のループ
        for ($i = 0; $i <= 3; $i++) {
            print '○ここは内側のループです。';
            print '$iの値は'.$i.'です<br />';
        }
    }

    $b = 1;

    // この条件式は無限ループになります。
    while (true) {

        // $aが10より大きい時に、処理を抜けます。
        if ($b > 10) {
            break;
        }

        // $aを2で割って余りがない時に表示します。
        if ($b % 2 == 0) {
            print '$bは偶数です。値は'.$b.'です<br />';
        }

        $b++;
    }
?>
</body>
</html>