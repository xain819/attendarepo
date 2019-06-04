 <!-- Content Header (Page header) -->
 <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<!-- for datatable  -->
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css');?>">

  
 <section class="content-header">
      <h1>
        Welcome to
        <small>Student Information</small>
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

         
        </div>

        <div class="row">
	    <div class="col-md-12">
	      <div class="box box-body">
	        <div class="col-md-6">
	          <h4><i class="fa fa-list"></i> &nbsp; Student List</h4>
	        </div>
	        <div class="col-md-6 text-right">

          <button class="btn btn-success" id="showaddstudentmodal"><i class="fa fa-plus"></i> Add New Student</button>
       
	        
	        </div>
	        
	      </div>
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
     <script src="<?= base_url() ?>public/plugins/papaparse/papaparse.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <!-- for datables -->
    <script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js');?>"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    
    <!-- <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script> -->
    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>

    
    <script src="<?php echo base_url('public/dist/js/studentinformation.js');?>"></script>

<?php $this->load->view('admin/studentinformation/add');?>
<?php $this->load->view('admin/studentinformation/edit');?>
