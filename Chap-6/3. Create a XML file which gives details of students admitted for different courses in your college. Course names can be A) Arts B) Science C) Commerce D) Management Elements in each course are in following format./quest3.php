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

// class 
class Course{
    public $branch,$capacity;
    public function __construct($b,$c)
    {
        $this->branch=$b;
        $this->capacity=$c;
    }

    public function create_xml(SimpleXMLElement $xml){
        $parent=$xml->addChild("Branch");
        $lev=$parent->addChild("Level","$this->branch");
        $IT=$lev->addChild("Intake_Capacity","$this->capacity");
    }
}


//arr of objects
$obj[0]=new Course("Arts",80);
$obj[1]=new Course("Science",120);
$obj[2]=new Course("Commerce",180);
$obj[3]=new Course("Management",180);

//echo count($obj);
//echo $obj[2]->branch;
//echo $obj[2]->capacity;
// for($i=0;$i<count($obj);$i++){
//     // $var1=$obj[$i]->branch;
//     // $obj_lev=$xml->addChild("Level","$var1");
//     // $var2=$obj[$i]->capacity;
//     // $obj_IT=$obj_level->addChild("Intake_Capacity","$var2");
//     $obj[$i]->create_xml($xml);
// }

// xml object
$xml=new SimpleXMLElement("<Course></Course>");//or die("Cannot work in XML");

foreach($obj as $o){
    $o->create_xml($xml);
}

$xml->asXML("Course.xml");
if($xml){
    echo "<h1>XML Doc created Successful.</h1>"."<br>";
}

?>
