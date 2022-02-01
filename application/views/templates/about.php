<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/1ef6fa8ffb.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
	<?php include 'style.css'; ?>
	</style>
    <title>About</title>
</head>
<body>
<div class="container pt-5 mt-5">
                <div class="my-5 d-flex flex-xl-row flex-lg-row flex-md-column flex-column justify-content-center  align-items-center">
                <div class="imgyela">
                        <img src=<?php echo base_url('assets/laptop.png');?> class="p-2" alt="laptop" height="650">
                    </div>
                                <div class="text-black ps-lg-3 p-3">
                                    <h1 class="card-title">About our Project</h1>
                                    <p class="card-text">Commhub is a community based forum. It will be a safe haven for students and the like to connect, discuss, and have an endless and sometimes even pointless conversation. Whether about a subject that you have troubled with, or maybe just some conspiracies or maybe about gaming, Commhub is here for you.
                                    <br><b> Discussions and threads are our specialties.</b> </p>
                                
                                    <?php $user = $this->session->userdata('user');
        
                                        if(isset($user) && $user!=null):?>

                                    <?php else:?>
                                            <a href="<?php echo base_url('registration/register'); ?>" type="button" class="btn btn-custom" id="about">Register</a>
                                        </div>
                                    <?php endif; ?>
                    
                </div>
            </div>

            <div class="container mt-5 pt-5 text-black ">
                <h2 class="text-center ">About the Team</h2>
                <h6 class="text-center font-weight-light m-5">The developers behind the COMMHUB is made up of Computer Science student from the Technological University of the Philippines. Each one having different skills that made up the team. Please I still dont know what to add here, remind me to change this before the end of this week.
                </h6>
                    <div class="container row text-center justify-content-evenly" >
                        
                        <div class="col-lg-3 col-md-6 ">
                            <img src=<?php echo base_url('assets/Rick.png');?> id="team6" class="card-img-top img-fluid mt-3 mb-5" style="width: 60%">
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <img src=<?php echo base_url('assets/Law.png');?> id="team6" class="card-img-top img-fluid mt-3 mb-5" style="width: 60%" >
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <img src=<?php echo base_url('assets/Kyle.png');?> id="team6" class="card-img-top img-fluid mt-3 mb-5" style="width: 60%" >
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <img src=<?php echo base_url('assets/Yela.png');?> id="team6" class="card-img-top img-fluid mt-3 mb-5" style="width: 60%" >
                        </div>
                    
                        <div class="col-lg-3 col-md-6">
                            <img src=<?php echo base_url('assets/Jer2.png');?> id="team6" class="card-img-top img-fluid mt-3 mb-5 " style="width: 60%" >
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <img src=<?php echo base_url('assets/Jose.png');?> id="team6" class="card-img-top img-fluid mt-3 mb-5" style="width: 60%" >
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <img src=<?php echo base_url('assets/Christian.png');?> id="team6" class="card-img-top img-fluid mt-3 mb-5" style="width: 60%" >
                        </div>
        
                   
            </div>
        </section>
    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

</body>
</html>