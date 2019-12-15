
function teacher_hallpass(teacherid){
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
                data: ({[csrfName]: csrfHash,data:teacherid}),
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

}





$(document).ready(function(){


    //display teacher list
    
    console.log(base_url);
    $.ajax({
        url:base_url+"admin/teacherinformation/get_all_teacher ",
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    })
    .done(function(data){
        console.log(data)
        for (let index = 0; index < data.length; index++) {
            const FullName = data[index]['LastName']+', '+data[index]['FirstName'];
            const Department= data[index]['Department'];
            const IDNumber=data[index]['IDNumber'];
            const TeacherID=data[index]['TeacherID'];
            const CourseList=data[index]['course_description_list'];
            const PeriodList=data[index]['period_list'];
            const LocationList=data[index]['location_list'];
            const BirthDate=data[index]['BirthDate'];
           $('.teacherlist').append(
            `<div class="col-xl-3 col-md-6">
            <div class="card ">
                <div class="card-body">
                    <div class="text-center">
                        <div class="circle-style mb-3">
                            <img class="img-fluid rounded-circle" src="${base_url}/public/assets/images/users/4.jpg" alt="">
                        </div>
                        <h4>${FullName}</h4>
                        <h5 class="text-muted">${IDNumber}</h5>
                        <h5 class="mt-5 mb-3 text-primary text-center">${Department}</h5>
                        <!----<div class="row justify-content-center mb-5">
                        //     <div class="col-lg-8">
                        //         <div class="progress">
                        //             <div class="progress-bar" style="width: 67%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        //         </div>
                        //     </div>
                        // </div>---->
                        <div class="row justify-content-center m-b-10">
                        
                       
                            <div class="col"><button value='${TeacherID}' class="btn btn-xs btn-success teachermodal"><i class="fa fa-television"></i></button></a>
                            </div>
                            <div class="col"><button value='${TeacherID}' class="btn btn-xs btn-warning showeditteachermodal"><i class="fa fa-fw fa-pencil"></i></button>
                            </div>
                          
                            <div class="col"> <button value='${TeacherID}' class="btn btn-xs btn-danger delete_teacher">Delete</i></button>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col">
                            BrithDate: ${BirthDate}
                           
                            </div>
                            <div class="col">
                            Gender: ${BirthDate}
                           
                            </div>
                        </div><button value='${TeacherID}' class="btn btn-outline-primary showdetails"></i>
                            Details</button>
                    </div>
                </div>
            </div>
        </div>`

           ) ;
        }
       
    })
    var Teacher_DataTable = $('#Teacher_DataTable').DataTable({
        responsive: true,
        "bAutoWidth": true,
        "autoWidth": true,
        ajax: {
            url: base_url+"admin/teacherinformation/get_all_teacher ",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
           columns: [
            { 
                data: null,
                render:function(data){
                    return `action`;}
            },
            { data:'IDNumber'},
            { data:'FirstName'},
            { data:'LastName'},
            { data:'Gender'},
            { data:'BirthDate'},
            { data:'ContactNumber'},
            { data:'Department'},
            { data:'Password',visible:'false'},
          
           
            { 
                data: null,
                render:function(data){
                    return `${data.course_description_list}`;}
            },
            
            { 
                data: null,
                render:function(data){
                    return `${data.teacher_course_list}`;}
            },
             { 
                data: null,
                render:function(data){
                    return `${data.period_list}`;}
            },
            { 
                data: null,"width": "100px",
                render:function(data){
                    return `${data.location_list}`;}
            },
            { 
                data: null,
                render:function(data){
                    return '<button value='+data.TeacherID+' class="btn btn-xs btn-success teachermodal"><i class="fa fa-television"></i></button><button value='+data.TeacherID+' class="btn btn-xs btn-warning showeditteachermodal"><i class="fa fa-fw fa-pencil"></i></button> <button value='+data.TeacherID+' class="btn btn-xs btn-danger delete_teacher"><i class="fa fa-fw fa-trash"></i></button>';
                }
            }
           
        ],
       
        select: true,
       // buttons: [
            //{ extend: 'create', editor: editor },
            // { extend: 'edit',   editor: editor },
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
        //]
    });
    $(document).on('click','#showaddteachermodal',function(){
       $.ajax({
           url:base_url+"admin/teacherinformation/teacher_settings ",
           type:"POST",
           data:({[csrfName]: csrfHash}),
           dataType:'JSON',
       })
       .done(function(data){
            $("#tdepartmentid").html(data.department);
            $("#teacher-modal-primary").modal("show");
       })
    });
    $(document).on('click','.showaddteachermodal',function(){
        $.ajax({
            url:base_url+"admin/teacherinformation/teacher_settings ",
            type:"POST",
            data:({[csrfName]: csrfHash}),
            dataType:'JSON',
        })
        .done(function(data){
             $("#tdepartmentid").html(data.department);
             $("#teacher-modal-primary").modal("show");
        })
     });
  
     $(document).on('click','.teachermodal',function(){
        teacherid=$(this).val();
        teacher_hallpass(teacherid);
        $("#ahpf").modal("show");
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

    
    $(document).on('click','.showeditteachermodal',function(){
        teacherid=$(this).val();
        $.ajax({
            url:base_url+"admin/teacherinformation/get_teacher_byteacherid ",
            type:"POST",
            data:({[csrfName]: csrfHash,data:teacherid}),
            dataType:'JSON',
        })
        .done(function(data){
            $("#edit-DepartmentID").html(data.department);
            $('#edit-IDNumber').val(data.teacher_info[0].IDNumber);
            $('#edit-FirstName').val(data.teacher_info[0].FirstName);
            $('#edit-LastName').val(data.teacher_info[0].LastName);
            $('#edit-Gender').val(data.teacher_info[0].Gender).trigger('change');
            $('#edit-BirthDate').val(data.teacher_info[0].BirthDate);
            $('#edit-ContactNumber').val(data.teacher_info[0].ContactNumber);
            $('#edit-DepartmentID').val(data.teacher_info[0].DepartmentID).trigger('change');
            $('#edit-Password').val(data.teacher_info[0].Password);
            $('#edit-TeacherID').val(data.teacher_info[0].TeacherID);
        })
        $('#edit-teacher-modal-primary').modal('show');
    })
    $(document).on('click','.showdetails',function(){
        teacherid=$(this).val();
        $.ajax({
            url:base_url+"admin/teacherinformation/get_teacher_byteacherid ",
            type:"POST",
            data:({[csrfName]: csrfHash,data:teacherid}),
            dataType:'JSON',
        })
        .done(function(data){
            console.log(data['teacher_info'][0]['course_description_list'])
           $('.mydetails').html(`
                    <div class="row justify-content-center">
                           
                            <div class="col-lg-4">
                                <b>Location</b>
                                <p class="my-3">${data['teacher_info'][0]['course_description_list']}</p>
                            </div>
                            
                            <div class="col-lg-4">
                            <b>PeriodList</b>
                                <p class="my-3">${data['teacher_info'][0]['period_list']}</p>
                            </div>
                           
                            <div class="col-lg-4">
                            <b>LocationList</b>
                                <p class="my-3">${data['teacher_info'][0]['location_list']}</p>
                            </div>
                        </div>
           `)
        })
        $('#details-teacher-modal-primary').modal('show');
    })
    $(document).on('click','#addteacher',function(){ 
        manage_teacher('add-new-teacher',get_form_values("#add-teacher-form-id"));
        console.log(get_form_values("#add-teacher-form-id"));
    });


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
    
    });
    $(document).on('click','#editteacher',function(){ 
        manage_teacher('edit-teacher',get_form_values("#edit-teacher-form-id"));
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

    function manage_teacher(type,values){
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
                    data:({[csrfName]: csrfHash,type:type,data:values}),
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
    }
   //    Teacher_DataTable.ajax.reload();get_department_option
});