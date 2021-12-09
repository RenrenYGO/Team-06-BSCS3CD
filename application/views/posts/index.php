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
<h2 class="pt-5 "><?= $title ?></h2>
<p> ********* </p>
    <!-- User id to name -->
<?php foreach($posts as $post) : ?>
  <?php
        $id = $post['by'];
        $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
        $post['name'] = $query->row()->{'name'};
    ?>
        <!-- End -->
  <div class="container pt-3 border bg-white border-none mt-3">
  <dl class="row ps-3">
    <!-- href to profile -->
  <dt class="col-sm-1 h3 my-auto"><a href="#" class="link-dark text-decoration-none"> <?php echo $post['name']; ?> </a></dt> 
    <!-- href to profile -->
  <dd class="col-sm-9 text-muted my-auto "><?php echo $post['date']; ?></dd>
  <a href="<?php echo site_url('/posts/'. $post['slug']); ?>" class="link-secondary">
    <h1 class="display ps-4 py-2"><?php echo $post['title']; ?></h1></a>
  
  
    <p class="lead d-inline-block text-truncate" style="max-width: 700px;"><?php echo $post['content']; ?></p>

    </div>
   
    <?php endforeach ; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>