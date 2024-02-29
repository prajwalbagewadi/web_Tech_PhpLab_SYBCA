<?php
/*
5) Create a class account (accno, cust_name). Derive two classes from account as
saving_acc(balance, min_amount) and current_acc(balance, min_amount).
Display a menu
a) Saving Account
b) Current Account
For each of this display a menu with the following options.
1. Create account
2. Deposit
3. Withdrawal
*/
//parent class
class Account{
    private $accno,$cust_name;
    public function __construct($accno,$cust_name){
        $this->accno=$accno;
        $this->cust_name=$cust_name;
    }
    function disp(){
        //echo "<tr>";
        echo "<td>"."<h3>acc_no:$this->accno</h3>"."</td>";
        echo "<td>"."<h3>cust_name:$this->cust_name</h3>"."</td>";
        //echo "</tr>";
    }
}
//child class Saving_acc extends Account
class Saving_acc extends Account{
    private $balance,$min_amount;
    public function __construct($bal,$min,$accno,$cust_name){
        parent::__construct($accno,$cust_name);
        $this->balance=$bal;
        $this->min_amount=$min;
    }
    function disp(){
        parent::disp();
        echo "<td>"."<h3>balance:$this->balance</h3>"."</td>";
        echo "<td>"."<h3>min_amount:$this->min_amount</h3>"."</td>";
    }
    function deposit(){
        $deposit=1000;
        $this->balance+=$deposit;
        $this->disp();
    }
    function withdrawal(){
        $withdraw=1000;
        $this->balance-=$withdraw;
        $this->disp();
    }
}
//child class Current_acc extends Account
class Current_acc extends Account{
    private $balance,$min_amount;
    public function __construct($bal,$min,$accno,$cust_name){
        parent::__construct($accno,$cust_name);
        $this->balance=$bal;
        $this->min_amount=$min;
    }
    function disp(){
        parent::disp();
        echo "<td>"."<h3>balance:$this->balance</h3>"."</td>";
        echo "<td>"."<h3>min_amount:$this->min_amount</h3>"."</td>";
    }
    function deposit(){
        $deposit=2000;
        $this->balance+=$deposit;
        $this->disp();
        // echo "<td>"."<h3>balance:$this->balance</h3>"."</td>";
        // echo "<td>"."<h3>Deposit:$deposit</h3>"."</td>";
        // echo "<td>"."<h3>balance:$this->balance+$deposit</h3>"."</td>";
    }
    function withdrawal(){
        $withdraw=2000;
        $this->balance-=$withdraw;
        $this->disp();
        // echo "<td>"."<h3>balance:$this->balance</h3>"."</td>";
        // echo "<td>"."<h3>$withdraw:$withdraw</h3>"."</td>";
        // echo "<td>"."<h3>balance:$this->balance+$withdraw</h3>"."</td>";
    }
}

//object creation:
$op=$_POST['op'];
$save_acc=$_POST['sa'];
$curr_acc=$_POST['ca'];
//menu logic
if($op=='saving_acc'){
    echo "<h3>saving_acc:</h3>";
    $obj_save_acc=new Saving_acc(25000,1000,1492,"priya");
    $obj_save_acc1=new Saving_acc(85000,1000,1494,"amit");
    switch($save_acc){
        case "create_acc":
            echo "<table border=\"1\">";
            echo "<tr>";
            echo "<th>"."<h3>acc_no</h3>"."</th>";
            echo "<th>"."<h3>cust_name</h3>"."</th>";
            echo "<th>"."<h3>balance</h3>"."</th>";
            echo "<th>"."<h3>min_amt</h3>"."</th>";
            echo "</tr>";
            echo "<tr>";
            $obj_save_acc->disp();
            echo "</tr>";
            echo "<tr>";
            $obj_save_acc1->disp();
            echo "</tr>";
        break;
        case "Deposit":
            echo "<table border=\"1\">";
            echo "<tr>";
            echo "<th>"."<h3>acc_no</h3>"."</th>";
            echo "<th>"."<h3>cust_name</h3>"."</th>";
            echo "<th>"."<h3>balance</h3>"."</th>";
            echo "<th>"."<h3>min_amt</h3>"."</th>";
            echo "</tr>";
            echo "<tr>";
            $obj_save_acc->deposit();
            echo "</tr>";
            echo "<tr>";
            $obj_save_acc1->deposit();
            echo "</tr>";
        break;
        case "Withdrawal":
            echo "<table border=\"1\">";
            echo "<tr>";
            echo "<th>"."<h3>acc_no</h3>"."</th>";
            echo "<th>"."<h3>cust_name</h3>"."</th>";
            echo "<th>"."<h3>balance</h3>"."</th>";
            echo "<th>"."<h3>min_amt</h3>"."</th>";
            echo "</tr>";
            echo "<tr>";
            $obj_save_acc->withdrawal();
            echo "</tr>";
            echo "<tr>";
            $obj_save_acc1->withdrawal();
            echo "</tr>";
        break;
    }
}
if($op=='current_acc'){
    echo "<h3>current_acc:</h3>";
    $obj_curr_acc=new Current_acc(55000,5000,1493,"neha");
    $obj_curr_acc1=new Current_acc(65000,5000,1495,"manali");
    switch($curr_acc){
        case "create_acc":
            echo "<table border=\"1\">";
            echo "<tr>";
            echo "<th>"."<h3>acc_no</h3>"."</th>";
            echo "<th>"."<h3>cust_name</h3>"."</th>";
            echo "<th>"."<h3>balance</h3>"."</th>";
            echo "<th>"."<h3>min_amt</h3>"."</th>";
            echo "</tr>";
            echo "<tr>";
            $obj_curr_acc->disp();
            echo "</tr>";
            echo "<tr>";
            $obj_curr_acc1->disp();
            echo "</tr>";
        break;
        case "Deposit":
            echo "<table border=\"1\">";
            echo "<tr>";
            echo "<th>"."<h3>acc_no</h3>"."</th>";
            echo "<th>"."<h3>cust_name</h3>"."</th>";
            echo "<th>"."<h3>balance</h3>"."</th>";
            echo "<th>"."<h3>min_amt</h3>"."</th>";
            echo "</tr>";
            echo "<tr>";
            $obj_curr_acc->deposit();
            echo "</tr>";
            echo "<tr>";
            $obj_curr_acc1->deposit();
            echo "</tr>";
        break;
        case "Withdrawal":
            echo "<table border=\"1\">";
            echo "<tr>";
            echo "<th>"."<h3>acc_no</h3>"."</th>";
            echo "<th>"."<h3>cust_name</h3>"."</th>";
            echo "<th>"."<h3>balance</h3>"."</th>";
            echo "<th>"."<h3>min_amt</h3>"."</th>";
            echo "</tr>";
            echo "<tr>";
            $obj_curr_acc->withdrawal();
            echo "</tr>";
            echo "<tr>";
            $obj_curr_acc1->withdrawal();
            echo "</tr>";
        break;
    }
}
?>
