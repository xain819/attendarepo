   <!-- fullCalendar 2.2.5-->
   <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>

    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
   <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fullcalendar/fullcalendar.print.css" media="print">
  <link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>">
  <link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
<style>
  .bg-red,
.bg-yellow,
.bg-aqua,
.bg-blue,
.bg-light-blue,
.bg-green,
.bg-navy,
.bg-teal,
.bg-olive,
.bg-lime,
.bg-orange,
.bg-fuchsia,
.bg-purple,
.bg-maroon,
.bg-black,
.bg-red-active,
.bg-yellow-active,
.bg-aqua-active,
.bg-blue-active,
.bg-light-blue-active,
.bg-green-active,
.bg-navy-active,
.bg-teal-active,
.bg-olive-active,
.bg-lime-active,
.bg-orange-active,
.bg-fuchsia-active,
.bg-purple-active,
.bg-maroon-active,
.bg-black-active,
.callout.callout-danger,
.callout.callout-warning,
.callout.callout-info,
.callout.callout-success,
.alert-success,
.alert-danger,
.alert-error,
.alert-warning,
.alert-info,
.label-danger,
.label-info,
.label-warning,
.label-primary,
.label-success,
.modal-primary .modal-body,
.modal-primary .modal-header,
.modal-primary .modal-footer,
.modal-warning .modal-body,
.modal-warning .modal-header,
.modal-warning .modal-footer,
.modal-info .modal-body,
.modal-info .modal-header,
.modal-info .modal-footer,
.modal-success .modal-body,
.modal-success .modal-header,
.modal-success .modal-footer,
.modal-danger .modal-body,
.modal-danger .modal-header,
.modal-danger .modal-footer {
  color: #fff !important;
}
.bg-gray {
  color: #000;
  background-color: #d2d6de !important;
}
.bg-gray-light {
  background-color: #f7f7f7;
}
.bg-black {
  background-color: #111111 !important;
}
.bg-red,
.callout.callout-danger,
.alert-danger,
.alert-error,
.label-danger,
.modal-danger .modal-body {
  background-color: #dd4b39 !important;
}
.bg-yellow,
.callout.callout-warning,
.alert-warning,
.label-warning,
.modal-warning .modal-body {
  background-color: #f39c12 !important;
}
.bg-aqua,
.callout.callout-info,
.alert-info,
.label-info,
.modal-info .modal-body {
  background-color: #00c0ef !important;
}
.bg-blue {
  background-color: #0073b7 !important;
}
.bg-light-blue,
.label-primary,
.modal-primary .modal-body {
  background-color: #3c8dbc !important;
}
.bg-green,
.callout.callout-success,
.alert-success,
.label-success,
.modal-success .modal-body {
  background-color: #00a65a !important;
}
.bg-navy {
  background-color: #001f3f !important;
}
.bg-teal {
  background-color: #39cccc !important;
}
.bg-olive {
  background-color: #3d9970 !important;
}
.bg-lime {
  background-color: #01ff70 !important;
}
.bg-orange {
  background-color: #ff851b !important;
}
.bg-fuchsia {
  background-color: #f012be !important;
}
.bg-purple {
  background-color: #605ca8 !important;
}
.bg-maroon {
  background-color: #d81b60 !important;
}
.bg-gray-active {
  color: #000;
  background-color: #b5bbc8 !important;
}
.bg-black-active {
  background-color: #000000 !important;
}
.bg-red-active,
.modal-danger .modal-header,
.modal-danger .modal-footer {
  background-color: #d33724 !important;
}
.bg-yellow-active,
.modal-warning .modal-header,
.modal-warning .modal-footer {
  background-color: #db8b0b !important;
}
.bg-aqua-active,
.modal-info .modal-header,
.modal-info .modal-footer {
  background-color: #00a7d0 !important;
}
.bg-blue-active {
  background-color: #005384 !important;
}
.bg-light-blue-active,
.modal-primary .modal-header,
.modal-primary .modal-footer {
  background-color: #357ca5 !important;
}
.bg-green-active,
.modal-success .modal-header,
.modal-success .modal-footer {
  background-color: #008d4c !important;
}
.bg-navy-active {
  background-color: #001a35 !important;
}
.bg-teal-active {
  background-color: #30bbbb !important;
}
.bg-olive-active {
  background-color: #368763 !important;
}
.bg-lime-active {
  background-color: #00e765 !important;
}
.bg-orange-active {
  background-color: #ff7701 !important;
}
.bg-fuchsia-active {
  background-color: #db0ead !important;
}
.bg-purple-active {
  background-color: #555299 !important;
}
.bg-maroon-active {
  background-color: #ca195a !important;
}
[class^="bg-"].disabled {
  opacity: 0.65;
  filter: alpha(opacity=65);
}
  
