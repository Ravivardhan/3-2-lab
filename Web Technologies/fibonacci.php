<?php
    $num=0;
    $a=0;
    $b=1;
    echo $a.' '.$b;
    while($num<5)
    {
        $c=$a+$b;
        $a=$b;
        $b=$c;
        echo ' '.$c;
        $num=$num+1;

    }

?>