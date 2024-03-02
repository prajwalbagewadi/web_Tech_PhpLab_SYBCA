<?php
/*
8. Write a menu driven program to perform the following operations on associative
arrays:
a) Sort the array by values (changing the keys) in ascending, descending order.
b) Also sort the array by values without changing the keys.
c) Filter the odd elements from an array.
*/

//create associative array
$subjects=array("Maths"=>95,"Physics"=>90,"Chemistry"=>96,"English"=>93,"Computer"=>98);
$nums=array(1,2,3,4,5,6,7,8,9,10);

//print_r($subjects);
//print_r($nums);
echo "<br>";

$op=$_POST['op'];

switch($op){
    case 'change_key':
        $sort_ord1=$_POST['ord1'];
        if($sort_ord1=='asc'){
            //Sort the array by values (changing the keys) in  ascending,
            echo "original array:"."<br>";
            print_r($subjects);
            //method 
            sort($subjects);
            echo "<br>";
            echo "changing-keys ascending,result array:"."<br>";
            print_r($subjects);
        }
        else{
            //Sort the array by values (changing the keys) in  descending,
            echo "original array:"."<br>";
            print_r($subjects);
            //method 
            rsort($subjects);
            echo "<br>";
            echo "changing-keys  descending, result array:"."<br>";
            print_r($subjects);
        }
        break;
    case 'dont_change_keys':
        $sort_ord2=$_POST['ord2'];
        if($sort_ord2=='asc'){
            //sort the array by values without changing the keys. ascending,
            echo "original array:"."<br>";
            print_r($subjects);
            //method 
            ksort($subjects);
            echo "<br>";
            echo "without changing the keys. ascending, result array:"."<br>";
            print_r($subjects);
        }
        else{
            //sort the array by values without changing the keys. descending,
            echo "original array:"."<br>";
            print_r($subjects);
            //method 
            krsort($subjects);
            echo "<br>";
            echo "without changing the keys. descending, result array:"."<br>";
            print_r($subjects);
        }
        break;
    case 'Filter_odd':
        //filter odd elements from array,
        function odd($var){
            if($var%2!=0){
                return true;
            }
            else{
                return false;
            }
        }
        echo "<br>";
        //print_r($nums);
        echo "original array:"."<br>";
        print_r($subjects);
        echo "<br>";
        echo "filter odd elements from array, result array:"."<br>";
        //method 
        print_r(array_filter($subjects,"odd"));
        break;
}
?>
