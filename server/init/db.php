<?php

$servername = "localhost";
$username = "auto_user";
$password = "123";
$dbname = "Auto";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 