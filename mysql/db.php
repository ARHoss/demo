

<?php


// Database area
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection){

        echo "Conneted";
    }else{
        echo "Die database connection failed";
    }


?>
