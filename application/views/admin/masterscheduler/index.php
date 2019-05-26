   <!-- fullCalendar 2.2.5-->
   <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fullcalendar/fullcalendar.print.css" media="print">
  <link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>">
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Calendar
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Schedule Type</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
                <!-- <div class="external-event bg-green">A Day</div>
                <div class="external-event bg-yellow">B Day</div>
                <div class="external-event bg-aqua">C Day</div>
                <div class="external-event bg-light-blue">Regular Day</div>
                <div class="external-event bg-red">Late Start</div>
                <div class="external-event bg-teal">Exam Day</div>
                <div class="external-event bg-navy">Prep Rally</div>
                <div class="external-event bg-teal">No School</div>

                <div class="external-event bg-muted">Half Day</div>
                <div class="external-event bg-fuchsia">Early Release</div>
                <div class="external-event bg-purple">Late Start</div>
                <div class="external-event bg-lime">90 Min Delay</div>
                <div class="external-event bg-orange">2 Hour Delay</div>
                <div class="external-event bg-pink">Prof. Development</div>
               -->


                
              </div>
            </div>
            <!-- /.box-body -->
          </div>

          <div class="box box-solid">
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
                <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                </div>
                <!-- /btn-group -->
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
<script type="text/javascript">
 


</script>

    

<!-- Slimscroll -->
<script src="<?= base_url() ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>public/plugins/fastclick/fastclick.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?= base_url() ?>public/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
<script>
 var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
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
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
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
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
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

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
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
  $(document).ready(function(){
    $.ajax({
           url:base_url+"admin/masterscheduler/scheduletype",
           type:"POST",
           data:({[csrfName]: csrfHash}),
           dataType:'JSON',
       })
       .done(function(data){
        $('#external-events').html(data);
       })
    
  });
  
</script>
<script>
  $("#calender").addClass('active');
</script>  


