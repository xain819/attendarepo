<!-- daterange picker -->
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
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/multidates/jquery-ui.multidatespicker.css">
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
<script src="<?= base_url() ?>public/plugins/multidates/jquery-ui.multidatespicker.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url() ?>public/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?= base_url() ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?= base_url() ?>public/plugins/iCheck/icheck.min.js"></script>



 <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Wellcome To 
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

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="nav-tabs-custom">
          <div class='row'>
            <div class='col-md-3'>
                <div id='sandbox-container-01'></div>
            </div>
            <div class='col-md-3'>
                <div id='sandbox-container-02'></div>
            </div>
            <div class='col-md-3'>
                <div id='sandbox-container-03'></div>
            </div>
            <div class='col-md-3'>
                <div id='sandbox-container-04'></div>
            </div>
            <div class='col-md-3'>
                <div id='sandbox-container-05'></div>
            </div>
            <div class='col-md-3'>
                <div id='sandbox-container-06'></div>
            </div>
            <div class='col-md-3'>
                <div id='sandbox-container-07'></div>
            </div>
            <div class='col-md-3'>
                <div id='sandbox-container-08'></div>
            </div>
            <div class='col-md-3'>
                <div id='sandbox-container-09'></div>
            </div>
            <div class='col-md-3'>
                <div id='sandbox-container-10'></div>
            </div>

           
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

    <section class="content">
      
    </section>  




    <!-- /.content -->


<!-- define the calendar element -->


<!-- initialize the calendar on ready -->




<!-- Page script -->
<script>


$('#sandbox-container-01').datepicker({
  multidate:true,
});
$('#sandbox-container-02').datepicker({
  multidate:true,
});
$('#sandbox-container-03').datepicker({
  multidate:true,
});
$('#sandbox-container-04').datepicker({
  multidate:true,
});
$('#sandbox-container-05').datepicker({
  multidate:true,
});
$('#sandbox-container-06').datepicker({
  multidate:true,
});
$('#sandbox-container-07').datepicker({
  multidate:true,
});
$('#sandbox-container-08').datepicker({
  multidate:true,
});
$('#sandbox-container-09').datepicker({
  multidate:true,
});
$('#sandbox-container-10').datepicker({
  multidate:true,
});



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
    multidate:true,
    inline: false,
    lang: 'en',
    step: 5,
    closeOnDateSelect: true


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
