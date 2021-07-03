<?php
        $f = array(100, 200, 5 => 500, "ONE" => 1, "PHP" => "たのしい");
        
        print $f[0]."<br />";

        print $f[5]."<br />";

        print $f["PHP"]."<br />";
        
        print_r ($f);

        // まずは配列を作る
        $g = array(10, 20, 30);

        // 添字（キー）を指定せずに追加
        $g[] = 100;
        $g[] = 200;
        $g[] = 300;
          
        // 添字（キー）を指定して追加
        $g[10] = "ten";
        $g[11] = "eleven.";
        $g[12] = "twelve";
          
        print_r($g);
?>