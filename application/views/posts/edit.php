<h2><?=$title; ?></h2>

<?php echo validation_errors();?>

<?php echo form_open("posts/update"); ?>
<input type="hidden" name="id" value="<?php echo $post['id'];?>">   
    <input type="hidden" name="createdBy" value="<?php echo $user['id'];?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder= "Add Title" value="<?php echo $post['title'];?>">
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" name="content" placeholder="Add Content"
        ><?php echo $post['content'];?></textarea>
    </div>
<button type="submit" class="btn btn-default">Submit</button>
</form>

