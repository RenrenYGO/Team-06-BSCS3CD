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
    <div class="container pt-5 mt-5">
    <div class="mb-4">
        <!-- back button -->
      <a href="<?php echo base_url('posts'); ?>" class="text-decoration-none fs-5" id="back" ><img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-left.svg'); ?>" alt="edit"/> Go back to Latest Posts </a>
        <!-- back button -->
</div>

<?php echo validation_errors();?>

<?php echo form_open_multipart("posts/create"); ?>
<input type="hidden" name="createdBy" value="<?php echo $user['id'];?>">  
<div class="box mt-5 col-6 mx-auto border border-2 ">
<h2 class="text-center pt-3">Create post</h2>
    <div class="px-5 mx-3 pt-4 mt-3">
    <div class="form-group mb-2">
        <input type="text" class="form-control bg-light rounded-pill" name="title" placeholder= "Add Title">
</div>
<div class="form-group mb-2">
   
    <textarea id="editor1" class="form-control rounded-pill" name="content" placeholder="Add Content"
    ></textarea>
</div>

    <div class="form-group">
	  <label>Thread</label>
	  <select name="thread_id" class="form-control">
		  <?php foreach($threads as $thread): ?>
		  	<option value="<?php echo $thread['id']; ?>"><?php echo $thread['name']; ?></option>
		  <?php endforeach; ?>
	  </select>
    </div>

<div class="d-flex mt-3 justify-content-end">
<button type="submit" class="btn btn-default ">Add post</button>
</div>
</div>
<div class="form-group p-3 pb-4">
<label>Upload Image:</label>
<input type="file" name="post_image" size="200">
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>