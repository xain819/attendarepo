
 <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
 <link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>" >
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/meltismenu/js/metisMenu.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script> 


    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css');?>">


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js');?>"></script>

<script src="<?php echo base_url('public/plugins/papaparse/papaparse.min.js');?>"></script>

<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">


<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<!-- <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
rtrt -->


  <div class="row ">
    <div class="col-lg-4">
    <div class="card user-card2">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="circle-style mb-3">
                                        <img class="img-fluid rounded-circle" src="<?=base_url() ?>public/assets/images/users/6.jpg" alt="">
                                    </div>
                                    <h4 id="name">Theodore Handle</h4>
                                    <h5 id="t_id" class="text-muted"></h5>
                                    <h5 class="mt-5 mb-3 text-primary text-center">Math Department</h5>
                                    <div class="row justify-content-center mb-5">
                                        <div class="col-lg-8">
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 86%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center m-b-10">
                                        <div class="col"><a class="f-s-18" href="javascript:void()"><i class="fa fa-envelope"></i><br><span class="text-dark ">1340</span></a>
                                        </div>
                                        <div class="col"><a class="f-s-18" href="javascript:void()"><i class="fa fa-users"></i><br><span class="text-dark ">856</span></a>
                                        </div>
                                        <div class="col"><a class="f-s-18" href="javascript:void()"><i class="fa fa-bookmark"></i><br><span class="text-dark ">157</span></a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-11">
                                            <p class="my-3">A brief overview of teh teacher.</p>
                                        </div>
                                    </div><a href="javascript:void()" class="btn btn-outline-primary"><i class="ti-plus"></i>
                                        Report</a>
                                </div>
                            </div>
    </div>    
    </div>
    <div class="col-lg-8">
        <div class="card col-lg-12">
            <div class="col-lg-12">
                <table id="classes" class="display" style="height:550px;width:100%">
                <thead>
                    <tr>

                        
            
                
                    <th>Period</th>
                        <th>Classes</th>
                        <th>Class Code</th>
                        <th>Room</th>
                        <th>2HP Limit/Student</th>
                        <th>Type</th>
                        <th>Additional HP Override</th>
                        <th>Excess NonAdmin Hallpass</th>
                    
                    
                    
                
                        
                    
                    </tr>
                </thead>
        
                </table>                                        
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">

        <div class="col-lg-12">
                                <div class="card transparent-card ">
                                    <div class="card-header pb-0">
                                        <h5 class="card-title ">Administrative Hall Pass</h5>
                                    
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table id="ahp" class="table trading-activity table-padded table-responsive-fix">
                                                <thead>
                                                    <tr>
                                               
                                                        <th>AHP Type</th>
                                                        <th>Time Allocated</th>
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

        </div>
</div>
<div class="col-lg-6">
        <div class="card">

       
                            <div class="col-xl-12">
                                    <div class="card transparent-card ">
                                        <div class="card-header pb-0">
                                            <h5 class="card-title mb-3">Non Administrative Hall Pass</h5>
                                        
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table id='nhp' class="table trading-activity table-padded table-responsive-fix">
                                                    <thead>
                                                        <tr>
                                                
                                                        <th>AHP Type</th>
                                                        <th>Time Allocated</th>
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
  
</div>



    
    
    <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>


    <script type='text/javascript'>
    

$(document).ready(function() {
    
     var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
        base_url='<?php echo base_url(); ?>',
        teacherid='<?php echo $_SESSION['TeacherID']; ?>';
        console.log(teacherid)
        var ahp = $('#nhp').DataTable({
        "destroy": true,
        "searching": false,
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,
        
        ajax: {
            url:base_url+'admin/teacherinformation/get_terminal_access',
                dataType: 'json',
                type: 'POST',
                data: ({[csrfName]: csrfHash,'data':teacherid}),
                dataSrc:"nhp"
            },
            columns: [ 
              
                { "data": "access"},
                {"data":"time_limit"},
                { "data":null,
                    render:function(data, type,row){
                        var is_checked='';
                        console.log(data.IDNumber);
                        if (data.is_active==1){var is_checked="checked=''";
                    }
                        return `
                        <input data-id="${data.id}" data-teacher="${data.TeacherID}"  id="hp_${data.HallPassID}" type="checkbox" ${is_checked} 
                        class="tgl tgl-ios tgl_checkbox" data-size="small" />
                        `;
                    }
                }
                
            ]
    });
        

        var nhp = $('#ahp').DataTable({
        "destroy": true,
        "searching": false,
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,
        
        ajax: {
            url:base_url+'admin/teacherinformation/get_terminal_access',
                dataType: 'json',
                type: 'POST',
                data: ({[csrfName]: csrfHash,data:teacherid}),
                dataSrc:"ahp"
            },
            columns: [ 
            
                { "data": "access"},
               
                {"data":"time_limit"},
                { "data":null,
                    render:function(data, type,row){
                        var is_checked='';
                        if (data.is_active==1){var is_checked="checked=''";}
                        console.log(data);
                        return `
                        <input data-id="${data.id}" data-teacher="${data.TeacherID}" id="${data.HallPassID}" id="hp_${data.HallPassID}" type="checkbox" ${is_checked} 
                        class="tgl tgl-ios tgl_checkbox" data-size="small" />
                        `;
                    }
                }
                
            ]
    });
});


