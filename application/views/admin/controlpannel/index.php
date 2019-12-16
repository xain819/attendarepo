<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>


  



                <div class="row">
                    <div class="row col-xl-9  col-xxl-12">
                            <div class=" col-xl-6 col-sm-6">
                                
                            <div class="card">
                            <div class="bootstrap-popover  pull-right">
                            <a tabindex="0" class="btn  pull-right far fa-question-circle" role="button" data-toggle="popover" data-trigger="focus" title="Description" 
                            data-content="Master switch to turn ON/OFF all terminals"></a></div>
                            <div class="card-body">
                            <div class="stat-widget-two">
                            <div class="media">
                            <div class="media-body">
                            <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                            <button data-toggle="modal" data-target="#${id_name}" style='background-color:
                            inherit;;border:none;' class="mt-0 mb- text-info">Terminal Master Switch</button>
                            <span class="pull-right">  <input id="master_terminal" data-id='master_terminal' type="checkbox" 
                            class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
                        
                            </div></div></div></div></div></div>
                            <div class=" col-xl-6 col-sm-6">
                            <div class="card">
                            <div class="bootstrap-popover  pull-right">
                            <a tabindex="0" class="btn  pull-right far fa-question-circle" role="button" data-toggle="popover" data-trigger="focus" title="Description" 
                            data-content="Master switch to turn ON/OFF all Hall Passes"></a></div>
                            <div class="card-body">
                            <div class="stat-widget-two">
                            <div class="media">
                            <div class="media-body">
                            <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                            <button data-toggle="modal" data-target="#${id_name}" style='background-color:
                            inherit;;border:none;' class="mt-0 mb- text-info">Hall Pass Master Switch</button>
                            <span class="pull-right">  <input id="master_hallpass" data-id='master_hallpass' type="checkbox" 
                            class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>

                            </div></div></div></div></div></div>
                            <div class=" col-xl-6 col-sm-6">
                            <div class="card">
                            <div class="bootstrap-popover  pull-right">
                            <a tabindex="0" class="btn  pull-right far fa-question-circle" role="button" data-toggle="popover" data-trigger="focus" title="Description" 
                            data-content="Turns off selected terminals. User can search by staff name, room #, or terminal #. When entered results are presented by staff last name, room# then terminal #. To turn on and reactivate the terminal simply press the 'red minus' icon. To add another location press the 'blue plus' icon."></a></div>
                                
                            <div class="card-body">
                            <h5 class="card-title mb-3">Lock Terminal</h5>
                            <div class="stat-widget-two">
                            <div class="media">
                            <div class="media-body">
                            <table id="ahp" class="table trading-activity table-padded table-responsive-fix">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Name</th>
                                                        <th>Room Number</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="table_ahp1">
                                                </tbody>
                                            </table>

                            </div></div></div></div></div></div>
                            <div class=" col-xl-6 col-sm-6">
                            <div class="card">
                            <div class="bootstrap-popover  pull-right">
                            <a tabindex="0" class="btn  pull-right far fa-question-circle" role="button" data-toggle="popover" data-trigger="focus" title="Description" 
                            data-content="Turns off the hall passes of the selected terminals. User can search by staff name, room #, or terminal #. When entered results are presented by staff last name, room# then terminal #. To unlock 
                            the Hall Passes simply press the 'red minus' icon. To add another location press the 'blue plus' icon."></a></div>
                            <div class="card-body">
                            <h5 class="card-title mb-3">Lock Hallpass</h5>
                            <div class="stat-widget-two">
                            <div class="media">
                            <div class="media-body">
                            <table id='nhp' class="table trading-activity table-padded table-responsive-fix">
                                                    <thead>
                                                        <tr>
                                                    
                                                        <th>Name</th>
                                                        <th>Room Number</th>
                                                        <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id='table_nhp1'>
                                                    </tbody>
                                                   
                                                </table>

                            </div></div></div></div></div></div>
                                          
                     
                
                           

                          
                         
                        </div>
                        
                 
                
                    <div class="col-xl-3  col-xxl-12">


                        <div class="row">
                          <div class="col-xl-12 col-xxl-12">
                         
                              <div class="card">
                              <div class="bootstrap-popover  pull-right">
                            <a tabindex="0" class="btn  pull-right far fa-question-circle" role="button" data-toggle="popover" data-trigger="focus" title="Description" 
                            data-content="In the event of an emergency or drill the administrator will switch to 'ON' which will automatically LOCK OUT all Hall Passes and Attendance Swipes. 
                            The Admin user then selects the type of emergency/drill and whether or not this is a drill.
                             Depending on the emergency/drill selected a pop-up message notificaiton will be sent to all Terminals.
                             Some preselected emergency labels and notifications are included here and can be edited by Admin"></a></div>
                              <div class="card-body">
                              <div class="stat-widget-two">
                              <div class="media">
                              <div class="media-body">
                              <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                              <button data-toggle="modal" data-target="#${id_name}" style='background-color:
                              inherit;;border:none;' class="mt-0 mb- text-info"><h4>Emergency Terminal</h4></button>
                              <span class="pull-right">  <input id="emergencylist_check" data-id='${id}' data-name='ee'type="checkbox" ${is_checked}
                              class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
                              <p>Shutdown and Notification</p>
                              </div></div></div></div></div>

                        </div>

                            <div class="col-xl-12 col-xxl-12">
                                <div class="card transparent-card">
                                    <div class="card-body p-0 location-table">

                                        

                                            <div class="col-xl-12">
                                                <div class="card mb-4">
                                                    <div class="card-body d-flex justify-content-between align-items-center p-3">
                                                    <button data-toggle="modal" data-target="#${id_name}" style='background-color:
                              inherit;;border:none;' class="mt-0 mb- text-info"><h4>Is this a Drill?</h4></button>
                              
                              <span class="pull-right">  <input id="drill" data-id='drill' data-id='drill'  type="checkbox" 
                              class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
                             
                                                      
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='emergencylist' class="row">
  

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

    <script src="<?=base_url() ?>public/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>

    <script src="<?=base_url() ?>public/plugins/moment/moment.js"></script>



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

   

