$(document).ready(function(){
    console.log(base_url);
    var Teacher_DataTable = $('#Teacher_DataTable').DataTable({
        ajax: {
            url: base_url+"admin/teacherinformation/get_all_teacher ",
            data:({ [csrfName]: csrfHash}),
            dataSrc: '',
            method:'POST'
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
            { data:'Password'}
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
       })
        $("#modal-primary").modal("show");
    });
    $(document).on('click','#addteacher',function(){
        
    })
   //    Teacher_DataTable.ajax.reload();get_department_option
});