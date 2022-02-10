
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php include 'threads.css';?>
    </style>
</head>

<body>
<div class="container mt-5">
	<div class="p-5 text-center"><h1><?= $title; ?></h1></div>
	
	<ul class="list-group list-group  ps-1 tags">
		<?php foreach($threads as $thread) : ?>
			<li ><a class="button ms-5 position-relative" href="<?php echo site_url('/threads/posts/'.$thread['id']); ?>"><span class="tagname"><?php echo $thread['name']; ?></span><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge_bg">99+</span></a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

</body>
</html>