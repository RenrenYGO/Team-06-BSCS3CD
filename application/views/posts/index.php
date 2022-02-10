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

<div class="container pt-5 mt-5 mb-5">
    <!-- POPULAR TAGS -->
  <a href="<?php echo base_url('threads'); ?>" id="poptags" data-bs-toggle="tooltip" data-bs-placement="right" title="Go to Tags"><h3 class="pt-5 mb-3">Popular Tags</h3></a>
  <ul class="list-group list-group-horizontal  ps-1 tags overflow-scroll">
    <?php $i = 0;
     foreach($threads as $thread) :?>
      <li>
        <a class="button ms-5 position-relative" id="tagstyle" href="<?php echo site_url('/threads/posts/'.$thread['id']); ?>"><span class="tagname"><?php echo $thread['name']; ?></span></a>
      </li>
      <?php if  (++$i == 5) : break  ?>
      <?php endif; ?>
      <?php endforeach; ?>
      <li>
        <a class="button ms-5 position-relative bg-secondary opacity-75" id="tagstyle" href="<?php echo site_url('threads'); ?>"><span class="tagname">See More</span></a>
      </li>
  </ul>
    <!-- CREATE POST BUTTON -->
  
    <!-- LATEST POSTS AND SEARCH BAR -->
    <div class="d-flex flex-row ">
      <div class="btn-group pt-5 ">
        <h3> 
          <?= $title ?>
        </h3>
          <div class="dropdown ms-1">
               <a type="button" class="dropbtn dropdown-toggle dropdown-toggle-split" id="title1"  data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden ">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-content px-4 py-2">
                  <h5><a href="<?php echo site_url('posts'); ?>" id="title1" class="text-decoration-none">Latest</a></h5>
                  <h5><a href="<?php echo site_url('/popularity/posts'); ?>" id="title1" class="text-decoration-none">Top</a></h5>
                </ul>
          </div>
      </div>
        <!--<a class="pt-5  " href="<?php echo site_url('/popularity/posts'); ?>"><span>Top Posts</span></a>
        </div>-->
          <div class="pt-5 ms-auto">
            <form action = "<?php echo site_url('posts/skeyword/');?>" method="post">
              <div class="input-group">
                <input type="text" name="title" placeholder="Search..." class=" bg-light border border-secondary form-control">  
                <button class="btn bg-light border-start-0 border border-secondary" type="submit"> <img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/search.svg'); ?>" id="search"></button>
              </div>
            </form>
          </div>
  <h3 class="pt-5 text-center text-decoration-none ms-2">
    <a href="<?php echo base_url('posts/create'); ?>" class="btn btn-custom mb-2" type="button" id="create" title="Ask something">Create a Post</a> 
  </h3>
</div>

<?php $user_count = count($users);?>
  <?php
    foreach($posts as $post) : ?>
 
    <div class="container pt-3 border bg-white border-none mt-5">
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
        <div class="p-2"></div>
        <!--  -->
        </div>
      </div>
      <?php endforeach ; ?>
      <?php echo "TOTAL POSTS: ".$post_count=count($posts);?>
      <?php if($post_count==0) : ?>
        <h4>No posts to display</h4>
      <?php endif; ?>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

