 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

<div class="datalist">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="50">ID</th>
                <th>Hall Pass</th>
                <th>Pass Type</th>
                <th>Time Allowed</th>
                <th width="100">Status</th>
                <th width="120">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $row): ?>
            <tr>
            	<td>
					<?=$row['HallPassID']?>
                </td>
                <td>
					<h4 class="m0 mb5"><?=$row['HallPass']?></h4>
                   
                </td>
                <td>
             
                <?= $row['PassTypeID']; ?>
           
               
                </td> 
                <td>
					<?=$row['TimeAllocated']?>
                </td>
               
                <td><input class='tgl tgl-ios tgl_checkbox' 
                    data-id="<?=$row['HallPassID']?>" 
                    id='cb_<?=$row['HallPassID']?>' 
                    type='checkbox' <?php echo ($row['is_active'] == 1)? "checked" : ""; ?> />
                    <label class='tgl-btn' for='cb_<?=$row['HallPassID']?>'></label>
                </td>
                <td>
                    <a href="<?php echo site_url("admin/hallpass/edit/".$row['HallPassID']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?php echo site_url("admin/hallpass/delete/".$row['HallPassID']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>



<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script> 