<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- For Bootstrap starts-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Stylesheets for Bootstrap ends-->
    <link rel="stylesheet" href="css/index.css" />

</head>
<body>
    <!-- <Header></Header> -->
    <Main>

        <Section>
            <article>
                <!-- POST form using bootstrap-->
                <form action="mysql/login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </article>
        </Section>


    </Main>

    <footer>&copy; Copyright &nbsp; 2022</footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    






</body>
</html>