 <!-- Content Header (Page header) -->
 <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<!-- for datatable  -->
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css');?>">
 <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>


  


    

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
  

        <div class="row">
	    
	      </div> 

        <div class=" card box-body" style='padding:20px;'>
          <div style="width: 100%;">
            <div class="table-responsive">
              <table id="Student_DataTable" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
             
                  <th>ID Number </th>
                  <th>Student Type</th>
                  <th>Last Name </th>
                  <th>First Name </th>
      
                  <th>graduation_cohort </th> 
                  <th>birthdate </th>
                  <th>gender </th>
                  
                  <th>Parent Last Name </th>
                  <th>Parent First Name </th>
                  <th>parent_address </th> 
                  <th>parent_city </th>

                  <th>parent_state </th> 
                  <th>parent_zip </th>
                  <th>parent_email </th>
                  <th>student_email </th>
       
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
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
          base_url='<?php echo base_url(); ?>';
    </script>

    

    <script src="<?php echo base_url('public/dist/js/studentinformation.js');?>"></script>

<?php $this->load->view('admin/studentinformation/add');?>
<?php $this->load->view('admin/studentinformation/edit');?>
