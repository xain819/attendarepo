<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<style>

    
      html,body {
        padding:0;
        margin:0;
        background:#fffff;
        text-align:center;
       
      }

      body {
        padding-top:3em;
      }

      h1,
      h2 {
        margin-bottom:3rem;
        font-family:sans-serif;
        color:#666;
      }

      h2 {
        margin-top:2em;
      }

      .clock {
        position:relative;
        font-family:monaco,consolas,"courier new",monospace;
        font-size:3.86rem;
        line-height:1.375;
      }

      .clock:before,
      .clock:after {
        position:absolute;
        top:0;
        bottom:0;
        content:':';
        z-index:2;
        line-height:1.15;
        color:#333;
      }

      .clock:before {
        left:2.325em;
      }

      .clock:after {
        right:2.325em;
      }

      .clock span {
        position:relative;
        display:inline-block;
        padding:0 .25em;
        margin:0 .06125em;
        z-index:1;

        -webkit-transform:perspective(750);
        -moz-transform:perspective(750);
        -ms-transform:perspective(750);
        transform:perspective(750);

        -webkit-transform-style:preserve-3d;
        -moz-transform-style:preserve-3d;
        -ms-transform-style:preserve-3d;
        transform-style:preserve-3d;
      }

      .clock span:first-child {
        margin-left:0;
      }

      .clock span:last-child {
        margin-right:0;
      }

      .clock span:nth-child(2),
      .clock span:nth-child(4) {
        margin-right:.3em;
      }

      .clock span:nth-child(3),
      .clock span:nth-child(5) {
        margin-left:.3em;
      }

      .clock span:before,
      .clock span:after {
        position:absolute;
        left:0;
        top:0;
        right:0;
        bottom:0;
        color:#eee;
        text-shadow:0 1px 0 #fff;
        background:#333;
        border-radius:.125em;
        outline:1px solid transparent; /* fix jagged edges in ff */

        -webkit-backface-visibility:hidden;
        -moz-backface-visibility:hidden;
        -ms-backface-visibility:hidden;
        backface-visibility:hidden;

        -webkit-transition:-webkit-transform .75s, opacity .75s;
        -moz-transition:-moz-transform .75s, opacity .75s;
        -ms-transition:-ms-transform .75s, opacity .75s;
        transition:transform .75s, opacity .75s;
      }

      .clock span:before {
        opacity:1;
        z-index:1;
        content:attr(data-old);

        -webkit-transform-origin:0 0;
        -moz-transform-origin:0 0;
        -ms-transform-origin:0 0;
        transform-origin:0 0;

        -webkit-transform:translate3d(0,0,0) rotateX(0);
        -moz-transform:translate3d(0,0,0) rotateX(0);
        -ms-transform:translate3d(0,0,0) rotateX(0);
        transform:translate3d(0,0,0) rotateX(0);
      }

      .clock span:after {
        opacity:0;
        z-index:2;
        content:attr(data-now);

        -webkit-transform-origin:0 100%;
        -moz-transform-origin:0 100%;
        -ms-transform-origin:0 100%;
        transform-origin:0 100%;

        -webkit-transform:translate3d(0,-102.5%,0) rotateX(90deg);
        -moz-transform:translate3d(0,-102.5%,0) rotateX(90deg);
        -ms-transform:translate3d(0,-102.5%,0) rotateX(90deg);
        transform:translate3d(0,-102.5%,0) rotateX(90deg);
      }

      .clock .flip:before {
        opacity:0;
        -webkit-transform:translate3d(0,102.5%,0) rotateX(-90deg);
        -moz-transform:translate3d(0,102.5%,0) rotateX(-90deg);
        -ms-transform:translate3d(0,102.5%,0) rotateX(-90deg);
        transform:translate3d(0,102.5%,0) rotateX(-90deg);
      }

      .clock .flip:after {
        opacity:1;
        -webkit-transform:translate3d(0,0,0) rotateX(0);
        -moz-transform:translate3d(0,0,0) rotateX(0);
        -ms-transform:translate3d(0,0,0) rotateX(0);
        transform:translate3d(0,0,0) rotateX(0);
      }
      .icon-terminal{
        font-size:24px;
      }

