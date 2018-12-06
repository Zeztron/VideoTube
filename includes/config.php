<?php
ob_start(); // Turns on output buffering
date_default_timezone_set("America/Detroit"); // Set the timezone

// Connect to the database
try {
    $con = new PDO("mysql:dbname=VideoTube;host=127.0.0.1", "root", ""); 
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Set error attribute
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>