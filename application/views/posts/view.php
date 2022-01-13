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
    <div class="container pt-3 border bg-white border-none mt-3">
    <dl class="row pt-2 ps-3 pe-3">
    <?php
        $id = $post['by'];
        $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
        $post['name'] = $query->row()->{'name'};
    ?>
    <br>
    <div class="d-flex flex-wrap ">
    <img src="<?php echo base_url('assets/avatar.png' ); ?>" width= "60" >
    <div class=" ps-2 row">
    <dt id="username"> <?php echo $post['name']; ?></dt> 
    <dd class=" text-muted " id="date"><small> <?php echo $post['date']; ?></small></dd>
    </div>
    <div class="ms-auto">
    <?php if(isset($_SESSION['user'])):?>
       <div class="d-flex mb-3">
        <?php echo form_open('/posts/upvote/'.$post['id']); ?>
        <div class="btn btn-success ms-2 me-3 pe-3">
        <input type="submit"  class="bg bg-success border border-success" value=" ">
        <img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/hand-thumbs-up.svg'); ?>" alt="Thumbsup">
        <?php echo $post['upvote']; ?>
        </div>
           
        </form>

        <?php echo form_open('/posts/downvote/'.$post['id']); ?>
        <div class="btn  btn-danger ms-2 me-3 pe-3">
        <input type="submit"  class="bg bg-danger border border-danger" value=" ">
        <img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/hand-thumbs-down.svg'); ?>" alt="Thumbsdown">
        <?php echo $post['downvote']; ?>
           
        </form>
        </div>
    </div>
    <?php endif; ?>
    </div>
</div>
    
    
    <h2 class="mt-3"><?php echo $post['title']; ?></h2>
 
    <p class="mt-3 overflow-scroll" width="50" height="50"><?php echo $post['content']; ?>
    <br>
    <img src="<?php echo base_url('images/posts/' . $post['post_image']  ); ?>"  class="mt-3" height="300" width="300" ></p>
    


    
        
    <?php if(isset($_SESSION['user']) && $this->session->userdata('user')['id'] == $id):?>
        <div class="d-flex">
            <a class="btn btn-edit mb-3 mx-2 px-3" id="edit" href="<?php echo base_url('posts/edit/'); ?><?php echo $post['slug']; ?>">Edit</a>

            <?php echo form_open('/posts/delete/'.$post['id']); ?>
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    
    </div>
        
    <?php endif; ?>

    <hr>
    <h3>Replies</h3>
   
    
    <?php if(isset($replies)) : ?>
    <?php foreach($replies as $reply) : ?>
        
        
        <?php
            $id = $reply['by'];
            $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
            $reply['name'] = $query->row()->{'name'};
        ?>
       
       <div class="row ms-1 ps-2 container border bg-white border-none">
    <!-- href to profile -->
  <!--  
  <dt class="col-sm-1"><a href="#"  id="username"> <?php echo $reply['name']; ?> </a></dt> 

  <dd class="col-sm-6 text-muted my-auto " id="date"><?php echo $reply['date']; ?></dd> -->
  <div class="d-flex flex-wrap reply">
    <img src="<?php echo base_url('assets/avatar.png' );?>"  width= "40" height="40">
    <div class=" ps-2 row">
    <dt id="username"> <?php echo $post['name']; ?></dt> 
    <dd class=" text-muted " id="date"><small> <?php echo $post['date']; ?></small></dd>
    </div>
</div>
  
    <p class="lead d-inline-block text-truncate" id="description" style="max-width: 700px;"><?php echo $reply['content']; ?></p>

    </div>
        
    <?php endforeach; ?>
    <?php else : ?>
        
    <p>No Replies To Display</p>
    <?php endif; ?>
    
   
    <h3 class="mt-4">Add Reply</h3>
    <?php echo validation_errors(); ?>
    <?php echo form_open('replies/create/'.$post['id']); ?>
    
    <div class="form-group mb-3">
        <input type="text" name="title" class="form-control" placeholder="Title">
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" placeholder="Content"></textarea>
    </div>
    <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
    <button class="btn btn-primary mt-4" type="submit">Submit</button>
    </form>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>