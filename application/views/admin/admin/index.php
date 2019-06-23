
 <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"><link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>

<div class="content-body">
  <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Weather Report</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Weather</li>
                        </ol>
                    </div>
                
</div>


	
		<div class="box-body">
        	
        	<!-- Load Admin list (json request)-->
            <div class="data_container"></div>

		</div>

</div>
</div>
<!-- /.content -->


<script>
//------------------------------------------------------------------
function filter_data()
{
	$('.data_container').html('<div class="text-center"><img src="<?=base_url('theme/common')?>/preloader.gif"/></div>');
	$.post('<?=base_url('admin/admin/filterdata')?>',$('.filterdata').serialize(),function(){
		$('.data_container').load('<?=base_url('admin/admin/list_data')?>');
	});
}
//------------------------------------------------------------------
function load_records()
{
	$('.data_container').html('<div class="text-center"><img src="<?=base_url('theme/common')?>/preloader.gif"/></div>');
	$('.data_container').load('<?=base_url('admin/admin/list_data')?>');
}
load_records();

//---------------------------------------------------------------------
$("body").on("change",".tgl_checkbox",function(){
	$.post('<?=base_url("admin/admin/change_status")?>',
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