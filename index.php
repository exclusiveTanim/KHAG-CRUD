<?php
include "database.php";
    session_start();
    if (isset($_SESSION['id'])){
        header('Location: home.php');
    }
//admin login
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($conn,$_POST['exampleInputEmail1']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['exampleInputPassword1']);
    
    $sql = "SELECT * FROM Student WHERE email = '$myusername' and pass = '$mypassword'";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if($count == 1) {
    $_SESSION["login_user"] = $myusername;
    header("location: home.php");
    }else {
    echo "Your Login Name or Password is invalid";
    $error = "Your Login Name or Password is invalid";
    }
       
   }

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style>
		.parent{
			height: 500px;
	        width: 400px;
	        margin: 0 auto;
	        padding: 20px;
	        border: 1px solid red;
	        }
	</style>
	<script>
		function validateUser() {
			var userName = document.getElementById('exampleInputEmail1').value;
			var pass = document.getElementById('exampleInputPassword1').value;
			if (userName == "a@gmail.com") {
               return true;
			}
			else{
			   return false;	
			}
			
		}
	</script>
</head>
<body style="background-image:linear-gradient(to bottom, #9966ff 23%, #99ccff 100%)">

<h2 style="text-align: center;
    color: white;
    font-family: Impact, Charcoal, sans-serif;
    margin-top: 20px;">Login Forms</h2>
<div class="parent">
  <img src="prof.jpg" class="rounded-circle" alt="Cinque Terre">
  <form role="form" method="post" action=" "> <!--onsubmit="return validateUser()"-->
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1">
  </div>
  <button type="submit" name="btn" class="btn btn-primary btn-lg btn-block">Login</button>
</form>
</div>
<div style="width: 400px; margin: 0 auto; padding: 10px;"><button type="button" name="registration" class="btn btn-primary btn-lg btn-block">Sign Up Now</button></div>
</body>
</html>