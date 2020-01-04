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
    <script src="<?=base_url() ?>public/dist/js/filterDropDown.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/yadcf/jquery.dataTables.yadcf.js"></script>



<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script> -->


<div class=" card box-body" style='padding:20px;'>
<div class=' col-xl-12 table-responsive' style="padding:20px;">
<table id="classes" class="display" style="width:100%;">
        <thead>
            <tr>
           
           

                <th>Last Name</th>
                <th>First Name</th>
                <th>Student ID</th>

             
                <th>Grade</th>
                <th>Time-In</th>

                <th>Current Period</th>
                <th>Class Swipe</th>
                <th>MOP Pass</th>
                <th>Period Excused Tardy</th>
                <th>Period UnExcused Tardy</th>
                <th>Period Negative Seat Time</th>
                <th>Appointment</th>
                <th>Emergency</th>
                <th>Other</th>
                <th>Period Excused Absent</th>
                <th>Period Unexcused Absent</th>
                <th>Comments</th>
             

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

    $("body").on("change",".tgl_checkbox",function(){
    console.log($(this).data('id'));
    console.log($(this).data('type'));

                    $.post('<?=base_url("admin/secretary/change_status")?>',
                    {
                        '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
                        id : $(this).data('id'),
                        status : $(this).is(':checked')==true?1:0,
                        type: $(this).data('type')
                    
                        
                    },
                    function(data){a.ajax.reload();
                    
                    
                    
                        
                    });
     });
      
    // Regular editor for the table
    editor = new $.fn.dataTable.Editor( {
        dom: 'Bfrtip',
        "pageLength": 20,
        "colReorder": true,
        
        ajax: {
            url: base_url+"admin/secretery/attendance_logs",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
       idSrc:  'AttendanceID',
        table: "#classes",
        
        fields: [ 
          
            { label: "Documentation:",name: "appointment" },
            { label: "Comments:",name: "comments" },
    
    

            
        ]
        
    } );
    $('#classes').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
        console.log( editor.inline( this ));

    } );
    //lumalabas nman na kaso may error na 403
    //not allowed daw try ko sir.mag import felling ko sa 
    var a= $('#classes').DataTable( {
        dom: 'Bfrtip',
        responsive: true,
        "pageLength": 20,
        "colReorder": true,
      
     
        ajax: {
            url: base_url+"admin/secretary/attendance_logs",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
        idSrc:  'AttendanceID',
        table: "#classes",
       
    
        columns: [
            
            { data: 'last_name' },
            { data: 'first_name' },
            { data: 'student_local_id' },
            { data: 'grade_level' },
            { data: 'attendance_time_mot' },
            { data: 'PeriodID' },
     
            { data: null,
                render:function(data){
                    var st=`${data.AttendanceDate} ${data.PeriodEndTime}`;
                    var now= new Date();

                    var period_end=new Date(st);
                    if (now>period_end && data.AttendanceTime==''){
                        return 'EOP'+data.PeriodID;
                    }
                    else{return data.AttendanceTime}

                
                } 
            },//Class Swipe
            { data: null,
                render:function(data){
                    var st=`${data.AttendanceDate} ${data.AttendanceTime}`;
                    // const ti=new Date(data.DateCreated).getTime();
                    const now=new Date().getTime();
                    const period_end=new Date(`${data.AttendanceDate} ${data.PeriodEndTime}`).getTime();
                    let eop=0;
                    if (now>period_end && data.AttendanceTime==''){
                    eop = 1;
                    }
                    
                    var class_swipe=new Date(st).getTime();
                    
                    const mot_time = (new Date(data.DateCreated).getTime()+5*60*1000)- class_swipe;
                
                    // function secondsToHms(d) {
                    //     d = Number(d);

                    //     var h = Math.floor(d / 3600);
                    //     var m = Math.floor(d % 3600 / 60);
                    //     var s = Math.floor(d % 3600 % 60);

                    //     return ('0' + h).slice(-2) + ":" + ('0' + m).slice(-2) + ":" + ('0' + s).slice(-2);
                    // }
                    if(eop==1){
                        //mot-attendance
                        var st=`${data.AttendanceDate} ${data.AttendanceTime}`;
                        var p_end=`${data.AttendanceDate} ${data.attendance_time_mot}`;
                        var moptime=`${data.AttendanceDate} 00:05:00`;
                        if(data.attendance_time_mot==null){
                            return `00:05:00`;
                        }else{
                           
                            var value = moment.utc(moment(st, "HH:mm:ss").diff(moment(p_end, "HH:mm:ss"))).format("HH:mm:ss")

                            var a=`${data.AttendanceDate} ${value}`
                            total= moment.utc(moment(a, "HH:mm:ss").diff(moment(moptime, "HH:mm:ss"))).format("HH:mm:ss")
                            return `-${total} `;
                        }
                       // return '--:--';
                    }else{
                        //mot-attendance
                        var st=`${data.AttendanceDate} ${data.AttendanceTime}`;
                        var p_end=`${data.AttendanceDate} ${data.attendance_time_mot}`;
                        var moptime=`${data.AttendanceDate} 00:05:00`;
                        if(data.attendance_time_mot==null){
                            return `00:05:00`;
                        }else{
                           
                            var value = moment.utc(moment(st, "HH:mm:ss").diff(moment(p_end, "HH:mm:ss"))).format("HH:mm:ss")

                            var a=`${data.AttendanceDate} ${value}`
                            total= moment.utc(moment(moptime, "HH:mm:ss").diff(moment(a, "HH:mm:ss"))).format("HH:mm:ss")
                            return `+${total}`;
                        }
                       

                    }
                    // else if (mot_time<0 & eop==0){
                    
                    //     const mot_pass=secondsToHms(Math.abs(mot_time)/(1000));
                    //     return  `-${mot_pass}`;
                        
                    // }
                    // else{
                    //     const mot_pass=secondsToHms(mot_time/(1000));
                    //     return mot_pass;
                    // }

                        
                
                } 
            },//MOP
            { data: null,
                render:function(data){
                    const allowed_time=new Date(`${data.DateCreated}`).getTime()+(5*60000);
                    const swipe_time=new Date(`${data.AttendanceDate} ${data.AttendanceTime}`).getTime();
                    const is_late=allowed_time-swipe_time;
                    const letter_number=parseInt(data.appointment)+parseInt(data.emergency)+parseInt(data.other);
                    const now=new Date().getTime();
                    const period_end=new Date(`${data.AttendanceDate} ${data.PeriodEndTime}`).getTime();
                    let eop=0;
                    if (now>period_end && data.AttendanceTime==''){
                    eop = 1;
                    }
    
                    if(letter_number>=1 && eop==0) {
                            
                            return data.PeriodID;
        
                    }
                    
                else{ return '--';}
                } 
            },//Period Excused Tardy
            { data: null,
                render:function(data){
                    
                
                    const allowed_time=new Date(`${data.DateCreated}`).getTime()+5*60000;
                    const swipe_time=new Date(`${data.AttendanceDate} ${data.AttendanceTime}`).getTime();
                    const letter_number=parseInt(data.appointment)+parseInt(data.emergency)+parseInt(data.other);
                    const is_late=swipe_time-allowed_time;
                        const now=new Date().getTime();
                    const period_end=new Date(`${data.AttendanceDate} ${data.PeriodEndTime}`).getTime();
                    var eop=0;

                    if(letter_number<=0){
                        if (now>period_end && data.AttendanceTime==''){
                        eop = 1;  
                        }
                    
                        if(letter_number<=0 && eop!=1 ) {

                                //return '1';
                            return data.PeriodID;
            
                            }
                        else if(eop==1){
                            return '--';

                        }
                        else if(is_late<0){
                            //return '2';
                            return data.PeriodID;

                        }
                    

                
                            else{ return '--';}
                    }else{
                        return '--';
                    }
                    
                
                    
                } 
            },//Period Unexcused Tardy
            {data: null,
                render:function(data){

                    // parse time using 24-hour clock and use UTC to prevent DST issues
                    var a='';
                    var AttendanceID=data.AttendanceID;
                    if(data.AttendanceTime==''){
                        a= moment.utc(data.attendance_time_mot, "HH:mm:ss");
                    }else{
                        a= moment.utc(data.AttendanceTime, "HH:mm:ss");
                    }
                    var start = moment.utc(data.PeriodStartTime, "HH:mm:ss");
                    var end =a;

                    // account for crossing over to midnight the next day
                    if (end.isBefore(start)) end.add(1, 'day');

                    // calculate the duration
                    var d = moment.duration(end.diff(start));

             

                    // format a string result
                    var value = moment.utc(+d).format('H:mm:ss');
                    return `-${value}`;

                //     const endTime = moment(data.AttendanceTime, 'HH:mm:ss')
                //     const startTime = moment(data.PeriodStartTime, 'HH:mm:ss')
                //     var st='';
                //     var p_end=`${data.AttendanceDate} ${data.PeriodEndTime}`;
                //     var p_start=`${data.AttendanceDate} ${data.PeriodStartTime}`;
                //     if(data.AttendanceTime==''){
                //         st=`${data.AttendanceDate} ${data.attendance_time_mot}`;
                //     }else{
                //         st=`${data.AttendanceDate} ${data.AttendanceTime}`;
                //     }
                    
                //     var value=''
                //    // if(st>p_start){
                //         value= moment.utc(moment(st, "HH:mm:ss").diff(moment(p_start, "HH:mm:ss"))).format("HH:mm:ss")
                //    // }else{
                //         //value= moment.utc(moment(p_start, "HH:mm:ss").diff(moment(st, "HH:mm:ss"))).format("HH:mm:ss")
                //    // }
                    
                   
                    
                //     return `${st} - ${p_start}`;
                    //CHECK IF CLASS SWIPE IS EOP
            


                         //  var AttendanceID=data.AttendanceID
                        //     var st=`${data.AttendanceDate} ${data.AttendanceTime}`;
                        //     var p_end=`${data.AttendanceDate} ${data.PeriodEndTime}`;
                        //     var p_start=`${data.AttendanceDate} ${data.PeriodStartTime}`;
                    
                        //     var now= new Date();

                        //     var period_end=new Date(st);
                
                        
                        //     var class_swipe=new Date(st).getTime();

                        //     var mot_time = new Date(data.DateCreated).getTime();
                        //     var end_time= new Date(p_end).getTime();
                        //     var start_time= new Date(p_start).getTime();
                        //     var seat_time=(end_time-start_time)/(1000*60);  // 1minute
                        
                        //     var missed_period=(class_swipe-start_time)-5*60*1000; // 
                        
                        //     //kapag late pumasok maglogin sa sec
                        //     var allowed_time =parseInt('5')*60*1000;
                        //     console.log(allowed_time)
                        //     if(data.appointment==='1' || data.emergency==='1'|| data.other==='1' ) {
                            
                        //         missed_period=0;
                    
                        //     }

                        //     var s=((mot_time+allowed_time)-class_swipe-missed_period)/(1000*60);

                        //     if (s >=0 && data.AttendanceTime!='' ){
                        //         var result='--';}
                        //     else if(s<0 && s>=-1*seat_time){

                        //         var result=s;
                        //     } 
                        //     else{
                        
                        //         if (now>period_end && data.AttendanceTime==''){
                        //             var result=-seat_time;
                        //         }
                        //         else{   
                            
                        //             var result=-seat_time;
                        //         }  
                        //     }

                        // console.log(Math.abs(result)+'seattime')
                        // console.log(moment("1900-01-01 00:00:00").add(Math.abs(result), 'minutes').format("HH:mm:ss")+'hr')
                        //     value=`-${moment("1900-01-01 00:00:00").add(Math.abs(result), 'minutes').format("HH:mm:ss")}`
                    $.ajax({
                    url: base_url+"admin/secretary/updateattendancenegative",
                    type: "POST",
                    dataType: "json",
                    
                    data: ({[csrfName]: csrfHash,id:AttendanceID,data:value}),
                    }).done(function (data){
                        
                    }) 
                   // return `-${moment("1900-01-01 00:00:00").add(Math.abs(result), 'minutes').format("HH:mm:ss")}`
                }
            },//Period Negative Seat Time            
            { "data":null,
                render:function(data, type,row){
                    var is_checked='';
                    if (data.appointment==1){var is_checked="checked=''";}
                    return `
                    <input data-id="${data.AttendanceID}" data-type="appointment" id="${data.AttendanceID}" id="hp_${data.AttendanceID}" type="checkbox" ${is_checked} 
                    class="tgl tgl-ios tgl_checkbox" data-size="small" />
                    `;
                }
            },//Appointment
            { "data":null,
                render:function(data, type,row){
                    var is_checked='';
                    if (data.emergency==1){var is_checked="checked=''";}
                    return `
                    <input data-id="${data.AttendanceID}" data-type="emergency" id="${data.AttendanceID}" id="hp_${data.AttendanceID}" type="checkbox" ${is_checked} 
                    class="tgl tgl-ios tgl_checkbox" data-size="small" />
                    `;
                }
            },//Emergency
            { "data":null,
                render:function(data, type,row){
                    var is_checked='';
                    if (data.other==1){var is_checked="checked=''";}
                    return `
                    <input data-id="${data.AttendanceID}" data-type="other" id="${data.AttendanceID}" id="hp_${data.AttendanceID}" type="checkbox" ${is_checked} 
                    class="tgl tgl-ios tgl_checkbox" data-size="small" />
                    `;
                }
            },//Other
            { data: null,
                render:function(data){
                
                
                    return 'period_excused'
                } 
            },//Period Excused Absent
            { data: null,
                render:function(data){
                
                
                    return 'period_unexcused'
                }
            },//Period excused

            { data: 'comments' }
          
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

 
 
        // yadcf.init(a , [
         
        //    /// {column_number : 2, filter_type: "text"},
           
        // ]
            
         //   );//

    
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
                            console.log( results );
                            uploadEditor.field('csv').error( 'CSV parsing error: '+ results.errors[0].message );
                        }
                        else {
                            uploadEditor.close();
                          
                            selectColumns( editor, results.data, results.meta.fields );
                            console.log( results.data[0].Firstname );
                            
                          
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