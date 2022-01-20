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

  <h2>Search in Commhub</h2>
  <form action = "<?php echo site_url('posts/skeyword/');?>" method="post">
    <input type="text" name="title">
    <button type="submit" name="submit" value="Search">Search</button>
  </form>


  <h3 class="pt-5 mb-3">Popular Tags</h3>
<div class="tags d-flex border border-2 p-3">
<a class="ms-2 rounded rounded-3 px-2 text-decoration-none link-dark" id="tags" href="threads">Tup Stuff</a>
<a class="ms-2 rounded rounded-3 px-2 text-decoration-none link-dark" id="tags" href="threads">Random Stuff</a>
<a class="ms-2 rounded rounded-3 px-2 text-decoration-none link-dark" id="tags" href="threads">Game Stuff</a>
</div>

    <!-- User id to name -->
    <div class="d-flex flex-row ">
    <h3 class="pt-5  "><?= $title ?></h3>
    <h3 class="pt-5 ms-auto text-decoration-none ">
      <a href="<?php echo base_url('posts/create'); ?>" class="btn btn-custom" type="button" id="create"> Add Post</a> 
    </h3>
    </div>
<?php foreach($posts as $post) : ?>

        <!-- End -->
  <div class="container pt-3 border bg-white border-none mt-3">
  <dl class="row ps-3">

    <!-- href to profile -->
    <div class="d-flex flex-wrap ">
      <img src="<?php echo base_url('assets/avatar.jpg' ); ?>" width= "60" >
      <div class=" ps-2 row">
        <dt id="username"> <?php echo $post['name']; ?></dt> 
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
        <img class="display py-2 ms-2 me-1" src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/hand-thumbs-up.svg'); ?>"><?php echo $post['upvote']; ?>
      </div>

      <div class="p-2">
        <img class="display py-2 me-1"  src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/hand-thumbs-down.svg');?>"><?php echo $post['downvote']; ?>
      </div>

      <?php echo "Reply Count: "; ?>
      <?php echo $post['reply_count']; ?>
      
      <!--  -->
      <div class="p-2">
      </div>
      <!--  -->


    </div>
  </div>
   
    <?php endforeach ; ?>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

