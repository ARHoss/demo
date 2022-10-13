<!-- the functions that bing files from db.php -->
<?php include "db.php";

// read values on database
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
                

                <!-- form to update values using bootstrap-->
                <form action="mysql/login_insert.php" method="post">
                    <div class="mb-3">
                        <label for="ID" class="form-label">ID</label>
                        <select name="id" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>


                                <!-- Loop to read values -->
                                <?php 
                                
                                while($row = mysqli_fetch_assoc($result)){
                                    $id = $row['id'];
                                    echo "<option value='$id'>$id</option>";
                                    
                                }
                                
                                
                                
                                ?>
                                <!-- Loop to read values ends-->
                                
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Username" class="form-label">Username</label>

                        <div class="input-group mb-3">
                            <input type="text" name = "username" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </form>
                <!-- form to update values using bootstrap-->

                
            </article>
        </section>





    </main>
    <footer></footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>