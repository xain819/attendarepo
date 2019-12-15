<div class="modal modal-default" id="edit-period-modal-primary">

          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Period</h4>
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
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <script src="<?= base_url() ?>public/plugins/select2/select2.full.min.js"></script>
        <script>
             $(".select2").select2();
        </script>
   