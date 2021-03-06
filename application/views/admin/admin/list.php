 <!-- Datatable style -->
<!-- <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.css">  
<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
<script src="<?=base_url() ?>public/js/custom.min.js"></script>
<script src="<?=base_url() ?>public/js/settings.js"></script>
<script src="<?=base_url() ?>public/js/gleek.js"></script>
<script src="<?=base_url() ?>public/js/styleSwitcher.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>



<!-- <div class='row'> -->


<div class="datalist">
    <table id="example99" class="display compact">
        <thead>
            <tr>
            
                <th>User</th>
                <th width="100" >Username or ID</th>
                <th>Email</th>
                <th>Role</th>
                <th width="100">Active</th>
   
                <th width="120">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $row):
                 if($row['is_active']==='1'){
                    $row_status='active';
                 }
                 else{ $row_status='in-active';}
            ?>
    
            <tr>
            
                <td>
                    <h4 class="m0 mb5"><?=$row['firstname']?> <?=$row['lastname']?></h4>
                    <small class="text-muted"><?=$row['admin_role_title']?></small>
                </td>
                <td>
                    <?=$row['username']?>
                </td> 
                <td>
                    <?=$row['email']?>
                </td>
                <td>
                    <button class="btn btn-xs btn-success"><?=$row['admin_role_title']?></button>
                </td> 
                <td><input class='tgl tgl-ios tgl_checkbox' 
                    data-id="<?=$row['admin_id']?>" 
                    id='cb_<?=$row['admin_id']?>' 
                    type='checkbox' <?php echo ($row['is_active'] == 1)? "checked" : ""; ?> />
                    <label class='tgl-btn' for='cb_<?=$row['admin_id']?>'></label>
                </td>
a
           
                <td>
                    <a href="<?php echo site_url("admin/admin/edit/".$row['admin_id']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?php echo site_url("admin/admin/delete/".$row['admin_id']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>


<!-- DataTables -->
<!-- <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script> -->


<script>
$.noConflict();
  $(function () {
    $("#example99").DataTable({
        "order": [[ 0, "desc" ]]
    });
  });
</script> 