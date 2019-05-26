 <!-- Content Header (Page header) -->
 <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
 
  
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
              <button class="btn btn-sm btn-success" id="showaddstudentmodal"> add Student</button>
          </div>
        </div>
        <div class="box-body">
          <div style="width: 100%;">
            <div class="table-responsive">
              <table id="Student_DataTable" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>StudentID </th>
                  <th>IDNumber </th>
                  <th>FirstName </th>
                  <th>LastName </th>
                  <th>Gender </th> 
                  <th>BirthDate </th>
                  <th>ContactNumber </th>
                  <th>RaceID </th>
                  <th>SectionID </th>
                  <th>GradeLevelID </th> 
                  <th>DistinctionID </th>
                  <th>Password </th>
                  <th>IsEnabled </th>
                  <th>Action</th>
                </tr>
                </thead>
              </table>
            </div>      
          </div>
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
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    


    
    
    <!-- <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script> -->
    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>
    <script src="<?php echo base_url('public/dist/js/studentinformation.js');?>"></script>

<?php $this->load->view('admin/studentinformation/add');?>
<?php $this->load->view('admin/studentinformation/edit');?>
