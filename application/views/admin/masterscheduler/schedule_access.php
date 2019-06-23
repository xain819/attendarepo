<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>public/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <script src="<?=base_url() ?>public/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>" >
	<link href="<?=base_url()?>public/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
 <script src="<?=base_url()?>public/js/plugins-init/datatables.init.js"></script>
 <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  
 <div class="content-body">

        <div class="container-fluid">

            <div class="row page-titles">
                <div class="col p-md-0">
                    <h5>General Settings</h5>
                </div>
                <div class="col p-md-0">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">General Settings</li>
                    </ol>
                </div>
            </div>
<section class="content-header">
	<div class="row">
	    <div class="col-md-12">
	      <div class="box box-body">
	        <div class="col-md-6">
	          <h4><i class="fa fa-list"></i> &nbsp; Manage Schedule Type</h4>
	        </div>
	        <div class="col-md-6 text-right">
	     </div>
	      </div>
	    </div>
	</div> 





	<div class="box">
		
		<div class="box-body">
			<div class="row">

			

				<div class="col-md-12 col-sm-6 col-xs-12 ">
				<?php foreach($scheduletypes as $kk => $module): ?>
					<div class="col-md-12">
						<div class="row">
                        	<div class="col-sm-2">
                        		<h5 class="m-0">
                                	<strong class="f-16"><?=$module['ScheduleType']?></strong>
                                </h5>
                            </div>
                            
                            <div class="row col-sm-9">
															<?php foreach($period_list as $k => $period):?>
                                    <div class="col-sm-3 pb-15">	
                                    <span class="pull-left">
                                            <input type='checkbox'
                                            class='tgl tgl-ios tgl_checkbox'
                                            data-module='<?= $module['ScheduleType'] ?>'
                                            id='cb_<?=$kk.$k?>'		
																				
									               							<?php foreach(explode("|",$module['PeriodAccess']) as $l => $period_access_list):?>
																							 data-period='<?= $period['Period'] ?>'
																							<?php if ($period_access_list == $period['Period'])
												
																							{
																								
																								echo'checked="checked"';
																								
																								
																							}
	
																							?> 
																					
																						<?php endforeach; ?>
																					
																						<? print_r ($module['PeriodAcess']);?>
																			
																						<label ass='tgl-btn' for='cb_<?=$kk.$k?>'></label> 
																						
                                            
                                    </span>
                                    
                                        <span class="mt-15 pl-10">
										                  	<?=ucwords($period['Period'])?>
                                        </span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <hr style="margin:7px 0px;" />
					</div>  
					<?php endforeach; ?>
				</div>


				






				</div>












			</div>
		</div>
	</div>
</section></div></div>

<script>
$("body").on("change",".tgl_checkbox",function(){
	$.post('<?=base_url("admin/masterscheduler/set_access")?>',
	{
		'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		module : $(this).data('module'),
		period : $(this).data('period'),
		status : $(this).is(':checked')==true?1:0
	},
	function(data){
		$.notify("Status Changed Successfully", "success");
	});
});
</script>




