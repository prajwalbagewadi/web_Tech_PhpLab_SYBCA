class MyClass {
    // Properties
    public $property1;
    public $property2;

    // Constructor
    public function __construct($value1, $value2) {
        // Initializing properties using $this
        $this->property1 = $value1;
        $this->property2 = $value2;
    }

    // Method using $this
    public function myMethod() {
        echo "Property 1: " . $this->property1 . "<br>";
        echo "Property 2: " . $this->property2 . "<br>";
    }
}

// Creating an instance of the class
$obj = new MyClass("Value1", "Value2");

// Accessing properties using $this
echo $obj->property1 . "<br>";
echo $obj->property2 . "<br>";

// Calling a method using $this
$obj->myMethod();
