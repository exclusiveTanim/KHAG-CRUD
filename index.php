<!DOCTYPE html>
<html>
<body>

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
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "action_page.php".</p>

</body>
</html>