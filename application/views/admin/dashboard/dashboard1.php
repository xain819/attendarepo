<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>public/assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <script src="<?= base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/notify/notify.min.js"></script>
    <script src="<?= base_url() ?>public/js/custom.min.js"></script>
    <script src="<?= base_url() ?>public/js/settings.js"></script>
    <script src="<?= base_url() ?>public/js/gleek.js"></script>
    <script src="<?= base_url() ?>public/js/styleSwitcher.js"></script>
    <link href="<?= base_url() ?>public/css/style.css" rel="stylesheet">

 
    

                <div class="row">
                    <div class="col-lg-12 col-xxl-12 col-xl-5">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                <div class="card">
                                    <div class="card-body widget-school-stat bg-1 rounded">
                                        <div class="text">
                                            <h2 id="students"></h2>
                                            <p>Students</p>
                                        </div>
                                        <div class="icon">
                                            <span><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                <div class="card">
                                    <div class="card-body widget-school-stat bg-2 rounded">
                                        <div class="text">
                                            <h2 id="teacher"></h2>
                                            <p>Teachers</p>
                                        </div>
                                        <div class="icon">
                                            <span><i class="fa fa-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                <div class="card">
                                    <div class="card-body widget-school-stat bg-3 rounded">
                                        <div class="text">
                                            <h2 id="attendance"></h2>
                                            <p>Attendance</p>
                                        </div>
                                        <div class="icon">
                                            <span><i class="fa fa-tag"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                <div class="card">
                                    <div class="card-body widget-school-stat bg-4 rounded">
                                        <div class="text">
                                            <h2 id="class"></h2>
                                            <p>Course</p>
                                        </div>
                                        <div class="icon">
                                            <span><i class="fa fa-graduation-cap"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
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
                            <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                <div class="card">
                                    <div class="card-body widget-school-stat bg-6 rounded">
                                        <div class="text">
                                            <h2>&#36;5847</h2>
                                            <p>Negative Seat Time</p>
                                        </div>
                                        <div class="icon">
                                            <span><i class="fa fa-university"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                    <div class="col-xl-7 col-lg-12 col-xxl-12">
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Team</h4>
                                <canvas id="doughutChart"></canvas>
                            </div>
                        </div>
                 
                      
                    </div>
                </div>

             



    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <script>
     var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
        base_url='<?php echo base_url(); ?>';

$(document).ready(function(){

    $.ajax({
        url:'<?php echo base_url(); ?>admin/dashboard/info',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    }).done(function(data){
  
      
        console.log(data);
        $('#students').html(data.student);
        $('#class').html(data.class);
        $('#teacher').html(data.teacher);
        $('#hallpass').html(data.hallpass);
        $('#attendance').html(data.attendance);

        
    });

});

    </script>


   
    <script src="<?= base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/notify/notify.min.js"></script>
    <script src="<?= base_url() ?>public/js/custom.min.js"></script>
    <script src="<?= base_url() ?>public/js/settings.js"></script>
    <script src="<?= base_url() ?>public/js/gleek.js"></script>
    <script src="<?= base_url() ?>public/js/styleSwitcher.js"></script>
    
    <!-- <script src="<?= base_url() ?>public/assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url() ?>public/assets/plugins/morris/morris.min.js"></script>
    <script src="<?= base_url() ?>public/js/dashboard/dashboard-18.js"></script> -->

    <script src="<?= base_url() ?>public/assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/js/plugins-init/chartjs-init.js"></script>

 
