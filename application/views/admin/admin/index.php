<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="<?= base_url() ?>public/assets/plugins/common/common.min.js"></script>
<script src="<?= base_url() ?>public/js/custom.min.js"></script>
<script src="<?= base_url() ?>public/js/settings.js"></script>
<script src="<?= base_url() ?>public/js/gleek.js"></script>
<script src="<?= base_url() ?>public/js/styleSwitcher.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css'); ?>">

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js'); ?>"></script>

<script src="<?php echo base_url('public/plugins/papaparse/papaparse.min.js'); ?>"></script>

<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


<div class=" card box-body" style='padding:20px;'>
    <div class="box-body">
        <!-- Load Admin list (json request)-->
        <div class="data_container"></div>

    </div>
</div>


<!-- /.content -->


<script>
    //------------------------------------------------------------------
    function filter_data() {
        $('.data_container').html('<div class="text-center"><img src="<?=base_url('theme/common')?>/preloader.gif"/></div>');
        $.post('<?=base_url('admin/admin/filterdata')?>', $('.filterdata').serialize(), function () {
            $('.data_container').load('<?=base_url('admin/admin/list_data')?>');
        });
    }

    //------------------------------------------------------------------
    function load_records() {
        $('.data_container').html('<div class="text-center"><img src="<?=base_url('theme/common')?>/preloader.gif"/></div>');
        $('.data_container').load('<?=base_url('admin/admin/list_data')?>');
    }

    load_records();

    //---------------------------------------------------------------------
    $("body").on("change", ".tgl_checkbox", function () {
        $.post('<?=base_url("admin/admin/change_status")?>',
            {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                id: $(this).data('id'),
                status: $(this).is(':checked') == true ? 1 : 0
            },
            function (data) {
                $.notify("Status Changed Successfully", "success");
            });
    });
</script>