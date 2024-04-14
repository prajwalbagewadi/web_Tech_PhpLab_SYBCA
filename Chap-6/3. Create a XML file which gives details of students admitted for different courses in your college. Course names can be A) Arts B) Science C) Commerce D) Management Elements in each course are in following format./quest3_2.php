<?php

/*
3. Create a XML file which gives details of students admitted for different courses in your college.
Course names can be
A) Arts
B) Science
C) Commerce
D) Management
Elements in each course are in following format.
<Course>
<Level>…</Level>
<Intake Capacity>…</Intake Capacity>
</Course>
Save the file with “Course.xml”
*/

//class
class Course{
    public $b,$it;
    public function __construct($b,$it){
        echo "Contructor called."."<br>";
        $this->b=$b;
        $this->it=$it;
    }
    public function create_XML(SimpleXMLElement $xml){
        $lev=$xml->addChild("Level","$this->b");
        $it=$lev->addChild("Intake_Capacity","$this->it");
    }
}

//xml obj
$xml=new SimpleXMLElement("<Course></Course>"); //root

$obj[0]=new Course("Arts",80);
$obj[1]=new Course("Science",120);
$obj[2]=new Course("Commerce",180);
$obj[3]=new Course("Management",180);

foreach($obj as $t){
    $t->create_XML($xml);
}

$xml->asXML("Course.xml");
echo "<h1>XML Doc created Successful.</h1>"."<br>";
?>