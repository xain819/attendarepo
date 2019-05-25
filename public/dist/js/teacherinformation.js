$(document).ready(function(){
    console.log(base_url);
    var Teacher_DataTable = $('#Teacher_DataTable').DataTable({
        ajax: {
            url: base_url+"admin/teacherinformation/get_all_teacher ",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
       columns: [
            { data:'TeacherID'},
            { data:'IDNumber'},
            { data:'FirstName'},
            { data:'LastName'},
            { data:'Gender'},
            { data:'BirthDate'},
            { data:'ContactNumber'},
            { data:'DepartmentID'},
            { data:'Password'},
            { 
                data: null,
                render:function(data){
                    return '<button value='+data.TeacherID+' class="btn btn-xs btn-warning"><i class="fa fa-fw fa-eye"></i></button> <button value='+data.TeacherID+' class="btn btn-xs btn-danger delete_teacher"><i class="fa fa-fw fa-trash"></i></button>';
                }
            }
        ],
        select: true
    });
    $(document).on('click','#showaddteachermodal',function(){
       $.ajax({
           url:base_url+"admin/teacherinformation/get_department_option ",
           type:"POST",
           data:({[csrfName]: csrfHash}),
           dataType:'JSON',
       })
       .done(function(data){
            $("#tdepartmentid").html(data.department);
            $("#teacher-modal-primary").modal("show");
       })
        
    });
    $(document).on('click','#addteacher',function(){ 
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
                    url:base_url+"admin/teacherinformation/manage_teacher ",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:'add-new-teacher',data:get_form_values("#add-teacher-form-id")}),
                    dataType:'JSON',
                })
                .done(function(data){
                    if(data===true){
                        swal("Success!", "Successfully Added", "success");
                        Teacher_DataTable.ajax.reload();
                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator",'error');
                    }
                })
             
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
       

    })
    $(document).on('click','.delete_teacher',function(){
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
                    url:base_url+"admin/teacherinformation/manage_teacher ",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:'delete-teacher',data:id}),
                    dataType:'JSON',
                })
                .done(function(data){
                    if(data===true){
                        swal("Success!", "Successfully Deleted", "success");
                        Teacher_DataTable.ajax.reload();
                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator","error");
                    }
                })
              
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
    
    })
    function get_form_values(formid){
        var result = [];
        count=1;
        $.each($(formid).serializeArray(), function() {
            result[count] = this.value;
            count++;
        });
        return result;
    }
   //    Teacher_DataTable.ajax.reload();get_department_option
});