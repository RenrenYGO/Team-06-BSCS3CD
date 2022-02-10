<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
	<?php include 'application/views/posts/style.css'; ?>
</style>
</head>
<body>
<div class="container mt-5 pt-5">
    <div class="mb-4">
            <!-- back button -->
        <a href="<?php echo base_url('pages/profile'); ?>" class="text-decoration-none fs-5" id="back" ><img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-left.svg'); ?>" alt="edit"/> Go back to Profile </a>
            <!-- back button -->
    </div>
        <?php echo validation_errors();?>
        <?php echo form_open_multipart("users/edit_profile"); ?>
        <input type="hidden" name="id" value="<?php echo $this->session->userdata('user')['id'];?>">
        <div class="box mt-5 col-6 mx-auto border border-2 ">
            <h2 class="text-center mt-2 pt-3">Edit Profile</h2>
                <div class="px-5 mx-3 pt-4 mt-3">
                    <div class="form-group mb-2">
                        <input type="text" class="form-control" name="name" placeholder= "Edit Username" value="<?php echo $this->session->userdata('user')['name'];?>">
                        <!-- <textarea class="form-control" name="name" placeholder="Edit Username" value="<?php //echo $this->session->userdata('user')['name']?>" required></textarea> -->
                    </div>
                    <div class="form-group mb-2">
                        <textarea class="form-control" id="editor1" name="bio" placeholder="Edit Bio"
                        ><?php echo $this->session->userdata('user')['bio'];?></textarea>
                        <!-- <textarea class="form-control" id="editor1" name="bio" placeholder="Edit Bio" value="<?php //echo $this->session->userdata('user')['bio'];?>"></textarea> -->
                    </div>   
                    <div class="form-group d-flex mt-4 mb-4">
                        <label class="label" title="Add Media">
                            <span><img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/image.svg'); ?>"/></span>
                            <input type="file" name="profile_picture" size="200">
                        </label>
                        <div class="ms-auto"> <!-- row align -->
                             <button type="submit" class="btn btn-default mt-2">Submit</button>
                        </div>
                    </div>
                </form>
                </div> <!-- row align --> 
        </div>
</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>