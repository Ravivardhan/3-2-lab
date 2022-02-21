
<?php

    function palindrome($string)
    {
        if(strlen($string)==1 || strlen($string)==0)
        {
            echo "Palindrome";
        }
        else{
            if(substr($string,0,1) == substr($string,strlen($string)-1,1))
            {
                return palindrome(substr($string,1,strlen($string)-2));
            }
            else{
                echo "Not palindrome";
            }
        }
    }
    palindrome("Raviiva");
?>