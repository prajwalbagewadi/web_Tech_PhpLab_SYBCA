<!--/*
date : 30/12/2023
Q)Write a PHP script to declare three variables and print maximum among them.
*/-->
<?php
if(isset($_POST['submit']))
{
    $var1=$_POST['num1'];
    $var2=$_POST['num2'];
    $var3=$_POST['num3'];

    if($var1>$var2)
    {
        echo("number1 is greater".$var1);
    }
    else if($var1>$var3)
    {
        echo("number1 is greater".$var1);
    }
    else if($var2>$var3)
    {
        echo("number2 is greater".$var2);
    }
    else if($var1==$var2&& $var1==$var3)
    {
        echo("number1 is equal number2 is equal number3".$var1.$var2.$var3);
    }
    else
    {
        echo("number3 is greater".$var3);
    }
}

?>
