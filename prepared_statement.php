<?php 
    //-----------------------Prepare Statements SELECT PHP-----------------------//
    // Sets up the connection and compares the token in the database
    if($stmt = mysqli_prepare($connection, "SELECT username, user_email, token FROM users WHERE token = ?")){
        // s stands for sting
        mysqli_stmt_bind_param($stmt, 's', $token);
        // Executes
        mysqli_stmt_execute($stmt);

        // bind the results
        mysqli_stmt_bind_result($stmt, $DBusername, $DBuser_email, $DBtoken);

        // fetch
        mysqli_stmt_fetch($stmt);

        // Close the connection
        mysqli_stmt_close($stmt);

    }


// Sets up the connection and updates value
if($stmt = mysqli_prepare($connection, "UPDATE users SET token='', user_password='{$hashed_password}' WHERE token = ?")){
    // s stands for sting
    mysqli_stmt_bind_param($stmt, 's', $token);
    // Executes
    mysqli_stmt_execute($stmt);

    // check result
    if(mysqli_stmt_affected_rows($stmt) >= 1){
        echo "Success";
    }

    // Close the connection
    mysqli_stmt_close($stmt);
}else {
    echo "Bad Query";
}






?>
