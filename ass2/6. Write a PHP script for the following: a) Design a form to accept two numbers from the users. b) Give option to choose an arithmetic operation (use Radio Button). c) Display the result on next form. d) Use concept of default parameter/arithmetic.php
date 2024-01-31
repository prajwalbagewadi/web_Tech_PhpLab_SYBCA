<?php
/**
 * Write a PHP script for the following:
 * a) Design a form to accept two numbers from the users.
 * b) Give option to choose an arithmetic operation (use Radio Button).
 * c) Display the result on next form.
 * d) Use concept of default parameter.
 *
 */
$num1=$_POST['tb1'];
$num2=$_POST['tb2'];
$op=$_POST['op'];
function arithmetic_operation($num1=10,$num2=20,$op="+"){
    echo '$num1='.$num1.'$num2='.$num2."<br>";
    switch($op){
        case '+':
            echo "sum of $num1 + $num2=".($num1+$num2);
            break;
        case '-':
            echo "sum of $num1 - $num2=".($num1-$num2);
            break; 
        case '*':
            echo "sum of $num1 * $num2=".($num1*$num2);
            break;
        case '/':
            echo "sum of $num1 / $num2=".($num1/$num2);
            break; 
        case '%':
            echo "sum of $num1 % $num2=".($num1%$num2);
            break;              
    }
}

echo "function call with default parameters:no val passed:".arithmetic_operation()."<br>";
echo "function call with parameters:val passed:".arithmetic_operation($num1,$num2,$op)."<br>";

?>
