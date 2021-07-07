<html>
 <head>
  <title>kansu</title>
 </head>
 <body>
 <?php
    // 関数の定義
    /*
    function 関数名(引数) {
        処理
    }
    */
    function samplefunc($a) {
        print $a;
    }

    // 関数の呼び出し
    // 関数名(引数);
    $word = "PHPのキソ";
    samplefunc($word);

    function addNum($b, $c) {
      $add = $b + $c;
      return $add ;
  }
  // 戻り値を$totalに格納
  $total = addNum(2, 3);
  print $total;
?>
