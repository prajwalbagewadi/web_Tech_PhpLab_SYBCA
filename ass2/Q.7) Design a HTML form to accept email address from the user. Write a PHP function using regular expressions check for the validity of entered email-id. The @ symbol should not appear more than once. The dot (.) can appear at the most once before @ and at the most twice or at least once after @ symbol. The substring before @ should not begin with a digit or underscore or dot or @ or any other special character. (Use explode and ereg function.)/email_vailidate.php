<?php

/**
 * 7. Design a HTML form to accept email address from the user. Write a PHP function
 * using regular expressions check for the validity of entered email-id. 
 * The @ symbol should not appear more than once. 
 * The dot (.) can appear at the most once before @
 * and at the most twice or at least once after @ symbol. 
 * The substring before @ should not begin with a digit or underscore or dot or @ or any other special
 * character. (Use explode and ereg function.)
 */

/*
invalid email ids:
_prajwal.bagewadi44@gmail.com
90prajwal.bagewadi44@gmail.com
@prajwal.bagewadi44@gmail.com
prajwal.bagewadi.44@gmail.com
prajwal.bagewadi44@gmail.com.in.
*/ 

$email=$_POST['email']; 

//$email="prajwal.bagewadi44@gmail.com.in";
function email_vaildate($email){
   $pattern1="@";
   /*
   // PHP program to demonstrate the substr_count() function 
      $str = "geeks for geeks";  
      echo substr_count($str, "geeks");  // displays the count 
   */
   if(substr_count($email,$pattern1)!=1){
      echo "/@/count_error:"."<br>";
      echo "invalid email=".$email."<br>";
   }
   else {
      $emailarray=explode("@",$email);
      $part1=$emailarray[0];
      echo '$part1='."$part1"."</br>";
      $part2=$emailarray[1];
      echo '$part2='."$part2"."</br>";
      /*
      The substr_count() is a built-in function in PHP and 
      is used to count the number of times a substring occurs in a given string. 
      
      Syntax:
      substr_count($string, $substring, $start, $length)
      */
      $pattern2=".";
      $dotcnt_part1=substr_count($part1,$pattern2);
      echo "dotcntpart1=".$dotcnt_part1."<br>";
      $dotcnt_part2=substr_count($part2,$pattern2);
      echo "dotcntpart2=".$dotcnt_part2."<br>";
      
      /*
      /^[1-9+_@.!#$%^&*()]/ pattern meaning:
         [/] delimiter , [^] begining
         [1-9+] numbers one to nine with one or more occurences
         [_@.!#$%^&*()] list of specials characters to be ignored if any one from list exits 
      */
      $pattern3='/^[1-9+_@.!#$%^&*()]/';
      
      if($dotcnt_part1!=1){
         echo "/./count_error_part1:"."<br>";
         echo "invalid email=".$email."<br>";
      }
      else if ($dotcnt_part2==0 || $dotcnt_part2>2){
         echo "/./count_error_part2:"."<br>";
         echo "invalid email=".$email."<br>";
      }
      /*
         int preg_match()This function searches string for pattern, returns true if pattern exists, otherwise returns false. 
         Usually search starts from beginning of subject string. 
        
         Syntax:
         int preg_match( $pattern, $input, $matches, $flags, $offset )
      */
      elseif (preg_match($pattern3,$part1)){
         echo "/^[1-9]+[.]+[_]+[!]+[@]+[#]+[$]+[%]+[^]+[&]+[(]+[*]+[)]$/_error:"."<br>";
         echo "invalid email=".$email."<br>";
      }
      else {
         echo "Email id is valid:".$email."<br>";
      }
   }   
}

//function call
email_vaildate($email);

//working date 2/02/2024
?>
