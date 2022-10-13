
<!-- Login -->
<!-- the functions that bing files from db.php -->
<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php";?>

<?php insertData();?>


 






    <!-- <Header></Header> -->
    <Main>

        <Section>
            <article>
                <!-- login POST form using bootstrap-->
                <h1 class="text-center">Insert</h1>
                <form action="login_insert.php" method="post">
                    <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="submit" value="insert" class="btn btn-primary">Insert</button>
                </form>
                <!-- login POST form using bootstrap ends-->
            </article>
        </Section>


    </Main>

    <?php include "includes/footer.php";?>