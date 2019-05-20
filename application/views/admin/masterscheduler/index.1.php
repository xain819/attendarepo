<section class="content-header">
	<div class="row">
	    <div class="col-md-12">
	      <div class="box box-body">
	        <div class="col-md-6">
	          <h4><i class="fa fa-list"></i> &nbsp; Terminal List</h4>
	        </div>
	        <div class="col-md-6 text-right">
	          <a href="<?= base_url('admin/terminalpannel/add_terminal'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Terminal</a>
	        </div>
	        
	      </div>
	    </div>
	</div> 

	<div class="box">
        <div class="box-header">


        </div>
        <div class="box-body table-responsive">  
            <?php echo form_open("/",'class="filterdata"') ?>    
                <div class="row">
                   <div class="col-sm-3">
                        <div class="form-group">
                            <select name="type" class="form-control" onchange="filter_data()" >
                                <option value="">All Admin Types</option>
                                <?php foreach($admin_roles as $admin_role):?>
                                <option value="<?=$admin_role['admin_role_id']?>"><?=$admin_role['admin_role_title']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                   </div>
                   <div class="col-sm-2">
                        <div class="form-group">
                            <select name="status" class="form-control" onchange="filter_data()" >
                                <option value="">All Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                   </div>
                   <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="keyword" class="form-control"  placeholder="Search from here..." onkeyup="filter_data()" />
                        </div>
                   </div>
                </div>
            <?php echo form_close(); ?> 
      	</div>
    </div> 

    <div class="bootstrap-timepicker">
        <div class="form-group">
            <label>Time picker:</label>
            <div class="input-group">
                <input type="text" class="form-control timepicker">
                <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
                </div>
            </div>
        </div>
      </div>

</section>
<!-- Main content -->
<section class="content mt10">
	<div class="box">
		<div class="box-header">
		</div>
		<div class="box-body">
        	
        	<!-- Load Admin list (json request)-->
            <div class="data_container">
            
            </div>

		</div>
	</div>
</section>
<!-- /.content -->


<script>
//------------------------------------------------------------------
function filter_data()
{
	$('.data_container').html('<div class="text-center"><img src="<?=base_url('theme/common')?>/preloader.gif"/></div>');
	$.post('<?=base_url('admin/admin/filterdata')?>',$('.filterdata').serialize(),function(){
		$('.data_container').load('<?=base_url('admin/masterscheduler/list_data')?>');
	});
}
//------------------------------------------------------------------
function load_records()
{
	$('.data_container').html('<div class="text-center"><img src="<?=base_url('theme/common')?>/preloader.gif"/></div>');
	$('.data_container').load('<?=base_url('admin/masterscheduler/list_data')?>');
}
load_records();

//---------------------------------------------------------------------
$("body").on("change",".tgl_checkbox",function(){
	$.post('<?=base_url("admin/masterscheduler/change_status")?>',
	{
        '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		id : $(this).data('id'),
		status : $(this).is(':checked')==true?1:0
	},
	function(data){
		$.notify("Status Changed Successfully", "success");
	});
});
</script>