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
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='student'>";
    echo "<p>Name: " . $row["name"] . "</p>";
    echo "<p>Email: " . $row["email"] . "</p>";
    echo "</div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
