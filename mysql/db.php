

<?php include "consolePrint.php";


// Database area
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection){
        // Prints in to the console
        // console_log("Connected");
        echo "Connected";
    }


?>
