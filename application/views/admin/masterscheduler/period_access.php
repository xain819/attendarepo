<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>public/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <script src="<?=base_url() ?>public/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
    <link rel="stylesheet" href="<?=base_url()?>public/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
	<link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>" >
	<link href="<?=base_url()?>public/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link href="<?=base_url()?>public/plugins/slider/timeslider.css" rel="stylesheet">
 <script src="<?=base_url()?>public/js/plugins-init/datatables.init.js"></script>
 <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="<?=base_url()?>public/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

 <script src="<?=base_url()?>public/plugins/slider/timeslider.js"></script>


    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      
      <div class=" card box-body" style='padding:20px;'>
      <div class="box col-12 card">
<div id ='master_schedule' class='row' style="margin: 10px 10px;">

  <div class="input-group col-2">
      <div class="input-group-prepend">
          <span class="input-group-text" style='font-size:12px;' id="inputGroupPrepend1">A DAY</span>
      </div>
      <input data-role="tagsinput" data-id="A" type="text" style='font-size:10px;height:10px;' value="Period 1,Period 2,Lunch,Period 3,Period 4" class="form-control" id="tags1" placeholder="Add tags" aria-describedby="inputGroupPrepend2" required="">
  </div>
    <div  style='margin:5px 5px;postion:relavite;top:50px;'id="a_slider" class="time-slider col-9"></div>
    </div>
</div>

<div class="box col-12 card">
  <div class='row' style="margin: 10px 10px;">
        <div style='margin:10px 5px;' class="input-group mb-10 col-2">
              <div class="input-group-prepend">
              <span class="input-group-text" style='font-size:12px;' id="inputGroupPrepend5">B DAY</span>
              </div>
        <input type="text"  data-id="B"  style='font-size:10px;height:10px;' value="Period 5,Period 6,Lunch,Period 7,Period 8" class="form-control" id="input" data-role="tagsinput">
  </div>
       <div style='margin:5px 5px;postion:relavite;top:50px;' id="b_slider" class="time-slider col-9"></div>
	</div>
</div>



  <div class="box col-12 card">
<div class='row' style="margin: 10px 10px;">
    <div style='margin:10px 5px;' class="input-group mb-10 col-2">
                                      <div class="input-group-prepend">
          <span class="input-group-text" style='font-size:12px;' id="inputGroupPrepend3">C DAY</span>
      </div>
      <input data-id="C" type="text" style='font-size:10px;height:10px;' value="Period 1,Period 2,Period 3,Period 4,Lunch,Period 5,Period 6,Period 7,Period 8" class="form-control" id="tags_3" placeholder="Add tags" aria-describedby="inputGroupPrepend2" required="">
  </div>


    <div style='margin:5px 5px;postion:relavite;top:50px;' id="c_slider" class="time-slider col-9"></div>
	</div></div>

  <div class="box col-12 card">
<div class='row' style="margin: 10px 10px;">
    <div style='margin:10px 5px;' class="input-group mb-10 col-2">
                                      <div class="input-group-prepend">
          <span class="input-group-text" style='font-size:12px;' id="inputGroupPrepend1">LATE START</span>
      </div>
      <input data-id="L" type="text" style='font-size:10px;height:10px;' value="Period 5,Period 6,Launch,Period 7,Period 8" class="form-control" id="tags_4" placeholder="Add tags" aria-describedby="inputGroupPrepend2" required="">
  </div>


    <div style='margin:5px 5px;postion:relavite;top:50px;' id="d_slider" class="time-slider col-9"></div>
	</div></div>

  <div class="box col-12 card">
  <div class='row' style="margin: 10px 10px;">
        <div style='margin:10px 5px;' class="input-group mb-10 col-2">
              <div class="input-group-prepend">
              <span class="input-group-text" style='font-size:12px;' id="inputGroupPrepend5">PREP RALLY A-DAY</span>
              </div>
        <input data-id="A_P" type="text" style='font-size:10px;height:10px;' value="Period 1,Period 2,Launch ,Period 3,Period 4,Prep-Rally" class="form-control" id="tags_5" placeholder="Add tags" aria-describedby="inputGroupPrepend2" required="">
  </div>
       <div style='margin:5px 5px;postion:relavite;top:50px;' id="e_slider" class="time-slider col-9"></div>
	</div>
</div>
<div class="box col-12 card">
  <div class='row' style="margin: 10px 10px;">
        <div style='margin:10px 5px;' class="input-group mb-10 col-2">
              <div class="input-group-prepend">
              <span class="input-group-text" style='font-size:12px;' id="inputGroupPrepend5">PREP RALLY B-DAY</span>
              </div>
        <input  data-id="B_P" type="text" style='font-size:10px;height:10px;' value="Period 5,Period 6,Lunch,Period 7,Period 8,Prep-Rally" data-role="tagsinput" class="form-control" id="tags_6" placeholder="Add tags" aria-describedby="inputGroupPrepend2" required="">
  </div>
       <div style='margin:5px 5px;postion:relavite;top:50px;' id="f_slider" class="time-slider col-9"></div>
	</div>
