<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <style>
	<?php include 'style.css'; ?>
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
    <div class="container-fluid ">
        <button class="navbar-toggler mb-2" 
            type="button" 
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav me-auto ">  

                   <!-- for about page <a href="<?php echo base_url('registration/register'); ?>" class="nav-link nav-item "> About</a>
                        for support page <a href="<?php echo base_url('Login/index'); ?>" class="nav-link nav-item ">Support</a>-->
                    <a href="<?php echo base_url('posts'); ?>" id="brand" class="nav-link nav-item d-none d-lg-block"> Commhub</a>
                    <a href="<?php echo base_url('pages/about'); ?>" id="aboutnav" class="nav-link nav-item d-lg-block"> About</a>
                    <a href="<?php echo base_url('pages/temp'); ?>" id="whatsaucenav" class="nav-link nav-item ">WhatSauce</a>
                    <a href="<?php echo base_url('users/user'); ?>" class="nav-link nav-item ">Users(DEV ONLY)</a>
            </div>
        </div>
    </div> 
    <a href="<?php echo base_url('posts'); ?>" > <img src="<?php echo base_url("/assets/logo4.png");?>"  id="navbar-brand" width="100" height="100"></a>          

    <?php
        $user = $this->session->userdata('user');
        
        if(isset($user) && $user!=null):?>
           <img src="<?php echo base_url('assets/avatar.jpg');?>" alt="hindi gumana" class=" avatar dropdown  " width="50" height="50" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> 
           <span class="dropdown-menu dropdown-menu-end me-4" role = "menu" aria-labelledby="dropdownMenuLink">
           <a class="dropdown-item " href="<?php echo base_url('pages/profile'); ?>">Profile</a>
           <a class="dropdown-item " href="<?php echo base_url('pages/changepassword'); ?>">Account Settings</a>
            <a class="dropdown-item " href="<?php echo base_url('logout'); ?>">Logout</a>
            </span>

        <?php else:?>
      
            <a class="btn btn-light login mt-1" href="<?php echo base_url('login'); ?>">Login</a>
       
     
 
    <?php endif; ?>

</div>
</nav>
<!--Bootstrap script-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