$("body").on("change",".tgl_checkbox",function(){
         
         console.log($(this).data('id'));
         console.log($(this).data('teacher'));
         $.ajax({
             url:base_url+"admin/teacherinformation/change_access_status ",
             type:"POST",
             data:({[csrfName]: csrfHash,id:$(this).data('id'),status:$(this).is(':checked')==true?1:0}),
             dataType:'JSON',
         })
         .done(function(data){
             console.log(data);
         })
 
     
      
     });
    </script>



    <script type='text/javascript'>



    console.log('he')

 var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
        base_url='<?php echo base_url(); ?>';
        
var editor;



function selectColumns ( editor, csv, header ) {
    var selectEditor = new $.fn.dataTable.Editor();
    var fields = editor.order();
    console.log(selectEditor);
 
    for ( var i=0 ; i<fields.length ; i++ ) {
        var field = editor.field( fields[i] );
        
 
        selectEditor.add( {
            label: field.label(),
            name: field.name(),
            type: 'select',
            options: header,
            def: header[i]
        } );
    
    }
 
    selectEditor.create({
        title: 'Map CSV fields',
        buttons: 'Import '+csv.length+' records',
        message: 'Select the CSV column you want to use the data from for each field.'
    });
 
    selectEditor.on('submitComplete', function (e, json, data, action) {
        // Use the host Editor instance to show a multi-row create form allowing the user to submit the data.
        editor.create( csv.length, {
            title: 'Confirm import',
            buttons: 'Submit',
            message: 'Click the <i>Submit</i> button to confirm the import of '+csv.length+' rows of data. Optionally, override the value for a field to set a common value by clicking on the field below.'
        } );
 
        for ( var i=0 ; i<fields.length ; i++ ) {
            var field = editor.field( fields[i] );
            var mapped = data[ field.name() ];
 
            for ( var j=0 ; j<csv.length ; j++ ) {
                field.multiSet( j, csv[j][mapped] );
            }
        }
     //   a.ajax.reload();
    } );
}
console.log(editor)

 
$(document).ready(function() {
    // Regular editor for the table
    editor = new $.fn.dataTable.Editor( {
        ajax: {
            url: '<?php echo base_url(); ?>'+"admin/teacherinformation/edit_teacher_class",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: 'teacher_class',
           
            dataType:'JSON'
       },
       idSrc:  'ID',
        table: "#classes",
        // fields: [ 

        //     { label: "Time In:",name: "AttendanceTime",
        //     type:'datetime',
        //     def:function(){
        //         return new Date();
        //     },
        //     format: 'HH:mm:ss',
        //     fieldInfo: '24 hour clock format with seconds'
            
        //     },
        //     { label: "Time In:",name: "student_local_id"},
        //     { label: "Time In:",name: "grade_level"},
        //     { label: "Time In:",name: "last_name"},
        //     { label: "Time In:",name: "first_name"},
        //     { label: "Status:",name: "AttendanceID",
        //     type:"select",
        //     options: [
        //              { label: "Yes", value: "yes" },
        //              { label: "No",  value: "no" },
        //             ]

        //     },

            
        // ]
        
    } );
    // $('#classes').on( 'click', 'tbody td:not(:first-child)', function (e) {
    //     editor.inline( this );
    //     console.log( editor.inline( this ));

    // } );
 
    //lumalabas nman na kaso may error na 403
    //not allowed daw try ko sir.mag import felling ko sa 
    var a= $('#classes').DataTable( {
        dom: 'Bfrtip',
        "pageLength": 20,
        "colReorder": true,
        "bPaginate": false,
        "info":     false,
        "responsive": true,
        "searching": false,
        
        ajax: {
            url: base_url+"admin/teacherinformation/get_teacher_class",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: 'teacher_class',
            dataType:'JSON'
            
       },
       colReorder: true,
        columns: [

            { data: null,
            render:function(data){
                $('#name').html(`${data.FirstName} ${data.LastName}`);
                $('#t_id').html(`${data.teacher_id_number}`);
                $('#location').html(data.location);
                return data.period_number;
            } },
            { data: 'course_description' },
            { data: 'class_code' },
            { data: 'location' },   
            { data: '2hp_limit' },
            { data: 'limit_type' },
            { data: 'is_active' },
            { data: 'excess_non_admin_hp' },   
        ]
        
        
      
 
        //     { data: 'AttendanceTime' },
        //     { data: null,
        //          render:function(data){
                
        //             var start=new Date(`${data['AttendanceDate']} ${data['PeriodStartTime']}`).getTime();
        //             var swipe=new Date(`${data['AttendanceDate']} ${data['AttendanceTime']}`).getTime();

        //             var grace=start + parseInt('1')*60*1000;
        //             var f=(grace-swipe)/(1000*60);
        //             if (swipe<=start){
        //                 return 'On Time'
        //             }else if(swipe>=start && swipe<=grace)
        //             {
        //                 return 'Grace'
        //             }
        //             else if (f<0){
                        
        //                 var a=Math.trunc(f);
                        
        //                 var b=Math.abs(Math.trunc((f-a)*60));
        //                 console.log (typeof(a));
        //                 console.log(a);
        //                 if(b<=9){
        //                     return `(${Math.abs(a)}:0${b})`
        //                 }else{
        //                     return `(${Math.abs(a)}:${b})`
        //                 }
                         
        //             }
        //             else{
        //                 return '--:--';
        //             }

                
             
        //     }},
        //     { data: 'student_local_id' },
        //     { data: 'grade_level' },
        //     { data: 'last_name' },
        //     { data: 'first_name' },
           
        //     { 
        //         data: null,"width": "100px",
        //         render:function(data){
        //             if (data['AttendanceID']==null){
        //                 return `A`;
        //             }
        //             return `P`;}
        //     },
        //     { data: null, 
        //         render:function(data){
        //             var start=new Date(`${data['AttendanceDate']} ${data['PeriodStartTime']}`).getTime();
        //             var swipe=new Date(`${data['AttendanceDate']} ${data['AttendanceTime']}`).getTime();

        //             var grace=start + parseInt('1')*60*1000;
        //             var f=(grace-swipe)/(1000*60);

        //             if (f<0){
        //                 return 'Unexcused Tardy';
        //             }
        //             else{
        //                 return `-----`;}
        //             }
                  

            
        //     },
        //     { 
        //         data: null,
        //         render:function(data){
                
        //             if (data['swipe_type']=='1'){
        //                 return `Manual`;
        //             }
        //             else if(data['swipe_type']==null){
        //                 return `----`;
        //             }else{
        //                 return 'Card'
        //             }
        //     }
        //     },
        //     { data: 'period_number' }
        
           
        

          
        // ],
        // select: true,
        // buttons: [
        //     //{ extend: 'create', editor: editor },
        //      { extend: 'edit',   editor: editor },
        //     // { extend: 'remove', editor: editor },
        //     // {
        //     //     extend: 'csv',
        //     //     text: 'Export CSV',
        //     //     className: 'btn-space',
        //     //     exportOptions: {
        //     //         orthogonal: null
        //     //     }
        //     // },
        //     // {
        //     //     text: 'Import CSV',
        //     //     action: function () {
        //     //         uploadEditor.create( {
        //     //             title: 'CSV file import'
        //     //         } );
        //     //     }
        //     // },
        //     // {
        //     //     extend: 'selectAll',
        //     //     className: 'btn-space'
        //     // },
        //     // 'selectNone',
        // ]
    });
    // Upload Editor - triggered from the import button. Used only for uploading a file to the browser
    var uploadEditor = new $.fn.dataTable.Editor( {
        fields: [ {
            label: 'CSV file:',
            name: 'csv',
            type: 'upload',
            ajax: function ( files ) {
                // Ajax override of the upload so we can handle the file locally. Here we use Papa
                // to parse the CSV.
                Papa.parse(files[0], {
                    header: true,
                    skipEmptyLines: true,
                    complete: function (results) {
                        if ( results.errors.length ) {
                    
                            uploadEditor.field('csv').error( 'CSV parsing error: '+ results.errors[0].message );
                        }
                        else {
                            uploadEditor.close();
                          
                            selectColumns( editor, results.data, results.meta.fields );
                    
                            
                          
                        }
                    }
                });
            }
        } ]
    } );
    editor.on('postSubmit', function(event, data, action) {
        
     a.ajax.reload();
    })
    editor.on( 'create', function ( e, json, data ) {
    alert( 'New row added' );
} );
    
});
</script>



  
    



