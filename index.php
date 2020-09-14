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
</head>
<body style="background-image:linear-gradient(to bottom, #9966ff 23%, #99ccff 100%)">

<h2 style="text-align: center;
    color: white;
    font-family: Impact, Charcoal, sans-serif;
    margin-top: 20px;">Login Forms</h2>
<div class="parent">
  <img src="prof.jpg" class="rounded-circle" alt="Cinque Terre">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</form>

</div>
</body>
</html>