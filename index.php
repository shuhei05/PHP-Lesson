<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>';

      $a = "PHPの基礎";
      $a ="がんばりましょう";

      print $a;

      define("TITLE","PHPの基礎");

      define("TITLE","タイトル"); //再定義することはできない。

      define("TAX",1.05);
      print 300 * TAX;

      $a = "PHPの基礎";

      print '1. タイトルは $a です。<br />';
      print "2. タイトルは $a です。<br />";
      print "3. タイトルは$aです。<br />";
      print "4. タイトルは{$a}です。<br />";
      print "5. タイトルは".$a."です。<br />";
 ?>
 </body>
</html>