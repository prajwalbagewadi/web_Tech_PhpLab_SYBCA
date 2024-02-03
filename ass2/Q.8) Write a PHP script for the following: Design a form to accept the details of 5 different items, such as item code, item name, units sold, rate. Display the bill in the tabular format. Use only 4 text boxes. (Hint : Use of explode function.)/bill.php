<?php
/*
Q.8) Write a PHP script for the following: Design a form to accept the details of 5
different items, such as item code, item name, units sold, rate. Display the bill in the
tabular format. Use only 4 text boxes. (Hint : Use of explode function.)
*/

    $item_codes=explode(" ",$_POST['item_code']);
    //print_r($item_codes);
    $item_names=explode(" ",$_POST['item_name']);
    //print_r($item_names);
    $units_solds=explode(" ",$_POST['units_sold']);
    //print_r($units_solds);
    $rates=explode(" ",$_POST['rate']);
    //print_r($rates);
 
    $bill_amt=0;
    
    
    for($i=0,$r=0;$i<sizeof($units_solds);$i++,$r++){ 
        $bill_amt+=$units_solds[$i]*$rates[$r];
    }
    echo "bill_amt=$bill_amt"."<br>";

// html table for bill display
    echo "<table border=\"1\">";

    echo "<tr>";
    echo "<th colspan=\"5\">"."Bill Recipt"."</th>";
    echo "</tr>";

// table headings
    echo "<tr>";
    echo "<th>"."Item_code"."</th>";
    echo "<th>"."Item_name"."</th>";
    echo "<th>"."Units_sold"."</th>";
    echo "<th>"."rate"."</th>";
    echo "<th>"."amount"."</th>";
    echo "</tr>";

// table elements printing for each item    
    for($i=0;$i<count($item_codes);$i++){
        echo "<tr>";
        echo "<td>".$item_codes[$i]."</td>";
        echo "<td>".$item_names[$i]."</td>";
        echo "<td>".$units_solds[$i]."</td>";
        echo "<td>".$rates[$i]."</td>";
        echo "<td>".$units_solds[$i]*$rates[$i]."</td>";
        echo "</tr>";
    }
    
    echo "<tr>";
    echo "<th colspan=\"3\">"."Total amount:"."</th>";
    echo "<th colspan=\"2\">"."$bill_amt"."</th>";
    echo "</tr>";

    echo "</table>";
?>
