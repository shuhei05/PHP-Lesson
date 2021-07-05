<html>
 <head>
  <title>bunki</title>
 </head>
 <body>
 <?php
    // $aに値を代入
    $a = 10;

    // $aが5より大きいという条件
    if ($a > 5) {

        // $aが8という条件
        if ($a === 8) {

            // 上記2つの条件に合った場合の処理
            print '$aの値は8です。';

        } else {

            // 「$aが5より大きい」という条件に合ったが、「$a === 8」という条件に合わなかったときの処理
            print '$aの値は5より大きく、8以外です。';
        }
    } else {

        // 「$aが5より大きい」という条件に合わなかったときの処理
        print '$aの値は5より小さい。';

    }
?>
<?php
    // $aに値を代入
    $a = 1000;
    // $aは500以上なので、$bには「TRUEの時の値」が代入されます。
    $b = ($a > 500) ? "TRUEの時の値" : "FALSEの時の値";
    // $bをブラウザに出力してみます。
    echo $b;
?>
<?php
    // $aに値を代入
    $a = 10;
    // $aの値によって分岐します。
    switch ($a) {
        // $aが0～4の時
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            print '$aの値は0～4の間の値です。';
            break;
        // $aが5～9の時
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            print '$aの値は5～9の間の値です。';
            break;
        // 上記のどの条件にも当てはまらない時
        default:
            print '$aの値は0～9以外の値です。';
            break;
    }
?>
</body>
</html>