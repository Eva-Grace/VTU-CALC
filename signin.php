<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>VTU CALCULATOR</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Signin</h2>
  </div>
	 
  <form method="post" action="signin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
	  	<label>Email</label>
  	  	<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Your Email">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter Your Password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="signup.php">Sign up</a>
  	</p>
  </form>

</body>
</html>