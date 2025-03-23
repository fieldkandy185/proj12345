<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proj12345";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT * FROM data_table WHERE column1 LIKE '%your_search_term%'";
$result = $conn->query($sql);

// Data extraction (example)
$data = array();
while($row = $result->fetch_assoc()) {
  $data[] = $row;
}

$conn->close();

echo json_encode($data);
?>