.fc-color-picker {
  list-style: none;
  margin: 0;
  padding: 0;
}
.fc-color-picker > li {
  float: left;
  font-size: 30px;
  margin-right: 5px;
  line-height: 30px;
}
.fc-color-picker > li .fa {
  -webkit-transition: -webkit-transform linear 0.3s;
  -moz-transition: -moz-transform linear 0.3s;
  -o-transition: -o-transform linear 0.3s;
  transition: transform linear 0.3s;
}
.fc-color-picker > li .fa:hover {
  -webkit-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  -o-transform: rotate(30deg);
  transform: rotate(30deg);
}
#add-new-event {
  -webkit-transition: all linear 0.3s;
  -o-transition: all linear 0.3s;
  transition: all linear 0.3s;
}
.external-event {
  padding: 5px 10px;
  font-weight: bold;
  margin-bottom: 4px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: 3px;
  cursor: move;
}
.external-event:hover {
  box-shadow: inset 0 0 90px rgba(0, 0, 0, 0.2);
}
  .text-red {
  color: #dd4b39 !important;
}
.text-yellow {
  color: #f39c12 !important;
}
.text-aqua {
  color: #00c0ef !important;
}
.text-blue {
  color: #0073b7 !important;
}
.text-black {
  color: #111111 !important;
}
.text-light-blue {
  color: #3c8dbc !important;
}
.text-green {
  color: #00a65a !important;
}
.text-gray {
  color: #d2d6de !important;
}
.text-navy {
  color: #001f3f !important;
}
.text-teal {
  color: #39cccc !important;
}
.text-olive {
  color: #3d9970 !important;
}
.text-lime {
  color: #01ff70 !important;
}
.text-orange {
  color: #ff851b !important;
}
.text-fuchsia {
  color: #f012be !important;
}
.text-purple {
  color: #605ca8 !important;
}
.text-maroon {
  color: #d81b60 !important;
}
.link-muted {
  color: #7a869d;
}
</style>





    <!-- Main content -->
    <div class=" card box-body" style='padding:20px;'>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid" style='padding-top:100px;'>
            <div class="box-header with-border">
              <h4 class="box-title">Schedule Type</h4>
            </div>
            <div class="box-body" id="scheduletype">
              <!-- the events -->
          
              <div id="external-events" >
                <div class="external-event bg-green">A</div>
                <div class="external-event bg-yellow">B</div>
                <div class="external-event bg-aqua">C</div>
                <div class="external-event bg-light-blue">Regular Day</div>
                <div class="external-event bg-red">Late Start</div>
                <div class="external-event bg-teal">Exam Day</div>
           


                
              </div> 
            </div>
            <!-- /.box-body -->
          </div>

          <div class="box ">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Schedule Type</h3>
            </div>
            <div class="box-body">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                <ul class="fc-color-picker" id="color-chooser">
                  <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <div class="input-group">
                <input id="new-event" type="text" class="form-control" placeholder="Event Title"><br>
                
                <!-- <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                </div> -->
                <!-- /btn-group -->
              </div>
              <div class="input-group-btn ">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                </div>
              <!-- /input-group -->
            </div>
          </div>
        </div>

        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    <section>
      <div>
 
        </ul>
     </div>

    
  </section>
  </div></div></div>
<script type="text/javascript">
 


</script>

  <!-- <div id="external-events">  
				<div class="external-event bg-green">A DAY</div>
        <div class="external-event bg-blue">B DAY</div>
        <div class="external-event bg-blue">C DAY</div>
  </div> -->

​

<script>
  //scheduletype
  $(document).ready(function(){
    $(document).on('click','.scheduletypeclass',function(){
      var scheduletypeid =$(this).data('sti');
          swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true
          },
          function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:base_url+"admin/masterscheduler/managescheduletype",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:'delete',data:scheduletypeid}),
                    dataType:'JSON',
                })
                .done(function(data){
                    if(data===true){
                        swal("Success!", "Successfully Added", "success");
                        location.reload(); 
                      

                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator",'error');
                    }
                })
             
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
    })
   
    // $(document).on('click','#add-new-event',function(){
   
    // })
    
  });
</script>

