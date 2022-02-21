<?php
    $email='ravivardhanbtechcse@gmail.com';

    echo preg_match("/^([a-z A-Z 0-9]) +([.a-z A-Z 0-9 _ -])^/",$email);

    $url='ravi.vardhan.co.in';

    echo preg_match("/^([a-z A-Z 0-9])+([.a-z A-Z 0-9 _ -])^/",$url);

?>