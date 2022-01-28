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
          <form id="resetPassword" name="resetPassword" method="post" action="<?php echo base_url();?>forgot/index" onsubmit ='return validate()'>
         <table class="table table-bordered table-hover table-striped">                                      
                    <tbody>
                    <tr>
                    <td>Enter Email: </td>
                    <td>
                <input type="email" name="email" id="email" style="width:250px" required>
                 </td>
                    <td><input type = "submit" value="submit" class="button"></td>
                    </tr>
                    </tbody>               </table></form> 
                                     <div id="fade" class="black_overlay"></div>       
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>