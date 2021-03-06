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

    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/flipclock/flipclock.css">
  <link rel="manifest" href="<?=base_url() ?>manifest.json">

  <script src="https://kit.fontawesome.com/0ec2218b2c.js" crossorigin="anonymous"></script>
  <script src="<?= base_url() ?>public/plugins/flipclock/flipclock.min.js"></script>
  <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    <script src="<?=base_url() ?>public/dist/js/filterDropDown.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/yadcf/jquery.dataTables.yadcf.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>


<style>

.scroll-slow {
 height: 50px;	
 overflow: hidden;
 position: relative;
 background: #0c0ef;
 font-size:22px;
 color: white;
 border: none;
}
.scroll-slow p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 20px;

 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: scroll-slow 25s linear infinite;
 -webkit-animation: scroll-slow 25s linear infinite;
 animation: scroll-slow 25s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-slow {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes scroll-slow {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes scroll-slow {
 0%   { 
 -moz-transform: translateX(100%); /* Browser bug fix */
 -webkit-transform: translateX(100%); /* Browser bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Browser bug fix */
 -webkit-transform: translateX(-100%); /* Browser bug fix */
 transform: translateX(-100%); 
 }
}


    
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
<body class="hold-transition lockscreen" style="background-color:#ffffff!important;margin:0 auto; padding:0px;">

<div class='row' style='height: 100%; display: flex; justify-content: center; align-items: center;'>



   <div class="container bg-success bg-aqua"  style="padding-top:20px;" > 
   <div class=" scroll-slow col-md-12 col-sm-12 col-xs-12 pull-center ">
   </br>
   <p>Quote of the Day: "Hire character. Train skill." -Peter Schutz</p>
   </div>
      <div class="col-md-2 pull-center ">
        </div>
              <div class="col-md-`12` col-sm-12 col-xs-12">
                    <div class="pull-left col-md-2" >
                    <h3>Room: <span id='room'></span> </h3>
                    
                      <h4>Period: <span id='period_number'></span> </h4>
          </div>  

              <div class="pull-right col-md-2">
              <br>
              <h4 class="pull-right"> <a href="<?php echo base_url('Auth/logout');?>"><i class="fa fa-power-off bg-white"></i>LogOut</a></h4>
              </div>
      
              <div class="col-md-2 pull-center ">
        </div>
       </div>




   


    <div class="pull center col-md-12 col-sm-12 col-xs-12">
    <div class=" col-md-12 col-sm-12 col-xs-12 pull-center ">
    <br>  <br> 
    </div>
 

        <div class="col-md-12 col-sm-12 col-xs-12 pull-center" >
        <br>  <br>
 
        <span class="clock1 pull-center" style='text-align:center;width:auto;display:inline-block;'></span>
   
        <br>  <br>
 
        </div>  



    <div class=" col-md-12 col-sm-12 col-xs-12 pull-center ">
    <br>  <br> 
        </div>
        <div class="form-group">
        <div class="col-md-3 pull-center ">
        </div>

       
        <div class="col-md-6 pull-center ">

              <FORM id='myform' >
              <input type="text" id="student_id" class="form-control" placeholder="Student ID"  value="" autofocus>
            
              </FORM>
         
   
              
  
          </div>
          <div class="col-md-3 pull-center ">
        </div>
    
        </div>
        
         <div class="pull-right col-md-2">
        <br>
        </div>

    </div>


  


<div class=" bg-success bg-aqua"  style="padding-top:50px;" >



        <div class=" col-lg-12 cpull-center ">
    <br>  <br> 
        </div>
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
      <div class=" info-box bg-aqua col-md-12 col-sm-12 col-xs-12">
         <h4>SCHOOL WIDE ANNOUCEMENT</h4>
   
         <div id='annoucement' class='row'></div>
          
        <!-- /.info-box -->
      </div>
     


  </div>
</div>

</div>

  
  

  <!-- Automatic element centering -->
 
  
  <?php $this->load->view($view);?>
  
  <?php $this->load->view($view1);?>
  
  <!-- /.center -->

  <!-- jQuery 2.2.3 -->
  <script src="<?= base_url() ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?= base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
  <script src="<?php echo base_url('public/plugins/watch/watch.min.js');?>"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?php echo base_url('public/plugins/moment/moment.js')?>"></script>
  <!-- <script src="<?php echo base_url('public/assets/sweetalert.min.js');?>"></script> -->

</body>
</html>
<script src="<?= base_url() ?>upup.min.js"></script>
<script>
UpUp.start({
  'content-url': 'offline.html',
  'assets': ['/img/logo.png', '/css/style.css', 'headlines.json']
});
</script>
<script>

async function cacheData(request) {
    const cachedResponse = await caches.match(request);
    return cachedResponse || fetch(request);
}
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

e.returnValue = false;
  

}



var base_url="<?php echo base_url();?>";
var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';



    $(document).ready(function(){
      function update_data(){

  const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/terminal/get_terminal_status',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){

      if(data[0].master_terminal==='0' ||data[0].is_active==='0' ){
        function moveItem(){
        swal({
              title: ` Locked`,
              text: `Please Contact Administrator`,
              icon: "warning",
              showCancelButton: false,
              showConfirmButton: false,
              timer: 3000
           });}

           setInterval(moveItem,1000);
      

      }
  
  
      


    });}
    setInterval(update_data,50000);

});


