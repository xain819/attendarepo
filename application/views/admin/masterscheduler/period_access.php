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
    <!-- <section class="content"> -->
      <!-- Default box -->
      <div class="col-md-12 " id="abc">
      
      </div>
      <!-- <div class=" card box-body" style='padding:20px;'> -->
      


  

<?php $this->load->view('admin/masterscheduler/editslider.php');?>
<?php $this->load->view('admin/masterscheduler/add-period.php');?>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  
    <script type="text/javascript">


          const P1='P1';
          var current_time = (new Date('2019-09-06 7:00:00')).getTime() + ((new Date('2019-09-06 7:00:00')).getTimezoneOffset() * 60 * 1000 * -1);
$(document).ready(function () {
  slider()
      function slider(){
        $.ajax({
           url:base_url+"admin/masterscheduler/slider_period ",
           type:"POST",
           data:({[csrfName]: csrfHash,'data':'A'}),
           dataType:'JSON',
       }).done(function(data){
          var arr=[''];
          var j=0;
          for (var i = 0; i < data.length; i++) {
            if($.inArray(data[i]["ScheduleType"],arr)<0){
                arr[j]=data[i]["ScheduleType"];
                j++;
            }
          }
        console.log(arr)
        for (let index = 0; index < arr.length; index++) {
          var data_events=[];
           const element = arr[index];
           var a=`#${element}_slider`;
           $('#abc').append(`
            <div class="box col-12 card scheduletypee">
              <div id ='master_schedule' class='row' style="margin: 10px 10px;">

              <div class="input-group col-2">
                  <div class="input-group-prepend">
                      <span class="input-group-text add_period" style='font-size:12px;' id="${element}">${element}</span>
                  </div>
              </div>
                <div  style='margin:5px 5px;postion:relavite;top:10px;'id="${element}_slider" class="time-slider col-9"></div>
              </div>
            </div>
            `);
            d={}
            for (let index = 0; index < data.length; index++) {
              const elemente = data[index];
            
              if(elemente['schedule_type']==element)
              {
                   d =
                  {
                                    
                      '_id': `${elemente.schedule_type}_${elemente.Period}`,
                      '_scheduletype':`${elemente.ScheduleType}`,
                      '_period':`${elemente.Period}`,
                      'start': (new Date(`2019-09-06 ${elemente.PeriodStartTime}`)).getTime() + ((new Date(`2019-09-06 ${elemente.PeriodStartTime}`)).getTimezoneOffset() * 60 * 1000 * -1),
                      'stop': (new Date(`2019-09-06 ${elemente.PeriodEndTime}`)).getTime() + ((new Date(`2019-09-06 ${elemente.PeriodEndTime}`)).getTimezoneOffset() * 60 * 1000 * -1),
                      'style': {
                          'background-color': '#061283',
                      }
                  }
                  data_events.push(d);
              }
            }
            console.log(d)
            
            $(`${a}`).TimeSlider({
                start_timestamp: current_time,
                timecell_enable_move: true,
                timecell_enable_resize: false,
                ruler_enable_move:true,
                update_timestamp_interval:1000,
                graduation_step: 1,
                hours_per_ruler: 12,
                distance_between_gtitle:100,
                init_cells: data_events,
                on_change_timecell_callback:function(id,start,stop){
                  $('#editslider').val( id);
                  $('#edit-period-modal-primary').modal('show')
                  
                  // start=new Date(start)
                  // stop=new Date(stop)
                  // alert(id+': Start'+start+' Stop:'+stop)
                },
        
            });
        }
        
        });	   
             
      }
      stype=''
      $(document).on('click','.add_period',function(){
        stype=($(this).attr('id'))
        $("#add-period-modal-primary").modal('show')
      })
      $(document).on('click','#sumbitnewperiod',function(){
        d_start=$('#add-sliderStartTime').val()
        d_stop=$('#add-sliderEndTime').val()
        period=$("#add-Period").val()
        $.ajax({
              url:base_url+"admin/masterscheduler/insert_period ",
              type:"POST",
              data:({[csrfName]: csrfHash,period:period,'data':stype,'start':`${d_start}`,'stop':`${d_stop}`}),
              dataType:'JSON',
            })
            .done(function(data){
              window.location.reload(true); 
        })
      })
      $(document).on('click','#editslider',function(){
              
            id=$('#editslider').val()
            d_start=$('#edit-sliderStartTime').val()
            d_stop=$('#edit-sliderEndTime').val()

            console.log(id);
            
            $.ajax({
              url:base_url+"admin/masterscheduler/edit_slider_period ",
              type:"POST",
              data:({[csrfName]: csrfHash,'id':id,'type':'bykugan','start':`${d_start}`,'stop':`${d_stop}`}),
              dataType:'JSON',
            })
            .done(function(data){
              window.location.reload(true); 
            })
      })

     
    });
      
    </script>


<?php //$this->load->view('admin/masterscheduler/add');?>
<?php //$this->load->view('admin/masterscheduler/edit');?>
<script src="<?=base_url()?>public/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="<?=base_url()?>public/js/plugins-init/bootstrap-tagsinput-init.js"></script>

