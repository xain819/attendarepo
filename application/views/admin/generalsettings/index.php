
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/select2/select2.min.css">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Activate Hall Pass Function
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Hall Pass lock Time
                      <input type="number" min="1" max="5">
                      <input type="number" min="1" max="5">
                    </label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box box-success box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Administrative Hall Pass</h3>
                      <div class="box-tools pull-right">
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      The body of the box
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box box-success box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Non Administrative Hall Pass</h3>
                      <div class="box-tools pull-right">
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      The body of the box
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box box-success box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title"></h3>
                      <div class="box-tools pull-right">
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="form-group">
                        <label class="checkbox">
                          <input type="checkbox" data-toggle="toggle"> Hall Pass Time Override
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="checkbox">
                          <input type="checkbox" data-toggle="toggle"> NHP Qouta limit
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="checkbox">
                          <input type="checkbox" data-toggle="toggle"> Additional NHP Override
                        </label>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Active Hall Pass Function
                    </label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Hall Pass lock Time
                    </label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Hall Pass Time Override
                    </label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> NHP Qouta limit
                    </label>
                  </div>
                </div>                
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Additional NHP Override
                    </label>
                  </div>
                </div>
                <!-- /// -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Hall Pass Swipe Override
                    </label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                       Student Late-Arrival Check-In 
                       <select name="" id="">
                        <option value="">Current Class</option>
                        <option value="">main Office</option>
                        <option value=""></option>
                       </select>
                    </label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Attendance Swipe override
                    </label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Period Grace Time
                    </label>
                  </div>
                </div>                
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Universal E.O.D Clock-Out
                    </label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              </div>
            </form>
          </div>
        </div>
      </div>  
      <!-- /.row -->
      <?php //$this->load->view('admin/dashboard/content/monthlyrecap');?>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<!-- Select2 -->
<script src="<?= base_url() ?>public/plugins/select2/select2.full.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  
  $(".select2").select2();
  $("#dashboard1").addClass('active');
  $(document).on('change','#is_drill',function(){
    alert( $(this).prop('checked'));
  })
  $("#terminaldt").DataTable();
}) 
</script>