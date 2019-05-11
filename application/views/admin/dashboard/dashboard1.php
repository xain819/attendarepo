
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/select2/select2.min.css">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Day/ Schedule Type</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected"></option>
              <option>B-Day</option>
              <option>C-Day</option>
              <option>Exam Day</option>
              <option>Pep Rally</option>
              <option>Regular Schedule</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Terminal Control</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> On/Off Terminal
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Hall Pass Master Switch
                    </label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" data-toggle="toggle"> Emergency Terminal Shutdown & Notification
                    </label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" id="is_drill" data-toggle="toggle"> Is This a Drill
                    </label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Select Emergency drill type</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option ></option>
                      <option>Fire</option>
                      <option>Lockdown</optioan>
                      <option>Shelter in place</option>
                      <option>Evacuation</option>
                      <option>Weather</option>
                      <option>Tornado</option>
                      <option >Active Shooter</option>
                      <option >Bomb Threat</option>
                      <option >Off Campus</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                <div class="box">
                  <div class="box-header">
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body table-responsive">
                        <table id="terminaldt" class="table table-bordered table-striped" width="100%">
                          <thead>
                          <tr>
                          
                            <th>FullName</th>
                            <th>Terminal No.</th>
                            <th>Room No.</th>
                            <th width="100" class="text-right">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          <td>Jane Doe</td>
                          <td>333</td>
                          <td>222</td>
                          <td>
                            <button class="btn btn-xs btn-warning"><i class="fa fa-fw fa-power-off"></i>tmnl</button>
                            <button class="btn btn-xs btn-warning"><i class="fa fa-fw fa-lock"></i>hall</button>
           
                            
                          </td> 
                          </tbody>
                        </table>

                      </div>
                      <!-- /.box-body -->
                    <!-- /.box -->
                  </div>
                </div>

               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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