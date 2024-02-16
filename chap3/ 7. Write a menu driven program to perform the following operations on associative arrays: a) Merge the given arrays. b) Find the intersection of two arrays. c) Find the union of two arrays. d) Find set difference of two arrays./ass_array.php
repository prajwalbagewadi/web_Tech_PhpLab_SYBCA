<?php
/*
7. Write a menu driven program to perform the following operations on associative
arrays:
a) Merge the given arrays.
b) Find the intersection of two arrays.
c) Find the union of two arrays.
d) Find set difference of two arrays.
*/
$op=$_POST['op'];

//array declarations
$arr1=array("apple","orange","grapes","pineapple");
$arr2=array("mango","tomato","potato","pineapple","grapes");

//display function
function disp($arr){
    foreach($arr as $val){
        echo "$val"."  ";
    }
    echo "<br>";
}

// merge logic
/*
The array_merge in PHP is a built-in function that combines two or more arrays into a single array. 
This function combines the elements or values from two or more arrays into a single array. 
The values of one array are appended to the end of the previous array during the merging process
Syntax:
    array array_merge($array1, $array2, ......, $arrayn)
*/
function merge($arr1,$arr2){
    $merge=array_merge($arr1,$arr2);
    return $merge;
}

// intersection two arrays :Intersection of two arrays is an array that consists of all the common elements occurring in both arrays. 
/*
The array_intersect() function compares the values of two (or more) arrays, and returns the matches.
syntax:
array_intersect(array1, array2, array3, ...)
*/
function intersetion($arr1,$arr2){
    $intersect=array_intersect($arr1,$arr2);
    return $intersect;
}

// union of two arrays :The union of two arrays results in a new array that contains all the distinct elements from both arrays, 
/*
To find the union, you merge the two arrays to create one giant array with all values. 
But, array_merge( ) allows duplicate values when merging two numeric arrays, so you call array_unique( ) to filter them out. 
*/
function union($arr1,$arr2){
    $merge_arr=array_merge($arr1,$arr2);
    $unique_arr=array_unique($merge_arr);
    return $unique_arr;
}

// set difference of two arrays:
/*
a set containing the elements of the first set that are not an element of the second set.
Difference of sets examples
If A = {1, 2, 3, 4, 5, 6} and B = {3, 4, 5, 6, 7, 8}, 
then find A – B and B – A. 
A – B = {1, 2} 
since the elements 1, 2 are there in A but not in B. 
Similarly, B – A = {7, 8}, 
since the elements 7 and 8 belong to B and not to A.
*/
function set_diff($arr1,$arr2){
    $a_set=array_diff($arr1,$arr2); // a-b
    $b_set=array_diff($arr2,$arr1); // b-a
    $ret_set=array($a_set,$b_set);
    return $ret_set;
    //disp($a_set);
    //disp($b_set);
}

//menu logic
switch($op){
    case 'merge':
        echo "<br>"."array 1="."<br>";
        echo disp($arr1)."<br>";
        echo "<br>"."array 2="."<br>";
        echo disp($arr2)."<br>";
        $merged_arr=merge($arr1,$arr2);
        echo "<br>"."merged array="."<br>";
        echo disp($merged_arr)."<br>";
        break;
    case 'intersection':
        echo "<br>"."array 1="."<br>";
        echo disp($arr1)."<br>";
        echo "<br>"."array 2="."<br>";
        echo disp($arr2)."<br>";
        $inter=intersetion($arr1,$arr2);
        echo "<br>"."intersection array="."<br>";
        echo disp($inter)."<br>";
        break;
    case 'union':
        echo "<br>"."array 1="."<br>";
        echo disp($arr1)."<br>";
        echo "<br>"."array 2="."<br>";
        echo disp($arr2)."<br>";
        $union_arr=union($arr1,$arr2);
        echo "<br>"."union array="."<br>";
        echo disp($union_arr)."<br>";
        break;
    case 'set_diff':
        echo "<br>"."array 1="."<br>";
        echo disp($arr1)."<br>";
        echo "<br>"."array 2="."<br>";
        echo disp($arr2)."<br>";
        $return_set=set_diff($arr1,$arr2);
        echo "<br>"."set difference A-B"."<br>";
        echo disp($return_set[0])."<br>";
        echo "<br>"."set difference B-A"."<br>";
        echo disp($return_set[1])."<br>";
}
?>
