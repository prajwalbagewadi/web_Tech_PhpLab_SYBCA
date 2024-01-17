<?php
/*
Write a PHP script to test whether a number is greater than 30, 20 or 10
using ternary operator.
*/
echo "<html>";
echo "<body>";
    echo "<form method=\"GET\">";
    echo "<label>Num to check with(30,20,10):</label>";
    echo "<label>Enter Num to check</label>";
    echo "<input type=\"text\" name=\"num\"/>";
    echo "<input type=\"submit\" name=\"submit\">";
    echo "</form>";
echo "</body>";  
echo "</html>";  

$num=$_GET['num'];
function check_num($num){
    // if($num>30){
    //     echo "$num is Greater than 30";
    // }
    // else if($num>20){
    //     echo "$num is Greater than 20";
    // }
    switch($num){
        case $num > 30 :
            echo "$num is Greater than 30";
        break;
        case $num > 20 :
            echo "$num is Greater than 20";
        break;
        case $num > 10 :
            echo "$num is Greater than 10";
        break;
        default :
            echo "$num is less than 10";
    }
}
check_num($num);
?>
