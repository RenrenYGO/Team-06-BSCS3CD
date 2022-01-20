<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title></title>
        <script src="https://kit.fontawesome.com/1ef6fa8ffb.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container">
            <h3 class="text-center" style="padding-top:160px; padding-bottom: 20px;">How can we help you?</h3> 
            <div class="row justify-content-center">
                <div class="input-group" style="width: 500px;">
                    <input type="text" class="form-control shadow bg-body" placeholder="Write a question or problem" name="search" >
                        <button class="btn btn-default" type="submit" style="background-color: #e8b04f; width: 70px; padding: 10px;"><i class="fa fa-search" style="font-size: 20px;"></i></button>
                </div>
            </div>
            <h5 class="text-center" style="margin-top: 100px; margin-bottom: 30px;">Help by category</h5>
            <div class="row justify-content-center" style="margin-left: 50px;">
                <div class="card col-lg-6" style="width: 20rem; margin-right: 40px; margin-bottom: 40px;">
                    <div class="card-body">
                    <h5 class="card-title text-center"><i class="fas fa-info-circle" style="font-size: 40px; color: #e8b04f;"></i></h5>
                    <h5 class="font-weight-bold text-center" style="margin-bottom:30px">About the System</h5>
                    <p class="card-text">Have problem using a feature?</p>
                    <a href="#" class="card-link text-decoration-none">System purpose</a><br>
                    <a href="#" class="card-link text-decoration-none">About data</a>
                    </div>
                </div>
                <div class="card col-lg-6" style="width: 20rem; margin-right: 40px; margin-bottom: 40px;">
                    <div class="card-body">
                    <h5 class="card-title text-center"><i class="fas fa-user-cog" style="font-size: 40px; color: #e8b04f;"></i></h5>
                    <h5 class="font-weight-bold text-center" style="margin-bottom:30px">Login & Logout</h5>
                    <p class="card-text">Have problem using a feature?</p>
                    <a href="#" class="card-link text-decoration-none">Login</a><br>
                    <a href="#" class="card-link text-decoration-none">Logout</a><br>
                    <a href="#" class="card-link text-decoration-none">User's personal account</a>
                    </div>
                </div>
                <div class="card col-lg-6" style="width: 20rem; margin-right: 40px; margin-bottom: 40px;">
                    <div class="card-body">
                    <h5 class="card-title text-center"><i class="fas fa-cogs" style="font-size: 40px; color: #e8b04f;"></i></h5>
                    <h5 class="font-weight-bold text-center" style="margin-bottom:30px">Support</h5>
                    <p class="card-text">Have problem using a feature?</p>
                    <button type="button" class="btn" style="color:rgb(20, 128, 250)" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Get some help</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Support</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email Address:</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="background-color: #e8b04f;">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        
 
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
