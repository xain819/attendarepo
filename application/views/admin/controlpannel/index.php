<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Weather Report</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Weather</li>
                        </ol>
                    </div>
                </div>
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
                                                    <span>C-DAY</span>
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
                                                        <h4>2</h4>
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
                                                    <div id='time' class="media-body">
                                                        <h4 id='time'>${time} 11:00 AM</h4>
                                                        <p>Time</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-dpink"><i class="pe-is-w-drizzle-f"></i></span>
                                                    <div class="media-body">
                                                    <h4>Tuesday</h4>
                                                      <p>Day of Week</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-warning"><i class="pe-is-w-moon-sea-f"></i></span>
                                                    <div class="media-body">
                                                        <h5>11/12/19</h5>
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
                              <span class="pull-right">  <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}
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
                                          
                                            <div class="col-xl-12 col-xxl-6 col-sm-6">
                                                <div class="card mb-2">
                                                    <div class="card-body p-3 d-flex justify-content-between align-items-center">
                                                        <h5 class="item">Lockdown</h5>
                                                        <div class="item">
                                                       
                                                            <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}  class="js-switch js-switch-1 js-switch-md" data-size="small" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-xxl-6 col-sm-6">
                                                <div class="card mb-2">
                                                    <div class="card-body p-3 d-flex justify-content-between align-items-center">
                                                        <h5 class="item">Active Shoter</h5>
                                                        <div class="item">
                                                       
                                                            <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}  class="js-switch js-switch-1 js-switch-md" data-size="small" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                            <div class="col-xl-12 col-xxl-6 col-sm-6">
                                                <div class="card mb-2">
                                                    <div class="card-body p-3 d-flex justify-content-between align-items-center">
                                                        <h5 class="item">Tornado</h5>
                                                        <div class="item">
                                                       
                                                            <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}  class="js-switch js-switch-1 js-switch-md" data-size="small" />
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
            </div>
            <!-- #/ container -->
        </div>
        <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>publicjs/custom.min.js"></script>
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
    <script type="text/javascript" src="http://www.datejs.com/build/date.js"></script>

    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
       csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
      
var ahp = $('#nhp').DataTable({
    "searching": false,
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
    "searching": false,
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
    
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
      
$(document).ready(function(){

  var time= new Date().toString("hh:mm tt");

 
  console.log(time_test);
const htmltime=`<h4 id='time'>${time}</h4><p>Time</p>`
$("#time").html(htmltime);

});

$(document).ready(function(){
    const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/controlpanel/get_emergency_list',
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

function hallpass(){
    $.ajax({
        url:'<?php echo base_url(); ?>admin/generalsettings/get_all_hallpass',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    })
    .done(function(data){
     $('#hallpass').html(data);
     var result=data;
     var hallpass=result.info;    

     const ahp = hallpass.filter(function(test){
         return test.PassTypeID==='1';
       });
     const nhp = hallpass.filter(function(test){
         return test.PassTypeID==='2';
       });




     nhp.forEach(function(element){
         const HallPass=element.HallPass;
         const HallPassID=element.HallPassID;
         const TimeAllocated=element.TimeAllocated;
         const is_active=element.is_active;
         console.log(is_active);
         var is_checked='';
         if (is_active==1){ var is_checked='checked=""';}
         console.log(is_checked);

        
         
         let nhp_list =`
                    <tr>
                        <td>
                            <button value='${HallPassID}'  class="delete_row" type="button" class="btn btn-circle btn-danger btn-circle">
                            <i class="fa fa-times" aria-hidden="true"></i> 
                            </button>
                            <span class="text-muted font-weight-semi-bold" style='padding-left:5px;'>${HallPass}</span>
                        </td>
                        <td>
                            <span class="text-muted font-weight-semi-bold">${TimeAllocated}</span>
                        </td>
                        <td>
                            <span class="pull-right"></span>
                            <input data-id="${HallPassID}" id="${HallPassID}" id="hp_${HallPassID}" type="checkbox"  class="tgl tgl-ios tgl_checkbox" data-size="small" />
                            
                        </td>
                    </tr>`

        //  var hallpass_element = $("<div />");
        //  hallpass_element.html(nhp_list);
       // $("#table_nhp1").remove();
         $("#table_nhp1").append(nhp_list);
         });
         var ahp_list='';
         ahp.forEach(function(element){
         const HallPass=element.HallPass;
         const HallPassID=element.HallPassID;
         const TimeAllocated=element.TimeAllocated;
         const is_active=element.is_active;
         var is_checked='';
         if (is_active==1){ var is_checked='checked=""';}

          ahp_list =`
         <tr>
                <td>      
                        <button value='${HallPassID}'  class="delete_row" type="button" class="btn btn-circle btn-danger btn-circle">
                                <i class="fa fa-times" aria-hidden="true"></i> 
                        </button>
                        <span class="text-muted font-weight-semi-bold" style='padding-left:5px;'>${HallPass}</span>
                </td>
                <td>
                    <span class="text-muted font-weight-semi-bold">${TimeAllocated}</span></td>
                <td>
                <span class="pull-right">
                 <input data-id="${HallPassID}" id="${HallPassID}" id="hp_${HallPassID}" type="checkbox" ${is_checked} 
                class="tgl tgl-ios tgl_checkbox" data-size="small" />
                </span>
                      
                        </td>
        </tr>`
    
        //  var hallpass_element = $("<div />");
       
         });

         $("#table_ahp1").append(ahp_list);

    })
    
}
    </script>