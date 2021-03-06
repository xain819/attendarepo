<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>

                <div class="row">
                    

              
                </div>
                <div class="row">
                    <div class="col-xl-9  col-xxl-12">
                        <div class="card">
                            <div class="card-body monthly-weather-report">
                                <div class="d-sm-flex d-block justify-content-between mb-4">
                                    <h4 class="card-title">Harvard School</h4>
                                    
                                </div>
                                <div class="row weather-report-container justify-content-between">
                                    <div class="col-xl-4 col-md-5">
                                        <div class="tempareture-box-2 d-flex justify-content-sm-center justify-content-between mb-4 mb-sm-0">
                                            <div class="tempareture-box-icon">
                                            <i class="fa fa-calendar"></i>
                                            </div>
                                            <div class="tempareture-box-content text-center ml-4">
                                                <div class="temp-top">
                                                    <span id='type'>C-DAY</span>
                                                </div>
                                                <div class="temp-bottom">
                                                <button type="button" class="btn btn-warning btn-ft">Change Type</button>
                                                 

                                             
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row monthly-weather-report-inner">
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-warning"><i class="pe-is-w-eclipse-4-f"></i></span>
                                                    <div class="media-body">
                                                        <h4 id='period'>2</h4>
                                                        <p>Period</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-info"><i class="pe-is-w-moon-waning-crescent-f"></i></span>
                                                    <div class="media-body">
                                                        <h4>112</h4>
                                                        <p>Day</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-info"><i class="pe-is-w-rain-1-f"></i></span>
                                                    <div class="media-body">
                                                        <h4>4th</h4>
                                                        <p>6th Week MP</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-info"><i class="fa fa-clock-o"></i></span>
                                                 
                                                    <div  class="media-body">
                                                        <h4 id='datetime'></h4>
                                                        <p>Time</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-dpink"><i class="pe-is-w-drizzle-f"></i></span>
                                                    <div class="media-body">
                                                    <h4 id='day'>Tuesday</h4>
                                                      <p>Day of Week</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-warning"><i class="pe-is-w-moon-sea-f"></i></span>
                                                    <div class="media-body">
                                                        <h4 id='datenow'></h4>
                                                        <p>Date</p>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>

                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                            <div class="col-xl-6 col-sm-6">
  
    <div class="card-body">
    <div class="stat-widget-two">
    <div class="media">
    <div class="media-body">
    <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
     <button data-toggle="modal" data-target="#${id_name}" style='background-color:
    inherit;;border:none;' class="mt-0 mb- text-info">Terminal Master Switch</button>
     <span class="pull-right">  <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}
     class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
 
    </div></div></div></div></div>
    <div class="col-xl-6 col-sm-6">

    <div class="card-body">
    <div class="stat-widget-two">
    <div class="media">
    <div class="media-body">
    <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
     <button data-toggle="modal" data-target="#${id_name}" style='background-color:
    inherit;;border:none;' class="mt-0 mb- text-info">Hall Pass Master Switch</button>
     <span class="pull-right">  <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}
     class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>

    </div></div></div></div></div>
                             
                            </div>
                           

                            <div class="card-body">

                            <div class='row' id="hallpass_list_item">
                           <div class="col-xl-6">
                                <div class="card transparent-card ">
                                <div class="card-header pb-0">
                                            <h5 class="card-title mb-3">Lock Terminal</h5>
                                        
                                        </div>
                                   
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table id="ahp" class="table trading-activity table-padded table-responsive-fix">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Name</th>
                                                        <th>Terminal Number</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="table_ahp1">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div> 
                            <div class="col-xl-6">
                                    <div class="card transparent-card ">
                                        <div class="card-header pb-0">
                                            <h5 class="card-title mb-3">Lock Hall Passes</h5>
                                        
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table id='nhp' class="table trading-activity table-padded table-responsive-fix">
                                                    <thead>
                                                        <tr>
                                                    
                                                        <th>name</th>
                                                        <th>Terminal Number</th>
                                                        <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id='table_nhp1'>
                                                    </tbody>
                                                   
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                  
                            </div>
                            </div>
                        
                        </div></div>
                    
                    </div>
                    <div class="col-xl-3  col-xxl-12">


                        <div class="row">
                          <div class="col-xl-12 col-xxl-12">
                         
                              <div class="card">
                              <div class="card-body">
                              <div class="stat-widget-two">
                              <div class="media">
                              <div class="media-body">
                              <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                              <button data-toggle="modal" data-target="#${id_name}" style='background-color:
                              inherit;;border:none;' class="mt-0 mb- text-info"><h4>Emergency Terminal</h4></button>
                              <span class="pull-right">  <input id="emergencylist_check" data-id='${id}' type="checkbox" ${is_checked}
                              class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
                              <p>Shutdown and Notification</p>
                              </div></div></div></div></div>

                        </div>

                            <div class="col-xl-12 col-xxl-12">
                                <div class="card transparent-card">
                                    <div class="card-body p-0 location-table">

                                        <div id='emergencylist' class="row">

                                            <div class="col-xl-12">
                                                <div class="card mb-4">
                                                    <div class="card-body d-flex justify-content-between align-items-center p-3">
                                                        <h6 class="item">Select Emergency Type</h6><br>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                    
  

                                          </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
    <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    
    <script src="<?=base_url() ?>public/assets/plugins/d3v3/index.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/topojson/topojson.min.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/datamaps/datamaps.usa.min.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/owl.carousel/dist/js/owl.carousel.min.js"></script>

    <script src="<?=base_url() ?>public/assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url() ?>public/js/dashboard/dashboard-20.js"></script>
    <script src="<?=base_url() ?>public/plugins/moment/moment.js"></script>




    <script type="text/javascript" src="http://www.datejs.com/build/date.js"></script>