$(document).ready(function(){

//   $("#terminal_modal").on('hidden.bs.modal', function () {
//   location.reload();
// });
  var status=[];
  var previous=[];
function update_data(){

 

  const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/terminal/get_emergency',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){

      if(data.status==false){     
        status=data;
        $("#student_id").prop("disabled", false);
    
      }
      else if(data.status==true)
      {
  
      var response=data['response'];
      
      status=data;

            if(response[0].is_drill==1 && response[0].is_active==1){
              function refresh(){
                location.reload();}
              
                function moveItem(){
               
                  $("#student_id").prop("disabled", true);
                swal({
                      title: `${response[0].emergency_name}`,
                      text: `This is a Drill
                      ${response[0].notification}`,
                      type: "warning",
                      showCancelButton: false,
                      showConfirmButton: false,
                      timer: 700
                  });}

                  setInterval(moveItem,2000);
                  function refresh(){
                location.reload();}
                  
                  setInterval(refresh,20000);
                  

              }
              else{
                  function moveItem(){
                
                  $("#student_id").prop("disabled", true);
                  swal({
                        title: `${response[0].emergency_name}`,
                        text: `${response[0].notification}`,
                        type: "warning",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 700
                    });}

                    setInterval(moveItem,2000);
                    setInterval(refresh,20000);
              }
            }    
     
      
  

    });



      

  }
setInterval(update_data,2000);

// status.watch(function (id, oldval, newval) {
//   console.log('o.' + id + ' changed from ' + oldval + ' to ' + newval);
//   return newval;rererr
// });


});




