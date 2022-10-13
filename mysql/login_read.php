
<!-- the functions that bing files from db.php -->
<?php include "db.php";

// read values from database

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);


// error message if query fails
if(!$result){
    die('Query Failed'.mysqli_error($connection));
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For Bootstrap starts-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Stylesheets for Bootstrap ends-->
    <link rel="stylesheet" href="../css/index.css" />
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <section>
            <article>
                

                <!-- table too print values extracted from database using bootstrap -->
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php

                    $num = 0;
                    while($row = mysqli_fetch_assoc($result)){

                ?>



                    <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    </tr>

                <?php
                        // print_r($row);
                        

                    }

                ?>
                    </tbody>
                </table>
                
                <<!-- table too print values extracted from database using bootstrap ends-->

            </article>
        </section>





    </main>
    <footer></footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>