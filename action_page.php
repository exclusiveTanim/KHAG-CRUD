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
$password = $_POST['pass'];


$duplicate=mysqli_query($conn,"select * from Student where email='$email' or mobile='$cell'");
if (mysqli_num_rows($duplicate)>0)
{
header("Location: index.php?message=This Number or Email id already exists.");
}else{
$sql = "INSERT INTO Student (firstname, lastname, email,mobile,pass)
VALUES ('$fname', '$lname', '$email','$cell','$password')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "<script>window.location='read.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>