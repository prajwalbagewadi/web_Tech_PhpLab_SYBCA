<?php

/*
Write a PHP script to print following floyd’s triangle.
1
2 3
4 5 6
7 8 9 10
*/

$var=1;
//$n=(int)readline("enter the Depth of triangle:");
$n=4;
for($row=1;$row<=$n;$row++)
{
    for($col=1;$col<=$row;$col++)
    {
        echo(" $var ");
        $var++;
    }
    echo("<br>");
}
?>