<script>


var a=  null;
var datetime = null,
        date = null,
        d=null,
        datenow=null;

var update = function () {
    date = moment(new Date())
    datetime.html(date.format(' h:mm:ss a'));
    d.html(date.format('dddd'));
    datenow.html(date.format('MMMM Do YYYY'));
    $.ajax({
        url:'<?php echo base_url(); ?>admin/controlpannel/get_master_data',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){
  
        a=data['type'][0]['title'];
        b=data['period'];
     

        $('#type').html(`${a}-Day`);
        $('#period').html(`${b}`);
        
    });

   
};

$(document).ready(function(){
    datetime = $('#datetime');
    d = $('#day');
    datenow=$('#datenow');
    update();
    setInterval(update, 1000);
});

</script>


    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
       csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';


       
      
var ahp = $('#nhp').DataTable({
    "searching": true,
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
    
    ajax: {
            url:'<?php echo base_url(); ?>admin/generalsettings/get_all_hallpass',
            dataType: 'json',
            type: 'POST',
            data: ({[csrfName]: csrfHash,type:2}),
            dataSrc:"info"
        },
        columns: [ 
    
            { "data": "HallPass"},
            {"data":"TimeAllocated"},
            { "data":null,
                render:function(data, type,row){
                    var is_checked='';
                    if (data.is_active==1){var is_checked="checked=''";}
                    return `
                    <input data-id="${data.HallPassID}" id="${data.HallPassID}" id="hp_${data.HallPassID}" type="checkbox" ${is_checked} 
                    class="tgl tgl-ios tgl_checkbox" data-size="small" />
                    `;
                }
            }
			
        ]
});

var nhp = $('#ahp').DataTable({
    "searching": true,
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true,
    
    ajax: {
            url:'<?php echo base_url(); ?>admin/generalsettings/get_all_hallpass',
            dataType: 'json',
            type: 'POST',
            data: ({[csrfName]: csrfHash,type:1}),
            dataSrc:"info"
        },
        columns: [ 
         
            { "data": "HallPass"},
            {"data":"TimeAllocated"},
            { "data":null,
                render:function(data, type,row){
                    var is_checked='';
                    if (data.is_active==1){var is_checked="checked=''";}
                    console.log(is_checked);
                    return `
                    <input data-id="${data.HallPassID}" id="${data.HallPassID}" id="hp_${data.HallPassID}" type="checkbox" ${is_checked} 
                    class="tgl tgl-ios tgl_checkbox" data-size="small" />
                    `;
                }
            }
			
        ]
});
      
// $(document).ready(function(){

// var time= new Date().toString("hh:mm tt");

 
// console.log(time_test);
// const htmltime=`<h4 id='time'>${time}</h4><p>Time</p>`
// $("#time").html(htmltime);

// });
$(document).ready(function(){
$("#emergencylist").hide();
});

$("#emergencylist_check").click(function(){
    $("#emergencylist").toggle();

});

$(document).ready(function(){
    const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/controlpannel/get_emergency_list',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){
    var result=data;
    masterlist=result.info;
    masterlist.forEach(function(element){
    
    const emergency_name=element.emergency_name;
    const notification=element.notification;
    const id=element.id;
    const is_active=element.is_active;

    var is_checked='';
    if (is_active==1){ var is_checked='checked=""';}
   
    
    const mhl=`
          <div class="col-xl-12 col-xxl-6 col-sm-6">
              <div class="card mb-2">
                  <div class="card-body p-3 d-flex justify-content-between align-items-center">
                      <h5 class="item">${emergency_name}</h5>
                      <div class="item">
                      
                          <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}  class="js-switch js-switch-1 js-switch-md" data-size="small" />
                      </div>
                  </div>
              </div>
          </div>  `
    
 
    var master_element = $("<div />");


            master_element.html(mhl);
            $("#emergencylist").append(mhl); 
    });	
	});
});


    </script>