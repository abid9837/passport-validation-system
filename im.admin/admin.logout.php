<?php
session_start();

// // remove all session variables
// session_unset();
// // destroy the session
// session_destroy(); 

unset($_SESSION['admin_access']);
unset($_SESSION['admin_id']);

header('Location: ./login');

?>