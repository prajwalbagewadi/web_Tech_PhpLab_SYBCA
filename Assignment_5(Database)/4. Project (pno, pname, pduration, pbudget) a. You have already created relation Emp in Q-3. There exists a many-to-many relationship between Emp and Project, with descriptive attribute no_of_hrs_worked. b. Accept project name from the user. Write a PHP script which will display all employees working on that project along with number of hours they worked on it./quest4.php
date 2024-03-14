<?php
/*
4. Project (pno, pname, pduration, pbudget)
a. You have already created relation Emp in Q-3. There exists a many-to-many relationship
between Emp and Project, with descriptive attribute no_of_hrs_worked.
b. Accept project name from the user. Write a PHP script which will display all employees
working on that project along with number of hours they worked on it.
*/

//establish a connection
$token="host=localhost port=5432 dbname=project user=postgres password=123456";
$db=pg_connect($token) or die("Cannot connect!");

//query
$pname=$_POST['pname'];
$query=pg_query($db,"select project.pname,pbudget,emp.ename,project_emp.p_hrs_worked from project,emp,project_emp where project.pno=project_emp.pno and emp.eno=project_emp.eno and pname='$pname'");

//fetch  result rows queries //cursor
$row;
echo "<table border=\"1\">";
while($row=pg_fetch_assoc($query)){
    echo "<tr>";
    foreach($row as $key=>$val){
        echo "<td><h4>$key</h4></td>";
        echo "<td><h5>$val</h5></td>";
    }
    echo "<tr>";
}
echo "</table>";

// connection close 
pg_close($db);
?>