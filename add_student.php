<?php include "includes/header.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="parent">
<h2>HTML Forms</h2>

<form action="action_page.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br>
  <label for="fname">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="lname">Mobile:</label><br>
  <input type="text" id="mobile" name="mobile" ><br><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="pass" name="pass" ><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "action_page.php".</p>
</div>
</body>
</html>
<?php include "includes/footer.php"; ?>