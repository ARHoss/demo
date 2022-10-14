
<!-- the functions that bing files from db.php -->
<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php";?>



    <header></header>
    <main>
        
            
                <h1 class="text-center">READ</h1>
                


                <pre>
                    <?php $result = readData();?>
                </pre>

            
        





    </main>

    <?php include "includes/footer.php";?>