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


<div class=' col-md-12'>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">School Settings</h4>
            <button class="btn btn-xs btn-success show-add-modal">Add</button>
            <div class="card-content">
                <table id="schoolsettings" class="display" style="width:100%">
                        <thead>
                            <tr>
                    
                            </tr>
                        </thead>
            
                </table>
            </div>
        </div>
    </div>
</div>

<div class=' col-md-12'>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">System Settings</h4>
            <button class="btn btn-xs btn-success " id="show-add-systemsetting-modal">Add</button>
            <h4>Add Your School Name Here</h4>
            <div class="card-content">
                <table id="systemsettings" class="display" style="width:100%">
                        <thead>
                            <tr>
                            </tr>
                        </thead>
            
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/academicsettings/edit-systemsetting');?>
<?php $this->load->view('admin/academicsettings/add-systemsetting');?>
<?php $this->load->view('admin/academicsettings/editschoolsettings');?>
<?php $this->load->view('admin/academicsettings/addschoosettings');?>

<script type='text/javascript'>
 var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
        base_url='<?php echo base_url(); ?>';
        


$(document).ready(function() {
    // Regular editor for the table
 
 
    //lumalabas nman na kaso may error na 403
    //not allowed daw try ko sir.mag import felling ko sa 
    var b= $('#systemsettings').DataTable( {
        
        ajax: {
            url: base_url+"admin/academicsettings/get_systemsettings",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
        columns: [
            { data: 'Setting','title':'SettingName' },
            { data: 'Value','title':'SettingValue' },
            {
                data:null,'title':'Action',
                render:function(data){
                    return `  <button id="show-edit-systemsetting-modal" value=${data.SettingID} class="btn btn-xs btn-warning ">Edit</button>`;
                }
            }


          
        ],
        select: true,
    
    });
    var a= $('#schoolsettings').DataTable( {
        
        ajax: {
            url: base_url+"admin/academicsettings/check_schoolsettings",
            data:({ [csrfName]: csrfHash}),
            type:"POST",
            dataSrc: '',
            dataType:'JSON'
       },
        columns: [
            { data: 'start','title':'Start' },
            { data: 'name','title':'Name' },
            { data: 'end','title':'End' },
            { data: 'name_id','title':'Name ID' },
            {
                data:null,'title':'Action',
                render:function(data){
                    return `<button value=${data.id} class="btn btn-xs btn-warning edit-schoolsetting">Edit</button>`;
                }
            }


          
        ],
        select: true,
    
    });
    // Upload Editor - triggered from the import button. Used only for uploading a file to the browser
    var id='';
    $(document).on('click','.edit-schoolsetting',function(){
        id=$(this).val()
       console.log(id)
        nameid=$("#nameid-edit").val();
        $.ajax({
        url:base_url+"admin/academicsettings/get_schoolsettings_id ",
        type:"POST",
        data:({[csrfName]: csrfHash,id:id}),
        dataType:'JSON',
        })
        .done(function(data){
            $("#start-edit").val(data['start']);
            $("#name-edit").val(data['name']);
            $("#end-edit").val(data['end']);
            $("#nameid-edit").val(data['name_id']);
            a.ajax.reload();
        })
        $('#edit-schoosettings-modal-primary').modal('show');
    })
  
    $(document).on('click','.show-add-modal',function(){

        $('#add-schoosettings-modal-primary').modal('show');    
    })

    $(document).on('click','.submit-schoolform',function(){
            start=$("#start").val();
            name=$("#name").val();
            end=$("#end").val();
            nameid=$("#nameid").val();
            $.ajax({
            url:base_url+"admin/academicsettings/insert_schoolsettings ",
            type:"POST",
            data:({[csrfName]: csrfHash,start:start,end:end,name:name,nameid:nameid}),
            dataType:'JSON',
            })
            .done(function(data){
                a.ajax.reload();
                $('#add-schoosettings-modal-primary').modal('hide');    
            })

    })
    $(document).on('click','#edit-schoolform',function(){
            start=$("#start-edit").val();
            name=$("#name-edit").val();
            end=$("#end-edit").val();
            nameid=$("#nameid-edit").val();
            $.ajax({
            url:base_url+"admin/academicsettings/edit_schoolsettings ",
            type:"POST",
            data:({[csrfName]: csrfHash,id:id,start:start,end:end,name:name,nameid:nameid}),
            dataType:'JSON',
            })
            .done(function(data){
                a.ajax.reload();
                $('#edit-schoosettings-modal-primary').modal('hide');
            })

    })

///////////////////////SYSTEM SETTING//////////////////////////////

    $(document).on('click','#show-edit-systemsetting-modal',function(){
        id=$(this).val()
        $.ajax({
        url:base_url+"admin/academicsettings/get_systemsettingby_id ",
        type:"POST",
        data:({[csrfName]: csrfHash,id:id}),
        dataType:'JSON',
        })
        .done(function(data){
            $("#settingname-edit").val(data['Setting'])
            $("#settingvalue-edit").val(data['Value'])
            b.ajax.reload();
        })
        $('#edit-systemsetting-modal-primary').modal('show');
    })
    var btnClick = function(e){
        console.log(e.currentTarget)
        if(e.currentTarget.id=='add-systemsetting-btn'){
            SettingName=$("#settingname-add").val()
            SettingValue=$("#settingvalue-add").val()
            $.ajax({
            url:base_url+"admin/academicsettings/insert_systemsetting ",
            type:"POST",
            data:({[csrfName]: csrfHash,SettingName:SettingName,SettingValue:SettingValue}),
            dataType:'JSON',
            })
            .done(function(data){
                b.ajax.reload();
                $('#add-systemsetting-modal-primary').modal('hide');    
            })
        }
        else if(e.currentTarget.id=='edit-systemsetting-btn'){
            SettingName=$("#settingname-edit").val()
            SettingValue=$("#settingvalue-edit").val()

            $.ajax({
            url:base_url+"admin/academicsettings/edit_systemsetting ",
            type:"POST",
            data:({[csrfName]: csrfHash,id:id,SettingName:SettingName,SettingValue:SettingValue}),
            dataType:'JSON',
            })
            .done(function(data){
                b.ajax.reload();
                $('#edit-systemsetting-modal-primary').modal('hide');
            })
        }
        else if(e.currentTarget.id=='show-add-systemsetting-modal'){
            $('#add-systemsetting-modal-primary').modal('show');    
        }
     
    }
    $('#add-systemsetting-btn').on('click',btnClick);
    $('#edit-systemsetting-btn').on('click',btnClick);
    $('#show-add-systemsetting-modal').on('click',btnClick);

});
</script>