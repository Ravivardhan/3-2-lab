<?php
    $series=0;

    $num=1;

    $x=1;
    $series_str="";
    while($num<=10)
    {
        $series=$series+(1/($num*$x));
        $div=$num*$x;
        $series_str=$series_str."1/$div,";
        $num=$num+1;

    }
    //echo $series;
    echo "<br>Series :".$series_str;
    echo "<br>Series value :".round($series,3);




?>