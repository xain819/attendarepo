 <!-- Content Header (Page header) -->
 <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables/jquery.dataTables.min.css">
 <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">

 <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
 <link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>" >
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/meltismenu/js/metisMenu.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>

    <script src="<?=base_url() ?>public/assets/plugins/chart.js/Chart.bundle.min.js"></script>


                <div class="row">
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Team</h4>
                                <canvas id="canvas"></canvas>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Team</h4>
                                <canvas id="team-chart"></canvas>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales</h4>
                                <canvas id="sales-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <!-- Bar Chart -->
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar chart</h4>
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Radar Chart -->
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rader chart</h4>
                                <canvas id="radarChart"></canvas>
                            </div>
                        </div>
                    </div>
                
                    <!-- Line Chart -->
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line chart</h4>
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Pie Chart -->
                    <div class="col-sm-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie chart</h4>
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                    </div>
                
                    <!-- Doughnut Chart -->
                    <div class="col-sm-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Doughut chart</h4>
                                <canvas id="doughutChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Polar Chart -->
                    <div class="col-sm-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Polar chart</h4>
                                <canvas id="polarChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Single Bar Chart -->
                    <div class="col-sm-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Single Bar Chart</h4>
                                <canvas id="singelBarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>

 
    <div class="modal modal-default" id='teacher-modal-primary'>
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
              <div class="modal-body">
              <?php $this->load->view('admin/terminalpannel/teacher_terminal');?>
                  
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <script src="<?= base_url() ?>public/plugins/select2/select2.full.min.js"></script>
        <script>
             $(".select2").select2();
        </script>
   </div></div>
    <!-- /.content -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="<?=base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

    


    
    
    <!-- <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script> -->
    <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
          csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
          base_url='<?php echo base_url(); ?>';


    </script>
    
        <?php $this->load->view('admin/teacherinformation/add');?>
<?php $this->load->view('admin/teacherinformation/edit');?>
<?php $this->load->view('admin/terminalpannel/terminal_modal');?>
<?php $this->load->view('admin/teacherinformation/hallpassfunction');?>


    <script src="<?php echo base_url('public/dist/js/teacherinformation.js');?>"></script>

    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>

    <script src="<?=base_url() ?>public/assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/chart.js/chartjs-init.js"></script>


     