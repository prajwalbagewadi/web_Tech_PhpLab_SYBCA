<?php
/*
9. Sort the different arrays at a glance using single function.
*/

/*
The array_multisort() function returns a sorted array. 
You can assign one or more arrays. 
The function sorts the first array, and the other arrays follow, then, if two or more values are the same, it sorts the next array, 
and so on.
Syntax
array_multisort(array1, sortorder, sorttype, array2, array3, ...)

Parameter Values
Parameter	        Description
array1	            Required. Specifies an array
sortorder	        Optional. Specifies the sorting order. Possible values:
SORT_ASC -          Default. Sort in ascending order (A-Z)
SORT_DESC -         Sort in descending order (Z-A)
sorttype	        Optional. Specifies the type to use, when comparing elements. Possible values:
SORT_REGULAR -      Default. Compare elements normally (Standard ASCII)
SORT_NUMERIC -      Compare elements as numeric values
SORT_STRING -       Compare elements as string values
SORT_LOCALE_STRING -Compare elements as string, based on the current locale (can be changed using setlocale())
SORT_NATURAL - Compare elements as strings using "natural ordering" like natsort()
SORT_FLAG_CASE - Can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
array2	Optional. Specifies an array
array3	Optional. Specifies an array
*/

$class=array("SYBCA","TYBCA","FYBCA");
$age=array(20,21,19);
echo "<br>"."ORIGINAL ARRAY:"."<br>";
echo "<br>";
print_r($class);
echo "<br>";
print_r($age);
//method call
array_multisort($class,SORT_DESC,SORT_STRING,$age,SORT_DESC,SORT_NUMERIC);
echo "<br>";
echo "<br>"."SORTED ARRAY:"."<br>";
echo "<br>";
print_r($class);
echo "<br>";
print_r($age);
?>
