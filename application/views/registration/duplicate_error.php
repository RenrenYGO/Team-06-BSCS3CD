<?php if(isset($_SESSION['change'])){
    echo '<script>$(document).ready(function (){change();});</script>';
    unset($_SESSION['change']);
    } 
echo '<div class="alert alert-change alert-autocloseable-change" style="background: #f0ad4e; position: fixed; top: 4em; right: 1em;  display: none;">
<a type="button" class="close text-decoration-none text-dark display" data-dismiss="alert" aria-hidden="true">&times;</a> Password Changed!
</div>
<!--<div class="alert alert-change alert-autocloseable-change" style="background: #f0ad4e; position: fixed; top: 8em; right: 1em;  display: none;">
<a type="button" class="close text-decoration-none text-dark display" data-dismiss="alert" aria-hidden="true">&times;</a> Log in again to save changes
</div>-->';
?>
<?php if(isset($_SESSION['mismatch'])){
    echo '<script>$(document).ready(function (){mismatch();});</script>';
    unset($_SESSION['mismatch']);
    } 
echo '<div class="alert alert-mismatch alert-autocloseable-mismatch" style="background: #f0ad4e; position: fixed; top: 4em; right: 1em;  display: none;">
<a type="button" class="close text-decoration-none text-dark display" data-dismiss="alert" aria-hidden="true">&times;</a> Passwords do not match!
</div>';
?>

<?php if(isset($_SESSION['invalid'])){
    echo '<script>$(document).ready(function (){invalid();});</script>';
    unset($_SESSION['invalid']);
    } 
echo '<div class="alert alert-invalid alert-autocloseable-invalid" style="background: #f0ad4e; position: fixed; top: 4em; right: 1em;  display: none;">
<a type="button" class="close text-decoration-none text-dark display" data-dismiss="alert" aria-hidden="true">&times;</a> Invalid Email!
</div>';
?>
