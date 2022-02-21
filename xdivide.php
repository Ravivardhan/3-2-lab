<?php
    $series=0;

    $num=1;

    $x=5;
    while($num<3)
    {
        $series=$series+(1/($num*$x));
        $num=$num+1;

    }
    echo $series;




?>