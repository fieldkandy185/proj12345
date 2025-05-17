<?php
// Include your database connection credentials here
$conn = mysqli_connect("localhost", "username", "password", "database_name");

if ($conn) {
    echo "Connection established successfully";
} else {
    echo "Error: Could not connect to the database.";
}
?>
