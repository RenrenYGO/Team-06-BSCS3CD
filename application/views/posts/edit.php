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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>