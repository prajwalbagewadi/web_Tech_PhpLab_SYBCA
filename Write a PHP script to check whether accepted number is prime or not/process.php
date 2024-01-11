<?php
echo("value got:".$_GET['num']);
$var=$_GET['num'];

function chech_prime($num)
{
    $res=$num%2;
    if($res==1)
    {
       // $_GET['res'];
        echo("<br>num=".$num."\tis a prime number");
    }
    else
    {
        echo("<br>!!!num=".$num."\tis not a prime number!!!");
    }
}

chech_prime($var);
?>
