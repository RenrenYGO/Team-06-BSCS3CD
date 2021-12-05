<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
<div class="container p-3 pt-5">
    <h1 class="heading text-center"> Ready to learn and contribute to the community? </h1>
    <p class="subheading text-center pb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae unde recusandae quibusdam </p>

	
  <form method="post" action="register" class="col-lg-6 mx-auto border border-dark">
  	
	  <h3 class="p-3 text-center">Sign up for a free account</h3>
	  <div class="px-5 pb-4">
  	<div class="mb-3">
  	  <input type="text" class="form-control"  name="name" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
	  
  	<div class="mb-3">
  	  
  	  <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
  	</div>
  	<div class="mb-3">
  
  	  <input type="password" class="form-control"  placeholder="Create password" name="password_1">
  	</div>
  	<div class="mb-3">
  	  
  	  <input type="password" class="form-control" placeholder="Confirm password" name="password_2">
		
	</div>
	<?php include('errors.php'); ?>
  	<div class="form-footer d-flex justify-content-between">
  	  <button type="submit" class="btn btn-warning" name="reg_user">Register</button>
		<span class="signin pt-2 px-1 align-middle">
  		Already a member? <a href="login" class="link text-warning">Sign in</a>
</span>
	</div>
  
</div>
  </form>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>