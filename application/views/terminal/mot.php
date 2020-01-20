
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
<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gleek - Bootstrap Admin Dashboard HTML Template</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    
    <div class="login-bg h-100">
        <div class="container h-100">
          
            <div class="row justify-content-center h-100">
                <div class="col-xl-12">
             
                    <div class="form-input-content login-form">
                        <div class="card">
                            <div class="card-body">
                            <div class="row grid">
                              <div class="col-lg-12">
                                  <div class="grid-col">
                                  <h1 class="text-center"><i class="fas fa-school"></i> Stephen F. Austin Middle School</h1>
                                  </div>
                                  <div class='grid row '>
                                  <input type="hidden" id="Period_ID" class="hide">
                                  <div class=" card col-lg-2" id="periodid">
                                  </div>
                                  <div class="card col-lg-2" id="PeriodStart">
                                  </div>
                                  <div class="card col-lg-2" id="daytoday">
                                  </div>
                                  <div class="card col-lg-2" id="datetoday">
                                  </div>
                                  <div class="card col-lg-2" id="scheduletypeid">r
                                  </div>
                                  <div class="card col-lg-2">r
                                  </div>
                                  </div>
                                  
                                  
                              </div>
                            </div>

                             <div class="row grid">
                             <div class="col-lg-3"></div>
                              <div class="col-lg-6">
                                  <div class="grid-col">
                                    <FORM id='myform' >
                                        <input type="text" id="student_id" class="form-control" placeholder="Student ID"  value="" autofocus>
                                    </FORM>
                                  </div>
                              </div>
                              <div class="col-lg-3"></div>
                             </div>

                             <div class="row grid">
                             <div class="col-lg-2"></div>
                              <div class="col-lg-8">
                                  <div class="grid-col">.Col-lg-12</div>
                              </div>
                              <div class="col-lg-2"></div>
                             </div>
                             <div class="row grid" id="annoucemendt">
                          
                              
                              
                        
                             </div>
                             <div class="row grid">
                          
                          <div class="col-lg-6">
                              <div class="grid-col">
                                <div class='card-body'>
                                <h2 class="text-center"><i class="fas fa-school"></i> Main Office</h2>
                                <h5 class="text-center"><i class="fas fa-school"></i> Class Pass</h5>
                                <h5 class="text-center"><i class="fas fa-school"></i> 5 Minutes<h5>
</br>

                                </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="grid-col">

                              <h4 class="text-center"><i class="fas fa-school"></i> Custom Pass</h4>

                              <form class="mt-5 mb-5">
                              <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label"><span style='font-size:10px;'>Enter Location</span></label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Staff Name / Room #" aria-describedby="validationDefaultUsername2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label"><span style='font-size:10px;'>Enter Hall Pass Time Limit</span></label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Choose from 1-10 min" aria-describedby="validationDefaultUsername2">
                                                </div>
                                            </div>
                                        </div>
                                </form>
                              </div>
                          </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

<div class="modal fade" tabindex="-1" role="dialog" id="terminal_modal"  >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
    
           
                <button onClick="window.location.reload();" type="button" class="btn btn-outline-primary-lg pull-center" data-dismiss="modal" aria-label="Cancel"><span aria-hidden="true">Cancel</span></button>
                <!-- <h4 class="modal-title">Attenda Track</h4> -->
            </div>
            <div class="modal-body">
                
                <div class="container-fluid" style="padding:20px;">
                <div class="col-md-12 col-sm-12 col-xs-12"> 
                    <h4><span id='student_name'><span><h4>
                    </br>
                    </br>
                    </div>
           
                    <div class=" col-md-12 col-sm-12 col-xs-12"> 
                    INDIVIDUAL ANNOUNCEMENT
                    <div id='individual'>
                    </div>
                    </br>
                    </br>
                    </br>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4> Administrative Hall Pass</h2>
                        <div id='tahp' class="row">
                        </div>
                    
                    
                    </div>
                 
               
                </div><!-- /.container -->
            </div><!-- /.modalbpdy -->
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
           
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="../../assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>

    <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url('public/plugins/moment/moment.js')?>"></script>
</body>

</html>

<script>
var base_url="<?php echo base_url();?>";
var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

$(document).ready(function(){
    const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/terminal/get_announcement',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){

     const test=data.school_wide;
  
      test.forEach(function(element){
          let tahp=`
                    <div class="col-lg-6">
                        <div class="grid-col">${element.Announcement}</div>
                    </div>
                    `;
        var master_element = $("");
        $("#annoucement").append(tahp); 
      });

    });
    $.ajax({
        url:'<?php echo base_url(); ?>admin/terminal/get_period',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){
        console.log(data[0].PeriodID);
        $("#Period_ID").val(data[0].PeriodID)
        $("#periodid").html("Period "+data[0].PeriodID);
        $("#PeriodStart").html(moment().format("h:mm:ss a"));
        $("#daytoday").html(moment().format('dddd'));
        $("#datetoday").html(moment().format('l'));
        $("#scheduletypeid").html(data[0].schedule_type+"-Day");
    });
    
    $(document).on('change',"#student_id",function(){
       StudentID=$(this).val();
        const a =$.ajax({
            url:'<?php echo base_url(); ?>admin/terminal/manageterminal',
            type:"POST",
            data:({[csrfName]: csrfHash,StudentID:StudentID}),
            dataType:'JSON',
        }).done(function(data){
            $("#terminal_modal").modal('show');
            bg='bg-aqua'
            $("#tahp").html('');
            $("#student_name").text(data.studentinfo[0].last_name+', '+data.studentinfo[0].first_name);
            data.hallpass.forEach(function(item){
             
                $("#tahp").append(   `
                <button id="select_hallpass" value=${item.HallPass} type="button" class="alert alert-success" >
                <div class="info-box btn-hallpass"  data-type="${item.PassTypeID}" data-id="${item.HallPass}" id="${item.HallPass}">
                    <div class="col-md-3 ">
                    
                        <span class="info-box-icon ${bg}"><i class=""></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text-sm hallpass_type">${item.HallPass}</span>
                            <span class="info-box-number">${item.TimeAllocated} Minutes</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                        <!-- /.info-box -->
                </div>
                </button>
                `)
            });
        })
    })
    $(document  ).on('click','#select_hallpass',function(){
        if($(this).val()=='Other'){

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
                insert_attendance($("#Period_ID").val(),value)
            })
        }else{
            insert_attendance($("#Period_ID").val())
        }
    })
    function insert_attendance(Period,value){
     
        $data={}
        $data['attendance_time_mot']=moment().format('hh:mm:ss')
        $data['PeriodID']=Period
        $data['AttendanceDate']=moment().format('YYYY-MM-DD');
        $.ajax({
        url: base_url+'admin/terminal/insert_attendance',
        dataType: 'json',
        type: 'POST',          
        data: ({[csrfName]: csrfHash,test:$data})
        })
        .done(function (data) { 
           
        })
    }
})


</script>