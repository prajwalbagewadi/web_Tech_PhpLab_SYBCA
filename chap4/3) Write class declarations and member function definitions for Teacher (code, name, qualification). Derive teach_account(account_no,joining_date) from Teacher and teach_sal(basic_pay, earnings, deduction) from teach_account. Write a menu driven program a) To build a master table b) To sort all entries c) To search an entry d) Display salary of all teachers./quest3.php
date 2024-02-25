<?php
/*
3) Write class declarations and member function definitions for Teacher (code, name, qualification).
Derive teach_account(account_no,joining_date) from Teacher and teach_sal(basic_pay, earnings,
deduction) from teach_account. Write a menu driven program
a) To build a master table
b) To sort all entries
c) To search an entry
d) Display salary of all teachers.
*/

//class declaration
class Teacher{
    public $code,$name,$qualification;
    public function __construct($code,$tname,$qual){
        $this->code=$code;
        $this->name=$tname;
        $this->qualification=$qual;
    }
    public function disp(){
        //echo "<table border=\"2\">";
        echo "<tr>";
        echo "<td>"."$this->code"."</td>";
        echo "<td>"."$this->name"."</td>";
        echo "<td>"."$this->qualification"."</td>";
    }
}
//class inheriting class Teacher
class Teach_account extends Teacher{
    public $account_no,$joining_date;
    public function __construct($acc_no,$jdate,$code,$tname,$qual){
        // call to parent constructor
        parent::__construct($code,$tname,$qual);
        $this->account_no=$acc_no;
        $this->joining_date=$jdate;
    }
    public function disp(){
        // call to parent disp method
        parent::disp();
        echo "<td>"."$this->account_no"."</td>";
        echo "<td>"."$this->joining_date"."</td>";
    }
}
//class inheriting class Teach_account
class Teach_sal extends Teach_account{
    public $basic_pay,$earnings,$deduction;
    public function __construct($base_pay,$earn,$deduce,$acc_no,$jdate,$code,$tname,$qual){
        // call to parent constructor
        parent::__construct($acc_no,$jdate,$code,$tname,$qual);
        $this->basic_pay=$base_pay;
        $this->earnings=$earn;
        $this->deduction=$deduce;
    }
    public function disp(){
        // call to parent disp method
        parent::disp();
        echo "<td>"."$this->basic_pay"."</td>";
        echo "<td>"."$this->earnings"."</td>";
        echo "<td>"."$this->deduction"."</td>";
        echo "</tr>";
        //echo "</table>";
    }
    public function cal_sal(){
        $salary=$this->basic_pay+$this->earnings-$this->deduction;
        echo "<tr>";
        echo "<td>"."NAME:$this->name"."</td>";
        echo "<td>"."SALARY:$salary"."</td>";
        echo "</tr>";
    }
}

// object creation:

// array of objects:

// method 1:
// $teach[0]=new Teach_sal(40000,20000,0000,1453,"15-may-2023",68108,"vidya_mam","PHD");
// $teach[1]=new Teach_sal(40000,10000,1000,1456,"15-dec-2023",68110,"shubhangi_mam","MSc(CS)");
// $teach[2]=new Teach_sal(30000,5000,800,1457,"23-dec-2023",68111,"ruhee_mam","MSc(CS)");

//method 2:
$teach=array(
    new Teach_sal(40000,20000,0000,1453,"15-may-2023",68108,"vidya_mam","PHD"),
    new Teach_sal(40000,10000,1300,1456,"15-dec-2023",68116,"shubhangi_mam","MSc(CS)"),
    new Teach_sal(30000,5000,1000,1457,"23-dec-2023",68110,"ruhee_mam","MSc(CS)"),
    new Teach_sal(30000,5000,1000,1458,"23-dec-2023",68112,"Omkar_sir","MSc(CS)")
);

$temp=new Teach_sal(0,0,0,0,"date",0,"name","qual");

// $t1->disp();
// $t1->cal_sal();

// $t2->disp();
// $t2->cal_sal();

// menu logic:
$op=$_POST['op'];
//$op="search";
switch($op){
    case 'Master':
        echo "<table border=\"1\">";
        echo "<tr>";
        echo "<th>"."<h4>Code<h4>"."</th>";
        echo "<th>"."<h4>Name<h4>"."</th>";
        echo "<th>"."<h4>Qualification<h4>"."</th>";
        echo "<th>"."<h4>Account_no<h4>"."</th>";
        echo "<th>"."<h4>Joining_date<h4>"."</th>";
        echo "<th>"."<h4>Basic_pay<h4>"."</th>";
        echo "<th>"."<h4>Earnings<h4>"."</th>";
        echo "<th>"."<h4>Deduction<h4>"."</th>";
        echo "</tr>";
        // go through each element in array  and display record
        for($i=0;$i<sizeof($teach);$i++){
            $teach[$i]->disp();
        }
        echo "</table>";
    break;
    case 'sort':
        // go through each element in array and sort elements using bubble sort 
        for($pass=0;$pass<sizeof($teach);$pass++){
            for($i=0;$i<sizeof($teach)-$pass-1;$i++){
                if($teach[$i]->code > $teach[$i+1]->code){
                    $temp=$teach[$i];
                    $teach[$i]=$teach[$i+1];
                    $teach[$i+1]=$temp;
                }
            }
        }
        echo "<table border=\"1\">";
        echo "<tr>";
        echo "<th>"."<h4>Code<h4>"."</th>";
        echo "<th>"."<h4>Name<h4>"."</th>";
        echo "<th>"."<h4>Qualification<h4>"."</th>";
        echo "<th>"."<h4>Account_no<h4>"."</th>";
        echo "<th>"."<h4>Joining_date<h4>"."</th>";
        echo "<th>"."<h4>Basic_pay<h4>"."</th>";
        echo "<th>"."<h4>Earnings<h4>"."</th>";
        echo "<th>"."<h4>Deduction<h4>"."</th>";
        echo "</tr>";
        // go through each element in array and display sorted array
        for($i=0;$i<sizeof($teach);$i++){
            $teach[$i]->disp();
        }
        echo "</table>";
    break;
    case 'search':
        $key=$_POST['key'];
        //$key="vidya_mam";
        // go through each element in array 
        foreach($teach as $temp){
            // key compare
            if($temp->name==$key){
                echo "<table border=\"1\">";
                echo "<tr>";
                echo "<th>"."<h4>Code<h4>"."</th>";
                echo "<th>"."<h4>Name<h4>"."</th>";
                echo "<th>"."<h4>Qualification<h4>"."</th>";
                echo "<th>"."<h4>Account_no<h4>"."</th>";
                echo "<th>"."<h4>Joining_date<h4>"."</th>";
                echo "<th>"."<h4>Basic_pay<h4>"."</th>";
                echo "<th>"."<h4>Earnings<h4>"."</th>";
                echo "<th>"."<h4>Deduction<h4>"."</th>";
                echo "</tr>";
                // show only particular record
                $temp->disp();
                echo "</table>";
            }
        }
    break;
    case 'salary':
        echo "<table border=\"1\">";
        echo "<tr>";
        echo "<th>"."<h4>Name<h4>"."</th>";
        echo "<th>"."<h4>Salary<h4>"."</th>";
        echo "</tr>";
        // go through each element in array calculate and display salary
        foreach($teach as $temp){
            $temp->cal_sal();
        }
        echo "</table>";
    break;
}
?>
