<!-- fetch data for edit  -->
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
	$id = $_GET['id'];
	$sql = "SELECT * FROM `Student` WHERE id='$id' ";
	$q = $conn->query($sql);
	$rslt = mysqli_fetch_assoc($q);
 ?>

  <!-- update data-->
<?php
	if(isset($_POST['update'])){
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email = trim($_POST['email']);
		$mobile= trim($_POST['mobile']);
	
	$sql = "UPDATE `Student` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`mobile`='$mobile' WHERE `id`='$id' ";
	$qry = $conn->query($sql);
	if ($qry) {
		  echo "<script>window.location='read.php'</script>";

		
	}else{
		echo "<div class='alert alert-danger'><strong>Sorry!</strong> there is a problem.  </div>";
		
	}
	}
?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Update Forms</h2>

<form action=" " method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="<?= $rslt['firstname'] ?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="<?= $rslt['lastname'] ?>" ><br>
  <label for="fname">Email:</label><br>
  <input type="text" id="email" name="email" value="<?= $rslt['email'] ?>"><br>
  <label for="lname">Mobile:</label><br>
  <input type="text" id="mobile" name="mobile" value="<?= $rslt['mobile'] ?>" ><br><br>
  <input type="submit" name="update" value="Update Data">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "action_page.php".</p>

</body>
</html>