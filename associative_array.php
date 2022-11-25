<?php 






class Implode{

    public $property1;
    public $property2;
    public $property3;
    public $property4;

    public function print(){

        // get_object_vars replicates all the properties of an object into an associative array
        $properties = get_object_vars($this);
        var_dump($properties);
        echo "<br>";

        // Var dump, foreach, array, implode




        $abc = array(
            "property1" =>   "5",
            "property2" =>   "7",
            "property3" =>   "9"
        
        );

        var_dump($abc);
        echo "<br>";

        // Get keys of an associative array
        // Creates an associative array
        $abc = array_keys($abc);

        var_dump($abc);
        echo "<br>";


        foreach($abc as $key => $value){

            // Prints information about a variable
            echo $key."=>".$value;
            echo "<br>";

        }

        foreach($abc as $value){

            // Prints information about a variable
            echo $value;
            echo "<br>";

        }

        // gets the value of an associative array as a comma seperated string
        $abc= implode(", ",$abc);
        echo $abc[5];
        var_dump($abc);

        
        



        // echo "<br>";
        // var_dump(implode("','",$properties));



    }

}

$implode = new Implode();
$implode->print();







?>
