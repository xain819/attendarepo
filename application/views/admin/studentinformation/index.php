 <!-- Content Header (Page header) -->
 <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<!-- for datatable  -->
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css');?>">
 <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>



<!--             
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card stat-widget-five">
                            <div class="card-body">
                                <div class="media">
                                    <div class="icon mr-3 bg-success">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h2 class="mt-0 mb-2 text-success">15310</h2><span class="text-pale-sky">Total Sales</span>
                                    </div>
                                </div>
                                <div class="bottom-text mt-0">
                                    <p class="m-0">$30,820</p>
                                    <span><i class="fa fa-caret-up"></i> 35.45%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card stat-widget-five">
                            <div class="card-body">
                                <div class="media">
                                    <div class="icon mr-3 bg-info">
                                        <i class="fa fa-usd"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h2 class="mt-0 mb-2 text-info">984</h2><span class="text-pale-sky">New Orders</span>
                                    </div>
                                </div>
                                <div class="bottom-text mt-0">
                                    <p class="m-0">$30,820</p>
                                    <span><i class="fa fa-caret-up"></i> 35.45%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card stat-widget-progress">
                            <div class="card-body">
                                <h5 class="text-pale-sky">Total Receivable: $12,570</h5>
                                <div class="progress mb-4 mt-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="item">
                                                <h5 class="text-warning">Current</h5>
                                                <h5 class="mb-0 text-pale-sky">$2840</h5>
                                            </div>
                                            <div class="item">
                                                <h5 class="d-inline-block text-warning">Override</h5>
                                                <span>(15-30 days)</span>
                                                <h5 class="mb-0 text-pale-sky">$2840</h5>
                                            </div>
                                            <div class="item">
                                                <span>Above 30 days</span>
                                                <h5 class="mb-0 text-pale-sky">$2840</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                      
<div id="container" style="width:100%; height: 400px; margin: 0 auto"></div>
                        </div>
                    </div>
                    
            
                </div>
             
            </div>
            <!-- #/ container -->
  
    <!-- <div class='row'>
      <div class="col-sm-12 col-xxl-3 col-xl-3">
      <div class="card stat-widget-five">
                            <div class="card-body">
                                <div class="media">
                                    <div class="icon mr-3 bg-info">
                                        <i class="fa fa-usd"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h2 class="mt-0 mb-2 text-info">984</h2><span class="text-pale-sky">New Orders</span>
                                    </div>
                                </div>
                                <div class="bottom-text mt-0">
                                    <p class="m-0">$30,820</p>
                                    <span><i class="fa fa-caret-up"></i> 35.45%</span>
                                </div>
                            </div>
                        </div>

      <div class="col-sm-6 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-body widget-school-stat bg-5 rounded">
                                        <div class="text">
                                            <h2  id="hallpass">&#36;</h2>
                                            <p>Total Hallpass </p>
                                        </div>
                                        <div class="icon">
                                            <span><i class="fa fa-money"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
      </div>
      <div class="col-sm-12 col-xxl-9 col-xl-9">
                 
      <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Team</h4>
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                 
                      
      </div> </div>   
</div> -->
    <script src="<?= base_url() ?>public/assets/plugins/chart.js/Chart.bundle.min.js"></script>
  <script>
  
$(document).ready(function(){
  var data_array;
  
  const a=$.ajax({
                            url:base_url+"admin/studentinformation/get_all_hallpass_analytics ",
                            type:"POST",
                            data:({[csrfName]: csrfHash}),
                            dataType:'JSON',
                            async: false
                        })
                        .done(function(data){
                          period_list=data.response
                          data_array=data
                          
                        });
function myFunc(total, num) {
  return total + num;
}
Highcharts.chart('container', {
  title: {
    text: 'HallPass'
  },
  xAxis: {
    categories: period_list,
  },
  labels: {
    items: [{
      html: 'Student Data',
      style: {
        left: '50px',
        top: '18px',
        color: ( // theme
          Highcharts.defaultOptions.title.style &&
          Highcharts.defaultOptions.title.style.color
        ) || 'black'
      }
    }]
  },
  series: [{
    type: 'column',
    name: 'On Time',
    data: data_array.ontime.map(Number)
  }, {
    type: 'column',
    name: 'Tardy',
    data: data_array.Tardy.map(Number)
  }, {
    type: 'column',
    name: 'Expired',
    data: data_array.Expired.map(Number)

  }, {
    type: 'pie',
    name: 'Total consumption',
    data: [{
      name: 'On Time',
      y: data_array.ontime.map(Number).reduce(myFunc),
      color: Highcharts.getOptions().colors[0] // Jane's color
    }, {
      name: 'Tardy',
      y: data_array.Tardy.map(Number).reduce(myFunc),
      color: Highcharts.getOptions().colors[1] // Tardy's color
    }, {
      name: 'Expired',
      y: data_array.Expired.map(Number).reduce(myFunc),
      color: Highcharts.getOptions().colors[2] // Expired's color
    }],
    center: [100, 80],
    size: 100,
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});


// var ctx = document.getElementById("barChart");
//     ctx.height = 100;
//     new Chart(ctx, {
//         type: 'bar',
//         data: {
//             labels: ["January", "February", "March", "April", "May", "June", "July"],
//             datasets:period_list,
//         },
//         options: {
//             scales: {
//                 yAxes: [{
//                     ticks: {
//                         beginAtZero: true
//                     }
//                 }],
//                 xAxes: [{
//                     // Change here
//                     barPercentage: 0.3
//                 }]
//             }
//         }
//     });



  });
  </script>
    

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
  

        <div class="row">
	    
	      </div> 

        <div class=" card box-body" style='padding:20px;'>
          <div style="width: 100%;">
            <div class="table-responsive">
              <table id="Student_DataTable" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
             
                  <th>ID Number </th>
                  <th>Student Type</th>
                  <th>Last Name </th>
                  <th>First Name </th>
      
                  <th>graduation_cohort </th> 
                  <th>birthdate </th>
                  <th>gender </th>
                  
                  <th>Parent Last Name </th>
                  <th>Parent First Name </th>
                  <th>parent_address </th> 
                  <th>parent_city </th>

                  <th>parent_state </th> 
                  <th>parent_zip </th>
                  <th>parent_email </th>
                  <th>student_email </th>
       
                  <th>Action</th>
                </tr>
                </thead>
              </table>
            </div>      
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
                 
                      
                    </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section></div></div>
    <!-- /.content -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script src="<?= base_url() ?>public/plugins/papaparse/papaparse.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <!-- for datables -->
    <script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js');?>"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    
    <!-- <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script> -->
    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
          base_url='<?php echo base_url(); ?>';
    </script>



    <script src="<?php echo base_url('public/dist/js/studentinformation.js');?>"></script>

<?php $this->load->view('admin/studentinformation/add');?>
<?php $this->load->view('admin/studentinformation/edit');?>

<script>
// Create the chart


</script>

