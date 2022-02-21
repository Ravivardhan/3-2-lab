<?php

    function palindrome($number)
    {
        $temp=$number;
        $new=0;

        while(floor($temp))
        {
            $d=$temp%10;
            $new=$new*10+$d;
            $temp=$temp/10;

        }
        if($number==$new)
        {
            return 1;
        }
        else{
            return 0;
        }

    }
    $number=4003;
    echo $number;
    if(palindrome($number))
    {
        echo "Palindrome number";
    }
    else{
        echo "Not a palindrome number";
    }

?>