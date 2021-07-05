<html>
 <head>
  <title>enzansi</title>
 </head>
 <body>
<?php
    // それぞれの変数に値（データ）を代入
    $a = 9;
    $b = 3;
    $c = 10;

    // $a と $b を足し算した結果を$answerに代入
    $answer1 = $a + $b;
    // print関数で表示
    print " $a と $b を足し算した結果は".$answer1."<br />";

    // $a から $b を引いた結果を$answerに代入
    $answer2 = $a - $b;
    // print関数で表示
    print " $a から $b を引いた結果は".$answer2."<br />";

    // $a と $b をかけた結果を$answerに代入
    $answer3 = $a * $b;
    // print関数で表示
    print " $a と $b をかけた結果は".$answer3."<br />";

    // $a を $b で割った結果を$answerに代入
    $answer4 = $a / $b;
    // print関数で表示
    print " $a を $b で割った結果は".$answer4."<br />";

    // $c を $b で割った余りを$answerに代入
    $answer5 = $c % $b;
    // print関数で表示
    print "$c を $b で割った余りは".$answer5."<br />";

    $before = $a = 1;
    // $aに1を足した後に、$beforeに値を代入する
    $before = ++$a;
    print "前置は".$before."<br />";

    $after = $a = 1;
    // $afterに代入した後に、$aに1を足す。
    $after = $a++;
    print "後置は".$after."<br />";

?>
</body>
</html>