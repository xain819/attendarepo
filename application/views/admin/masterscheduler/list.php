 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

<div class="row">

<div class="datalist col-md-6">
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

    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="50">Period</th>
                <th>Schedule Type</th>
                <th>Period Start</th>
                <th>Period End</th>
            
                <th width="120">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $row): ?>
            <tr>
            	<td>
					<?= $row['Period']?>
                </td>
                <td>
					<?=$row['ScheduleTypeID']?>
                   
                </td>
                <td>
                    <?=$row['PeriodStartTime']?>
                </td> 
                <td>
					<?=$row['PeriodEndTime']?>
                </td>
               
               
                <td>
                    <a href="<?php echo site_url("admin/terminalpannel/edit/".$row['PeriodID']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?php echo site_url("admin/terminalpannel/delete/".$row['PeriodID']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="datalist col-md-6">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="50">Period</th>
                <th>Schedule Type</th>
                <th>Period Start</th>
                <th>Period End</th>
            
                <th width="120">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $row): ?>
            <tr>
            	<td>
					<?= $row['Period']?>
                </td>
                <td>
					<?=$row['ScheduleTypeID']?>
                   
                </td>
                <td>
                    <?=$row['PeriodStartTime']?>
                </td> 
                <td>
					<?=$row['PeriodEndTime']?>
                </td>
               
               
                <td>
                    <a href="<?php echo site_url("admin/terminalpannel/edit/".$row['PeriodID']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?php echo site_url("admin/terminalpannel/delete/".$row['PeriodID']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
</div>




<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    //$("#example1").DataTable();
    $("#example2").DataTable();
  });
</script> 