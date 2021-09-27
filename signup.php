<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>VTU CALCULATOR</title>
  <link rel="stylesheet" type="text/css" href="externalStyle.css">
</head>
<body>
  <div class="header">
  	<h2>Signup</h2>
  </div>
	
  <form method="post" action="signup.php">
  <?php include('errors.php'); ?>
  	<div class="input-group1">
  	  	<label>Username</label>
  	  	<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter Your Name">
  	</div>
  	<div class="input-group1">
  	  	<label>Email</label>
  		<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Your Email">
  	</div>
  	<div class="input-group1">
  	  	<label>Password</label>
  	  	<input type="password" name="password_1" placeholder="Enter Your Password">
  	</div>
  	<div class="input-group1">
  	  	<label>Confirm password</label>
  	  	<input type="password" name="password_2" placeholder="Enter Your Password">
  	</div>
	<div class="input-group1">
  	  	<label>Phone</label>
  	  	<input type="tel" name="phone" placeholder="1234567890" pattern="[0-9]{10}">
  	</div>
	<div class="input-group1">
  	  	<label>Address</label>
  	  	<input type="text" name="address" value="<?php echo $address; ?>" placeholder="Enter Your Address">
  	</div>
  	<div class="input-group1">
  	  	<button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
				<p>
					Already a member? <a href="signin.php">Sign in</a>
				</p>
			</div>		
	
				
  </form>
</body>
</html>