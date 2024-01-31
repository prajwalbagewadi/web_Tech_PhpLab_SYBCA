<?php
/**
 * Design a HTML form to accept a string. Write a PHP script for the following.
 * a) Write a function to count the total number of Vowels from the script.
 * b) Show the occurrences of each Vowel from the script.
 */
$str=$_POST['tb1'];

function count_vowels($str_val){
    $count=0;
    $a=$e=$i=$o=$u=0;
    echo "input String:"."$str_val"."<br>";
    $len=strlen($str_val);
    for($j=0;$j<$len;$j++){
        switch($str_val[$j]){
            case 'a':
            case 'A':
                $count++;
                $a++;
                //echo "$count";
                //$GLOBALS['totalv++'];
                break;
            case 'e':
            case 'E':
                $count++;
                $e++;
                //$GLOBALS['totalv++'];
                break;
            case 'i':
            case 'I':
                $count++;
                $i++;
                //$GLOBALS['totalv++'];
                break;  
            case 'o':
            case 'O':
                $count++;
                $o++;
                //$GLOBALS['totalv++'];
                break;
            case 'u':
            case 'U':
                $count++;
                $u++;
                //$GLOBALS['totalv++'];
                break;                      
        }
    }
    echo "total count of vowels:".$count."<br>"; 
    echo "a_count:".$a."<br>";
    echo "e_count:".$e."<br>";
    echo "i_count:".$i."<br>";
    echo "o_count:".$o."<br>";
    echo "u_count:".$u."<br>";
        //$GLOBALS['totalv++'];
}

count_vowels($str);

?>
