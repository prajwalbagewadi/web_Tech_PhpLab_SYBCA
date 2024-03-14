<?php
/*
3. Dept (dno, dname, dlocation)
Emp (eno, ename, edesignation, esalary)
There exists a one-to-many relationship between Dept and Emp.
Accept department name from the user. Write a PHP script which will display count of the
employees working in that department.
*/

//establish a connection
$token="host=localhost port=5432 dbname=dept_emp user=postgres password=toor";
$db=pg_connect($token) or die("Cannot connect!");
// if($db){
//     echo "Connect Successful";
// }

$dept_name=$_POST['dept'];
echo "dept_name:$dept_name"."<br>";

//query
$query=pg_query($db," select dept.dname,count(emp.*) from dept,emp,deptemp where dept.dno=deptemp.dno and emp.eno=deptemp.eno and dept.dname='$dept_name' group by dname");

//display
while($row=pg_fetch_assoc($query)){
    //print_r($row);
    foreach($row as $val){
        echo "<h1>dept:$dept_name number of employee:$val</h1>";
    }
    
}
// connection close 
pg_close($db);
?>