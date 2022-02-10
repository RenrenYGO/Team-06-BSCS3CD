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
<div class="container mt-5 pt-5">

    <?php echo form_open("changepass/edit_password");?>
    <input type="hidden" name="id" value="<?php echo $this->session->userdata('user')['id'];?>">

        <div class="box mt-5 col-6 mx-auto border border-2">
            <h2 class="text-center pt-4">Change Password</h2>

                <div class="form-group px-5 pt-3">
                    <input type="password" name="currpass" id="currpass" class="form-control" placeholder="Current Password"/>
                    <input type="password" name="password" id="password" class="form-control mt-3" placeholder="New Password"/>
                    <input type="password" name="confpass" id="confpass" class="form-control mt-3 mb-3" placeholder="Confirm Password"/>
                </div>

                <div class="d-flex mb-4 ms-5">
                    <button type="submit" id="btn_changepass" name="btn_changepass" class="btn btn-default mt-3">Submit</button>
                    <a type="button" class="btn btn-secondary mt-3 ms-2" href=<?php echo base_url('pages/profile');?>>Cancel</a>
                </div>
        </div>
    </form>    
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>
<?php
    include "duplicate_error.php";
    include "func.php";?>
            