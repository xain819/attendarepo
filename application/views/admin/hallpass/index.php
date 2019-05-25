<section class="content-header">
	<div class="row">
	    <div class="col-md-12">
	      <div class="box box-body">
	        <div class="col-md-6">
	          <h4><i class="fa fa-list"></i> &nbsp; Hall Pass List</h4>
	        </div>
	        <div class="col-md-6 text-right">
	          <a href="<?= base_url('admin/hallpass/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Hallpass</a>
	        </div>
	        
	      </div>
	    </div>
	</div> 

	<div class="box">
        

        <div class="box">
        <div class="box-header">
        </div>
        
        <div class="col-md-12">
	    
	      
	        <div class="col-md-6 text-left">
	          <a href="<?= base_url('admin/hallpass'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Hallpass</a>
	        </div>
	       
	    
	    </div>
        <div class="box-body table-responsive">  
        <?php if(isset($msg) || validation_errors() !== ''): ?>
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                                    <?= validation_errors();?>
                                    <?= isset($msg)? $msg: ''; ?>
                                </div>
                                <?php endif; ?>
        <?php echo form_open(base_url('admin/hallpass/add'), 'class="form-vertical"');  ?>  


                             <div class="form-group">
                                
                                    
                                    <div class="col-sm-4">
                                    <label for="HallPass" class="control-label">Hall Pass</label>
                                    <input type="text" name="HallPass" class="form-control" id="HallPass" placeholder="">
                                    </div>
                                </div>
          
                   <div class="form-group">
                              
                                    <div class="col-sm-4">
                                    <label for="PassTypeID" class="control-label">Select Type*</label>
                                    <select name="PassTypeID" class="form-control">
                                        <option value="">Select Type</option>
                                        <?php foreach($PassType as $role): ?>
                                        <option value="<?= $role['PassTypeID']; ?>"><?= $role['PassType']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </div>
                                </div>
                   <div class="form-group">
                   <div class="col-sm-4">
                                    <label for="TimeAllocated" class="control-label">TimeAllocated In Minutes</label>
                                   
                                    <input type="number" name="TimeAllocated" class="form-control" id="TimeAllocated" placeholder="5" value="5">
                                    </div>
                                </div>

                   <div class="form-group">
                 
                                    <div class="col-md-12">
                                    </br>
                                    <input type="submit" name="submit" value="Add New Hall Pass" class="btn btn-info pull-right">
                                    </div>
                                </div>
                </div>
            <?php echo form_close(); ?> 
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
            <div class="col-md-6">
                <h4><i class="fa fa-list"></i> &nbsp; Hall Pass List</h4>
                </br>
                </div>
                
            <div class="data_container col-sm-12">
               
                
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
		$('.data_container').load('<?=base_url('admin/hallpass/list_data')?>');
	});
}
//------------------------------------------------------------------
function load_records()
{
	$('.data_container').html('<div class="text-center"><img src="<?=base_url('theme/common')?>/preloader.gif"/></div>');
	$('.data_container').load('<?=base_url('admin/hallpass/list_data')?>');
}
load_records();

//---------------------------------------------------------------------
$("body").on("change",".tgl_checkbox",function(){
	$.post('<?=base_url("admin/hallpass/change_status")?>',
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