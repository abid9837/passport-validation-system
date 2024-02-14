<?php
session_start();

if( isset($_GET['language']) && $_GET['language']=='spanish' ){
    $Language = $_POST['Language'];
    $_SESSION['selected_language'] = "spanish";
    header("Location: http://localhost/passport%20validation%20system/");
}
if( isset($_GET['language']) && $_GET['language']=='english' ){
    $Language = $_POST['Language'];
    $_SESSION['selected_language'] = "english";
    header("Location: http://localhost/passport%20validation%20system/");
}

?>