</style>
<body class="hold-transition lockscreen" style="background-color:#00c0ef!important;margin:0 auto; padding:0px;">

<section style="background-color:#00c0ef!important;margin:0 auto; padding:0px;">


<div class="container bg-success bg-aqua"  >
  <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="pull-left col-md-2" >
        <h3>Room: <span id='location'></span> </h4>
          <h4>Period: <span id='period_number'></span> </h4>
        </div>  

         <div class="pull-right col-md-2">
        <br>
        <h4 class="pull-right"> <a href="<?php echo base_url('Auth/logout');?>"><i class="fa fa-power-off bg-white"></i>LogOut</a></h4>
        </div>
 
   </div>
   <div class=col-md-3>
  </div>
    <div class="pull center col-md-12 col-sm-12 col-xs-12">
        <div class="pull-center" >
        
        <br>  <br>
        <span class="clock"></span>
        <br>  <br>
        </div>  
        
        <div class="form-group">
        <div class="col-md-12">
        <div class="col-md-6 pull-center ">

              <FORM id='myform' >
              <input type="text" id="student_id" class="form-control" placeholder="Student ID"  value="" autofocus>
            
              </FORM>
              
  
          </div>
      
        </div>
          
        </div>
        
         <div class="pull-right col-md-2">
        <br>
        </div>
    </div>
    <div class=col-md-3>
    </div>
</section>
<section>
<div class="container bg-success bg-aqua"  style="padding-bottom:0px;" >
  <div class="row">
  <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="info-box bg-aqua">
              <span class="info-box-icon bg-aqua"><i  style='font-size:24px;' class="fa fa-user"></i></span>
              <div class="info-box-content bg-aqua">
                  <br>
                  <span class="info-box-text-sm bg-aqua" style='font-size:10px;'>Teacher</span>
                  <span class="info-box-number bg-aqua" style='font-size:10px;' id="TeacherName"></span>
              </div>
              <!-- /.info-box-content -->
          </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="info-box bg-aqua">
              <span class="info-box-icon bg-aqua"><i style='font-size:24px;' class="fa fa-calendar-minus-o"></i></span>
              <div class="info-box-content">
              <br>
                  <span class="info-box-text-sm" style='font-size:10px;'>Subject</span>
                  <span class="info-box-number" style='font-size:10px;' id="SubjectName"></span>
              </div>
              <!-- /.info-box-content -->
          </div>
        <!-- /.info-box -->
      </div>
    
      <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="info-box bg-aqua fa-xs">
              <span class="info-box-icon bg-aqua"><i style='font-size:24px;'  class="fa fa-unlock-alt icon-terminal"></i></span>
              <div class="info-box-content">
              <br>
                  <span class="info-box-text-sm" style='font-size:10px;' >Available</span>
                  <span class="info-box-number"  style='font-size:10px;'  id="AvailableTime"></span>
              </div>
              <!-- /.info-box-content -->
          </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="info-box bg-aqua">
              <span class="info-box-icon bg-aqua"><i  style='font-size:24px;' class="fa fa-lock icon-terminal"></i></span>
              <div class="info-box-content">
              <br>
                  <span class="info-box-text-sm"  style='font-size:10px;'  >Locked</span>
                  <span class="info-box-number"  style='font-size:10px;'  id="AvailableHPTime"></span>
              </div>
              <!-- /.info-box-content -->
          </div>
        <!-- /.info-box -->
      </div>

  </div>
</div>
</section>

  
  

  <!-- Automatic element centering -->
 
  
  <?php $this->load->view($view);?>
  
  <?php $this->load->view($view1);?>
  <!-- /.center -->

  <!-- jQuery 2.2.3 -->
  <script src="<?= base_url() ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?= base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
</body>
</html>
<script>
var timee;
<?php if($this->username=='123'){?>
  timee="11:00:00";
<?php }
?>

<?php if($this->username=='1234'){?>
  timee="14:00:00";
<?php }
?>

document.querySelector('#myform').onsubmit = function(e){
  e.preventDefault();
  function Studentid(){
  var x = document.getElementById("myText").value;
  const a=document.getElementById("student_id").innerHTML = x;}
  e.preventDefault();
  
 
}



