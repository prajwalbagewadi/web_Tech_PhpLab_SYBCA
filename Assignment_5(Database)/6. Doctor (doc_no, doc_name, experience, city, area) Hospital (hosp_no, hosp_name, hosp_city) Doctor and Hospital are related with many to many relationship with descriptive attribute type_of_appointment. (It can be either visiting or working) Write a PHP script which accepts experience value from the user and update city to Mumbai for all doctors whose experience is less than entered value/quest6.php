<?php

$token="host=localhost port=5432 dbname=hospital user=postgres password=123456";
$db=pg_connect($token) or die("Unsuccessful");

$exp=$_POST['exp'];
$query=pg_query($db,"update doctor set city='Mumbai',area='Mumbai' where exp < $exp") or die("cannot execute");
//echo "query result=$query"."<br>";

$query1=pg_query($db,"select * from doctor")or die("cannot execute");

echo "updated! result."."<br>";
while($row=pg_fetch_assoc($query1)){
    print_r(array_keys($row));
    echo "<br>";
    foreach($row as $key=>$var){
        echo " "."$var"." ";
    }
    echo "<br>";
}
?>