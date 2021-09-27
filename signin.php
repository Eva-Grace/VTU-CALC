<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>VTU CALCULATOR</title>
</head>
<link rel="stylesheet" type="text/css" href="externalStyle.css">
<body>
  	<h2>Signin</h2>
  <form method="post" action="signin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group1">
	  	<label>Email</label>
  	  	<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Your Email">
  	</div>
  	<div class="input-group1">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter Your Password">
  	</div>
  	<div class="input-group1">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="signup.php">Sign up</a>
  	</p>
  </form>

</body>
</html>