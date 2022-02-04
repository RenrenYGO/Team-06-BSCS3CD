

<!-- Bootstrap -->

<script src="../js/alert.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>


<script src="../js/morris/raphael-2.1.0.min.js" type="text/javascript"></script>
<script src="../js/morris/morris.js" type="text/javascript"></script>

<script src="../js/select2.full.js" type="text/javascript"></script>

<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../js/buttons.print.min.js" type="text/javascript"></script>

<script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../js/AdminLTE/app.js" type="text/javascript"></script>

<script type="text/javascript">

	
    function change(){
        $('#autoclosable-btn-change').prop('disabled', true);
        $('.alert-autocloseable-change').show();

        $('.alert-autocloseable-change').delay(3000).fadeOut( 'slow', function() {
            // Animation complete.
            $('#autoclosable-btn-change').prop('disabled', false);
        });
    }
    
    function mismatch(){
        $('#autoclosable-btn-mismatch').prop('disabled', true);
        $('.alert-autocloseable-mismatch').show();

        $('.alert-autocloseable-mismatch').delay(3000).fadeOut( 'slow', function() {
            // Animation complete.
            $('#autoclosable-btn-mismatch').prop('disabled', false);
        });
    }
   
    function passwordChanged() {
        var strength = document.getElementById('strength');
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{8,}).*", "g");
        var pwd = document.getElementById("password");
        if (pwd.value.length == 0) {
            strength.innerHTML = 'Type Password';
        } else if (false == enoughRegex.test(pwd.value)) {
            strength.innerHTML = 'More Characters';
        } else if (strongRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:green">Strong!</span>';
        } else if (mediumRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:orange">Medium!</span>';
        } else {
            strength.innerHTML = '<span style="color:red">Weak!</span>';
        }
    }
    function newpasswordChanged() {
        var str= document.getElementById('str');
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{8,}).*", "g");
        var pwd = document.getElementById("pass");
        if (pwd.value.length == 0) {
            str.innerHTML = 'Type Password';
        } else if (false == enoughRegex.test(pwd.value)) {
            str.innerHTML = 'More Characters';
        } else if (strongRegex.test(pwd.value)) {
            str.innerHTML = '<span style="color:green">Strong!</span>';
        } else if (mediumRegex.test(pwd.value)) {
            str.innerHTML = '<span style="color:orange">Medium!</span>';
        } else {
            str.innerHTML = '<span style="color:red">Weak!</span>';
        }
    }

$(document).ready(function (){   	
	$('.chk_delete').click(function () {
        if ($('.chk_delete:checked').length == $('.chk_delete').length) {
            $('.cbxMain').prop('checked', true);
        }
        else {
            $('.cbxMain').prop('checked', false);
        }

        $('#check-all').click(function(){
		    $("input:checkbox").attr('checked', true);
		  });
    }); 

    $('.no-print').hide();
});
</script>  


 <!-- page script -->
