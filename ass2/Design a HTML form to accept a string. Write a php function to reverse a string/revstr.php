<?php
/**
 * Design a HTML form to accept a string. Write a php function to reverse a string.
*/
//input
$str=$_POST['strvar'];
echo "original string:".$str."<br>";
// function to reverse a string 
function revstring($str){
    return strrev($str);
}

//output and function call
echo "reversed string:".revstring($str)."<br>";

?>
