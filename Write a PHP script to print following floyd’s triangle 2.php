<?php

/*
Write a PHP script to print following floyd’s triangle.
A
B C
D E F
G H I J
*/

$var=1;
//$n=(int)readline("enter the Depth of triangle:");
$n=4;
for($row=1;$row<=$n;$row++)
{
    for($col=1;$col<=$row;$col++)
    {
        // convert int val to char we use chr();
        $str=chr($var+64);
        echo("$str");
        $var++;
    }
    echo("<br>");
}
?>
