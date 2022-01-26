<!DOCTYPE html>
<html>
  <head>
    <title>Registration system PHP and MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
	    <?php include 'style.css'; ?>
    </style>
  </head>
  <body>
    <div class="container-fluid" style="padding-top: 100px;">  
      <div class="box mt-5 col-6 mx-auto border border-2 " style="padding: 50px;">
        <div class="modal-header text-center border-0 ">
          <h3 class="modal-title w-100" >Reset your password </h3>
          <a href="<?php echo base_url('login'); ?>" class="link-custom text-decoration-none">
          <button type="button" class="btn-close" aria-label="Close"></button></a>
        </div>
        <div class="form-group mb-2">
          <label for="exampleInputEmail1" style="margin-bottom: 10px; padding-top: 40px;">Email Address:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
        </div>
        <div class="d-flex justify-content-end" style="margin-bottom: 50px; margin-top: 50px;">
          <button type="submit" class="btn btn-default ">Submit</button>
        </div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>