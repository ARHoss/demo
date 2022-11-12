<?php 

echo __FILE__. "<br>";
echo __LINE__. "<br>";
echo __DIR__. "<br>";

if(file_exists(__DIR__)){

    echo "Yes <br>";

}


if(is_file(__FILE__)){

    echo "Yes <br>";

}else{
    echo "No <br>";
}


if(is_dir(__DIR__)){

    echo "Yes <br>";

}else{
    echo "No <br>";
}

// Ternary operator
echo file_exists(__LINE__)? "Yes <br>": "No <br>";


?>
