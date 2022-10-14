<?php include "db.php";


// Populating Select Menu
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

// Reading Data from database
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

    
                    while($row = mysqli_fetch_assoc($result)){

        
                        print_r($row);
                        

                    }

        
}

    // Updating values
function updateData(){

    if(isset($_POST['submit'])){

        // Allows global variables to be available inside fucntion
        global $connection;
    
        // Retreiving data from post
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        // Sanitize data
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        $id = mysqli_real_escape_string($connection, $id);

        

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

        // Retreiving data from post
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Sanitize data
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

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

// Create Data
function insertData(){


    // functions to insert data
    if(isset($_POST['submit'])){

        


        // Allows global variables to be available inside fucntion
        global $connection;
    
        // Retreiving data from post
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Sanitize data
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        // Encryption
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat.$salt;
        $password = crypt($password, $hashF_and_salt);



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

// Prints in Console Port
function console_print($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

?>



