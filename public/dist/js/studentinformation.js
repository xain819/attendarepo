$(document).ready(function(){
    console.log(base_url);
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
    
    editor = new $.fn.dataTable.Editor({
        ajax: {
            url: base_url+"admin/studentinformation/insert_student",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
       table: "#Student_DataTable",
       fields: [ 
           {
               label: "ID Number:",
               name: "IDNumber"
           }, 
           {
               label: "FirstName:",
               name: "FirstName"
           },
           {
            label: "LastName:",
            name: "LastName"
           },
           {
            label: "Gender:",
            name: "Gender"
        },
        {
            label: "BirthDate:",
            name: "BirthDate"
        },{
            label: "ContactNumber:",
            name: "ContactNumber"
        }
        ,{
            label: "RaceID:",
            name: "RaceID"
        },{
            label: "SectionID:",
            name: "SectionID"
        },{
            label: "GradeLevelID:",
            name: "GradeLevelID"
        },{
            label: "DistinctionID:",
            name: "DistinctionID"
        },{
            label: "Password:",
            name: "Password"
        },{
            label: "IsEnabled:",
            name: "IsEnabled"
        }
       ]
    });




    var student_DataTable = $('#Student_DataTable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        ajax: {
            url: base_url+"admin/studentinformation/get_all_student ",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
       columns: [
            { data:'StudentID'},
            { data:'IDNumber'},
            { data:'FirstName'},
            { data:'LastName'},
            { data:'Gender'}, 
            { data:'BirthDate'},
            { data:'ContactNumber'},
            { data:'RaceID'},
            { data:'SectionID'},
            { data:'GradeLevelID'}, 
            { data:'DistinctionID'},
            { data:'Password'},
            { data:'IsEnabled'},
            { 
                data: null,
                render:function(data){
                    return '<button value='+data.StudentID+' class="btn btn-xs btn-warning showeditstudentmodal"><i class="fa fa-fw fa-pencil"></i></button> <button value='+data.StudentID+' class="btn btn-xs btn-danger delete_student"><i class="fa fa-fw fa-trash"></i></button>';
                }
            }
        ],
        select: true, 
        buttons: [
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
        
        student_DataTable.ajax.reload();
       })


    $(document).on('click','#showaddstudentmodal',function(){
       $.ajax({
           url:base_url+"admin/studentinformation/student_setting ",
           type:"POST",
           data:({[csrfName]: csrfHash}),
           dataType:'JSON',
       })
       .done(function(data){
            $("#add-RaceID").html(data.race);
            $("#add-Section").html(data.section);
            $("#add-GradeLevel").html(data.gradelevel);
            $("#add-Distinction").html(data.distinction);
            $("#student-modal-primary").modal("show");
       })
    });
    $(document).on('click','.showeditstudentmodal',function(){
        studentid=$(this).val();
        $.ajax({
            url:base_url+"admin/studentinformation/get_student_bystudentid ",
            type:"POST",
            data:({[csrfName]: csrfHash,data:studentid}),
            dataType:'JSON',
        })
        .done(function(data){
            $("#edit-RaceID").html(data.race);
            $("#edit-SectionID").html(data.section);
            $("#edit-GradeLevelID").html(data.gradelevel);
            $("#edit-DistinctionID").html(data.distinction);

            $("#edit-RaceID").val(data.student_info[0].RaceID).trigger('change');
            $("#edit-SectionID").val(data.student_info[0].SectionID).trigger('change');
            $("#edit-GradeLevelID").val(data.student_info[0].GradeLevelID).trigger('change');
            $("#edit-DistinctionID").val(data.student_info[0].DistinctionID).trigger('change');

            $('#edit-IDNumber').val(data.student_info[0].IDNumber);
            $('#edit-FirstName').val(data.student_info[0].FirstName);
            $('#edit-LastName').val(data.student_info[0].LastName);
            $('#edit-Gender').val(data.student_info[0].Gender).trigger('change');
            $('#edit-BirthDate').val(data.student_info[0].BirthDate);
            $('#edit-ContactNumber').val(data.student_info[0].ContactNumber);
            $('#edit-DepartmentID').val(data.student_info[0].DepartmentID).trigger('change');
            $('#edit-Password').val(data.student_info[0].Password);
            $('#edit-Enabled').val(data.student_info[0].IsEnabled).trigger('change');
            $('#edit-StudentID').val(data.student_info[0].StudentID);

        })
        $('#edit-student-modal-primary').modal('show');
    })
    $(document).on('click','#addstudent',function(){ 
        console.log(get_form_values("#add-student-form-id"))
        manage_student('add-new-student',get_form_values("#add-student-form-id"));
    });
    $(document).on('click','.delete_student',function(){
        id=$(this).val();
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true
          },
          function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:base_url+"admin/studentinformation/manage_student ",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:'delete-student',data:id}),
                    dataType:'JSON',
                })
                .done(function(data){
                    if(data===true){
                        swal("Success!", "Successfully Deleted", "success");
                        student_DataTable.ajax.reload();
                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator","error");
                    }
                })
              
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
    
    });
    $(document).on('click','#editstudent',function(){ 
        console.log(get_form_values("#edit-student-form-id"))   ;
        manage_student('edit-student',get_form_values("#edit-student-form-id"));
    });
    function get_form_values(formid){
        var result = [];
        count=1;
        $.each($(formid).serializeArray(), function() {
             result[count] = this.value;
             count++;
        });
        return result;
    }
    function manage_student(type,values){
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true
          },
          function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:base_url+"admin/studentinformation/manage_student ",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:type,data:values}),
                    dataType:'JSON',
                })
                .done(function(data){
                    if(data===true){
                        swal("Success!", "Successfully Added", "success");
                        student_DataTable.ajax.reload();
                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator",'error');
                    }
                })
             
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
    }
   //    student_DataTable.ajax.reload();get_department_option
});