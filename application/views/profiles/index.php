
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <style> -->
        <?php //include 'threads.css';?>
    <!-- </style> -->
</head>

<body>
<div class="container mt-5">
	<div class="p-5"><h1><?= $title; ?></h1></div>
	<div class=" pb-5 pe-5 ps-5 bg-none text-dark rounded jumbotron"> </div>
	
	<ul class="list-group list-group  ps-1 tags">
	<?php foreach($users as $user) : ?>
        <li ><a class="button ms-5 position-relative" href="<?php echo site_url('/users/posts/'.$user['id']); ?>"><span class="tagname"><?php echo $user['name']; ?></span></a>
	<?php endforeach; ?>
	</ul>
</div>

</body>
</html>