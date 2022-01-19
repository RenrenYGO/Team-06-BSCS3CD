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
    <div class="mb-4">
      <!-- back button -->
      <a href="<?php echo base_url('posts'); ?>" class="text-decoration-none fs-5" id="back" ><img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-left.svg'); ?>" alt="edit"/> Go back to Latest Posts </a>
         <!-- back button -->
</div>
    <div class="container pt-3 border bg-white border-none mt-3">
    <dl class="row pt-2 ps-3 pe-3">

    <?php
        $id = $post['by'];
        $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
        $post['name'] = $query->row()->{'name'};
    ?>
    <br>

    <div class="d-flex flex-wrap ">
    <img src="<?php echo base_url('assets/avatar.jpg' ); ?>" width= "60" >
    <div class=" ps-2 row">
    <dt id="username"> <?php echo $post['name']; ?></dt> 
    <dd class=" text-muted " id="date"><small> <?php echo $post['date']; ?></small></dd>
    </div>

    <?php
        $thread_id = $post['thread_id'];
        $query = $this->db->query("SELECT * FROM threads WHERE id = '$thread_id'");
        $post['at'] = $query->row()->{'name'};
    ?>

    <?php echo $post['at']; ?>

    <div class="ms-auto">
<!-- edit button-->  
<?php if(isset($_SESSION['user']) && $this->session->userdata('user')['id'] == $id):?>
    
    <a class="btn mb-3 px-2" id="edit" href="<?php echo base_url('posts/edit/'); ?><?php echo $post['id']; ?>"> <img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/pencil-square.svg'); ?>" alt="edit"></a>
<?php endif; ?>
<!-- edit button-->  

    </div>
</div>
    
    
    <h2 class="mt-3"><?php echo $post['title']; ?></h2>
 
    <p class="overflow-scroll" width="50" height="50"><?php echo $post['content']; ?>
    <br>
    
    <?php if($post['post_image']!='noimage.jpg'):?>
        <img src="<?php echo base_url('images/posts/' . $post['post_image']  ); ?>"  class="mt-3" height="300" width="300" ></p>
    <?php endif; ?>
<!-- upvote and downvote -->
    <?php if(isset($_SESSION['user'])):?>
       <div class="d-flex mb-3">
        <?php echo form_open('/posts/upvote/'.$post['id']); ?>
        <div class="btn btn-success ms-2 me-2 pe-2 ps-1">
        <input type="submit"  class="bg bg-success border border-success" value=" ">
        <input name="upvote" type="hidden" value="<?php echo $post['id']?>">
        <img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-up-circle.svg'); ?>" id="arrowup">
        <?php echo $post['upvote']; ?>
        </div>   
        </form>

        <?php echo form_open('/posts/downvote/'.$post['id']); ?>
        <div class="btn  btn-danger ms-1 me-3 pe-2 ps-1">
        <input type="submit"  class="bg bg-danger border border-danger" value=" ">
        <input name="downvote" type="hidden" value="<?php echo $post['id']?>">
        <img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-down-circle.svg'); ?>" id="arrowdown">
        <?php echo $post['downvote']; ?>
        </div>   
        </form>
    </div>
    <?php endif; ?>



    <hr>
    <h4>Replies</h4>
   
    <?php $count = 0; ?>
    <?php if(isset($replies)) : ?>
    <?php foreach($replies as $reply) : ?>
        <?php $count = $count+1; ?>
        
        <?php
            $id = $reply['by'];
            $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
            $reply['name'] = $query->row()->{'name'};
        ?>
       
       <div class="row ms-1 ps-2 container border bg-white border-none">
    <!-- href to profile -->
  
    <div class="d-flex flex-wrap mt-2">
    <img src="<?php echo base_url('assets/avatar.jpg' ); ?>" width= "60" >
    <div class=" ps-2 row">
    <dt id="username"> <?php echo $post['name']; ?></dt> 
    <dd class=" text-muted " id="date"><small> <?php echo $post['date']; ?></small></dd>
    </div>
    </div>
    <p class="mt-1 ps-3 d-inline-block text-truncate" id="description" style="max-width: 700px;"><?php echo $reply['content']; ?></p>

    </div>
        
    <?php endforeach; ?>
    <?php else : ?>
        
    <p>No Replies To Display</p>
    <?php endif; ?>
    
    
    <!--  -->
    <?php echo "Reply Count: "; ?>
    <?php echo $count; ?>
    <!--  -->


    <h5 class="mt-4">Add Reply</h5>
    <?php echo validation_errors(); ?>
    <?php if(isset($_SESSION['user'])):?>
        <?php echo form_open('replies/create/'.$post['id']); ?>
        
        <!-- <div class="form-group mb-3">
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div> -->
        <div class="form-group">
            <textarea name="content" class="form-control" placeholder="Content"></textarea>
        </div>
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
            <button class="btn btn-primary mt-4" type="submit">Submit</button>
        </form>
    </div>
    <?php endif; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>