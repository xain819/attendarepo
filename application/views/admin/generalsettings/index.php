<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">

<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/select2/css/select2.min.css">
<link href="<?= base_url('public/assets/plugins/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
<link href="<?= base_url('public/css/style.css')?>" rel="stylesheet">
<div class="content-body">

        <div class="container-fluid">

            <div class="row page-titles">
                <div class="col p-md-0">
                    <h5>General Settings</h5>
                </div>
                <div class="col p-md-0">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">General Settings</li>
                    </ol>
                </div>
            </div>
         

         
            <div id='master_list' class="row">
 
                       

            </div>

        </div>
 </div>
 <?php $this->load->view('admin/generalsettings/hallpassfunction');?>
 <?php $this->load->view('admin/generalsettings/master_modal');?>



 

    <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
 <script src="<?=base_url()?>public/js/plugins-init/datatables.init.js"></script>

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
            { "data": null,
				render: function ( data, type, row ) {
                    if(data.PassTypeID==="2"){
                        return `  <button value='${data.HallPassID}'  class="delete_row btn btn-xs btn-danger  " type="button" >
                                <i class="fa fa-times" aria-hidden="true"></i> 
                        </button>`;
                    }else{
                        return null;
                    }
				} 
			},
          
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
            { "data": null,
				render: function ( data, type, row ) {
                    if(data.PassTypeID==="1"){
                        return `  <button value='${data.HallPassID}'  class="delete_row btn btn-xs btn-danger  " type="button" >
                                <i class="fa fa-times" aria-hidden="true"></i> 
                        </button>`;
                    }else{
                        return null;
                    }
				} 
			},
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
</script>
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url() ?>public/assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <!-- <link href="<?=base_url() ?>public/css/style.css" rel="stylesheet"> -->


   


    
    <!-- Morris Chart -->

    <!-- Custom dashboard script -->


    <script src="<?=base_url() ?>public/js/dashboard/dashboard-2.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?=base_url() ?>public/js/plugins-init/select2-init.js"></script>
   

   

<script>
   


   var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
       csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

   $("body").on("change",".tgl_checkbox",function(){
    console.log($(this).data('id'));

	$.post('<?=base_url("admin/generalsettings/change_status")?>',
	{
        '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		id : $(this).data('id'),
        status : $(this).is(':checked')==true?1:0,
        data: 'hallpass'
       
        
	},
	function(data){
    
       
		
	});
});


$(document).ready(function(){
    const a =$.ajax({
        url:'<?php echo base_url(); ?>admin/generalsettings/get_master_list',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){
    var result=data;
    masterlist=result.info;
    masterlist.forEach(function(element){
    
    const master_name=element.master_name;
    const is_active=element.is_active;
    const id=element.id;
    const id_name=element.id_name;
  
    var is_checked='';
    if (is_active==1){ var is_checked='checked=""';}
   
    
    const mhl=`<div class="col-xl-6 col-sm-6">
    <div class="card">
    <div class="card-body">
    <div class="stat-widget-two">
    <div class="media">
    <div class="media-body">
    <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
     <button data-toggle="modal" data-target="#${id_name}" style='background-color:
    inherit;;border:none;' class="mt-0 mb- text-info">${master_name}</button>
     <span class="pull-right">  <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}
     class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
     <p>descrition goes here</p
    </div></div></div></div></div></div>`
    
 
    var master_element = $("<div />");

    master_element.html(mhl);
    $("#master_list").append(mhl); 
    });	
	});
});
$("body").on("change",".js-switch",function(){
    console.log($(this).data('id'));
	$.post('<?=base_url("admin/generalsettings/change_status")?>',
	{
        '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		id : $(this).data('id'),
        status : $(this).is(':checked')==true?1:0,
        data:'master'
	},
	function(data){
		
	});
});


 $(document).on('click','.delete_row',function(){
    id=$(this).val();
    console.log(id);
    $.ajax({
        url:'<?php echo base_url(); ?>admin/generalsettings/delete_hallpass',
        type:"POST",
        data:({[csrfName]: csrfHash,type:'delete-row',data:id}),
        dataType:'JSON',
    }).done(function(data){
        ahp.ajax.reload();
        nhp.ajax.reload();
    })

});

$(document).on('click','.add_hallpass',function(){
    id=$(this).val();
    const name = $("#hallpassname").val();
    const time= $("#hallpasstime").val();
    const type= $("#hallpasstype").val();
    console.log(name,time,type);
    $.ajax({
        url:'<?php echo base_url(); ?>admin/generalsettings/add_hallpass',
        type:"POST",
        data:({[csrfName]: csrfHash,name:name,time:time,type:type}),
        dataType:'JSON',
    }).done(function(data){        
        ahp.ajax.reload();
        nhp.ajax.reload();
    })

});
$(document).on('click','.btn-pgt',function(){
    const gracetime = $("#gracetime").val();
    console.log(gracetime);
    $.ajax({
        url:'<?php echo base_url(); ?>admin/generalsettings/edit_pgt',
        type:"POST",
        data:({[csrfName]: csrfHash,name:name,gracetime:gracetime}),
        dataType:'JSON',
    }).done(function(data){
    
       
        
    })

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