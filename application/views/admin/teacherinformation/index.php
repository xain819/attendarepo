 <!-- Content Header (Page header) -->
 <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
 <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
 
    <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Hello, <span>Welcome here</span></h4>
                    </div>
                    <div class="col p-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a>
                            </li>
                            <li class="breadcrumb-item active">Blank</li>
                        </ol>
                    </div>
                </div>


    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      
        <div class="box-body">
          <div style="width: 100%;">
            <div class="table-responsive">
              <table id="Teacher_DataTable" class="display" cellspacing="0" width="100%">
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
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section></div></div>
    <!-- /.content -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    


    
    
    <!-- <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script> -->
    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
          base_url='<?php echo base_url(); ?>';

    </script>
    <script src="<?php echo base_url('public/dist/js/teacherinformation.js');?>"></script>

    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
  
    
    


<?php $this->load->view('admin/teacherinformation/add');?>
<?php $this->load->view('admin/teacherinformation/edit');?>
