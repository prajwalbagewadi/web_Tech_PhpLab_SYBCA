<?php
/*
4. Declare a Multidimensional Array. Display specific element from a Multidimensional
array. 
Also delete given element from the Multidimensional array. 
(After each operation display array content)
*/

$multi_arr=array(   array(1,2,3),
                    array(4,5,6),
                    array(7,8,9)    );
$N=3; 

$op=$_POST['op'];
echo "op=".$op;

// disp Specific element 
function specific_disp($row,$col){
    global $multi_arr;
    global $N;
    if($row>=0 && $row<=$N){
        if($col>=0 && $col<=$N){
            echo "<br>"."Display selected array_Element:"."<br>";
            echo '$multi_arr'."[$row][$col]".$multi_arr[$row][$col]."<br>";
            disp_arr();
        }
        else {
            echo "Error in col val";
        }
    }
    else {
        echo "Error in row val";
    }  

}  

// delete specific element
function specific_delete($row,$col){
    global $N;
    if($row>=0 && $row<=$N){
        if($col>=0 && $col<=$N){
            global $multi_arr;
            $var=$multi_arr[$row][$col];
            echo "<br>"."Delete specified postion array_Element:"."<br>";
            echo "element pos=".$row." ".$col." element=".$var." deleted"."<br>";
            /*
                To delete an element from an array in PHP, you can use the unset() function:
                unset($array[3])
                unset($array['foo'])
                unset($array[3], $array[5])
                unset($array['foo'], $array['bar']) 
                The unset() function removes an element from an array using its index. 
                If the index doesn't exist, the function skips the procedure. 
                The result array will not be reindexed after using the unset() function. 
            */
                unset($multi_arr[$row][$col]);
                disp_arr();
        }
    }
    
}

// disp array
function disp_arr(){
    //$GLOBALS['size']
    global $N;
    global $multi_arr; 
    echo "<br>"."Display Complete array:"."<br>";
    for($row=0;$row<$N;$row++){
        for($col=0;$col<$N;$col++){
            echo $multi_arr[$row][$col]." ";
        }
        echo "<br>";
    }
}

// menu logic

switch($op){
    case 'display':
        disp_arr();
        break;
    case 'select_disp':
        $var=explode(" ",$_POST['row_col1']);
        echo "pos for select=".$var[0].$var[1]."<br>";
        specific_disp($var[0],$var[1]);
        break;
    case 'delete_selected':
        $var1=explode(" ",$_POST['row_col2']);
        echo "pos for delete=".$var1[0].$var1[1]."<br>";
        specific_delete($var1[0],$var1[1]);
        break;        
}
?>
