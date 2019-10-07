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



<div class="row">

                    <div class="col-xl-3 col-xxl-6 col-lg-6">
                        <div class="card widget-wallet-status py-4">
                            <div class="card-body border-bottom upper-part">
                              
                                <div class="row d-flex justify-content-between mb-4">
                                <div class="col-lg-4 pl-xl-0">
                                  
                                                       <div class="media  document">
                                  <img class="mr-4" src="<?=base_url() ?>public/assets/images/users/profile.jpg" alt="">
                    
                            </div>
                             
                                    </div>
                                    <div class="col-lg-8 pl-xl-0">
                                        <h3 class="text-primary m-0"> <span>George Canales-Ardon</span></h3>
                                        <p class="m-0 text-pale-sky">Student ID : 2026825</p>
                                    
                              
                                        <div class="progress mt-4">
                                            <div class="progress-bar bg-primary" style="width: 60%; height:6px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                              
                                  
                               
                                    <!-- <h5>This month <span class="text-lgreen ml-2"><i class="fa fa-angle-down mr-1"></i>1309</span></h5> -->
                                </div>
                           
                                
                                <div class="chart my-5">   

                                </div>
                            </div>
                            <div class="card-body bottom-part mb-3">
                                <div class="row py-2 m-0">
                                    <div class="col-lg-6 pl-xl-0">
                                        <h2 id="aadmin" class="text-primary m-0"> <span>0</span></h2>
                                        <p class="m-0 text-pale-sky">Admin</p>
                               
                                        <div class="progress mt-4">
                                            <div class="progress-bar bg-primary" style="width: 60%; height:6px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 pr-xl-0">
                                        <h2 id="non_admin"class="text-lgreen m-0"></h2>
                                        <p class="m-0 text-pale-sky">Non Admin</p>
                                 
                                        <div class="progress mt-4">
                                            <div class="progress-bar bg-lgreen" style="width: 60%; height:6px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body bottom-part mb-3">
                                <div class="row py-2 m-0">
                                    <div class="col-lg-6 pl-xl-0">
                                        <h2 id="over" class="text-primary m-0"> <span>(0)</span></h2>
                                        <p class="m-0 text-pale">Overswipe</p>
                                    
                                        <div class="progress mt-4">
                                            <div class="progress-bar bg-primary" style="width: 60%; height:6px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 pr-xl-0">
                                        <h2  id="total" class="text-lgreen m-0">31</h2>
                                        <p class="m-0 text-pale-sky">Total Hallpass</p>
                                     
                                        <div class="progress mt-4">
                                            <div class="progress-bar bg-lgreen" style="width: 60%; height:6px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                         
                                <div class="d-flex justify-content-between">
                                 
                                    <ul id='period_subject' class="lw-transaction">
                                    <li> Period</li>
                                    <li> Subject</li>
                         
                                    </ul>
                                    <ul id='selector' class="lw-transaction pull-left" >
                                   
                                        <li> Week</li>
                                        <li> Month</li>
                                        <li> Marking Period</li>
                                        <li> Term</li>
                                        <li> Custom</li>
                                    </ul>
                                    <ul id='back' class="lw-transaction" >
                                   
                                    <button type="button" class="btn btn-ft btn-rounded btn-outline-info">Back</button>
                              
                                  </ul>
                                    
                                    
                                </div>
                                <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        
                                <canvas id="barChart" height="600" width="170" class="chartjs-render-monitor" style="display: block; height: 71px; width: 213px;"></canvas>
                            </div>
                  
                                </div>
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

<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/chart.js/Chart.bundle.min.js"></script>
  <script>
  
$(document).ready(function(){



  var data_array,dataresponse,data_1,period_labels,data2;
  
  const a=$.ajax({
                            url:base_url+"admin/studentinformation/get_all_hallpass_analytics ",
                            type:"POST",
                            data:({[csrfName]: csrfHash}),
                            dataType:'JSON',
                            async: false
                        })
                        .done(function(data){
                          period_list=data.response
                          data_array=data.datasets
                          
                          dataresponse=data
                        });
var limit=dataresponse.limit;       
console.log(limit);
$("#back").hide();
$("#period_subject").hide();
 $('#non_admin').html(`${dataresponse.non_admin.toString()} / ${limit}` );
 $('#over').html(`(${dataresponse.over})` );
 $('#aadmin').html(dataresponse.admin);
 $('#total').html(parseInt(dataresponse.admin)+parseInt(dataresponse.non_admin));

console.log(data_array);
data_sample= {
            labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [40, 55, 75, 81, 56, 55, 40],
                    borderColor: "rgba(52, 199, 59, .9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(52, 199, 59, .5)"
                }
            ]
        };
data_1=dataresponse.period;
data_0={
            labels: period_list,
            datasets:data_array,
             
        };

var ctx = document.getElementById("barChart");
    ctx.height = 50;

    var myNewChart=new Chart(ctx, {
        type: 'bar',
        data: {
            labels: period_list,
            datasets:data_array,
             
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    // Change here
                    barPercentage: .7
                }]
            },
            title: {
            display: true,
            text: 'Hallpass '
        },
        
        }
    });

    ctx.onclick = function(evt) {
    
      var activePoints = myNewChart.getElementAtEvent(evt);
    
      $.ajax({
                            url:base_url+"admin/studentinformation/drill_down ",
                            type:"POST",
                            data:({[csrfName]: csrfHash,'hallpass':activePoints[0]._model.label,
                                'type':activePoints[0]._model.datasetLabel
                            }),
                            dataType:'JSON',
                            async: false
                        })
                        .done(function(data){
                            data2=data;
                            myNewChart.data=data2;
             myNewChart.update();
          $("#selector").hide();
          $("#back").show();
          $("#period_subject").show();   
                            
                        });
        
      
 
    //   if (activePoints[0]!=null) {
    //     var chartData = activePoints[0]['_chart'].config.data;
    //      var idx = activePoints[0]['_index'];
    //      var label = chartData.labels[idx];
    //      var value = chartData.datasets[0].data[idx];
 
    //     //   myNewChart.data=data_1;
    //     //   myNewChart.update();
    //     console.log(idx);
    //     console.log(label);
    //     console.log(value);
    //       $("#selector").hide();
    //       $("#back").show();
    //       $("#period_subject").show();
    //    }
   


     

 };


$( "#back" ).click(function() {
  $("#back").hide();
  $("#selector").show();
     
          $("#period_subject").hide();   
  myNewChart.data=data_0;
  myNewChart.update();


});

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
<script src="<?= base_url() ?>public/assets/plugins/chart.js/Chart.bundle.min.js"></script>

