 <!-- Content Header (Page header) -->
 <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables/jquery.dataTables.min.css">
 <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">

 <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
 <link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>" >
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/meltismenu/js/metisMenu.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
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
    </section>
    <div class="modal modal-default" id='teacher-modal-primary'>
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
              <div class="modal-body">
              <?php $this->load->view('admin/terminalpannel/teacher_terminal');?>
                  
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
   </div></div>
    <!-- /.content -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="<?=base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

    


    
    
    <!-- <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script> -->
    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
          base_url='<?php echo base_url(); ?>';


    </script>
    
        <?php $this->load->view('admin/teacherinformation/add');?>
<?php $this->load->view('admin/teacherinformation/edit');?>
<?php $this->load->view('admin/terminalpannel/terminal_modal');?>
<?php $this->load->view('admin/teacherinformation/hallpassfunction');?>


    <script src="<?php echo base_url('public/dist/js/teacherinformation.js');?>"></script>

    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>



  
    



