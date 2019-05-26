<section class="content-header">
	<div class="row">
	    <div class="col-md-12">
	      <div class="box box-body">
	        <div class="col-md-6">
	          <h4><i class="fa fa-list"></i> &nbsp; Manage Schedule Type</h4>
	        </div>
	        <div class="col-md-6 text-right">
	        	<a href="#" onclick="window.history.go(-1); return false;" class="btn btn-primary pull-right"><i class="fa fa-reply mr5"></i> Back</a>
	        </div>
	      </div>
	    </div>
	</div> 





	<div class="box">
		<div class="box-header">
			<div class="row">
            	<div class="col-sm-12">
                    <h3 class="box-title">
                        <span class="mr5">Permission Access : </span> 
					
                    </h3>
                </div>
            </div>
		</div>
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
                            
                            <div class="col-sm-9">
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
</section>

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




