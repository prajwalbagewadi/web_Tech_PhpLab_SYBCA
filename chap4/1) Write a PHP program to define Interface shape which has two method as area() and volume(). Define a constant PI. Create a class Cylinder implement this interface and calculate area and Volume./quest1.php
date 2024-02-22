<?php
/*
1) Write a PHP program to define Interface shape which has two method as area() and volume().
Define a constant PI. Create a class Cylinder implement this interface and calculate area and
Volume.
*/


/*
An Interface allows the users to create programs, specifying the public methods that a class must implement. 
The interface contains no data variables.
It does not tell how these methods should be implemented. 
The method implementation depends upon the class which implements them.
*/

/*
formula : 
    area :
        A = 2πr^2 + 2πrh
    volume :
        V = πr^2h    
*/

$rad=$_POST['rad'];
$hei=$_POST['hei'];
// constant variable PI
const PI=3.142;

// interface 
interface shape{
    public function area();
    public function volume();
}

//class
class Cyclinder implements shape{
    private $radius;
    private $height;
    public function __construct($rad,$hei){
        global $radius,$height;
        $radius=$rad;
        $height=$hei;
    }
    public function area(){
        global $radius,$height;
        //print_r(PI);
        $area=2*PI*$radius*$radius+2*PI*$radius*$height;
        echo "<br>"."Area of Cyclinder=".$area."<br>";
    }
    public function volume(){
        global $radius,$height;
        $volume=PI*$radius*$radius*$height;
        echo "<br>"."Volume of Cyclinder=".$volume."<br>";
    }
}

//object declaration
$obj=new Cyclinder($rad,$hei);
$obj->area();
$obj->volume();
?>
