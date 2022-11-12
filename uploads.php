<!--     
php.ini configurations

file_uploads            true,1, or On
post_max_size           8mb
upload_max_filesize     128mb
memory_limit            128m
max_input_time          -1 -nolimit
upload_tmp_dir          NULL
max_execution_time      30 seconds


how to get to the configuration? php info



Uploaded File Structure

Super Global -- $_FILES['example_file]

name -          file name
type -          jpg, png, gif, doc, txt
size -          in bytes
tmp_name -      temporary name
error -         the error code

Error list

    UPLOAD_ERR_OK           = 0     => 'There is no error, the file uploaded with success',
    UPLOAD_ERR_INI_SIZE     = 1     => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    UPLOAD_ERR_FORM_SIZE    = 2     => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    UPLOAD_ERR_PARTIAL      = 3     => 'The uploaded file was only partially uploaded',
    UPLOAD_ERR_NO_FILE      = 4     => 'No file was uploaded',
    UPLOAD_ERR_NO_TMP_DIR   = 6     => 'Missing a temporary folder',
    UPLOAD_ERR_CANT_WRITE   = 7     => 'Failed to write file to disk.',
    UPLOAD_ERR_EXTENSION    = 8     => 'A PHP extension stopped the file upload.',

-->

<?php 

    // Shows php information
    // phpinfo()


    // Printing associative array in a nice way
    if(isset($_POST['upload'])){

        
        print("<pre>".print_r($_FILES['file_upload'],true)."</pre>");

    

        $phpFileUploadErrors = array(
            UPLOAD_ERR_OK => 'There is no error, the file uploaded with success',
            UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
            UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded',
            UPLOAD_ERR_NO_FILE => 'No file was uploaded',
            UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder',
            UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
            UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.',
        );


       


        // Moving file to permanenet location
        $tmp_name = $_FILES['file_upload'] ['tmp_name'];
        $the_file = $_FILES['file_upload'] ['name'];
        $directory = "uploads";

        if(move_uploaded_file($tmp_name, $directory."/".$the_file)){
            
            $the_message = "Successfully Uploaded";

        }else{
            
            // Printing error codes
            $the_error = $_FILES['file_upload'] ['error'];

            $the_message = $phpFileUploadErrors[$the_error];
        }

        
    
    
    
    
    }




?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- Upload files form -->
    <form action="uploads.php" enctype="multipart/form-data" method="POST">
      
        <h2>
            <?php 
                if(!empty($phpFileUploadErrors)){

                    echo $the_message;
                }  
            ?>
        
        </h2>

        <br>
        <input type="file" name="file_upload">
        <br>
        <input type="submit" name="upload" value="Upload">
    
    </form>


</body>
</html>
