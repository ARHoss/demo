<?php 

// get the q parameter from URL
$q = $_REQUEST["q"];
$reply = '';

if($q === "Assalamu Alaikum"){
    $reply = "Walaikum Assalam";
}

if(isset($reply))echo $reply === "" ? "no suggestion" : $reply;


?>
