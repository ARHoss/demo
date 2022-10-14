
<!-- Defining class -->
<?php 

class Car{

    
    // Static Variable
    static $exhaust = 1;
    
    // Declaring Variable
    var $wheels= 4; 
    
    
    // Types of variable

    // Available everywhere
    public $hood = 1;
    // inside class - accessible by method in class or sub class
    protected $doors = 4;
    // inside class - accessible by method in class only
    private $engine = 1;
    

    

    function __construct()
    {
       echo "Inside Constructor<br>";
    }

    function moveWheels(){

        // referring variable inside class
        $this->wheels = 10;
        echo $this->wheels."<br>";
    }

    function createDoors(){

        $this->doors = "sit";
        echo $this->doors."<br>";
    }

    // static method
    static function moveForward(){

        echo "static method<br>";

    }


}


// Instantiate class
$bmw = new Car();

// Calling method
$bmw->moveWheels();
$bmw->createDoors();



// Calling class variable
echo $bmw->wheels."<br>";

// changing variable
$bmw->wheels= 8;

echo $bmw->wheels."<br>";

// Static variable & method invoke
echo Car::$exhaust;
echo "<br>";
echo Car::moveForward();
echo "<br>";



// Check is class exists
if(class_exists("Car")){


    echo "Class Exists<br>";


}else{

    echo "no";

}

// Check is method exists
if(method_exists("Car", "moveWheels")){


    echo "Method exists<br>";


}else{

    echo "no";

}

// Inheritance
Class Plane extends Car{

    // Overriding variables
    var $wheels = 20;

}

$jet = new Plane();

echo $jet->wheels;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
