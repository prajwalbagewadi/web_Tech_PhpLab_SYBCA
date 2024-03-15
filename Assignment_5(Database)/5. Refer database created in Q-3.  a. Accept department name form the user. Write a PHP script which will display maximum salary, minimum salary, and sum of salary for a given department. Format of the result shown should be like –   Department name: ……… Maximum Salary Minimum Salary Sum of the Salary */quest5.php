<?php
/*
5. Refer database created in Q-3.

a. Accept department name form the user. Write a PHP script which will display maximum
salary, minimum salary, and sum of salary for a given department. Format of the result
shown should be like – 

Department name: ………
Maximum Salary Minimum Salary Sum of the Salary
*/

// db connection
$token="host=localhost port=5432 dbname=quest5 user=postgres password=123456";
$db=pg_connect($token) or die("Cannot connect");

//query 
$dept=$_POST['dept'];
$query=pg_query($db,"select dept.dname,max(emp.salary),min(emp.salary),sum(emp.salary) from dept,emp,deptEmp where dept.dno=deptEmp.dno and emp.eno=deptEmp.eno and dname='$dept' group by dname");

//fetch
echo "<table border=\"1\">";

echo "<tr rowspan=\"4\">";
echo "<th colspan=\"4\"><h2>Dept:$dept</h2></th>";
echo "</tr>";

echo "<tr>";
echo "<th>Dept Name:</th>";
echo "<th>Dept Max sal:</th>";
echo "<th>Dept Min sal:</th>";
echo "<th>Dept Sum sal:</th>";
echo "</tr>";

while($row=pg_fetch_row($query)){
    echo "<tr>";
    foreach($row as $val){
        echo "<td><h4>$val</h4></td>";
    }
    echo "</tr>";
}

echo "</table>";

//close connection
pg_close($db);
?>