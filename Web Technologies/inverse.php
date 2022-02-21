<?php
    $series=0;

    $num=1;

    $x=2;
    $n=3;
    $series_str="";
    while($num<$n+1)
    {
        $series=$series+(1/pow($x,$num));
        $div=pow($x,$num);
        $series_str=$series_str."1/$div,";
        $num=$num+1;

    }
    echo "<br>Series :".$series_str;
    echo "<br>The value of the series is: ".$series;




?>