<!-- Slimscroll -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/colorpicker/bootstrap-colorpicker.min.css">
<script src="<?= base_url() ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>public/plugins/fastclick/fastclick.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?= base_url() ?>public/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
<script>
 var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
        base_url='<?php echo base_url(); ?>';
</script>
<!-- Page specific script -->


<script type="text/javascript">
  // var test = '<?php echo json_encode($info); ?>';
  // var test_2= JSON.parse(test);
  // var test_3=test_2[0]['ScheduleDateID']
  //   console.log(test_2);
  // console.log(test_2);



  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };
      
        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var datess = new Date();
    // var d = datess.getDate(),
    //     m = datess.getMonth(),
    //     y = datess.getFullYear();
        // console.log(new Date(y+"-"+d+"-"+m))
        // console.log(new Date(y, m, d, 10, 30))
        // console.log(typeof date);

        var day = datess.getDate();
        var month = datess.getMonth(); //Be careful! January is 0 not 1
        var year = datess.getFullYear();

        var dateString =year  + "-" +(month + 1) + "-" + day;
      
    $('#calendar').fullCalendar({
      
      header: {
        left: 'prev',
        center: 'title,',
        right: 'next'
      },
      eventLimit: true, // for all non-TimeGrid views
        views: {
          dayGridMonth: {
            eventLimit: 1 // adjust to 6 only for timeGridWeek/timeGridDay
          }
        },
      plugins: [ 'dayGrid' ],
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      
       //events:test_2,
      events:base_url+"admin/masterscheduler/get_events",
      //Random default events
      editable: true,
      //defaultView: 'dayGridMonth',      
      droppable: true, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay) { // this function is called when something is dropped
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);

        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        console.log(copiedEventObject.backgroundColor);
        copiedEventObject.borderColor = $(this).css("border-color");
       
        console.log(copiedEventObject.start._d);
         
        var datess = new Date(copiedEventObject.start._d);

        var day = datess.getDate();
        var month = datess.getMonth(); //Be careful! January is 0 not 1
        var year = datess.getFullYear();

        var dateString =year  + "-" +(month + 1) + "-" + day;
 
        ///ito ngay sir ano output alert ( 2019-5-14) ok na -ngudpate na sa db then available na sa calendar gmana na
        
        
        var data_events=[
          {
             
            // 'start':new Date(y, m, d),
            //  title: $.trim($(this).text()),
             //2019-05-01
            }

        ];
      


        $.ajax({
           url:base_url+"admin/masterscheduler/add_scheduledate",
           type:"POST",
           data:({[csrfName]: csrfHash,backgroundColor:$(this).css("background-color"),'start':dateString,'title':$.trim($(this).text())}),
           dataType:'JSON',
       })
       .done(function(data){
   
       })

        console.log($(this).css("background-color"));
        console.log(data_events);
        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }
      },
      eventClick: function(calEvent, jsEvent, view) {
        var scheduledateid=calEvent.ScheduleDateID
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true
          },
          function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:base_url+"admin/masterscheduler/delete_scheduledate ",
                    type:"POST",
                    data:({[csrfName]: csrfHash,data:scheduledateid}),
                    dataType:'JSON',
                })
                .done(function(data){
                    if(data===true){
                        swal("Success!", "Successfully Added", "success");
                        $('#calendar').fullCalendar( 'refetchEvents' );
                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator",'error');
                    }
                })
             
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
			},

    });

    /* ADDING EVENTS */
    var currColor = "#3c8dbc"; //Red by default
    //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    console.log(colorChooser);
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      console.log(currColor);
      
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }
      swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true
          },
          function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:base_url+"admin/masterscheduler/managescheduletype",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:'add',data:new_event,color:currColor}),
                    dataType:'JSON',
                })
                .done(function(data){
                    if(data===true){
                        swal("Success!", "Successfully Added", "success");
                        location.reload(); 
                      

                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator",'error');
                    }
                })
             
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      //console.log(currColor);
         var new_event =$("#new-event").val();
         
       
      $('#external-events').prepend(event);

      //Add draggable funtionality
      ini_events(event);
      
      //Remove event from text input
      $("#new-event").val("");
    });
  });
</script>




<script>
  //scheduletype
  // $(document).ready(function(){
  //   $.ajax({
  //          url:base_url+"admin/masterscheduler/scheduletype",
  //          type:"POST",
  //          data:({[csrfName]: csrfHash}),
  //          dataType:'JSON',
  //      })
  //      .done(function(data){
  //       $('#external-events').html(data);
  //      })
    
  // });
  
</script>
<script>
  $("#calender").addClass('active');
</script>  


