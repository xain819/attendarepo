<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>


<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/select2/css/select2.min.css">
<!-- <link href="<?= base_url('public/assets/plugins/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet"> -->
<link href="<?= base_url('public/css/style.css')?>" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css');?>">


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js');?>"></script>

<script src="<?php echo base_url('public/plugins/papaparse/papaparse.min.js');?>"></script>

<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

            <?php $this->load->view('admin/generalsettings/hallpassfunction');?>
   
       
         

         
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
    <!-- <script src="<?=base_url() ?>public/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
 
 <script src="<?=base_url()?>public/js/plugins-init/datatables.init.js"></script>
   -->
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"> -->
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/yadcf/jquery.dataTables.yadcf.css');?>">



<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js');?>"></script>

<script src="<?php echo base_url('public/plugins/papaparse/papaparse.min.js');?>"></script>

<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>

<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).on('click','#teacher-limit',function(){
    $limit=$('#addteacherlimit').val()
    swal({
        title: "Are you sure?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: false,
        })
        .then((isConfirm) => {
        if (isConfirm) {
            console.log(isConfirm)
            $.ajax({
                url:base_url+"admin/masterscheduler/insert_teacherlimit ",
                type:"POST",
                data:({[csrfName]: csrfHash,data:$limit}),
                dataType:'JSON',
                })
                .done(function(data){
                    swal("Successfully Updated", {
                    icon: "success",
                    });
                })
        } else {
            console.log(isConfirm)
            swal("Cancelled");
        }
        });
        
})
$(document).on('click','#transition-time',function(){
    $tt=$('#addtransitiontime').val()
    swal({
        title: "Are you sure?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: false,
        })
        .then((isConfirm) => {
        if (isConfirm) {
            console.log(isConfirm)
            $.ajax({
                url:base_url+"admin/masterscheduler/insert_transitiontime ",
                type:"POST",
                data:({[csrfName]: csrfHash,data:$tt}),
                dataType:'JSON',
                })
                .done(function(data){
                    swal("Successfully Updated", {
                    icon: "success",
                    });
                })
        } else {
            console.log(isConfirm)
            swal("Cancelled");
        }
        });
        
})

var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
       csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';


       editor = new $.fn.dataTable.Editor( {
        dom: 'Bfrtip',
        "pageLength": 20,
        "colReorder": true,
        
        ajax: {
            url:'<?php echo base_url(); ?>admin/generalsettings/edit_hallpass',
            data: ({[csrfName]: csrfHash,type:1}),
            type:"POST",
            dataSrc:"info",
            dataType:'JSON'
       },
       idSrc:  'HallPassID',
        table: "#nhp",
        
        fields: [ 
          
            { label: "TimeAllocated:",name: "TimeAllocated" },
     
    
    

            
        ]
        
    } );
    editor1 = new $.fn.dataTable.Editor( {
        dom: 'Bfrtip',
        "pageLength": 20,
        "colReorder": true,
        
        ajax: {
            url:'<?php echo base_url(); ?>admin/generalsettings/edit_hallpass',
            data: ({[csrfName]: csrfHash,type:2}),
            type:"POST",
            dataSrc:"info",
            dataType:'JSON'
       },
       idSrc:  'HallPassID',
        table: "#ahp",
        
        fields: [ 
          
            { label: "TimeAllocated:",name: "TimeAllocated" },
     
    
    

            
        ]
        
    } );
    $('#nhp').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
     

    } );
    $('#ahp').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor1.inline( this );
       
    
    } );


var nhp = $('#nhp').DataTable({
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
        idSrc:  'HallPassID',
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
			
        ],
        select: true,
        buttons: [
            // { extend: 'create', editor: editor },
           { extend: 'edit',   editor: editor },
            // { extend: 'remove', editor: editor },
            // {
            //     extend: 'csv',
            //     text: 'Export CSV',
            //     className: 'btn-space',
            //     exportOptions: {
            //         orthogonal: null
            //     }
            // },
            // {
            //     text: 'Import CSV',
            //     action: function () {
            //         uploadEditor.create( {
            //             title: 'CSV file import'
            //         } );
            //     }
            // },
            // {
            //     extend: 'selectAll',
            //     className: 'btn-space'
            // },
            // 'selectNone',
        ]
});