$(document).ready(function(){




  var datess = new Date();
  var day = datess.getDate();
  var month = datess.getMonth(); //Be careful! January is 0 not 1
  var year = datess.getFullYear();


  var dateString =year  + "-" +(month + 1) + "-" + day;
 


  const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/terminal/get_terminal_info',
        type:"POST",
        data:({[csrfName]: csrfHash,data:dateString}),
        dataType:'JSON',
    }).done(function(data){
      var response=data.response;
      
      const aa=response.HPLockStart.split(':');
      const bb=response.HPLockEnd.split(':');





       const teacher_name=`${response.FirstName} ${response.LastName}`;
  
       var dt=new Date(`${response['start']} ${response['PeriodStartTime']}`);
       var dt1=new Date(`${response['start']} ${response['PeriodEndTime']}`);
  
       var a=dt.setMinutes(dt.getMinutes() + parseInt(aa[1]));
       var a=dt.setSeconds(dt.getSeconds() + parseInt(aa[2]));
       var b=dt1.setMinutes(dt1.getMinutes() - parseInt(bb[1]));
       var b=dt1.setSeconds(dt1.getSeconds() - parseInt(bb[2]));

       a= new Date(a);
       b= new Date(b);
       const AvailableTime=a.toLocaleTimeString();
       const AvailableHPTime=b.toLocaleTimeString()

   
     
         
      $('#TeacherName').html(teacher_name);
      $('#period_number').html(data.period);
      $('#room').html(data.location);
  
      $('#SubjectName').html(response.course_description);
    $('#AvailableTime').html(`${AvailableTime}`);
    $('#AvailableHPTime').html(`${AvailableHPTime}`);

console.log(data.username);
    })

  
});

$(document).ready(function(){
  const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/terminal/get_announcement',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){

     const test=data.school_wide;
  
      test.forEach(function(element){
        console.log(element)

    

      
          let tahp=`<div class="col-md-6 col-sm-6 col-xs-12">

          <div class="info-box bg-aqua">
        <span class="info-box-text-sm hallpass_type">${element.Announcement}</span></br>
 
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        </div>`;


        var master_element = $("<div />");

        master_element.html(tahp);
        $("#annoucement").append(tahp); 
      });

    });
    

});




