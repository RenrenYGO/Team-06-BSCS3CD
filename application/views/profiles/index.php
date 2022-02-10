
<!DOCTYPE html>
<html>
<head>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   	
   	<style> 
		<?php include 'application/views/posts/style.css';?>
	</style>

</head>

<body>

	<div class="container mt-5">
		<div class="p-5 "><h1 class="text-center mt-5"><?= $title; ?></h1></div>
		<div class=" pb-5 pe-5 ps-5 bg-none text-dark rounded jumbotron"> </div>
		<div class="row justify-content-evenly container ">

		<?php foreach($users as $user) : ?>
			<h4 class="me-5 rounded rounded-secondary mb-5 p-3 d-flex col-md-4">
				
				<?php if($user['profile_picture']!='noimage.jpg'):?>
					<img src="<?php echo base_url('images/profile_picture/' . $user['profile_picture']  ); ?>" width= "60" height="60" class="rounded rounded-circle">
				<?php else:?>
					<img src="<?php echo base_url('assets/avatar.jpg' ); ?>" width= "60" height="60" class="rounded rounded-circle" >
				<?php endif; ?>
				<a class=" ms-2 mt-2 text-decoration-none" id="title1" href="<?php echo site_url('/users/posts/'.$user['id']); ?>"><span class="tagname " ><?php echo $user['name']; ?></span></a>
			
			</h4>
				
		<?php endforeach; ?>
		</div>
		
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
</body>
</html>