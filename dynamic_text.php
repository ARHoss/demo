<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
<!--  Dynamic Data-->
   
   <?php  
    
    $title = "Dynamic data";
    $number = 100;
    $html_tag = "<h1>Test</h1>";

    // Associative arrays
    $names = ["first_name" => "Abdur", "last_name" => "Hossain"];

    print_r($names);
    echo "<br>";
    echo $names["first_name"];

    echo "<br>";

    // switch
    switch($number){
        case 34:
            echo "is it 34";
            break;
        case 100:
            echo "it is 100";
            break;
        case 39:
            echo "it is 39";
            break;
        default:
        echo "Value not found";
    };

    ?>
    
    <!-- concatenation -->
   <h1><?php echo $title." ".$number ?></h1>
   <h2><?php echo $number; ?></h2>

   <!-- insert HTML tag in php variable -->
   <?php echo $html_tag; ?>

   

<!--  Dynamic Data ends-->
    
</body>
</html>