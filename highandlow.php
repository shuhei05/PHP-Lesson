<?php

$number = mt_rand(1, 9);
$result = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $choice = '';
  if(isset($_POST['choice']) === true){
    $choice = $_POST['choice'];
  }

  $previous = '';
  if(isset($_POST['previous']) === true){
    $previous = $_POST['previous'];
  }

  if($previous < $number){
    $answer = 'ハイ';
  } else if ( $previous > $number ){
    $answer = 'ロー';
  } else {
    $answer = 'ドロー';
  }

  if($answer === 'ドロー'){
    $result = '引き分け';
  } else if ($answer === $choice){
    $result = '勝ち!';
  } else {
    $result = '負け...';
  }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>ハイアンドローゲーム</title>
</head>
<body>
  <h1>ハイアンドローゲーム</h1>
  <?php if($_SERVER['REQUEST_METHOD'] === 'POST'){ ?>
    <p>対象の数値: <?php echo $previous; ?>
    <p>選択: <?php echo $choice; ?></p>
    <p>出た数字: <?php echo  $number; ?>
    <p>判定: <?php echo $answer; ?> 今回の勝負は<?php echo $result; ?></p>

    <p><a href="high_and_low.php">次の勝負へ</a></p>
  <?php } else { ?>

    <p>現在の数値: <?php echo $number; ?></p>

    <!-- method="post"でフォームを作成 -->
    <form method="post">
      <div>
        <label>ハイ: <input type="radio" name="choice" value="ハイ" required></label>
        <label>ロー: <input type="radio" name="choice" value="ロー" required></label>
      </div>
      <!-- 現在の数値を送信 -->
      <input type="hidden" name="previous" value="<?php echo $number; ?>">
      <input type="submit" value="勝負">
    </form>
  <?php } ?>
</body>
</html>