<h2><?=$title; ?></h2>

<?php echo validation_errors();?>

<?php echo form_open("posts/create"); ?>
<input type="hidden" name="createdBy" value="<?php echo $user['id'];?>">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder= "Add Title">
</div>
<div class="form-group">
    <label>Content</label>
    <textarea class="form-control" name="content" placeholder="Add Content"
    ></textarea>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>

