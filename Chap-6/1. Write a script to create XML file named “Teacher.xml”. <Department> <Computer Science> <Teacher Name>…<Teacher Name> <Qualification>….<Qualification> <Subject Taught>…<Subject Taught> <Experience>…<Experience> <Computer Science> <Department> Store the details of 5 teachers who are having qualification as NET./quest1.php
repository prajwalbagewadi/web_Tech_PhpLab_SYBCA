<?php
/*
1. Write a script to create XML file named “Teacher.xml”.
<Department>
<Computer Science>
<Teacher Name>…</Teacher Name>
<Qualification>….</Qualification>
<Subject Taught>…</Subject Taught>
<Experience>…</Experience>
</Computer Science>
</Department>
Store the details of 5 teachers who are having qualification as NET.
*/ 

// format one use simplexml_load_string()

// xml string
/*
$xmlstr="<?xml version='1.0' ?><Department></Department>"; // called as root
$xml= simplexml_load_string($xmlstr);
*/

class teach{
    public $tname,$sub,$exp;
    public function __construct($t,$s,$e){
        $this->tname=$t;
        $this->sub=$s;
        $this->exp=$e;
    }

    public function create_xml(SimpleXMLElement $xml){
        $cs_obj=$xml->addChild("Computer Science"); //parent
        $tname_obj=$cs_obj->addChild("Teacher Name","$this->tname"); // child 
        $qual=$cs_obj->addChild("Qualification","UGC-NET");
        $sub_obj=$cs_obj->addChild("Subject Taught","$this->sub");
        $exp_obj=$cs_obj->addChild("Experience","$this->exp");
    }
}

// using SimpleXMLElement class :
// $xml=new SimpleXMLElement("<Department></Department>"); // root
// $cs=$xml->addChild("Computer Science"); //parent 
// $tname=$cs->addChild("Teacher Name","prajwal"); // child
// $qual=$cs->addChild("Qualification","UGC-NET"); // child
// $sub=$cs->addChild("Subject Taught","PHP_LAB"); // child
// $sub=$cs->addChild("Subject Taught","PYTHON_LAB"); // child
// $sub=$cs->addChild("Subject Taught","CPP_LAB"); // child
// $exp=$cs->addChild("Experience","1year"); // child
// $xml->asXML("Teacher.xml");

$obj[0]=new teach("teach1","php",1);
$obj[1]=new teach("teach2","cpp",2);
$obj[2]=new teach("teach3","python",3);
$obj[3]=new teach("teach4","EVS",4);
$obj[5]=new teach("teach5","english",5);

$xml=new SimpleXMLElement("<Department></Department>"); // root
foreach($obj as $t){
    $t->create_xml($xml);
}
$xml->asXML("Teacher.xml");
echo "<h1>XML Doc created Successful.</h1>"."<br>";

/*
  
// Adding child named "institution"  
// and valued "geeksforgeeks" 

$xml->addChild("institution", "geeksforgeeks"); 

  
// Adding attribute named "type" and value 
// "educational" in institution element. 

$xml->institution->addAttribute("type", "educational"); 

  


*/
?>
