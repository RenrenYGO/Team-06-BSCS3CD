<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style>
	<?php include 'style.css'; ?>
	</style>
</head>
  <body>
    <div class="jumbotron shadow-sm rounded" style="padding: 100px; margin-top:60px; background-color: #ebe3e3a9; "> 
      <div class="col-md-6 px-0 ">
        <h1 class="display-4 font-italic"><?= $title; ?></h1>
        <?php
          $whatsauce_name=$title;
        ?>
        <p class="lead my-3">WhatSauce&trade; got your back!</p>
      </div>
    </div>
    <div class="container">
      <div class="row mb-2">
        <h1 class="p-2 mt-3">Recent Additions</h1>
    	<div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">title of the topic</h3>
              <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus repellat ut, provident aperiam dolore numquam!</p>
              <a href="#">Continue reading...</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">Title of the topic</h3>
              <p class="card-text mb-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, blanditiis?</p>
              <a href="#">Continue reading...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
	  	<div class="fst-italic text-xs mb-1">Category</div>
		<div class="dropdown" style="margin-left:30px;">
			<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #e27114;" >All</a>
			
      <!--  -->
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <?php foreach($whatsauce as $whatsauce) : ?>
        <li ><a class="dropdown-item" href="<?php echo site_url('/whatsauce/posts/'.$whatsauce['id']); ?>"><span class="tagname"><?php echo $whatsauce['name']; ?></span></a>
        </li>
      <?php endforeach; ?>
				
      <!--  -->

      <!-- <li><a class="dropdown-item" href="#">All</a></li>
    			<li><a class="dropdown-item" href="#">Science</a></li>
    			<li><a class="dropdown-item" href="#">Math</a></li>
    			<li><a class="dropdown-item" href="#">Programming</a></li>
          <li><a class="dropdown-item" href="#">English</a></li>
          <li><a class="dropdown-item" href="#">Filipino</a></li> -->
  			</ul>
		</div>
    <?php $user_count = count($users);?>
  <?php
    foreach($posts as $post) : ?>
 
    <div class="container pt-3 border bg-white border-none mt-3">
        <dl class="row ps-3">
    <!-- href to profile -->
            <div class="d-flex flex-wrap ">
              
            <?php for($i=0; $i<$user_count; $i++): ?>

              <?php if($post['by']==$users[$i]['id']):?>

                <?php if($users[$i]['profile_picture']!='noimage.jpg'):?>
                  <img src="<?php echo base_url('images/profile_picture/' . $users[$i]['profile_picture']  ); ?>" width= "60" height="60" id="profile-picture">
                <?php else:?>
                  <img src="<?php echo base_url('assets/avatar.jpg' ); ?>" width= "60" height="60" id="profile-picture">
                <?php endif; ?>

              <?php endif; ?>

            <?php endfor ; ?>

                <div class=" ps-2 row">
                    <a class="display pt-2" id="username" href="<?php echo site_url('/users/posts/'.$post['by']); ?>"><span class="tagname"><?php echo $post['name']; ?></span></a> 
                  <dd class=" text-muted " id="date"><small> <?php echo $post['date']; ?></small></dd>
                </div>
            </div>
      <div class="d-flex ">
        <div class=" row">
          <a id="title" href="<?php echo site_url('/posts/'. $post['id']); ?>" class="link-secondary">
          <h3 class="display pt-2" ><?php echo $post['title']; ?></h3></a>
            <div class="d-inline-flex">
              <dd class="ms-2 rounded rounded-3 px-2" id="tags"><?php echo $post['at']; ?></dd>
              <dd class="ms-2 rounded rounded-3 px-2" id="tags"><?php echo $whatsauce_name; ?></dd>
            </div>
        </div>
        
      </div>
          <p class="lead d-inline-block text-truncate" id="description" style="max-width: 700px;"><?php echo $post['content']; ?></p>
    <div class="d-flex ">
        <div class="p-2">
          <span class= "px-2 py-1 rounded border border-2"> <?php echo $post['reply_count']; ?></span> Replies
        </div>
        <div class="p-2">
          <img class="display py-2 ms-2 me-1" src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-up-circle.svg'); ?>" id="arrowup"><?php echo $post['upvote']; ?>
        </div>
        <div class="p-2">
          <img class="display py-2 me-1"  src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-down-circle.svg'); ?>" id="arrowdown"><?php echo $post['downvote']; ?>
        </div>
      <!--  -->
      <div class="p-2">
      </div>
      <!--  -->
    </div>
  </div>
<?php endforeach ; ?>
<?php echo "TOTAL POSTS: ".$post_count=count($posts);?>
            <?php if($post_count==0) : ?>
              <h4>No posts to display</h4>
            <?php endif; ?>
	  </div>
	</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>