<?php
/* 
6) Define a class Employee having private members – id, name, department, salary. Define
parameterized constructors. Create a subclass called “Manager” with private member bonus.
Create 6 objects of the Manager class and display the details of the manager having the maximum
total salary (salary + bonus).
*/

//parent class
class Employee{
    protected $id,$name,$dept,$salary;
    public function __construct($id,$name,$dept,$salary){
        $this->id=$id;
        $this->name=$name;
        $this->dept=$dept;
        $this->salary=$salary;
    }
    //member function
    public function disp(){
        echo "emp_id:$this->id"."<br>";
        echo "emp_name:$this->name"."<br>";
        echo "emp_dept:$this->dept"."<br>";
        echo "emp_salary:$this->salary"."<br>";
    }
}
//child class derived from Employee 
class Manager extends Employee{
    public $bonus,$total_salary;
    public function __construct($bonus,$id,$name,$dept,$salary){
        parent::__construct($id,$name,$dept,$salary);
        $this->bonus=$bonus;  
    }
    //member function
    public function disp(){
        parent::disp();
        echo "emp_Bonus:$this->bonus"."<br>";
        echo "emp_total_sal:".$this->total_salary."<br>";
    }
    //member function accepting array as argument
    public function max_sal(array $data,$N){
      //max set to 0 element
      $max=$data[0];
      for($i=0;$i<$N;$i++){
        $data[$i]->total_salary=$data[$i]->salary+$data[$i]->bonus;
        // if current element > then the set max
        if($data[$i]->total_salary > $max->total_salary){
          $max=$data[$i];
        }
      }
      return $max;
    }
}

// object creation 
$ret_obj=new Manager(0,0,"","",0);
// array of objects
$obj_arr=array(
    
    $obj_arr[0]=new Manager(10000,121,"amit","software_dev_teamLead",150000),
    $obj_arr[1]=new Manager(20000,122,"aditya","software_dev_teamLead",150000),
    $obj_arr[2]=new Manager(30000,123,"neha","software_product_manager",250000),
    $obj_arr[3]=new Manager(50000,120,"prajwal","Senior_product_manager",500000),
    $obj_arr[4]=new Manager(10000,124,"priya","software_test_lead",80000),
    $obj_arr[5]=new Manager(10000,125,"shruti","software_test_lead",80000)
);

$N=6;

//disp details of each object
echo "<h1>details of each Employee:</h1>"."<br>"; 
for($i=0;$i<$N;$i++){
    echo "$i"."<br>";
    $obj_arr[$i]->disp();
}

//disp details of max salary
echo "<h1>details of Employee with max Salary:</h1>"."<br>";
$ret_obj=$obj_arr[1]->max_sal($obj_arr,$N);
$ret_obj->disp();
?>