$(document).ready(function(){
    const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/controlpannel/change_status',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){
   
        if(data.drill===1){
            $('#drill').attr('checked',true);  
        } 
        $('#drill').attr('checked',false);    

    });
});
$(document).ready(function(){
    const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/controlpannel/master',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data)
    {   
        var check2=true;
        var check1=true;
        if(data.master_terminal==0){
        check1=false; }
        if(data.master_hallpass==0){
        check2=false; }
        

        console.log(data.master_terminal); 
        console.log(data.master_hallpass); 
  
        $('#master_terminal').attr('checked',check1);   
        $('#master_hallpass').attr('checked',check2);
     

    });
});


  
      
var ahp = $('#nhp').DataTable({


  

    "searching": true,
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
    
    ajax: {
            url:'<?php echo base_url(); ?>admin/controlpannel/get_terminal_status',
            dataType: 'json',
            type: 'POST',
            data: ({[csrfName]: csrfHash}),
            dataSrc:""
        },
        columns: [ 
    
            { "data":null,
                render:function(data){
                    return `${data.FirstName} ${data.LastName}`;
                }
            },
            {"data":"Location"},
         
            { "data":null,
                render:function(data, type,row){
                    var is_checked='';
                    if (data.hallpass_is_active==1){var is_checked="checked=''";}
                    return `
                    <input data-id="${data.LocationID}" id="${data.LocationID}" id="hp_${data.LocationID}" data-name='hallpass' type="checkbox" ${is_checked} 
                    class="js-switch js-switch-1 js-switch-md"  data-size="small" />
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
            url:'<?php echo base_url(); ?>admin/controlpannel/get_terminal_status',
            dataType: 'json',
            type: 'POST',
            data: ({[csrfName]: csrfHash,type:1}),
            dataSrc:""
        },
        columns: [ 
    
            { "data":null,
                render:function(data){
                    return `${data.FirstName} ${data.LastName}`;
                }
            },
            {"data":"Location"},
        
            { "data":null,
                render:function(data, type,row){
                    var is_checked='';
                    if (data.is_active==1){var is_checked="checked=''";}
                    return `
                    <input data-id="${data.LocationID}" id="${data.LocationID}" id="hp_${data.LocationID}"  data-name='terminal' type="checkbox" ${is_checked} 
                    class="js-switch js-switch-1 js-switch-md" data-size="small" />
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


    const e =$.ajax({
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
   
    
    var mhl=`
          <div class="col-xl-12 col-xxl-6 col-sm-6">
              <div class="card mb-2">
                  <div class="card-body p-3 d-flex justify-content-between align-items-center">
                      <h5 class="item">${emergency_name}</h5>
                      <div class="item">
                      
                          <input id="${id}" data-id='${id}' data-name='${emergency_name}' type="checkbox" ${is_checked}  class="js-switch js-switch-1 js-switch-md" data-size="small" />
                      </div>
                  </div>
              </div>
          </div>  `
    
 
    var master_element = $("<div />");


            master_element.html(mhl);
            $("#emergencylist").append(mhl); 
    });	
	});


    
    $("body").on("change",".js-switch",function(){
       
  $("#emergencylist").empty();
    
    console.log($(this).data('name'));
    console.log($(this).data('id'));
    console.log($(this).is(':checked')==true?1:0);
  
	$.post('<?=base_url("admin/controlpannel/change_status")?>',
	{
        '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		id : $(this).data('id'),
        status : $(this).is(':checked')==true?1:0,
        name:$(this).data('name')
	},
	function(data){
        
        const e =$.ajax({
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
   
    
    var mhl=`
          <div class="col-xl-12 col-xxl-6 col-sm-6">
              <div class="card mb-2">
                  <div class="card-body p-3 d-flex justify-content-between align-items-center">
                      <h5 class="item">${emergency_name}</h5>
                      <div class="item">
                      
                          <input id="${id}" data-id='${id}' data-name='${emergency_name}' type="checkbox" ${is_checked}  class="js-switch js-switch-1 js-switch-md" data-size="small" />
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
});
});


    </script>