<?php if (count($errors) > 0)  : ?>
  <div class="error pt-2">
  	<?php foreach ($errors as $error) : ?>
  	  <p class="text-end text-danger"><?php echo  "*" ?><?php echo  $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>