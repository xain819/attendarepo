<div class="modal modal-default fade" id="edit-period-modal-primary">

          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Period</h4>
              </div>
              <div class="modal-body">
                <form role="form" id="edit-period-form-id">
                    <div class="form-group">
                        <label >Period Number</label>
                        <input type="text" id='edit-Period' class="form-control" name=period[Period]  placeholder="Period">
                    </div>
                    <div class="form-group">
                        <label >Start Time</label>
                        <input type="time" id='edit-PeriodStartTime' class="form-control" name=period[PeriodStartTime]  placeholder="PeriodStartTime">
                    </div>
                    <div class="form-group">
                        <label >End Time</label>
                        <input type="time" id='edit-PeriodEndTime' class="form-control"  name=period[PeriodEndTime] placeholder="PeriodEndTime">
                    </div>
                    <div class="form-group">
                        <label > </label>
                        <input type="hidden"  readonly class="form-control" id="edit-PeriodID"  name=period[PeriodID]  placeholder="PeriodID">
                    </div>
            
                    <!-- /.box-body -->
                
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default " id="editperiod">Save changes</button>
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
   