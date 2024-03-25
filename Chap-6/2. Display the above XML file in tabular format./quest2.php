<?php
/*
2. Display the above XML file in tabular format.
*/

//load xml file
// $xml=simplexml_load_file("quest2/Teacher.xml"); //or die("unable load file");

// foreach($xml as $t){
//     echo "dept:".$t->Computer_Science."<br>";
// }


/*
2. Display the above XML file in tabular format.
*/

// load xml file
$xml=simplexml_load_file("Teacher.xml") or die("unable to load");
echo "<table border=\"1\">";
    echo "<tr>";
        echo "<th colspan=\"4\">";
            echo "Departement:".$xml->children()->getName()."<br>"; // root nodes parent node name
        echo "</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>";
        echo "Teacher_Name:";
    echo "</th>";
    echo "<th>";
        echo "Qualification";
    echo "</th>";
    echo "<th>";
        echo "Subject_Taught";
    echo "</th>";
    echo "<th>";
        echo "Experience";
    echo "</th>";
echo "</tr>";
foreach($xml->children() as $t){
    echo "<tr>";
        echo "<td>";
            echo $t->Teacher_Name; // child node values
        echo "</td>";     
        echo "<td>";
            echo $t->Qualification; // child node values
        echo "</td>";
        echo "<td>";
            echo $t->Subject_Taught; // child node values
        echo "</td>";
        echo "<td>";
            echo $t->Experience; // child node values
        echo "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>"."test code"."<br>";
foreach($xml->children() as $t){
    echo "Departement:".$t->getName()."<br>"; // parent node name
    echo "Teacher Name:".$t->Teacher_Name."<br>";
}

?>