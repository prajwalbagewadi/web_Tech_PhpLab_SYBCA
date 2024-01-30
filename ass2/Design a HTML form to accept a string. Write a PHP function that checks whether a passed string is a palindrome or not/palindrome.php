<?php
/**
 * Design a HTML form to accept a string. Write a PHP function that checks whether a
 * passed string is a palindrome or not?
 */
$var=$_POST['str'];
echo "orginal string:$var"."<br>";
echo "reverse string:".strrev($var)."<br>";

//function to check palindrome
function check_palindrome($str){
    if($str==strrev($str))
    {
        return true;
    }
    else{
        return false;
    }
}

if(check_palindrome($var)){
    echo "$var is a palindrome string"."<br>";
}
else{
    echo "$var is not a palindrome string"."<br>";
}
?>
