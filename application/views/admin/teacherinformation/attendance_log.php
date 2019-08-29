<style>
button.btn-space {
        margin-left: 1em;
    }
</style>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
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
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<div class=" card box-body" style='padding:20px;'>
<div class=' col-xl-12 '>
<table id="classes" class="display" style="width:100%">
        <thead>
            <tr>

                   
     
           
            <th>Action</th>
                <th>Time IN</th>
                <th>Time Tardy</th>
                <th>Student ID</th>
                <th>Grade</th>

                <th>Last Name</th>
                <th>First Name</th>
                <th>Status</th>
                <th>Tardy</th>
                <th>Swipe Type</th>
                <th>Period</th>
               
               
               
         
                   
            
            </tr>
        </thead>
  
    </table></div>
</div></div></div></div>


<script type='text/javascript'>
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


 
$(document).ready(function() {
    // Regular editor for the table
    editor = new $.fn.dataTable.Editor( {
        ajax: {
            url: base_url+"admin/teacherinformation/edit_attendance",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: 'data',
           
            dataType:'JSON'
       },
       idSrc:  'AttendanceID',
        table: "#classes",
        fields: [ 

            { label: "Time In:",name: "AttendanceTime",
            type:'datetime',
            def:function(){
                return new Date();
            },
            format: 'HH:mm:ss',
            fieldInfo: '24 hour clock format with seconds'
            
            },
            { label: "Time In:",name: "student_local_id"},
            { label: "Time In:",name: "grade_level"},
            { label: "Time In:",name: "last_name"},
            { label: "Time In:",name: "first_name"},
            { label: "Status:",name: "AttendanceID",
            type:"select",
            options: [
                     { label: "Yes", value: "yes" },
                     { label: "No",  value: "no" },
                    ]

            },

            
        ]
        
    } );

    var a= $('#classes').DataTable( {
        dom: 'Bfrtip',
        "pageLength": 20,
        "colReorder": true,
        ajax: {
            url: base_url+"admin/teacherinformation/attendance_logs",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
       colReorder: true,
        columns: [
        
        
      
            { data: null, },
            { data: 'AttendanceTime' },
            { data: null,
                 render:function(data){
                
                    var start=new Date(`${data['AttendanceDate']} ${data['PeriodStartTime']}`).getTime()+5*1000*60;
                    var swipe=new Date(`${data['AttendanceDate']} ${data['AttendanceTime']}`).getTime();
                

                    var grace=start + parseInt('1')*60*1000;
                    var f=(grace-swipe)/(1000*60);
                    if (swipe<=start && data.AttendanceTime!=''){
                        return 'On Time'
                    }else if(swipe>=start && swipe<=grace)
                    {
                        return 'Grace'
                    }
                    else if (f<0){
                        
                        var a=Math.trunc(f);
                        
                        var b=Math.abs(Math.trunc((f-a)*60));
                        console.log (typeof(a));
                        console.log(a);
                        if(b<=9){
                            return `(${Math.abs(a)}:0${b})`
                        }else{
                            return `(${Math.abs(a)}:${b})`
                        }
                         
                    }
                    else{
                        return '--:--';
                    }

                
             
            }},
            { data: 'student_local_id' },
            { data: 'grade_level' },
            { data: 'last_name' },
            { data: 'first_name' },
           
            { 
                data: null,"width": "100px",
                render:function(data){
                    if (data['AttendanceTime']==null || data['AttendanceTime']==''){
                        return `A`;
                    }
                 
                    return `P`;}
            },
            { data: null, 
                render:function(data){
                    var start=new Date(`${data['AttendanceDate']} ${data['PeriodStartTime']}`).getTime();
                    var swipe=new Date(`${data['AttendanceDate']} ${data['AttendanceTime']}`).getTime();
                    const letter_number=parseInt(data.appointment)+parseInt(data.emergency)+parseInt(data.other);
                    // var data_array=[
                    //        {name:'appointment',`${data.appointment}`}, 
                    //        {name:'emergency',`${data.emergency}`}, 
                    //        {name:'other',`${data.other}}`, 

                    // ];
                    data_array=[];
                    data_array['appointment']=data.appointment;
                     data_array['emergency']=data.emergency;
                    data_array['other']=data.other;

             
                  
                  
             

                  
                
                    var grace=start + parseInt('6')*60*1000;
                    var f=(grace-swipe)/(1000*60);

                    if (f<0 && letter_number==0){
                        
                        return 'Unexcused Tardy';
                    }
                    else if( f<0 &&letter_number!=0){
                        return 'Excused Tardy';
                    }
                    else{
                        return `-----`;}
                    }
                  

            
            },
            { 
                data: null,
                render:function(data){
                
                    if (data['swipe_type']=='1'){
                        return `Manual`;
                    }
                    else if(data['swipe_type']==null){
                        return `----`;
                    }else{
                        return 'Card'
                    }
            }
            },
            { data: 'period_number' }
        
           
        

          
        ],
        select: true,
        buttons: [
            //{ extend: 'create', editor: editor },
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