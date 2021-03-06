<!DOCTYPE html>
<html>

  <head>
    
  <title>Registration system PHP and MySQL</title>
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  <style>
    <?php include 'style.css' ?>
  </style>
    
    
  </head>
  <body>
    <div class="container-fluid" style="padding-top: 100px;">

      <div class="box mt-5 col-6 mx-auto border border-2 " style="padding: 50px;">
        <a href="<?php echo base_url('login'); ?>" class="link-custom text-decoration-none d-flex justify-content-end">
        <button type="button" class="btn-close" aria-label="Close"><h6>X</h6></button></a>

        <div class="text-center">
          <h3 class="modal-title w-100" ><img style="width: 8%;" src=<?php echo base_url('assets/Lock.png');?>></h3>
        </div>

        <div class="modal-header text-center border-0">
          <h3 class="modal-title w-100" >Reset your Password</h3>
        </div>

        <p class="text-center" style="margin-bottom: 50px;">Enter the email address associated with your account</p>
        <p class="text-center" style="margin-bottom: 50px;">DO NOT SHARE YOUR EMAIL WITH ANYONE, IT IS LIKE YOUR PASSWORD. YOU HAVE BEEN WARNED.</p>
        <form id="resetPassword" name="resetPassword" method="post" action="<?php echo base_url();?>forgot/index" onsubmit ='return validate()'>

          <table class="table table-borderless table-condensed">

            <tbody>

              <tr>
                <td style="padding-left: 50px;">Email Address</td>
              </tr>

              <tr>
                <td class="d-flex justify-content-center">
                  <input class="form-control border-3" type="email" name="email" id="email" style="width:500px" required>
                </td>
              </tr>

              <tr>
                <td class="d-flex justify-content-end">
                  <input type="submit" value="Submit" class="button" style="padding: 6px; border-radius: 5px; background-color: #e8b04f;">
                </td>
              </tr>

            </tbody>

          </table>

        </form>
        
        <div id="fade" class="black_overlay"></div>

      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
  include 'duplicate_error.php';
  include 'func.php';
?>