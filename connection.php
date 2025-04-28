<?php
$host = "127.0.0.1:3308"; // Use the correct port
$user = "root";
$password = "";
$db = "ekeble";

$database = new mysqli($host, $user, $password, $db);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
} 
?>
