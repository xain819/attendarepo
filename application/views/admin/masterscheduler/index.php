<section class="content-header">
	<div class="row">
	    <div class="col-md-12">
	      <div class="box box-body">
	        <div class="col-md-6">
	          <h4><i class="fa fa-list"></i> &nbsp; Terminal List</h4>
	        </div>
	        <div class="col-md-6 text-right">
	          <a href="<?= base_url('admin/hallpass/add_terminal'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Terminal</a>
	        </div>
	        
	      </div>
	    </div>
	</div> 

	<div class="box">
        <div class="box-header">


        </div>
        <div class="box-body table-responsive">  
            <?php echo form_open("/",'class="filterdata"') ?>    
                <div class="row">
                   <div class="col-sm-3">
                        <div class="form-group">
                            <select name="type" class="form-control" onchange="filter_data()" >
                                <option value="">All Admin Types</option>
                                <?php foreach($admin_roles as $admin_role):?>
                                <option value="<?=$admin_role['admin_role_id']?>"><?=$admin_role['admin_role_title']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                   </div>
                   <div class="col-sm-2">
                        <div class="form-group">
                            <select name="status" class="form-control" onchange="filter_data()" >
                                <option value="">All Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                   </div>
                   <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="keyword" class="form-control"  placeholder="Search from here..." onkeyup="filter_data()" />
                        </div>
                   </div>
                </div>
            <?php echo form_close(); ?> 
      	</div>
    </div> 

    <div class="bootstrap-timepicker">
        <div class="form-group">
            <label>Time picker:</label>
            <div class="input-group">
                <input type="text" class="form-control timepicker">
                <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
                </div>
            </div>
        </div>
      </div>

</section>
<!-- Main content -->
<section class="content mt10">
	<div class="box">
		<div class="box-header">
		</div>
		<div class="box-body">
        	
        	<!-- Load Admin list (json request)-->
            <div class="data_container">
            
            </div>

		</div>
	</div>
</section>
<!-- /.content -->

<script src="<?= base_url() ?>public/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url() ?>public/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= base_url() ?>public/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= base_url() ?>public/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url() ?>public/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url() ?>public/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url() ?>public/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?= base_url() ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?= base_url() ?>public/plugins/iCheck/icheck.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

<script>
  $("#forms").addClass('active');
  $("#advanced").addClass('active');
</script>  


<link rel="stylesheet" href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/select2/select2.min.css">

<script>
//------------------------------------------------------------------
function filter_data()
{
	$('.data_container').html('<div class="text-center"><img src="<?=base_url('theme/common')?>/preloader.gif"/></div>');
	$.post('<?=base_url('admin/admin/filterdata')?>',$('.filterdata').serialize(),function(){
		$('.data_container').load('<?=base_url('admin/masterscheduler/list_data')?>');
	});
}
//------------------------------------------------------------------
function load_records()
{
	$('.data_container').html('<div class="text-center"><img src="<?=base_url('theme/common')?>/preloader.gif"/></div>');
	$('.data_container').load('<?=base_url('admin/masterscheduler/list_data')?>');
}
load_records();

//---------------------------------------------------------------------
$("body").on("change",".tgl_checkbox",function(){
	$.post('<?=base_url("admin/masterscheduler/change_status")?>',
	{
        '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		id : $(this).data('id'),
		status : $(this).is(':checked')==true?1:0
	},
	function(data){
		$.notify("Status Changed Successfully", "success");
	});
});
</script>