<?php
/*
2. Client (clientno, name, address)
Sales_order (sonumber, s_order_date)
A client can give one or more sales_orders, but a sales_order belongs to exactly one client.
There exist a one-to-many relationship between client and sales_order.
Accept sales_order date from the user. Write a PHP script which will display all orders which are
placed before that date.
*/

//authentication string
$token="host=localhost port=5432 dbname=sales_orders user=postgres password=123456";

//create connection with database
$db=pg_connect($token) or die("E:cannot CONNECT!");
//connect status
if($db){
    echo "CONNECT Successful."."<br>";
}
//user input date
$date=$_POST['date'];
// run query on database
$query=pg_query($db,"select sale_order.*,client.cno,name from sale_order,client,sale_client where sale_order.so_num=sale_client.so_num and client.cno=sale_client.cno and sale_order.s_order_date < '$date'");
// from query fetch result rows
echo "<table border=\"1\">";
while($row=pg_fetch_assoc($query)){
    echo "<tr>";
    foreach($row as $key=>$val){
        echo "<th>"."<h2>$key</h2>"."</th>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach($row as $key=>$val){
        echo "<th>"."<h4>$val</h4>"."</th>";
    }
    echo "</tr>";
}
echo "</table>";
// connection close 
pg_close($db);
echo "CONNECTION Closed Successful!";
?>