var base_url="<?php echo base_url();?>";
var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

$(document).ready(function(){
  var datess = new Date();
  var day = datess.getDate();
  var month = datess.getMonth(); //Be careful! January is 0 not 1
  var year = datess.getFullYear();


  var dateString =year  + "-" +(month + 1) + "-" + day;
 
  $('#TeacherName').html("ROB");

  const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/terminal/get_terminal_info',
        type:"POST",
        data:({[csrfName]: csrfHash,data:dateString}),
        dataType:'JSON',
    }).done(function(data){
     
      console.log(data);
      console.log('hi');
      
      const aa=data[0].HPLockStart.split(':');
      const bb=data[0].HPLockEnd.split(':');





       const teacher_name=`${data[0].FirstName} ${data[0].LastName}`;
  
       var dt=new Date(`${data[0]['start']} ${data[0]['PeriodStartTime']}`);
       var dt1=new Date(`${data[0]['start']} ${data[0]['PeriodEndTime']}`);
  
       var a=dt.setMinutes(dt.getMinutes() + parseInt(aa[1]));
       var a=dt.setSeconds(dt.getSeconds() + parseInt(aa[2]));
       var b=dt1.setMinutes(dt1.getMinutes() - parseInt(bb[1]));
       var b=dt1.setSeconds(dt1.getSeconds() - parseInt(bb[2]));

       a= new Date(a);
       b= new Date(b);
       const AvailableTime=a.toLocaleTimeString();
       const AvailableHPTime=b.toLocaleTimeString()

       console.log(a.toLocaleTimeString());
       console.log(a.toLocaleTimeString());
     
         
      $('#TeacherName').html(teacher_name);
      $('#period_number').html(data[0].period_number);
      $('#location').html(data[0].location);
      $('#SubjectName').html(data[0].course_description);
    $('#AvailableTime').html(`${AvailableTime}`);
    $('#AvailableHPTime').html(`${AvailableHPTime}`);


    })
  
});


$(document).ready(function(){
    const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/terminal/get_info',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){
    console.log('hi');
   
     var result=data;
     var hallpass=result; 

     const ahp = hallpass.filter(function(test){
         return test.PassTypeID==='1';
       });
     const nhp = hallpass.filter(function(test){
         return test.PassTypeID==='2';
       });

       nhp.forEach(function(element){
       
      const HallPass=element.access;
      const status=element.is_active;
      const PassTypeID=element.PassTypeID;

      if (status==='0'){
        var bg='bg-gray',a='<div class="info-box">',a2='';
      }
      else{
        var a=`<a href=""><div class="info-box btn-hallpass" data-type="${PassTypeID}" data-id="${HallPass}" id="${HallPass}">`,
            a2='</a>',bg='bg-aqua';
      }

      

   
       let tnhp=`<div class="col-md-6 col-sm-6 col-xs-12">

                                ${a}
                                <span class="info-box-icon ${bg}"><i class="${element.icon}"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text-sm hallpass_type">${HallPass}</span>
                                    <span class="info-box-number">${element.time_limit} Minutes</span>
                                </div>
                                <!-- /.info-box-content -->
                                </div>${a2}
                                <!-- /.info-box -->
                            </div>`;


       var master_element = $("<div />");

        master_element.html(tnhp);
        $("#tnhp").append(tnhp); 
       });
      
      ahp.forEach(function(element){
      const HallPass=element.access;
      const status=element.is_active;
    
      if (status==='0'){
        var bg='bg-gray',a='<div class="info-box">',a2='';
      }
      else{
        var a=`<a href=""><div class="info-box btn-hallpass" data-id="${HallPass}" id="${HallPass}">`,
            a2='</a>',bg='bg-aqua';
      }
        
        

       let tahp=`<div class="col-md-6 col-sm-6 col-xs-12">

                  ${a}
                  <span class="info-box-icon ${bg}"><i class="${element.icon}"></i></span>
                  <div class="info-box-content">
                      <span class="info-box-text-sm hallpass_type">${HallPass}</span>
                      <span class="info-box-number">${element.time_limit} Minutes</span>
                  </div>
                  <!-- /.info-box-content -->
                  </div>${a2}
                  <!-- /.info-box -->
                  </div>`;


       var master_element = $("<div />");

        master_element.html(tahp);
        $("#tahp").append(tahp); 
       });
	});
});

