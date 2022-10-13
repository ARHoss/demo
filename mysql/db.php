

<?php include "../consolePrint.php";


// Database area
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection){
        // Prints in to the console
        debug_to_console("Connected");
        echo "Connected";
    }


?>
