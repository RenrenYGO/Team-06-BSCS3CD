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
        <a href="<?php echo site_url('/posts/'. $post['id']); ?>" class="text-decoration-none fs-5" id="back" ><img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-left.svg'); ?>" alt="edit"/> Go back to previous page </a>
    
        <div class="box mt-5 col-6 mx-auto border border-2">

            <div class="px-5 mx-3 pt-4 mt-3">

                <div class="d-flex">

                    <h2 class="pt-4"><?=$title; ?></h2>
                    
                    <div class="ms-auto">
                        <?php echo '<a class="btn btn-danger mt-3 ms-2 px-3" title="Delete post" data-target="#endModal'.$post['id'].'" data-toggle="modal">Delete</a>'?>
                        <?php include "end_modal.php";?>
                    </div>

                </div>

                <?php echo validation_errors();?>

                <?php echo form_open_multipart("posts/update");?>
                    <input type="hidden" name="id" value="<?php echo $post['id'];?>">   
                    <input type="hidden" name="createdBy" value="<?php echo $user['id'];?>">
                
                    <div class="form-group mb-2">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder= "Add Title" value="<?php echo $post['title'];?>">
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" id="editor1" name="content" placeholder="Add Content"><?php echo $post['content'];?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Thread</label>
                        <select name="thread_id" class="form-control">
                            <?php foreach($threads as $thread):?>
                                <?php if($thread['name']!='WhatSauce'):?>
                                    <option value="<?php echo $thread['id']; ?>"><?php echo $thread['name']; ?></option>
                                <?php endif;?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="d-flex form-group mt-4 mb-3">
                        <label class="label" title="Add Media">
                            <span><img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/image.svg'); ?>"/></span>
                            <input type="file" name="post_image" size="100">
                            <input type="hidden" name="post_image" value="<?php echo $post['post_image'];?>">
                        </label>
                    
                        <div class="ms-auto mb-2 mt-2">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <?php echo '<a type="button"  class="btn btn-secondary ms-2"  data-target="#cancelModal'.$post['id'].'" data-toggle="modal">Cancel</a>' ?>     
                            <?php include 'cancel_modal.php' ?>
                        </div>
                    </div>
                </form>
             
            </div> 
                
        </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>