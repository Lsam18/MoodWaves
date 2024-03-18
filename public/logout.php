<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$database = "moodwavesdb"
;

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


if((isset($_SESSION['username']))){

    // Content of the page
    
    }else{
    
    echo "Please <a href='login.php?redirect=post.php'>Login</a> to post any topics";
    
    }