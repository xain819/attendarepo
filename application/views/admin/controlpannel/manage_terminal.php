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

<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Hello, <span>Welcome here</span></h4>
                    </div>
                    <div class="col p-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a>
                            </li>
                            <li class="breadcrumb-item active">Blank</li>
                        </ol>
                    </div>
                </div>



<div>

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
    
                <th>Description</th>
                <th>Course Group</th>
                <th>Course Number</th>

                <th>Period number:</th>
                <th>Teacher Name</th>
                <th>Section Name</th>
                <th>Grade Level</th>
                <th>Schedule Type</th>
       
            
            </tr>
        </thead>
  
    </table>
</div></div></div>


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
            url: base_url+"admin/academicsettings/check_courses",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
      
        table: "#example",
        fields: [ {
                label: "Description:",
                name: "course_description"
            }, 
            {
                label: "Course Group:",
                name: "course_group"
            },
            {
                label: "Course Code:",
                name: "course_code"
            },
            {
                label: "Period:",
                name: "period_number"
            },
            {
                label: "Teacher Name:",
                name: "teacher_name"
            },
            {
                label: "Section:",
                name: "section_name"
            },
            {
                label: "Grade Level:",
                name: "grade_level"
            },
            {
                label: "Day Type:",
                name: "schedule_type"
            },
        

        ]
        
    } );
 
    //lumalabas nman na kaso may error na 403
    //not allowed daw try ko sir.mag import felling ko sa 
    var a= $('#example').DataTable( {
        dom: 'Bfrtip',
        ajax: {
            url: base_url+"admin/academicsettings/get_import_courses",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
        columns: [
            { data: 'course_description' },
            { data: 'course_group' },
            { data: 'course_code' },

            { data: 'period_number' },
            { data: 'teacher_name' },
            { data: 'section_name' },
            
            { data: 'grade_level' },
            { data: 'schedule_type' }

          
        ],
        select: true,
        buttons: [
            { extend: 'create', editor: editor },
            { extend: 'edit',   editor: editor },
            { extend: 'remove', editor: editor },
            {
                extend: 'csv',
                text: 'Export CSV',
                className: 'btn-space',
                exportOptions: {
                    orthogonal: null
                }
            },
            {
                text: 'Import CSV',
                action: function () {
                    uploadEditor.create( {
                        title: 'CSV file import'
                    } );
                }
            },
            {
                extend: 'selectAll',
                className: 'btn-space'
            },
            'selectNone',
        ]
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