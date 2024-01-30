<?php
/*
Write a PHP script to accept the number from user and Write a php function to
calculate the factorial of a number (a non-negative integer). The function accepts the
number as an argument.
*/

//input
// echo("<html>");
// echo("<body>");
//     echo("<form method=\"GET\">");
//         echo("<label>Enter num to find Factorial:</label><br>");
//         echo("<input type=\"text\" name=\"var\"/>");
//        // echo("<input type=\"submit\ name=\"submit\" value=\"submit\" />");
//         echo("<input type=\"submit\ name=\"submit\" />");
//     echo("</form>");
// echo("</body>");
// echo("</html>");

//get var
$var=$_GET['var'];

// function factorial
function factorial($num){
    $ans=1;
   if($num==0 || $num==1){
    return 1;
   }
   else{
        for($i=2;$i<=$num;$i++){
            $ans*=$i;
        }
        return $ans;
    }
}   

// function call for factorial function
echo "Factorial of $num:".factorial($var)."<br>";
?>
