<?php
/*
2) Write a PHP script to create a Class shape and its subclass triangle, square and display area of the
selected shape (Use the concept of Inheritance). Display menu (use radio button)
a) Triangle
b) Square
c) Rectangle
d) Circle
*/
/*
formula:
    Triangle:
        A = (1/2) * Base * Height
    Square:
        A = side * side
    Rectangle:
        A = length * width
    Circle:
        A = π * r^2
*/

class Shape{
    public $area=0;
    public  function Area(){
        echo "<br><h1>BASE FUNCTION AREA</h1><br>";
        // syntax for this keyword in php
        // $this->var_name_without dollar sign 
        echo "<br><h1>AREA=$this->area</h1><br>";
    }
}
//inheriated class from shape 
class Triangle extends Shape{
    public $base,$height;
    function __construct($base,$height){ 
        echo "<br><h1>TRIANGLE FUNCTION CONSTRUCTOR</h1><br>";       
        $this->base=$base;
        $this->height=$height;
    }
    //overridden function
    public  function Area(){
        echo "<br><h1>TRIANGLE FUNCTION AREA</h1><br>";
        echo "<br><h1>A = (1/2) * Base * Height</h1><br>";
        // inheriated property updated
        $this->area=(1/2)*$this->base*$this->height;
        echo "<br><h1>Area=$this->area</h1><br>";
    }
}
//inheriated class from shape 
class Square extends Shape{
    public $side;
    function __construct($side){
        echo "<br><h1>SQUARE FUNCTION CONSTRUCTOR</h1><br>";
        $this->side=$side;
    }
    //overridden function
    public  function Area(){
        echo "<br><h1>SQUARE FUNCTION AREA</h1><br>";
        echo "<br><h1>A = side * side</h1><br>";
        // inheriated property updated
        $this->area=$this->side*$this->side;
        echo "<br><h1>Area=$this->area</h1><br>";
    }
}
//inheriated class from shape 
class Rectangle extends Shape{
    public $length,$width;
    function __construct($length,$width){
        echo "<br><h1>RECTANGLE FUNCTION CONSTRUCTOR</h1><br>";
        $this->length=$length;
        $this->width=$width;
    }
    //overridden function
    public  function Area(){
        echo "<br><h1>RECTANGLE FUNCTION AREA</h1><br>";
        echo "<br><h1> A = length * width</h1><br>";
        // inheriated property updated
        $this->area=$this->length*$this->width;
        echo "<br><h1>Area=$this->area</h1><br>";
    }
}
//inheriated class from shape 
class Circle extends Shape{
    public $radius;
    function __construct($radius){
        echo "<br><h1>CIRCLE FUNCTION CONSTRUCTOR</h1><br>";
        $this->radius=$radius;
    }
    //overridden function
    public  function Area(){
        echo "<br><h1>CIRCLE FUNCTION AREA</h1><br>";
        echo "<br><h1> A = π * r^2</h1><br>";
        // inheriated property updated
        $this->area=3.142*$this->radius*$this->radius;
        echo "<br><h1>Area=$this->area</h1><br>";
    }
}

//obj creation

$op=$_POST['op'];
switch($op){
    case 'triangle':
        $base=$_POST['base'];
        $height=$_POST['height'];
            $tri=new Triangle($base,$height);
            $tri->Area();
    break;
    case 'square':
        $side=$_POST['side'];
            $sq=new Square($side);
            $sq->Area();
    break;
    case 'rectangle':
        $length=$_POST['length'];
        $width=$_POST['width'];
            $rect=new Rectangle($length,$width);
            $rect->Area();
    break;
    case 'circle':
        $radius=$_POST['radius'];
            $cir=new Circle($radius);
            $cir->Area();
    break;
}
?>
