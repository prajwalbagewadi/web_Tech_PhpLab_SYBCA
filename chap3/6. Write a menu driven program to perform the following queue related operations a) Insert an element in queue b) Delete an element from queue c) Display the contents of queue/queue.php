<?php
/*
6. Write a menu driven program to perform the following queue related operations
a) Insert an element in queue
b) Delete an element from queue
c) Display the contents of queue
*/
static $number=array(1,2,3,4,5);
$op=$_POST['op'];
$val_to_insert=$_POST['val'];

function disp_queue(){
    global $number;
    foreach($number as $num){
        echo "$num"." ";
    }
}

function enqueue($val_to_insert){
    global $number;
    echo "<br>"."queue_before:"."<br>";
    disp_queue();
    /*
    The array_push() is a built-in function of PHP. This function helps the users to add the elements at the end of the array. ]
    It allows to insert any number of elements in an array. 
    Even you can add a string as well as numeric values. 
    The length of the array increases whenever an element adds or pushes into the array.
    Syntax:
    array_push(array, value1, value2, ..... value_n);
    */
    array_push($number,$val_to_insert);
    echo "<br>"."queue_after:"."<br>";
    disp_queue();
}

function dequeue(){
    global $number;
    echo "<br>"."queue_before:"."<br>";
    disp_queue();
    /*
    The array_shift() is a built-in function removes the first element from an array, and returns the value of the removed element.
    Note: If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1
    Syntax:
    array_shift($array);
    */
    array_shift($number);
    echo "<br>"."queue_after:"."<br>";
    disp_queue();
}
// enqueue(6);
// disp_queue();

//menu logic
switch($op){
    case "insert":
        global $val_to_insert;
        enqueue($val_to_insert);
        break;
    case "delete":
        dequeue();
        break;
    case "display":
        disp_queue();
        break;
}
?>
