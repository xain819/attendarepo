<div class="modal modal-default " id="student-modal-primary">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add student</h4>
              </div>
              <div class="modal-body">
              <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar chart</h4>
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
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
   