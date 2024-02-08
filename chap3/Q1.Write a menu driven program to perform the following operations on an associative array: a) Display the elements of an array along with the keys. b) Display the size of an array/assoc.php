<?php
/*
Write a menu driven program to perform the following operations on an associative
array:
a) Display the elements of an array along with the keys.
b) Display the size of an array
*/
//Declare associative array
$car=array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964, 
            "brand1"=>"mercedes", "model1"=>"G63", "year1"=>1979);

$op=$_POST['op'];

switch($op){
    case "disp":
        foreach($car as $key=>$val){
            echo "Key=".$key." "."val=".$val."<br>";
        }
        break;
    case "size":
        echo "size of associative array:count()".count($car)."<br>";
        echo "size of associative array:sizeof()".sizeof($car)."<br>";
        break;
}

?>