</div>


  


<!-- 
      <div class="box">
        <div class="box-header with-border">
         
          <button class="btn btn-sm btn-success  pull-right" id="showaddperiod"> Add New Period</button>
          
          
        </div><br><br>
        <div class="box-body">
          <div style="width: 100%;">
            <div class="table-responsive">
              <table id="Peiod_DataTable" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th style='width:150px;'>Period Name </th>
                  <th>Start Time</th>
                  <th>End Time</th>

                  <th>Grace Period</th>
                  <th>Transition Time</th>

                  <th>HP Lock Start</th>
                  <th>HP Lock End</th>
         
                  <th>Action</th>
                </tr>
                </thead>
              </table>

              <div id='test_events'>

              'test'
              </div>

            </div>      
          </div>
        </div> -->
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box --></div>
    </section></div></div>
    <!-- /.content -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    


    
    
    <!-- <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script> -->

    <script type="text/javascript">


        const P1='P1';
        var current_time = (new Date('2019-09-06 7:00:00')).getTime() + ((new Date('2019-09-06 7:00:00')).getTimezoneOffset() * 60 * 1000 * -1);
		$(document).ready(function () {
      
      $('input').on('itemAdded', function(event) {
      //   $.ajax({
      //      url:base_url+"admin/masterscheduler/change_slider_period ",
      //      type:"POST",
      //      data:({[csrfName]: csrfHash,'data':'A'}),
      //      dataType:'JSON',
      //  }).done(function(data){});
       console.log($(this).attr("data-id"));
       $(this).attr("data-id");
        
          $.ajax({
           url:base_url+"admin/masterscheduler/add_period ",
           type:"POST",
           data:({[csrfName]: csrfHash,'period':event.item,'data':$(this).attr("data-id")}),
           dataType:'JSON',
       }).done(function(data){});
       ajax.reload($slider);
      });

      $('input').on('itemRemoved', function(event) {
        
        $.ajax({
           url:base_url+"admin/masterscheduler/del_period ",
           type:"POST",
           data:({[csrfName]: csrfHash,'period':event.item,'data':$(this).attr("data-id")}),
           dataType:'JSON',
       }).done(function(data){});
       ajax.reload($slider);
      });
 

      const slider=$.ajax({
           url:base_url+"admin/masterscheduler/slider_period ",
           type:"POST",
           data:({[csrfName]: csrfHash,'data':'A'}),
           dataType:'JSON',
       }).done(function(data){
     

       let schedule_type=[];

      
       schedule_type['a']= data.filter(function(test){return test.schedule_type==='A';});
       schedule_type['b']= data.filter(function(test){return test.schedule_type==='B';});
       schedule_type['c']= data.filter(function(test){return test.schedule_type==='C';});
       schedule_type['d']= data.filter(function(test){return test.schedule_type==='A_P';});
       schedule_type['e']= data.filter(function(test){return test.schedule_type==='B_P';});
       schedule_type['f']= data.filter(function(test){return test.schedule_type==='L';});
       console.log(schedule_type);
        Object.keys(schedule_type).forEach(key => {
          console.log(key);        // the name of the current key.
          console.log(schedule_type[key]); // the value of the current key.

                var masterlist=schedule_type[key];
                var data_events=[];
                var d=[];
                var a=`#${key}_slider`;
                console.log(a);
                masterlist.forEach(function(element){
              
                  d =
                  {
                                    '_id': `${element.schedule_type}_${element.Period}`,
                                    '_period':`${element.Period}`,
                                    'start': (new Date(`2019-09-06 ${element.PeriodStartTime}`)).getTime() + ((new Date(`2019-09-06 ${element.PeriodStartTime}`)).getTimezoneOffset() * 60 * 1000 * -1),
                                    'stop': (new Date(`2019-09-06 ${element.PeriodEndTime}`)).getTime() + ((new Date(`2019-09-06 ${element.PeriodEndTime}`)).getTimezoneOffset() * 60 * 1000 * -1),
                                    'style': {
                                        'background-color': '#061283',
                                    }
                  }
                  data_events.push(d);
                  console.log(d);
                    
                  });
                  console.log(a);
                  $(`${a}`).TimeSlider({
                  start_timestamp: current_time,
                  timecell_enable_move: true,
                   timecell_enable_resize: true,
                  ruler_enable_move:false,
                  graduation_step: 10,
                  hours_per_ruler: 12,
                  distance_between_gtitle:50,
                  init_cells: data_events,
                    
                  });
                });	   
              });

       
		});
	</script>
    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
          base_url='<?php echo base_url(); ?>';
    </script>
    <script>