var ahp = $('#ahp').DataTable({
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

$(document).ready(function(){
        editor.on('postSubmit', function(event, data, action) {
              
        nhp.ajax.reload();
       });
       editor1.on('postSubmit', function(event, data, action) {
     
        ahp.ajax.reload();
       });
       
});



</script>
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url() ?>public/assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <!-- <link href="<?=base_url() ?>public/css/style.css" rel="stylesheet"> -->


   


    
    <!-- Morris Chart -->

    <!-- Custom dashboard script -->


    
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
                const icon=element.icon;
                const value=element.value;
            
                var is_checked='';
                if (is_active==1){ var is_checked='checked=""';}
                $('[data-toggle="popover"]').popover();
                if(master_name=='Period Grace Time'){
                    $("#gracetime").val(element.master_value);  
                }
                if(id_name=='hplt'){
                    $("#hp_lock_end").val(element.hp_lock_end);  
                    $("#hp_lock_start").val(element.hp_lock_start);  
                }
                time_in
                if(id_name=='nql'){
                    $("#nql-limit").val(element.value);
                    const aa=element.value.split(",");
                    console.log(aa);
                    $("#nql-limit").val(aa[0]);
                    $("#select-type").val(aa[1]);
                }
                if(id_name=='slac'){
                    $("#time_in").val(element.master_value);
               
                }
               
                
                
                
                
                const mhl=`<div class="col-xl-4 col-sm-4">
                <div class="card">
                <div class="bootstrap-popover  pull-right"><a tabindex="0" class="btn  pull-right far fa-question-circle" role="button" data-toggle="popover" data-trigger="focus" title="What's This?" 
                        data-content="${element.description}"></a></div>
                
                        
                        <div class="card-body" style='padding-top:5px;' >
                    
            
                        
                                <div class="media">
                                        <div class="media-body">
                                
                                    

                                                <h6 class="mt-0 mb- text-info"><i class="${icon} fa-2x" style='padding-right:20px;'></i>
                                            
                                                <button data-toggle="modal" data-target="#${id_name}" style='background-color:
                                                inherit;;border:none;' value=${id} class="mt-0 mb- text-info">${master_name}</button>
                                                <span class="pull-right" >  <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}
                                                class="js-switch js-switch-1 js-switch-md" data-size="small" style="margin:10px;"/></span></h6 >
                                    
                                        </div>    
                                </div>
                    
                        </div>
                    </div>
                </div>`
                
            
                var master_element = $("<div />");

                master_element.html(mhl);
                $('[data-toggle="popover"]').popover();
                if(master_name!='no'){
                $("#master_list").append(mhl);   }
            });	


	});
    $('[data-toggle="popover"]').popover();
   
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

$(document).on('click','.btn-hplt',function(){
    const start = $("#hp_lock_start").val();
    const end = $("#hp_lock_end").val();
  

    console.log(start);
    console.log(end);
    $.ajax({
        url:'<?php echo base_url(); ?>admin/generalsettings/edit_hplt',
        type:"POST",
        data:({[csrfName]: csrfHash,name:name,start:start,end:end}),
        dataType:'JSON',
    }).done(function(data){
      
        
    })

});
$(document).on('click','.btn-2whp',function(){
    const a = $("#nql-limit").val();
    const b = $("#select-type").val();
 
  
    $.ajax({
        url:'<?php echo base_url(); ?>admin/generalsettings/edit_2whp',
        type:"POST",
        data:({[csrfName]: csrfHash,limit:a,type:b}),
        dataType:'JSON',
    }).done(function(data){
      
        
    })

});

// function hallpass(){
//     $.ajax({
//         url:'<?php echo base_url(); ?>admin/generalsettings/get_all_hallpass',
//         type:"POST",
//         data:({[csrfName]: csrfHash}),
//         dataType:'JSON',
//     })
//     .done(function(data){
//      $('#hallpass').html(data);
//      var result=data;
//      var hallpass=result.info;    

//      const ahp = hallpass.filter(function(test){
//          return test.PassTypeID==='1';
//        });
//      const nhp = hallpass.filter(function(test){
//          return test.PassTypeID==='2';
//        });




//      nhp.forEach(function(element){
//          const HallPass=element.HallPass;
//          const HallPassID=element.HallPassID;
//          const TimeAllocated=element.TimeAllocated;
//          const is_active=element.is_active;
//          console.log(is_active);
//          var is_checked='';
//          if (is_active==1){ var is_checked='checked=""';}
//          console.log(is_checked);

        
         
//          let nhp_list =`
//                     <tr>
//                         <td>
//                             <button value='${HallPassID}'  class="delete_row" type="button" class="btn btn-circle btn-danger btn-circle">
//                             <i class="fa fa-times" aria-hidden="true"></i> 
//                             </button>
//                             <span class="text-muted font-weight-semi-bold" style='padding-left:5px;'>${HallPass}</span>
//                         </td>
//                         <td>
//                             <span class="text-muted font-weight-semi-bold">${TimeAllocated}</span>
//                         </td>
//                         <td>
//                             <span class="pull-right"></span>
//                             <input data-id="${HallPassID}" id="${HallPassID}" id="hp_${HallPassID}" type="checkbox"  class="tgl tgl-ios tgl_checkbox" data-size="small" />
                            
//                         </td>
//                     </tr>`

//         //  var hallpass_element = $("<div />");
//         //  hallpass_element.html(nhp_list);
//        // $("#table_nhp1").remove();
//          $("#table_nhp1").append(nhp_list);
//          });
//          var ahp_list='';
//          ahp.forEach(function(element){
//          const HallPass=element.HallPass;
//          const HallPassID=element.HallPassID;
//          const TimeAllocated=element.TimeAllocated;
//          const is_active=element.is_active;
//          var is_checked='';
//          if (is_active==1){ var is_checked='checked=""';}

//           ahp_list =`
//          <tr>
//                 <td>      
//                         <button value='${HallPassID}'  class="delete_row" type="button" class="btn btn-circle btn-danger btn-circle">
//                                 <i class="fa fa-times" aria-hidden="true"></i> 
//                         </button>
//                         <span class="text-muted font-weight-semi-bold" style='padding-left:5px;'>${HallPass}</span>
//                 </td>
//                 <td>
//                     <span class="text-muted font-weight-semi-bold">${TimeAllocated}</span></td>
//                 <td>
//                 <span class="pull-right">
//                  <input data-id="${HallPassID}" id="${HallPassID}" id="hp_${HallPassID}" type="checkbox" ${is_checked} 
//                 class="tgl tgl-ios tgl_checkbox" data-size="small" />
//                 </span>
                      
//                         </td>
//         </tr>`
    
//         //  var hallpass_element = $("<div />");
       
//          });

//          $("#table_ahp1").append(ahp_list);

//     })


    
//}
</script>
 <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
 