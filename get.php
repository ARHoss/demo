<?php include "mysql/db.php";?>
<?php include "mysql/functions.php";?>
<?php include "mysql/includes/header.php";?>

<?php 


print_r($_GET);

?>


<form>
  <div class="mb-3">

    <?php 
    $id = 10;
    $button = "Search";
    ?>

    <a href="get.php?id=<?php echo $id;?>">Click Here</a>
    <br>
    
    <input type="email" name="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary"><?php echo $button;  ?></button>
</form>


    

<?php include "mysql/includes/footer.php";?>