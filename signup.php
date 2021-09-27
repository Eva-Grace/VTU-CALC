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
	<div class = "dropdown">
		<table class="input">
			<tr>
				<td>
					Username :
				</td>
				<td>
					<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter Your Name" required>
				</td>	
			</tr>

			<tr>	
				<td>
					<label>Email</label>
				</td>
				<td>
					<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Your Email" required>
				</td>
			</tr>

			<tr>
				<td>
					<label>Password</label>
				</td>	
				<td>
					<input type="password" name="password_1" placeholder="Enter Your Password" required>				
				</td>
			</tr>
			<tr>
				<td>
					<label>Confirm password</label>
				</td>
				<td>
					<input type="password" name="password_2" placeholder="Enter Your Password" required>
				</td>
			</tr>
			<tr>
				<td>				
					<label>Phone</label>
				</td>
				<td>
					<input type="tel" name="phone" placeholder="1234567890" pattern="[0-9]{10}" required>				
				</td>
			</tr>
		</table>
		</div>
		
			
			<div class="container">
				<button type="submit" class="btn" name="reg_user">Register</button>
			</div>
			<div class="container">
				<p>
					Already a member? <a href="signin.php">Sign in</a>
				</p>
			</div>		
	
				
  </form>
</body>
</html>