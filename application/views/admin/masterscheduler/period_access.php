 <!-- Content Header (Page header) -->
 <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
 
  
 <section class="content-header">
      <h1>
        Welcome to
        <small>Teacher Information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
              <button class="btn btn-sm btn-success" id="showaddteachermodal"> add Teacher</button>
          </div>
        </div>
        <div class="box-body">
          <div style="width: 100%;">
            <div class="table-responsive">
              <table id="Teacher_DataTable" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>PeriodID</th>
                  <th>Period</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Grace Period</th>
                  <th>Transition Time</th>
                  <th>HP Lock Start</th>
                  <th>HP Lock End</th>
                  <th>LocationID</th>
                </tr>
                </thead>
              </table>
            </div>      
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    


    
    
    <!-- <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script> -->
    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>
    <script>

$(document).ready(function(){
    console.log(base_url);
    var Teacher_DataTable = $('#Teacher_DataTable').DataTable({
        responsive: true,
        ajax: {
            url: base_url+"admin/teacherinformation/get_all_teacher ",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },

       columns: [
            { data:'Period'},
            { data:'PeriodStartTime'},
            { data:'PeriodEndTime'},
            { data:'GracePeriod'},
            { data:'TransitionTime'},
            { data:'HPLockStart'},
            { data:'HPLockEnd'},
            { data:'LocationID'},
            { 
                data: null,
                render:function(data){
                    return '<button value='+data.TeacherID+' class="btn btn-xs btn-warning showeditteachermodal"><i class="fa fa-fw fa-pencil"></i></button> <button value='+data.TeacherID+' class="btn btn-xs btn-danger delete_teacher"><i class="fa fa-fw fa-trash"></i></button>';
                }
            }
        ],
        select: true
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
    $(document).on('click','#addteacher',function(){ 
        manage_teacher('add-new-teacher',get_form_values("#add-teacher-form-id"));
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
    
    
    </script>

<?php $this->load->view('admin/teacherinformation/add');?>
<?php $this->load->view('admin/teacherinformation/edit');?>
