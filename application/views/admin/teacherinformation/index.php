 <!-- Content Header (Page header) -->
 <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables/jquery.dataTables.min.css">
 <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">///

 <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
 <link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>" >
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/meltismenu/js/metisMenu.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script> 
<style>
button.btn-space {
        margin-left: 1em;
    }
</style>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?=base_url() ?>public/plugins/editor/css/editor.dataTables.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url() ?>public/plugins/editor/js/dataTables.editor.min.js"></script>

<script src="<?=base_url() ?>public/plugins/papaparse/papaparse.min.js"></script>

<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">


<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


    <!-- Main content -->
    <section class="content">
      <!-- Default box -->

      <div class=" card box-body" style='padding:20px;'>
        <div class="box-body">
          <div style="width: 100%;">
            <div class="table-responsive">
              <table id="Teacher_DataTable" style='table-layout: fixed !important; word-wrap:break-word;'class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                <th>Action</th>
                  <th>ID Number</th>
                  <th>FirstName</th>
                  <th>LastName</th>
                  <th>Gender</th>
                  <th>BirthDate</th>
                  <th>ContactNumber</th>
                  <th>Department</th>
                  <th>Password</th>
            

                  <th>Description</th>
                  <th>Course</th>
                  <th>Period</th>
                  <th>Location</th>
                  <th>Action</th>
                
                </tr>
                </thead>
              </table>
            </div>      
          </div>
        </div></div>
        <!-- /.box-body -->

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

    


    
    
    <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
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



  
    