var data;
 
      function handleFileSelect(evt) {
        var file = evt.target.files[0];

        Papa.parse(file, {
          header: true,
          dynamicTyping: true,
          complete: function(results) {
            data = results;
            
          }
        });
        console.log(data);
      }

      $(document).ready(function(){
        $("#csv-file").change(handleFileSelect);
      });

$(document).ready(function(){
    console.log(base_url);
    var Period_DataTable = $('#Peiod_DataTable').DataTable({
        responsive: true,
        ajax: {
            url: base_url+"admin/masterscheduler/get_all_periods ",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },

       columns: [
          
            { data:'Period'},
            { data:'PeriodStartTime'},
            { data:'PeriodEndTime'},
            { data:'GracePeriod'},
            { data:'TransitionTime'},
            { data:'HPLockStart'},
            { data:'HPLockEnd'},
            { 
                data: null,
                render:function(data){
                    return '<button value='+data.PeriodID+' class="btn btn-xs btn-warning showeditperiodmodal"><i class="fa fa-fw fa-pencil"></i></button> <button value='+data.PeriodID+' class="btn btn-xs btn-danger delete_period"><i class="fa fa-fw fa-trash"></i></button>';
                }
            }
        ],
        select: true
    });

    $(document).on('click','#addperiod',function(){ 
        manage_period('add-new-period',get_form_values("#add-period-form-id"));
    });


    $(document).on('click','#showaddperiod',function(){
         $.ajax({
           url:base_url+"admin/masterscheduler/add_period ",
           type:"POST",
           data:({[csrfName]: csrfHash}),
           dataType:'JSON',
       })
       .done(function(data){
        $("#add-Period").html(data.Period);
        $("#add-PeriodStartTime").html(data.PeriodStartTime);
        $("#add-PeriodEndTIme").html(data.PeriodEndTime);
        $("#period-modal-primary").modal("hide");
       
       })
       $("#period-modal-primary").modal("show");
    });


    $(document).on('click','.showeditperiodmodal',function(){
        PeriodID=$(this).val();
        console.log(PeriodID);
        
        $.ajax({
            url:base_url+"admin/masterscheduler/get_period_by_id",
            type:"POST",
            data:({[csrfName]: csrfHash,data:PeriodID}),
            dataType:'JSON',
        })
        .done(function(data){
          $("#edit-period-modal-primary").modal("show");
            $("#edit-Period").val(data.period_info[0].Period);
            $('#edit-PeriodStartTime').val(data.period_info[0].PeriodStartTime);
            $('#edit-PeriodEndTime').val(data.period_info[0].PeriodEndTime);
            $('#edit-PeriodID').val(data.period_info[0].PeriodID);

        })
    
      
    })

    $(document).on('click','#addperiod',function(){ 
        manage_period('add-new-period',get_form_values("#add-period-form-id"));


    });

    $(document).on('click','.delete_period',function(){
        id=$(this).val();
        swal({
            title: "Are you sure?",
            text: "You will not be able to undo this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true,
            showLoaderOnConfirm: true
          },
          function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:base_url+"admin/masterscheduler/manage_period ",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:'delete-period',data:id}),
                    dataType:'JSON',
                })
                .done(function(data){
                  Period_DataTable.ajax.reload();
                
                    if(data===true){
                        swal("Success!", "Successfully Deleted", "success");
                        Period_DataTable.ajax.reload();
                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator","error");
                    }
                })
              
            } else {
              swal("Cancelled");
            }
          });
    
    });
    $(document).on('click','#editperiod',function(){ 
        manage_period('edit-period',get_form_values("#edit-period-form-id"));
    });


    function get_form_values(formid){
        var result = [];
        count=1;
        $.each($(formid).serializeArray(), function() {
            result[count] = this.value;
            count++;
        });
        return result;
    }


    function manage_period(type,values){
      console.log(values);
      var title_period=values[1];
      console.log(title_period);
        swal({
            title: `Want to Update ${title_period}`,
            text: "Please click yes",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, edit it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true
          },
          function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:base_url+"admin/masterscheduler/manage_period ",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:type,data:values}),
                    dataType:'JSON',
                })
                .done(function(data){
               
                    if(data===true){
                        swal("Success!", "Successfully Added", "success");
                        Period_DataTable.ajax.reload();
                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator",'error');
                    }
                })
             
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
    }
   //    Teacher_DataTable.ajax.reload();get_department_option
});
    
    
    </script>
    <script>
    	
     
 
        </script>




<?php $this->load->view('admin/masterscheduler/add');?>
<?php $this->load->view('admin/masterscheduler/edit');?>
<script src="<?=base_url()?>public/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="<?=base_url()?>public/js/plugins-init/bootstrap-tagsinput-init.js"></script>

