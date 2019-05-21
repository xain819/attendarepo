 <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Welcome to
        <small>Teacher Information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
              <button class="btn btn-sm btn-success" id="showaddteachermodal"> add Teacher</button>
          </div>
        </div>
        <div class="box-body">
          <table id="Teacher_DataTable" class="table table-bordered table-striped" width="100%">
            <thead>
            <tr>
              <th>TeacherID</th>
              <th>NumberID</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Gender</th>
              <th>BirthDate</th>
              <th>ContactNumber</th>
              <th>DepartmentID</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
            </thead>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
    <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>
    <script src="<?php echo base_url('public/dist/js/teacherinformation.js');?>"></script>

<?php $this->load->view('admin/teacherinformation/add');?>
