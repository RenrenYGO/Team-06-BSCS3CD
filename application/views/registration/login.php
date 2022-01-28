<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
	<?php include 'style.css'; ?>
</style>

</head>
<body>

 
<div class="container pt-5 mt-5">
	<div class="d-flex flex-column mt-5 flex-lg-row ">
  <form method="post" action="<?php echo base_url('login'); ?>" class="col-lg-5 py-5 px-3 ms-4 mt-5 border border-dark align-items-center">
  
	  <div class="py-4 px-2">
	  <h3 class="text-start px-2 mb-4 text-dark">Log In</h3>
  	<div class="mb-3">
 
  		<input type="text" class="form-control" placeholder="Username" name="name" >
  	</div>
  	<div class="mb-3">
  	
  		<input type="password" class="form-control" placeholder="Password" name="password">
  	</div>
	  <?php echo validation_errors(); ?>
	  <div class="form-footer d-flex justify-content-between pt-2">
  	  <button type="submit" class="btn btn-custom" name="reg_user">Log in</button>

		<a class="btn btn-custom" id="forgot" href="<?php echo base_url('forgot/index'); ?>">Forgot Password</a>
		
		<span class="signup  ms-3 align-middle lead">
		Not yet a member? <a href="<?php echo base_url('registration/register'); ?>" class="link-custom text-decoration-none">Sign up</a>
</span>
	</div>
  </form>
  </div>
  <div class="textme p-4 ">
  <h1 class="mt-5 mb-5">Log in to Start Collaborating With Peers</h1>
  <p class="lead">Share, Discuss, and Collaborate with your friends and peers with our Website!</p>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
  		
  