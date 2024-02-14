<?php

// database connection variables
$ServerName = "localhost";
$UserName = "root";
$Password = "";
$Database = "passports";

$conn = mysqli_connect($ServerName,$UserName,$Password,$Database);

// present date
$curernt_date = date("Y-m-d");

?>