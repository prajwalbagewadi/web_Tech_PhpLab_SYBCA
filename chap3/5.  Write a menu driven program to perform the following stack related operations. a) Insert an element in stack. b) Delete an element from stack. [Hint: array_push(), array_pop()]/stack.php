<?php
/*
5. Write a menu driven program to perform the following stack related operations.
a) Insert an element in stack.
b) Delete an element from stack. [Hint: array_push(), array_pop()]
*/

// array declaration
$colors=array("red","blue","green","white","purple");

//inputs
$op=$_POST['op'];

function disp_arr(){
    global $colors;
    $count=0;
    foreach($colors as $val){
        echo "[$count]"."->".$val."<br>";
        $count++;
    }
}

function push_element($val){
    global $colors;
    echo "<br>"."push element"."<br>";
    // previous array
    echo "<br>"."original_arr:"."<br>";
    disp_arr();
    echo "<br>".$val."->to be pushed"."<br>";
    /*
        array_push() Method: The array_push() method is used to push multiple elements in the array collection object. 
        After each array_push() method, the size of the array object increases by the number of elements specified in the method call. 
        Syntax :
        array_push($array, $elements)
    */
    array_push($colors,$val);
    //new array
    echo "<br>"."new_arr:"."<br>";
    disp_arr();
}

function pop_element(){
    global $colors;
    echo "<br>"."pop element"."<br>";
    // previous array
    echo "<br>"."original_arr:"."<br>";
    disp_arr();
    /*
        array_pop() Method: The array_pop() method is used to pop the elements from the array. 
        The elements are removed from the end one by one each time when this method is called. 
        syntax:
        array_pop($array)
    */
    $popped=array_pop($colors);
    echo "<br>".$popped."->to be popped"."<br>";
    //new array
    echo "<br>"."new_arr:"."<br>";
    disp_arr();
}

//meun driver
switch($op){
    case 'push':
        $val=$_POST['val'];
        push_element($val);
        break;
    case 'pop':
        pop_element();
        break;    
}   
?>
