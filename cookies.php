
<!-- Set cookies -->
<?php
	$name = "SomeName";
    // Content
	$value = 10;
    // Time in seconds - below is a week of expiration date
	$expiration = time() + (60*60*24*7);
	setcookie($name, $value, $expiration);
    
    echo "Cookies Set"; 
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<!-- Get cookies -->
<?php
If(isset($_COOKIE["SomeName"])){
	$someOne = $_COOKIE["SomeName"];

    echo "<br>"."Get Cookie = ".$someOne;
	
}else {
$someOne = "";
}
?>
