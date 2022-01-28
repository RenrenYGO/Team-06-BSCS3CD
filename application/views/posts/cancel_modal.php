
<div id="cancelModal<?php echo $post['id']; ?>" class="modal fade">

  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Confirmation</h4>
            <a type="button" class="close text-decoration-none " data-dismiss="modal" aria-hidden="true">&times;</a>
            
        </div>
        <div class="modal-body">
        
             <input type="hidden" value="" name="hidden_id" id="hidden_id"/>
            <p>Discard changes?</p>
        </div>
        <div class="modal-footer">
            <a type="button" class="btn btn-danger" data-dismiss="modal">No</a>
            <a class="btn btn-success" href="<?php echo site_url('/posts/'. $post['id']); ?>" name="btn_end" id="btn_end">Yes</a>
</form>

        </div>
    </div>
  </div>
 
</div>
