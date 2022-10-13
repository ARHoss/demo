<?php include "db.php";


// Print all data from PHP
function showAllData(){
    // read values on database


    // Allows global variables to be available inside fucntion
    global $connection;
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);


    // error message if query fails
    if(!$result){
        die('Query Failed'.mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
        
    }

}

function readData(){
    
    // Allows global variables to be available inside fucntion
    global $connection;
    
    // read values from database

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);


    // error message if query fails
    if(!$result){
        die('Query Failed'.mysqli_error($connection));
    }

    
    

                    $num = 0;
                    while($row = mysqli_fetch_assoc($result)){

                



                    
                    echo $row["id"];
                    echo $row["username"];
                    echo $row["password"];
                    

                
                        // print_r($row);
                        

                    }

        

}

    // Updating values
function updateData(){

    if(isset($_POST['submit'])){

        // Allows global variables to be available inside fucntion
        global $connection;
    
        $username = $_POST['username'];

        $password = $_POST['password'];

        $id = $_POST['id'];

        echo $username." ".$password." ".$id;

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE ID = $id";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("QUERY FAILED" . mysqli_error($connection));
        }else{
            echo "record updated";
        }
    }
    

}

   // Deletes values
   function deleteData(){

    if(isset($_POST['submit'])){

    
    
        // Allows global variables to be available inside fucntion
        global $connection;

        $username = $_POST['username'];

        $password = $_POST['password'];

        $id = $_POST['id'];

        echo $username." ".$password." ".$id;

        $query = "DELETE FROM users ";
        $query .= "WHERE ID = $id";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("QUERY FAILED" . mysqli_error($connection));
        }else{
            echo "record deleted";
        }
    }



}

function insertData(){

    


    // functions to insert data
    if(isset($_POST['submit'])){

        


        // Allows global variables to be available inside fucntion
        global $connection;
    
        $username = $_POST['username'];

        $password = $_POST['password'];


        // insert values
        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query Failed'.mysqli_error($connection));
        }else{
            echo "record created";
        }
    }          
    
}



// Needs revisit
function validateData(){

    $username = "text";

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
}



?>

