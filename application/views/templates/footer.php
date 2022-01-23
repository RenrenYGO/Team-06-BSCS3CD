<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
      CKEDITOR.replace( 'editor1' );
    </script>
    <style>
	<?php include 'style.css'; ?>
	</style>
</head>

<div class="container">
        <footer class="pt-5 mt-5">
          <div class="row">
            <div class="col-6">
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="<?php echo base_url('templates/help'); ?>"class="nav-link p-0 text-muted">Help Center</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="<?php echo base_url('templates/faqs'); ?>" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="<?php echo base_url('pages/about'); ?>" class="nav-link p-0 text-muted">About</a></li>
              </ul>
            </div>
      
            <div class="col-4 offset-2">
              <form>
                <h6>Subscribe to our newsletter</h6>
                <p>Monthly digest of whats new and exciting from us.</p>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <a class ="btn btn-custom" id="newsletter" href="<?php echo base_url('newsletter/index'); ?>">Subscribe</a>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex justify-content-between mt-4 border-top">
            <p>&copy; 2021 CommHub, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
          </div>
        </footer>
      </div>
      
</body>
</html>