
<!-- the functions that bing files from db.php -->
<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php";?>






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
                <h1 class="text-center">READ</h1>
                


                <pre>
                    <?php readData();?>
                </pre>

            </article>
        </section>





    </main>

    <?php include "includes/footer.php";?>