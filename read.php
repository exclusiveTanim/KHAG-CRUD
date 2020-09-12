<!DOCTYPE html>
<html>
<head>
	<title>Get Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

</body>
</html>
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

$sql = "SELECT * FROM `Student` ";
$qry =$conn->query($sql);
?>
<h1 style="text-align: center;">Student Information</h1>
<table class="table table-bordered table-striped text-center table-hovered">
    <tr class="text-center">
        <th>Sl.</th>
        <th>Student Name</th>
        <th>Email Address</th>
        <th>Contact</th>
        <th>Address</th>
        <!--th> Gender </th-->
        <th>Action</th>
    </tr>
    <?php $i=1; ?>
    <?php while ($result = mysqli_fetch_assoc($qry)) { ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $result['firstname']; ?></td>
        <td><?php echo $result['lastname']; ?></td>
        <td><?php echo $result['mobile']; ?></td>
        <td><?php echo $result['email']; ?></td>
        <!--td><?php echo $result['gender']; ?></td-->
        <td>
            <a href="edit-student.php?id=<?php echo $result['id'];?>"  class="btn btn-success btn-xs" title="Edit" >
                <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a href="?delete=true&id=<?php echo $result['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-xs" title="Delete">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>
<!--delete data-->
<?php 
    if (isset($_GET['delete'])) {
        $id = $_GET['id'];
        $sql ="DELETE FROM `Student` WHERE id='$id' ";
        $qr = $conn->query($sql);
        if ($qr) {
            echo "<div class='alert alert-danger'><strong>Your data has been deleted!!</strong></div>";
        }else{
            echo "<div class='alert alert-danger'><strong>Sorry!</strong> there is a problem.  </div>";
        }
    }
 ?>

<button type="button" class="btn btn-success"><a href="index.php">Add Student</a></button>