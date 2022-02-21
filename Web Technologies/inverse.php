<?php
    $series=0;

    $num=1;

    $x=2;
    $n=3;
    while($num<$n+1)
    {
        $series=$series+(1/pow($x,$num));
        $num=$num+1;

    }
    echo "<br>The value of the series is: ".$series;




?>