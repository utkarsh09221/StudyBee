<?php
$servername = "mysql-utkarsh09221.alwaysdata.net";
$username = "420678_";      // ✅ full username
$password = "Sudha2908@";          // ✅ your MySQL password
$dbname = "utkarsh09221_studybee"; // ✅ correct database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
