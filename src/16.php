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

// SQL query to get a random number between 0 and 99
$sql = "SELECT randomNumber FROM random_numbers ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["randomNumber"]."<br>";
  }
} else {
  echo "0 rows found.";
}

$conn->close();
?>
