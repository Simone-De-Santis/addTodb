 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pollo";
$ob = $_POST["ob"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// insert to tb table
$sql = "INSERT INTO myguests (firstname, lastname, via, telefono)
VALUES ('$ob[nome]', '$ob[cognome]', '$ob[via]', '$ob[telefono]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
