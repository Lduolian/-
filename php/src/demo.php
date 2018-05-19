<?php 
    $x = 10;
    $a = 5;
    $b = 6;
    $cars=array("Volvo","BMW","SAAB");

    function test(){
        // global $a,$b;
        $GLOBALS['a'] = 10;
        $GLOBALS['b'] = 20;
        $y = 20;
        $z = 30;
        // echo $y . $z;
        // echo "<p>在函数内部测试</p>";
        // echo "$y + $z</br>";
        // echo $y + $z."</br>";
        // echo "z的值是$z</br>";
        

    }
    test();
    // echo "<p>x的值是$x</p>";
    // echo "a的值是$a</br>";
    // echo "b的值是$b</br>";
    echo "hello". " my name is ". "duoduo";
    echo " my car is a $cars[0]";
    print "<h2>hello world</h2>";
    $x = null;
    var_dump($x);
    var_dump($cars);
    echo strlen("hello worlds")

?>