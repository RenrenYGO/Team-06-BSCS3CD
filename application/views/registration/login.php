<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="<?php echo base_url('login'); ?>">
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="name" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<input type="submit" class="btn" name="login_user" value="login">
  	</div>
  	<p>
  		Not yet a member? <a href="<?php echo base_url('registration/register'); ?>">Sign up</a>
  	</p>
  </form>
</body>
</html>