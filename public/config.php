<?php
$servername = "mysql-utkarsh09221.alwaysdata.net"; // AlwaysData MySQL hostname
$username = "420678";                               // Your AlwaysData MySQL user
$password = "Sudha2908@";                           // Your MySQL password
$dbname = "utkarsh09221_studybee";                  // Your DB name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
