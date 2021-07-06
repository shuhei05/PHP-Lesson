<html>
 <head>
  <title>foreach</title>
 </head>
 <body>
 <?php
    $a = 0;

    while ($a < 10) {
        if ($a == 5) {
            break;
        }
        print '$aの値は'.$a.'です。<br />';
        $a++;
    }

    $b = 0;

    while ($b < 5) {
        print '最初の$aの値は'.$b.'です。<br />';
        $b++;
        print '++演算子で$aの値は'.$b.'になりました。<br />';

        // 奇数だったらという条件
        if ($b % 2 == 1) {
            print 'continueでこの処理を中断し、次の回の繰り返しを実行<br /><br />';
            continue;
        }

        print '最後の$aの値は'.$b.'です。<br /><br />';
    }
?>
</body>
</html>