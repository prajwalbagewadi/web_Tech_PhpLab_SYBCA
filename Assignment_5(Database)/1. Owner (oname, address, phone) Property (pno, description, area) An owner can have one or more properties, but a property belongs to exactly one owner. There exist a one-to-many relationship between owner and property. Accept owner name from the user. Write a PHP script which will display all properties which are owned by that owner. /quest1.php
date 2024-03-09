<?php
/*
1. Owner (oname, address, phone)
Property (pno, description, area)
An owner can have one or more properties, but a property belongs to exactly one owner.
There exist a one-to-many relationship between owner and property.
Accept owner name from the user. Write a PHP script which will display all properties which are
owned by that owner.
*/

function conn_check($conn){
  if($conn){
    echo "Connection success"."<br>";
  }
  else{
    echo "connection unsuccessful"."<br>";
  }
}
/*
pg_connect():
In PHP, pg_connect() is a function used to establish a connection to a PostgreSQL database. 
It takes a connection string or an array of connection parameters and returns a PostgreSQL connection resource 
if the connection is successful.
*/
$auth="host=localhost port=5432 dbname=prop user=postgres password=toor";
$db=pg_connect($auth) or die("Error:cannot Connect");
conn_check($db);
// test query
// $result=pg_query($db,"select * from po");
// while($row=pg_fetch_row($result)){
//     foreach($row as $val){
//         echo "$val";
//     }
//     echo "<br>";
// }

// query 
$name=$_POST['oname'];
/*
pg_query():
In PHP, the pg_query function is used to send a query to a PostgreSQL database. 
It takes a PostgreSQL connection resource and a SQL query string as parameters, 
and it returns a result resource if the query is successful. 
*/
$result=pg_query($db,"select property.*,owner.* from property,owner,po where owner.oname=po.oname and property.pno=po.pno and po.oname='$name'");
/*
pg_fetch_assoc():
In PHP, pg_fetch_assoc is a function used to fetch a row from a PostgreSQL result set as an associative array. 
Each column in the result set is represented by a key-value pair in the associative array, 
where the key is the column name and the value is the corresponding value for that column in the current row.

or pg_fetch_row():
In PHP, pg_fetch_row is a function used to fetch a row from a PostgreSQL result set as a numerical array. 
The array indices are numeric, starting from 0, and represent the column positions in the result set.
*/
echo "<table border=\"1\">";
while($row=pg_fetch_assoc($result)){
    echo "<tr>";
    foreach($row as $key=>$val){
        
        echo "<th>"."<h2>$key</h2>"."</th>";
        
    }
    echo "</tr>";
    echo "<tr>";
    foreach($row as $key=>$val){
       
        echo "<td>"."<h4>$val</h4>"."</td>";
    }
    echo "</tr>";
}
echo "</table>";
pg_close($db);
?>
