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
    <div class="container pb-5 pt-5 mt-5">
    <p> ********* </p>
<h2><?php echo $post['title']; ?></h2>

    <?php
        $id = $post['by'];
        $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
        $post['name'] = $query->row()->{'name'};
    ?>
    <br>

    <small>Posted by: <?php echo $post['name']; ?></small><br>
    <small>Posted on: <?php echo $post['date']; ?></small><br>
    <p class="p-4 overflow-scroll" width="50" height="50"><?php echo $post['content']; ?>
    <br>
    <img src="<?php echo base_url('images/posts/' . $post['post_image']  ); ?>"></p>
    <?php
     if($this->session->userdata('user')['id'] == $id):?>
        <a class="btn btn-default" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
        <?php echo form_open('/posts/delete/'.$post['id']); ?>
            <input type="submit" value="Delete" class="btn btn-danger">
     </form>    
    <?php endif; ?>

    <hr>
    <h3>Replies</h3>
    
    <?php if(isset($replies)) : ?>
    <?php foreach($replies as $reply) : ?>
        <div class="well">
            <h5><?php echo $reply['content']; ?> [<strong><?php echo $reply['title']; ?></strong>]</h5>
        </div>
    <?php endforeach; ?>
    <?php else : ?>
        
    <p>No Replies To Display</p>
    <?php endif; ?>
    <hr>
    <h3>Add Reply</h3>
    <?php echo validation_errors(); ?>
    <?php echo form_open('replies/create/'.$post['id']); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    </div>
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>