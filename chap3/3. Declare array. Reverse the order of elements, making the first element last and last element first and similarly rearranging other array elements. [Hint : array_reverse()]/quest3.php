<?php
/*
3.Declare array. Reverse the order of elements, making the first element last and last
element first and similarly rearranging other array elements. [Hint : array_reverse()]
*/
$arr=array("1-element","2-element","3-element","4-element","5-element");
$rev_arr=array_reverse($arr);
echo "<br>"."original_array:"."<br>";
print_r($arr);
//var_dump($rev_arr);
echo "<br>"."reversed_array:"."<br>";
print_r($rev_arr);
?>
