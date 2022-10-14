<?php include "mysql/db.php";?>
<?php include "mysql/functions.php";?>
<?php include "mysql/includes/header.php";?>

<?php 

echo $_POST['search'];


?>


<form action="the_post.php" method="post">
  <div class="mb-3">

    <?php 
    $id = 10;
    $button = "Search";
    ?>
    
    <input type="text" name="search" class="form-control" id="search" aria-describedby="searchHelp">
  </div>
  <button type="submit" class="btn btn-primary"><?php echo $button;  ?></button>
</form>


    

<?php include "mysql/includes/footer.php";?>