<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</head>
<body>

<?php echo validation_errors(); ?>
<form method="post" action="<?php echo base_url('registration/register'); ?>">
	<div class="container p-3 pt-5">
		
	<h1 class="heading text-center"> Ready to learn and contribute to the community? </h1>
    <p class="subheading text-center pb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae unde recusandae quibusdam </p>

		<div class="col-md-4 col-md-offset-4">
			
			<h1 class="p-3 text-center"><?= $title; ?></h1>
			<div class="mb-3">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="mb-3">
				<label>Email</label>
				<input type="text" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="mb-3">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="mb-3">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			
			<button type="submit" class="btn btn-primary btn-block">Register</button>
</form>

			<div class="form-footer d-flex justify-content-between">
				<span class="signin pt-2 px-1 align-middle">
					Already a member? <a href="<?php echo base_url('Login/index'); ?>" class="link text-warning">Sign in</a>
				</span>
			</div>

		</div>
	</div>


</body>
</html>