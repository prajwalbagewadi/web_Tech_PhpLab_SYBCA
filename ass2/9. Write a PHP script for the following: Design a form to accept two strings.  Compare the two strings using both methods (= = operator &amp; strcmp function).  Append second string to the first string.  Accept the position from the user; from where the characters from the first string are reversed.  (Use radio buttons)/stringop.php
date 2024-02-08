<?php
/*
9. Write a PHP script for the following: Design a form to accept two strings. 
Compare the two strings using both methods (= = operator &amp; strcmp function). 
Append second string to the first string. 
Accept the position from the user; from where the characters from the first string are reversed. 
(Use radio buttons)
*/

    $str1=$_POST['istr1'];
    $str2=$_POST['istr2'];
    $op=$_POST['op'];
    $pos=$_POST['val_rev'];

    switch($op){
        case '==':
            echo "String compare using [==]"."<br>";
            if($str1 == $str2){
                echo "$str1 and $str2 are equal";
            }
            else{
                echo "$str1 and $str2 are not equal";
            }
        break; 
        case 'strcmp':
            echo "String compare using [strcmp]"."<br>";
                $val=strcmp($str1,$str2);
                if($val==0){
                    echo "$str1 and $str2 are equal.";
                }
                else {
                    echo "$str1 and $str2 are not equal.";
                }
        break;
        case 'append':
            echo "String append:"."<br>";
            $str=$str1.=$str2;
            /*
                PHP does not have a specific function to append a string. 
                However, you can use the concatenation assignment operator (“. =”) to append a string. 
                This operator adds the value on its right to the value on its left and then resigns the result to the variable on its left. 
            */
            echo "append string = $str";
        break;
        case 'reverse':
            echo "String reverse from specified:"."<br>";
            /*
                to reverse a string from specified position we make use two inbuilt functions
                substr()= get the derived string from original string
                strrev()= reverse the string.
            */
            echo "original string=$str1"."<br>";
            $str_temp=substr($str1,$pos);
            $str_rev=strrev($str_temp);
            echo "the reversed output=".$str_rev."<br>";
        break;
    }

?>

