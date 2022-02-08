<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Help Center</title>
        <script src="https://kit.fontawesome.com/1ef6fa8ffb.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container justify-content center">
            <h1 class="text-center" style="padding-top:160px; padding-bottom: 20px;" >How can we help you?</h1> 
            <div class="justify-content center">
 
            </div>
            <h5 class="text-center" style="margin-top: 50px; margin-bottom: 30px;"></h5>
            <div class="row justify-content-center" style="margin-left: 50px;">
                <div class="card col-lg-6 p-4" style="width: 20rem; margin-right: 40px; margin-bottom: 40px;">
                    <div class="card-body text-center">
                    <h5 class="card-title text-center"><i class="fas fa-info-circle" style="font-size: 40px; color: #e8b04f;"></i></h5>
                    <h5 class="font-weight-bold text-center" style="margin-bottom:15px">About</h5>
                    <p class="card-text">Learn more about us</p>
                    <a href="<?php echo base_url('pages/about'); ?>"><button type="button" class="btn">About</button></a><br>
                    </div>
                </div>
                <div class="card col-lg-6 py-4" style="width: 20rem; margin-right: 40px; margin-bottom: 40px;">
                    <div class="card-body text-center">
                    <h5 class="card-title text-center"><i class="fas fa-question" style="font-size: 40px; color: #e8b04f;"></i></h5>
                    <h5 class="font-weight-bold text-center" style="margin-bottom:15px">FAQs</h5>
                    <p class="card-text">Have any questions?</p>
                    <a href="<?php echo base_url('pages/faqs'); ?>"><button type="button" class="btn">FAQs</button></a><br>
                    </div>
                </div>
                <div class="card col-lg-6 p-4" style="width: 20rem; margin-right: 40px; margin-bottom: 40px;">
                    <div class="card-body text-center">
                    <h5 class="card-title text-center"><i class="fas fa-cogs" style="font-size: 40px; color: #e8b04f;"></i></h5>
                    <h5 class="font-weight-bold text-center" style="margin-bottom:15px">Support</h5>
                    <p class="card-text">Having specific problem?</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Get some help</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Support</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><h6>X</h6></button>
                                    </div>
                                <div class="modal-body">
                                    <form id="helpcenter" name="helpcenter" method="post" action="<?php echo base_url();?>helpcenter/index" onsubmit='return validate()'>
                                        <div class="mb-3">
                                        <td>Enter Email: </td>
                                        <input type="email" name="email" id="email" style="width:250px" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="editor1" name="editor1"></textarea>
                                            <input type = "submit" value="submit" class="button">
                                        </div>
                                    </form>
                                </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn" style="background-color: #e8b04f;">Submit</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    <style>
        .btn{
            color:rgb(20, 128, 250);
        }
        .card-link{
            color:rgb(20, 128, 250);
        }
    </style>
 
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
