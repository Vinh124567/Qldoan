<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "121"; 
$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?> 
