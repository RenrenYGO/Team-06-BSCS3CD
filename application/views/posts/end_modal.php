<?php echo form_open('/posts/delete/'.$post['id']); ?>
<div id="endModal<?php echo $post['id']; ?>" class="modal fade">

  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <a type="button" class="close text-decoration-none " data-dismiss="modal" aria-hidden="true">&times;</a>
            <h4 class="modal-title">Confirmation</h4>
        </div>
        <div class="modal-body">
        
             <input type="hidden" value="" name="hidden_id" id="hidden_id"/>
            <p>Are you sure you want to delete this post? </p>
        </div>
        <div class="modal-footer">
            <a type="button" class="btn btn-danger" data-dismiss="modal">No</a>
            <input type="submit" class="btn btn-success" name="btn_end" id="btn_end" value="Yes"/>
</form>

        </div>
    </div>
  </div>
 
</div>
