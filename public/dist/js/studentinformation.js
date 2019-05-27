$(document).ready(function(){
    console.log(base_url);
    var student_DataTable = $('#Student_DataTable').DataTable({
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
        select: true
    });
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