$(document).ready(function(){
  $(document).on('click','.options',function(){
    swal({
    title: "Are you sure?",
    text: "The administration will be notified!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Yes!",
    closeOnConfirm: false
  },
  function(){
    swal("Thank You", "Hall Pass for Admin Notification", "success");
  });
  });

//student and hall pass swipe
  $(document).on('submit','#myform',function(){
    if( $("#student_id").val()){
      var id=$("#student_id").val();
      $.ajax({
      url: base_url+"admin/terminal/get_student_schedule",
      type: "POST",
      dataType: "json",
      data: ({[csrfName]: csrfHash,id:id}),
      }).done(function (data){
        if(data=='not_enrolled'){
  
          swal({
            title:'Not Enrolled in this Class',
            timer: 2000,
            text:'',
           });
           $("#student_id").val('');
         
          
        }else if(data=='updated'){
          swal({
            title:'Present on-time',
            timer: 2000,
            text:'',
           });
           $("#student_id").val('');
           
        }
        else if(data=='late'){
          swal({
            title:'You are Late',
            timer: 2000,
            text:'Please Go to Admin Office',
           });
           $("#student_id").val('');
           swal.close()
           
        }
        else{
          console.log(data);
          $("#terminal_modal").modal("show");

          $("body").on("click",".btn-hallpass",function(){
            console.log($(this).data('id'));
            $.ajax({
            url: base_url+"admin/terminal/get_student_student_hallpass",
            type: "POST",
            dataType: "json",
            data: ({[csrfName]: csrfHash,id:id,hallpass:$(this).data('id')}),}).done(function(data){
              $("#terminal_modal").modal("hide");
            })
          })
        }
      })
    }else{
      swal("Please Enter Your Student ID");
      location.reload();
    }
  })


    csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
  $.ajax({
    url: base_url+"admin/Terminal/test",
    type: "POST",
    dataType: "json",
    data: ({[csrfName]: csrfHash}),
  })
  .done(function (data) {
 

      $("#terminal_alert_modal").modal('show');
      $("#TimeIn").text(timee);
     $('#TeacherName').html(data.Teacher);
    $('#SubjectName').html(data.Subject);
    $('#AvailableTime').html(data.AvailableUntil);
    $('#AvailableHPTime').html(data.HallPassLock);
  })
  


  var Clock = (function(){

  var exports = function(element) {
    this._element = element;
    var html = '';
    for (var i=0;i<6;i++) {
      html += '<span>&nbsp;</span>';
    }
    this._element.innerHTML = html;
    this._slots = this._element.getElementsByTagName('span');
    this._tick();
  };

  exports.prototype = {

    _tick:function() {
      var time = new Date();
      this._update(this._pad(time.getHours()) + this._pad(time.getMinutes()) + this._pad(time.getSeconds()));
      var self = this;
      setTimeout(function(){
        self._tick();
      },1000);
    },

    _pad:function(value) {
      return ('0' + value).slice(-2);
    },

    _update:function(timeString) {

      var i=0,l=this._slots.length,value,slot,now;
      for (;i<l;i++) {

        value = timeString.charAt(i);
        slot = this._slots[i];
        now = slot.dataset.now;

        if (!now) {
          slot.dataset.now = value;
          slot.dataset.old = value;
          continue;
        }

        if (now !== value) {
          this._flip(slot,value);
        }
      }
    },

    _flip:function(slot,value) {

      // setup new state
      slot.classList.remove('flip');
      slot.dataset.old = slot.dataset.now;
      slot.dataset.now = value;

      // force dom reflow
      slot.offsetLeft;

      // start flippin
      slot.classList.add('flip');

    }

  };

  return exports;
  }());

  var i=0,clocks = document.querySelectorAll('.clock'),l=clocks.length;
  for (;i<l;i++) {
  new Clock(clocks[i]);
  }
})
</script>
