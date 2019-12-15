
     
   

   <div class="modal fade bd-example-modal-lg" id="edit-period-modal-primary" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form role="form" id="edit-slider-form-id">
                    <div class="form-group">
                        <label >Start Time</label>
                        <input type="text" id='edit-sliderStartTime' class="form-control"   placeholder="PeriodStartTime">
                    </div>
                    <div class="form-group">
                        <label >End Time</label>
                        <input type="text" id='edit-sliderEndTime' class="form-control"   placeholder="PeriodEndTime">
                    </div>
            
                    <!-- /.box-body -->
                
                </form>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default " id="editslider">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>public/plugins/select2/select2.full.min.js"></script>
        <script>
             $(".select2").select2();
        </script>