$(document).ready(function(){

  
    const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/terminal/get_info',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){

     var result=data.info;
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
      console.log(data.master.master_hallpass);


      if (status==='0' ){
        var bg='bg-gray',a='<div class="info-box">',a2='';
      }
      else if(data.master.master_hallpass==='0' || data.master.hallpass_is_active==='0')
      {
        var bg='bg-gray',a='<div class="info-box">',a2='';
      }
      else
      {
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
      else if(data.master.master_hallpass==0)
      
      {
        var a=`<a href=""><div class="info-box btn-hallpass" data-type="${element.PassTypeID}" data-id="${HallPass}" id="${HallPass}">`,
            a2='</a>',bg='bg-aqua';
      }
      else{
        var a=`<a href=""><div class="info-box btn-hallpass" data-type="${element.PassTypeID}" data-id="${HallPass}" id="${HallPass}">`,
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
  // $(document).on('click','.options',function(){
  //   swal({
  //   title: "Are you sure?",
  //   text: "The administration will be notified!",
  //   type: "warning",
  //   showCancelButton: true,
  //   confirmButtonClass: "btn-danger",
  //   confirmButtonText: "Yes!",
  //   closeOnConfirm: false
  // },
  // function(){
  //   swal("Thank You", "Hall Pass for Admin Notification", "success");
  // });
  // });

//student and hall pass swipe
  $(document).on('submit','#myform',function(e){
    if( $("#student_id").val()){
      const id=$("#student_id").val();
      e.preventDefault();
  
      $.ajax({
      url: base_url+"admin/terminal/get_student_schedule",
      type: "POST",
      dataType: "json",
     
      data: ({[csrfName]: csrfHash,id:id}),
      }).done(function (data){
    
        
        if(data['status']=='not_enrolled' && data['result'] !=null){
  
          swal({
            text:'You are Not Enrolled in this Class!',
            timer: 5000,
          
            title:`${data.result.first_name} ${data.result.last_name}`,
            type:'error'
            
           });
           $("#student_id").val('');
         
          
        }
       else if(data['status']=='welcome to class'){
  
            swal({
              text:'Welcome to Class!',
              timer: 5000,
            
              title:`${data.student.first_name} ${data.student.last_name}`,
              type:'error'
              
            });
            $("#student_id").val('');
          
            
          }
        else if(data['status']=='not_enrolled' && data['result'] === null){
          const student_id=$("#student_id").val();
          swal({
            text:'You are Not Enrolled in this School !',
            timer: 5000,
            title:`${student_id}`, 
            type:'error'
            
           });
           $("#student_id").val('');

        }

        else if(data.status==='updated'){
          console.log(data);
          // const response=data['response'];
          //                 const time_swipe=new Date(response['DateCreated']);
          //                 const limit=response['TimeAllocated'].split(':');
          //                 var time_limit=time_swipe.getTime()+parseInt(limit[1])*60*1000+parseInt(limit[2])*1000;
          //                 const sec=limit[2].split('.');
          const date_created=new Date(data.response.DateCreated);
          const date_ended=new Date(data.response.date_time_ended);
          const difference= date_ended-date_created;
          const tt=(data.time_limit).split(':');
          var hallpass_limit=date_created.getTime()+parseInt(tt[1])*60*1000+parseInt(tt[2])*1000;
          const a=(hallpass_limit-date_ended.getTime())/(60*1000);
         
          console.log(moment("1900-01-01 00:00:00").add(Math.abs(a), 'minutes').format("HH:mm:ss")+'hr') 
          if(a<0)
          {
            
          swal({
            title:`Hallpass Swipe`,
            timer: 5000,
            text:`"Welcome back! You are -${moment("1900-01-01 00:00:00").add(Math.abs(a), 'minutes').format("HH:mm:ss")+' hr'} "LATE"`,
           });
           $("#student_id").val('');

          }
          else{
            
          swal({
            title:`Hallpass Swipe'`,
            timer: 2000,
            inputPlaceholder: 'Enter here',
            text:`"Wecome back! Thank you for checking in ON TIME"`,
           });
           
           $("#student_id").val('');
           
        

          }
           
 

        }
        else if(data=='late'){
          swal({
            title:'You are Late',
            timer: 5000,
            text:'Please Go to Admin Office',
           });
           $("#student_id").val('');
        }
          else if(data['text']=='Proceed'){
          swal({
            title:'Incorrect Room',
            timer: 5000,
            text:`Please Proceed to ${data['title']} : ${data['room']}`,
           });
           $("#student_id").val('');
           
           
        }
        else if(data['status'] === 'new_attendance'){
               
          if(data['is_first']==0){
            console.log('ji');

            setTimeout(function() {
            //your code to be executed after 1 second
            swal({
              title: "Lunch?",
              text: "Do you need a School lunch today?",
      
              showCancelButton: true,
              confirmButtonColor: '#DD6B55',
              confirmButtonText: 'Yes',
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
            });
          }, 10000);
          } 
     
          const response=data['response'];
       
          var time='';
        
          const mm=response['GracePeriod'].split(':');
          const tt=response['TransitionTime'].split(':');
          var status='';
          var type='';
          var start=new Date(`${response['AttendanceDate']} ${response['PeriodStartTime']}`).getTime()+parseInt(tt[1])*60*1000+parseInt(tt[2])*1000;
          var swipe=new Date(`${response['AttendanceDate']} ${response['AttendanceTime']}`).getTime();
          var grace=start + parseInt(mm[1])*60*1000+ parseInt(mm[2])*1000;
          var message='';
          var f=(grace-swipe)/(1000*60);
                    if (swipe<=start && response.AttendanceTime!=''){
                        status= `"Welcome to class! You are ON TIME." (individual and school announcements will appear on the terminal)`;
                        type='success';
                    }else if(swipe>=start && swipe<=grace)
                    {
                      status= `"Welcome to class! You just made it!" (individual and school announcements will appear on the terminal)`;
                      type='success';
                      
                    }
                    else{
                      status= `"Welcome to class! You are LATE" (individual and school announcements will appear on the terminal)`;
                      type='warning'
                        var a=Math.trunc(f);
                        
                        var b=Math.abs(Math.trunc((f-a)*60));
                     
                        if(b<=9){
                            time `(${Math.abs(a)}:0${b})`
                        }else{
                            time= `(${Math.abs(a)}:${b})`
                       }}
                  
                    swal({
            title:`${status}`,
            timer: 5000,
            text:`You are ${status} : ${time}`,
            type:`${type}`,
           });

           $("#student_id").val('');
          
          
        }
        else if(data['status'] === 'show_hallpass'){
          var student_name=`${data.student.first_name} ${data.student.last_name}`
    
          $('#student_name').html(student_name);
          const ind_annoucement=data.announcement;

  
          ind_annoucement.forEach(function(element){
              console.log(element)

          

            
                let tahp=`<div class="col-md-6 col-sm-12 col-xs-12">

              
              <span class="info-box-text-sm hallpass_type">${element.Announcement}</span></br>
      
        
           
              </div>`;


              var master_element = $("<div />");

              master_element.html(tahp);
              $("#individual").append(tahp); 
            });








        
       
          $("#terminal_modal").modal("show");
          
          setTimeout(() => {
            location.reload();
          }, 600000);
          var id=$("#student_id").val();

         // $('body').unbind('click').bind('.btn-hallpass', function (e) {
         $("body").one("click",".btn-hallpass",function(e){
            e.preventDefault();
            $(this).find('#inputName').focus();

            $(this).data('id');
            console.log( $(this).data('id'));
            const hallpass_type= $(this).data('id');
            const typeid=$(this).data('type');
        if(hallpass_type=='Other')
        {
              $(document).off('focusin.modal');

              var value;
              const select = document.createElement('select');
              select.className = 'select-custom'

                $.ajax({
                url: base_url+'admin/terminal/get_other_hallpass',
                dataType: 'json',
                type: 'POST',          
                data: ({[csrfName]: csrfHash})
                })
                .done(function (data) { 
                  for (let index = 0; index < data.length; index++) {
                    const element = data[index]['location'];
                    window['option'+index] = document.createElement('option');
                    window['option'+index].innerHTML =element;
                    window['option'+index].value = element;
                    select.appendChild(window['option'+index]);
                  }
                })
                select.onchange = function selectChanged(e) {
                  value = e.target.value
                }
                swal("Enter the Hallpass name here", {
                    content: {
                  element: select,
                }
                })
                .then(function(value) {
                        value=$(".select-custom").val();
                          $.ajax({
                          url: base_url+"admin/terminal/get_student_student_hallpass",
                          type: "POST",
                          dataType: "json",
                    
                          data: ({[csrfName]: csrfHash,id:id,hallpass:value,type:typeid}),}).done(function(data)
                          {
                          if(data['status']==='hallpass_updated')
                          {
                                const response=data['response'];
                                const time_swipe=new Date(response['DateCreated']);
                                const limit=response['TimeAllocated'].split(':');
                                var time_limit=time_swipe.getTime()+parseInt(limit[1])*60*1000+parseInt(limit[2])*1000;
                                const sec=limit[2].split('.');

                                const limit_string=new Date(time_limit).toLocaleTimeString();
                      
                                
                                swal({
                                    title:`${data['response']['hallpass']}`,
                            
                                    text:`Activated:${time_swipe.toLocaleTimeString()} 
                                    You Have ${limit[1]}:${sec[0]} Minutes
                                    Please swipe back on or before ${limit_string}
                                    Destination: ${data['location']}` ,
                                    timer: 5000,
                                            
                                  });
                                
                          }
                          else if(data['status']==='locked')
                          {
                                  const response=data['response'];
                                
                                  if(data['type']==='start'){

                                  swal({
                                        title:`Locked`,
                                        timer: 5000,
                                        text:`"No Pass! Hallpass will be available in ${response}.`,
                                                
                                      });

                                        }
                                    if(data['type']==='end'){

                                      swal({
                                            title:`Locked`,
                                            timer: 5000,
                                            text:`"No Pass!" Hallpass is available next period"`,
                                                    
                                          });

                                      }

                          }
                        else if(data['status']==='Limit Reached')
                        {
                          const response=data['response'];
                        
              

                          swal({
                                title:`Teacher Limit Reached`,
                                timer: 5000,
                                text:`Locked: There are ${response} Non Admin Hall Pass, Please wait.`,     
                              });
                        

                        }
                        else if(data['status']==='Student Reached')
                          {
                            const response=data['response'];
                            
                          
                            swal({
                                  title:`Student Limit Reached`,
                                  timer: 5000,
                                  
                                  text:`You have Reached ${response} Hall Pass for this 
                                  ${data.info.name}(${data.info.name_id})
                                  ${data.info.start} -  ${data.info.end}. 
                                  Please contact your teacher`,     
                                });

                          }
              
            
      
          
                      $("#student_id").val('');
                          $("#terminal_modal").modal("hide");
                        $("#student_id").val('');
                      
                        })
                });
        }
        else{

        

            $.ajax({
            url: base_url+"admin/terminal/get_student_student_hallpass",
            type: "POST",
            dataType: "json",
       
            data: ({[csrfName]: csrfHash,id:id,hallpass:$(this).data('id')}),}).done(function(data)
            {
                    if(data['status']==='hallpass_updated')
                    {
                          const response=data['response'];
                          const time_swipe=new Date(response['DateCreated']);
                          const limit=response['TimeAllocated'].split(':');
                          var time_limit=time_swipe.getTime()+parseInt(limit[1])*60*1000+parseInt(limit[2])*1000;
                          const sec=limit[2].split('.');

                          const limit_string=new Date(time_limit).toLocaleTimeString();
                
                          
                          swal({
                              title:`${data['response']['hallpass']}`,
                       
                              text:`Activated:${time_swipe.toLocaleTimeString()} 
                              You Have ${limit[1]}:${sec[0]} Minutes
                              Please swipe back on or before ${limit_string}
                              Destination: ${data['location']}` ,
                              timer: 5000,
                                      
                            });
                          
                     }
                     else if(data['status']==='locked')
                    {
                            const response=data['response'];
                          
                            if(data['type']==='start'){

                            swal({
                                  title:`Locked`,
                                  timer: 5000,
                                  text:`"No Pass! Hallpass will be available in ${response}.`,
                                          
                                });

                                  }
                              if(data['type']==='end'){

                                swal({
                                      title:`Locked`,
                                      timer: 5000,
                                      text:`"No Pass!" Hallpass is available next period"`,
                                              
                                    });

                                }

                     }
                      else if(data['status']==='Limit Reached')
                      {
                        const response=data['response'];
                      
            

                        swal({
                              title:`Teacher Limit Reached`,
                              timer: 5000,
                              text:`Locked: There are ${response} Non Admin Hall Pass, Please wait.`,     
                            });
                       

                      }
                      
                      else if(data['status']==='Student Reached')
                        {
                          const response=data['response'];
                          
                        
                          swal({
                                title:`Student Limit Reached`,
                                timer: 5000,
                                
                                text:`You have Reached ${response} Hall Pass for this 
                                ${data.info.name}(${data.info.name_id})
                                ${data.info.start} -  ${data.info.end}. 
                                Please contact your teacher`,     
                              });

                        }
            
           
    
        
                     $("#student_id").val('');
                        $("#terminal_modal").modal("hide");
                      $("#student_id").val('');
                     
                      })
                 
                  
        }//end of else switch

          });
        }
      })
    }else{
      swal("Please Enter Your Student ID");
      //location.reload();
    }
  })


    csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
 


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

  <script src="<?= base_url() ?>public/plugins/flipclock/flipclock.min.js"></script>
	
<script type="text/javascript">
	var clock = $('.clock1').FlipClock({
		clockFace: 'TwelveHourClock'
	});
</script>

1