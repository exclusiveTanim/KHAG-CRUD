<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "KHAG371";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$cell = $_POST['mobile'];

$sql = "INSERT INTO Student (firstname, lastname, email,mobile)
VALUES ('$fname', '$lname', '$email','$cell')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "<script>window.location='read.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>