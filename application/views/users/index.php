<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
	<?php include 'style.css'; ?>
</style>
</head>
<body><br><br><br>
<div class="container mt-5">

<?php echo form_open("users/edit_profile"); ?>
<input type="hidden" name="id" value="<?php echo $this->session->userdata('user')['id'];?>">
   
    <div class="form-group">

        <label>Edit Username</label>
        <input type="text" class="form-control" name="name" placeholder= "Edit Username" value="<?php echo $this->session->userdata('user')['name'];?>">
        <!-- <textarea class="form-control" name="name" placeholder="Edit Username" value="<?php //echo $this->session->userdata('user')['name']?>" required></textarea> -->

        <label>Edit Bio</label>
        <textarea class="form-control" id="editor1" name="bio" placeholder="Edit Bio"
        ><?php echo $this->session->userdata('user')['bio'];?></textarea>
        <!-- <textarea class="form-control" id="editor1" name="bio" placeholder="Edit Bio" value="<?php //echo $this->session->userdata('user')['bio'];?>"></textarea> -->
        
        <label>Current Password</label>
        <input type="password" name="currpass" id="currpass" class="form-control" placeholder="Old Password">
                
        <label>New Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="New Password">
        
        <label>Confirm Password</label>
        <input type="password" name="confpass" id="confpass" class="form-control" placeholder="Confirm Password">
    </div>

    <div class="d-flex mb-4"> <!-- row align -->
        <button type="submit" class="btn btn-default mt-3">Submit</button>
    </div>
        
</form>

</div>
    </div> <!-- row align --> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>  
</body>
</html>