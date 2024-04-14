<?php
/*
4. Write PHP script to generate an XML code in the following format
<?xml version=1.0”?>
<ABC College>
<Computer Application Department>
<Course> BCA(Science) </Course>
<Student Strength > 80</Student Strength>
<Number of Teachers>12</Number of Teachers>
</ABC College>
</Computer Application Department>
*/

//xml object
$xml=new SimpleXMLElement("<ABC_College></ABC_College>"); //root

$dept=$xml->addChild("Computer_Application_Department"); //parent
$course=$dept->addChild("Course","BCA(Science)");        //child
$Stud=$course->addChild("Student_Strength",80);          //sub_child
$teach=$course->addChild("Number_Of_Teachers",12);       //sub_child

$xml->asXML("College.xml");
if($xml){
    echo "File created SuccessFully";
}


?>
