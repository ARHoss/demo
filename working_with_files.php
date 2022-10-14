<?php 

// Creating file name
$file = "example.txt";
$file2 = "example2.txt";


// Opening/Creating file
$handle = fopen($file, 'w');

// Closing file
fclose($handle);


// Writing to file
if($handle2 = fopen($file2, 'w')){


    // Writing to file
    fwrite($handle2, "I am writingadadasdasfacadzczdfadasdd");



    fclose($handle2);


}else{
    echo "Application was not able to write on the file";
}


    // Reading to file
if($handle3 = fopen($file2, 'r')){


    // function to find file size


    // Reading file
    // filesize is afunction to read the full size fo the file
    echo $content = fread($handle3, filesize($file2)); // Each byte equals a character 



    fclose($handle3);


}else{
    echo "Application was not able to write on the file";
}
   

// Deleting file
unlink("delete.txt");





?>
