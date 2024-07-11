<?php
$db_host = "127.0.0.1:3306";
$db_user = "myadmin";
$db_password = "Mysql2024";
$db_name = "lms_db";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
} 
// else {
//  echo"connected";
// }
?>