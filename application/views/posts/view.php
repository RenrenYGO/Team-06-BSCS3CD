<h2><?php echo $post['title']; ?></h2>

    <?php
        $id = $post['by'];
        $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
        $post['name'] = $query->row()->{'name'};
    ?><br>

    <small>Posted by: <?php echo $post['name']; ?></small><br>
    <small>Posted on: <?php echo $post['date']; ?></small><br>
    <?php echo $post['content']; ?>
    
    <?php
     if($this->session->userdata('user')['id'] == $id):?>
        <a class="btn btn-default" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
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
        
        
