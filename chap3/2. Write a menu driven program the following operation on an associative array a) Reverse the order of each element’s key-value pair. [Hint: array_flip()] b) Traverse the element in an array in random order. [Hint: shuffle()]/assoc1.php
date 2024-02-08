<?php
/*
2. Write a menu driven program the following operation on an associative array
a) Reverse the order of each element’s key-value pair. [Hint: array_flip()]
b) Traverse the element in an array in random order. [Hint: shuffle()]
*/
//Declare assoicative array
$number=array("one"=>1, "two"=>2, "three"=>3, "four"=>4, "five"=>5, "six"=>6);

echo "orginal_array:"."<br>";
//print_r($number);
var_dump($number);

$op=$_POST['op'];
//echo "operator=".var_dump($op)."<br>";

switch($op){
    case "flip":
        $flip_array=array_flip($number);
        echo "<br>"."flip_array:"."<br>";
        var_dump($flip_array);
        echo "<br>";
        break;
    case "shuffle":
        /*
        The shuffle() function randomizes the order of the elements in the array.
        This function assigns new keys for the elements in the array. 
        Existing keys will be removed
        */
        echo "<br>"."shuffle_array:"."<br>";
        shuffle($number);
        foreach($number as $key=>$val){
            echo "Key=".$key." "."val=".$val.", ";
        }
        break;
}
?>
