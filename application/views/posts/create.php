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
        <p> ********* </p>
<h2><?=$title; ?></h2>

<?php echo validation_errors();?>

<?php echo form_open("posts/create"); ?>
<input type="hidden" name="createdBy" value="<?php echo $user['id'];?>">   
<div class="box col-6 mx-auto border border-custom ">
    <div class="px-5 mx-3 py-4 my-3">
    <div class="form-group mb-2">
        <input type="text" class="form-control bg-light rounded-pill" name="title" placeholder= "Add Title">
</div>
<div class="form-group mb-2">
   
    <textarea class="form-control rounded-pill" name="content" placeholder="Add Content"
    ></textarea>
</div>
<div class="d-flex justify-content-end">
<button type="submit" class="btn btn-default ">Add post</button>
</div>
</div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>