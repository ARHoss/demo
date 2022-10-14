<!-- the functions that bring files from db.php -->
<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php";?>
<?php updateData();?>



    <!-- <header></header> -->
    <main>
        <section>
            <article>
                <h1 class="text-center">Update</h1>
                

                <!-- form to update values using bootstrap-->
                <form action="login_update.php" method="post">
                    <div class="mb-3">
                        <label for="ID" class="form-label">ID</label>
                        <select name="id" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>

                                <!-- Loop to read values -->
                                <?php showAllData();?>
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
                    <button type="submit" name="submit" value="Update" class="btn btn-primary">Update</button>
                </form>
                <!-- form to update values using bootstrap-->

                
            </article>
        </section>





    </main>
    <?php include "includes/footer.php";?>