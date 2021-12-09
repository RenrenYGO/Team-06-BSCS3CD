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


<div class="container p-3 pt-5 mt-5">
<h1 class="heading text-center mt-5"> Ready to learn and contribute to the community? </h1>
    <p class="subheading text-center pb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae unde recusandae quibusdam </p>
<form method="post" class="col-lg-6 mx-auto border border-dark" action="<?php echo base_url('registration/register'); ?>">
	
			
			<h3 class="p-3 text-center"><?= $title; ?></h3>
			<div class="px-5 pb-4">
			<div class="mb-3">
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="mb-3">
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="mb-3">
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<?php echo validation_errors(); ?>
			<div class="form-footer d-flex justify-content-between">
			<button type="submit" class="btn btn-custom">Register</button>
				<span class="signin pt-2 px-1 align-middle">
					Already a member? <a href="<?php echo base_url('Login/index'); ?>" class="link-custom text-decoration-none">Sign in</a>
				</span>
			</div>

		</div>
		
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>