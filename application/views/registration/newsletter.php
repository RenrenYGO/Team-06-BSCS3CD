<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Join our Newsletter!</h4>
      </div>
      <div class="modal-body">         
          <form id="newsletter" name="newsletter" method="post" action="<?php echo base_url();?>newsletter/index" onsubmit ='return validate()'>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>