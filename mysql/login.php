
<!-- Login -->
<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];

    $password = $_POST['password'];

    // Database area
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection){

        echo "Conneted";
    }else{
        echo "Die database connection failed";
    }

    // insert values
    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed'.mysqli_error($connection));
    }

    // Database area ends



    $name = ["Abdul@a.com", "Asif", "Faisal", "Himel"];

    // Validation
    $minimum = 7;
    $maximum = 25;

    if(strlen($username) < $minimum ){
        echo "Username too short";
    }elseif (strlen($username) > $maximum){

        echo "Username too long";
    }else{

        if(!in_array($username, $name)){
            echo "Not allowed to login";
        }else{
            echo "Welcome";
        }


    }

    // Validation ends

}



?>