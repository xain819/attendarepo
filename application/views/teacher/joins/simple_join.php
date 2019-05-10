 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

 <section class="content">
 <div class="box-header">
      <h3 class="box-title">Active Passes</h3>
    </div>
 <div class="row">
 
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Day: Tuesday</span>
              <span class="info-box-text">Date: 11/12/2020</span>
              <span class="info-box-text">Time: 11:00 AM</span>
              <span class="info-box-number"><?= $all_users; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

          
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Period No.: 1</span>
              <span class="info-box-text">Marking Period: B-Day</span>
              <span class="info-box-text">School Day No.: B-Day</span>
              <span class="info-box-text">Day Type: B-Day</span>
              <span class="info-box-number"><?= $all_users; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Teacher: Mr. Farlow</span>
              <span class="info-box-text">Subject: Math</span>
              <span class="info-box-text">Room No.: Math</span>
              <span class="info-box-number"><?= $all_users; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
     
        <!-- /.col -->
      
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

       
        <!-- /.col -->
      </div>
 
   <div class="box">
    <!-- /.box-header -->
    <div class="box-body table-responsive">
    <div class="box-header">
      <h3 class="box-title">Active Passes</h3>
    </div>
      <table id="ActivePasses" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Status</th>
          <th>Student Photo</th>
          <th>Period No.</th>
          <th>HP Type</th>
          <th>Origin</th>

          <th>HP Time</th> 
          <th>HP Activated</th> 
          <th>HP Complete</th> 
          <th>HP Time Left</th> 

          <th>Last Name</th> 
          <th>First Name</th> 
          <th>Student ID</th> 
          <th>Grade</th> 

        </tr>
        </thead>
        <tbody>
          <?php foreach($payment_detail as $row): ?>
          <tr>
            <td><?= $row['client_name']; ?></td>
            <td><?= $row['client_email']; ?></td>
            <td><?= $row['client_mobile_no']; ?></td>
            <td><?= $row['invoice_no']; ?></td>
            <td><?= $row['grand_total']. $row['currency']; ?></td>

            <td><?= $row['created_date']; ?></td>
            <td><?= $row['created_date']; ?></td>
            <td><?= $row['created_date']; ?></td>
            <td><?= $row['created_date']; ?></td>
      
            <td><?= $row['client_email']; ?></td>
            <td><?= $row['client_mobile_no']; ?></td>
            <td><?= $row['invoice_no']; ?></td>
            <td><?= $row['grand_total']. $row['currency']; ?></td>
         
		  </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
    </div>
    <div class="box-body table-responsive">
    <div class="box-header">
      <h3 class="box-title">Exprired Passes</h3>
    </div>
      <table id="ExpiredPasses" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Status</th>
          <th>Student Photo</th>
          <th>Period No.</th>
          <th>HP Type</th>
          <th>Origin</th>

          <th>HP Time</th> 
          <th>HP Activated</th> 
          <th>HP Complete</th> 
          <th>HP Time Left</th> 

          <th>Last Name</th> 
          <th>First Name</th> 
          <th>Student ID</th> 
          <th>Grade</th> 

        </tr>
        </thead>
        <tbody>
          <?php foreach($payment_detail as $row): ?>
          <tr>
            <td><?= $row['client_name']; ?></td>
            <td><?= $row['client_email']; ?></td>
            <td><?= $row['client_mobile_no']; ?></td>
            <td><?= $row['invoice_no']; ?></td>
            <td><?= $row['grand_total']. $row['currency']; ?></td>

            <td><?= $row['created_date']; ?></td>
            <td><?= $row['created_date']; ?></td>
            <td><?= $row['created_date']; ?></td>
            <td><?= $row['created_date']; ?></td>
      
            <td><?= $row['client_email']; ?></td>
            <td><?= $row['client_mobile_no']; ?></td>
            <td><?= $row['invoice_no']; ?></td>
            <td><?= $row['grand_total']. $row['currency']; ?></td>
         
		  </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>  


<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#ActivePasses").DataTable();
  });
  $(function () {
    $("#ExpiredPasses").DataTable();
  });

</script> 
<script>
  //$("#view_users").addClass('active');
</script>        
