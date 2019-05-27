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
              <button class="btn btn-sm btn-success" id="showaddperiod"> Add New Period</button>
          </div>
        </div>
        <div class="box-body">
          <div style="width: 100%;">
            <div class="table-responsive">
              <table id="Peiod_DataTable" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th style='width:150px;'>Period Name </th>
                  <th>Start Time</th>
                  <th>End Time</th>

                  <th>Grace Period</th>
                  <th>Transition Time</th>

                  <th>HP Lock Start</th>
                  <th>HP Lock End</th>
         
                  <th>Action</th>
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
    var Period_DataTable = $('#Peiod_DataTable').DataTable({
        responsive: true,
        ajax: {
            url: base_url+"admin/masterscheduler/get_all_periods ",
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
     
            { 
                data: null,
                render:function(data){
                    return '<button value='+data.PeriodID+' class="btn btn-xs btn-warning showeditperiodmodal"><i class="fa fa-fw fa-pencil"></i></button> <button value='+data.PeriodID+' class="btn btn-xs btn-danger delete_period"><i class="fa fa-fw fa-trash"></i></button>';
                }
            }
        ],
        select: true
    });

    $(document).on('click','#addperiod',function(){ 
        manage_period('add-new-period',get_form_values("#add-period-form-id"));
    });


    $(document).on('click','#showaddperiod',function(){
         $.ajax({
           url:base_url+"admin/masterscheduler/add_period ",
           type:"POST",
           data:({[csrfName]: csrfHash}),
           dataType:'JSON',
       })
       .done(function(data){
        $("#add-Period").html(data.Period);
        $("#add-PeriodStartTime").html(data.PeriodStartTime);
        $("#add-PeriodEndTIme").html(data.PeriodEndTime);
        $("#period-modal-primary").modal("hide");
       
       })
       $("#period-modal-primary").modal("show");
    });


    $(document).on('click','.showeditperiodmodal',function(){
        PeriodID=$(this).val();
        console.log(PeriodID);
        
        $.ajax({
            url:base_url+"admin/masterscheduler/get_period_by_id",
            type:"POST",
            data:({[csrfName]: csrfHash,data:PeriodID}),
            dataType:'JSON',
        })
        .done(function(data){
          $("#edit-period-modal-primary").modal("show");
            $("#edit-Period").val(data.period_info[0].Period);
            $('#edit-PeriodStartTime').val(data.period_info[0].PeriodStartTime);
            $('#edit-PeriodEndTime').val(data.period_info[0].PeriodEndTime);
            $('#edit-PeriodID').val(data.period_info[0].PeriodID);

        })
    
      
    })

    $(document).on('click','#addperiod',function(){ 
        manage_period('add-new-period',get_form_values("#add-period-form-id"));


    });

    $(document).on('click','.delete_period',function(){
        id=$(this).val();
        swal({
            title: "Are you sure?",
            text: "You will not be able to undo this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true,
            showLoaderOnConfirm: true
          },
          function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:base_url+"admin/masterscheduler/manage_period ",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:'delete-period',data:id}),
                    dataType:'JSON',
                })
                .done(function(data){
                  Period_DataTable.ajax.reload();
                
                    if(data===true){
                        swal("Success!", "Successfully Deleted", "success");
                        Period_DataTable.ajax.reload();
                    }else{
                        swal("Failed","Error Adding Please Contact your system Administrator","error");
                    }
                })
              
            } else {
              swal("Cancelled");
            }
          });
    
    });
    $(document).on('click','#editperiod',function(){ 
        manage_period('edit-period',get_form_values("#edit-period-form-id"));
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


    function manage_period(type,values){
      console.log(values);
      var title_period=values[1];
      console.log(title_period);
        swal({
            title: `Want to Update ${title_period}`,
            text: "Please click yes",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, edit it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true
          },
          function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:base_url+"admin/masterscheduler/manage_period ",
                    type:"POST",
                    data:({[csrfName]: csrfHash,type:type,data:values}),
                    dataType:'JSON',
                })
                .done(function(data){
               
                    if(data===true){
                        swal("Success!", "Successfully Added", "success");
                        Period_DataTable.ajax.reload();
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

<?php $this->load->view('admin/masterscheduler/add');?>
<?php $this->load->view('admin/masterscheduler/edit');?>
