<?php
/*
4) Write a PHP script to demonstrate the concept of introspection 
for examining object.
*/
class A{
  public $a,$b;
  public function __construct($a,$b){
    echo "object created"."<br>";
    $this->a = $a;
    $this->b = $b;
  }
  public function get(){
    echo "$this->a"."<br>";
    echo "$this->b" ."<br>";
  }
  public function __destruct(){
    echo "object destroyed"."<br>";
  }
}
//object creation
$a = new A(10,20);
$b = new A(30,40);
$a->get();
//$a->__destruct();

// object introspection methods 

/*
is_object(object) function is
used to make sure that
it is object.
*/
$is_a_obj=is_object($a);
echo '$ a is a object='."$is_a_obj"."<br>";

/*
get_class(object) function is
used to get the class to
which an object
belongs and to get class
name
*/
$classname=get_class($a);
echo '$a belongs to class='."$classname"."<br>";

/*
method_exists(object,'method') This function is used to
check if method on an
object exists .
*/
$method_exits=method_exists($a,'get');
echo 'method exists='."$method_exits"."<br>";

/*
$array=get_object_vars(object) This function returns an
array of properties set
in an object 

note:the data members must be public 
*/
echo 'get_object_vars='."<br>";
$arr=get_object_vars($a);
print_r($arr);
?>
