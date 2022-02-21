<?php
    function fun1()
    {
        echo "hello world from function1"."<br>";
    }
    fun1();

    function func2($input)
    {
        echo "given input is ".$input."<br>";
        echo "function2 <br>";
        echo gettype($input)."<br>";
    }
    func2(746);

    function func3($a,$b)
    {
        $sum=$a+$b;
        echo "sum of $a and $b is".$sum."<br>";

    }
    func3(5,7);




?>