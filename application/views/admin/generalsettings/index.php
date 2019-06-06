<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
<div class="content-body">

        <div class="container-fluid">

            <div class="row page-titles">
                <div class="col p-md-0">
                    <h5>General Settings</h5>
                </div>
                <div class="col p-md-0">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">General Settings</li>
                    </ol>
                </div>
            </div>
            <div class="row">

                        <div class="col-xl-6 col-sm-6">

                            <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-two">
                                            <div class="media">
                                                <div class="media-body">
                                                
                                                    <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                    Activate Hall Pass Function<button type="button" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                    <p>descrition goes here</p>
                                                    

                                                    
                                                                <div class="modal fade  bd-example-modal-lg "  tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content"  style="background-color:#f3f6f9;" >
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Hallpass Settings</h5>
                                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            
                                                                            <div class="modal-body " >

                                                                            
                                                                            <?php $this->load->view('admin/generalsettings/hallpassfunction'); ?>


                                                                            </div>
                                                                            <div class="modal-footer">
                                
                                                                            <div class="bootstrap-modal">
                                                                                        <!-- Button trigger modal -->
                                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Basic
                                                                                            modal</button>
                                                                                        <!-- Modal -->
                                                                                        <div class="modal fade"   id="basicModal">
                                                                                            <div class="modal-dialog" role="document">
                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-header">
                                                                                                        <h5 class="modal-title">Add Hall Pass</h5>
                                                                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">

                                                                                                    <form>
                                                                                                        <div class="form-group">
                                                                                                    
                                                                                                            <input type="text" name="hallpassname" class="form-control" placeholder="hall pass name" required>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                     
                                                                                                            <input type="text" name="hallpasstime" class="form-control" placeholder="minutes" required>
                                                                                                        </div>
                                                                                                      
                                                                                                         

                                                                                                            <div class="form-group">
                                            
                                                                                                                            <select id="single-select">
                                                                                                                                    <option value="AL">Alabama</option>
                                                                                                                                    <option value="WY">Wyoming</option>
                                                                                                                        </select>
                                                                                                                    
                                                                                                                </div>       
                                                                                                        
                                                                                                    
                                                                                                        <button type="submit" class="btn btn-primary btn-form mr-2">Submit</button>
                                                                                                        <button type="button" class="btn btn-light text-dark btn-form">Cancel</button>
                                                                                                    </form>

                                                                                                    
                                                                 
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                       
                                                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                
                                            
                                            </div>
                                        </div>
                                    
                                        
                                    </div>
                            </div>



                        </div>
                        <div class="col-xl-6 col-sm-6">

                                    <div class="card">

                                            <div class="card-body">
                                                <div class="stat-widget-two">
                                                    <div class="media">
                                                        <div class="media-body">
                                                    
                                                            <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                            Hall Pass Swipe Overide<button type="button" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                            <p>descrition goes here</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                        </div>
                        <div class="col-xl-6 col-sm-6">

                                <div class="card">
                                        <div class="card-body">
                                            <div class="stat-widget-two">
                                                <div class="media">
                                                    <div class="media-body">
                                                
                                                        <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                        Hall Pass Lock Time<button type="button" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                        <p>descrition goes here</p>
                                                    </div>
                                                
                                                
                                                </div>
                                            </div>
                                        
                                        
                                        </div>
                                </div>

                        </div>
                        <div class="col-xl-6 col-sm-6">

                                    <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-two">
                                                    <div class="media">
                                                        <div class="media-body">
                                                    
                                                            <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                            Student Later-Arrival Check-in<button type="button" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                            <p>descrition goes here</p>
                                                        </div>
                                                    
                                                    
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>
                                    </div>

                        </div>
                        <div class="col-xl-6 col-sm-6">

                                <div class="card">
                                        <div class="card-body">
                                            <div class="stat-widget-two">
                                                <div class="media">
                                                    <div class="media-body">
                                                
                                                        <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                        Hall Pass Time Override<button type="button" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                        <p>descrition goes here</p>
                                                    </div>
                                                
                                                
                                                </div>
                                            </div>
                                        
                                        
                                        </div>
                                </div>

                        </div>
                        <div class="col-xl-6 col-sm-6">

                                <div class="card">
                                        <div class="card-body">
                                            <div class="stat-widget-two">
                                                <div class="media">
                                                    <div class="media-body">
                                                
                                                        <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                        Attenda Swipe Override<button type="button" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                        <p>descrition goes here</p>
                                                    </div>
                                                
                                                
                                                </div>
                                            </div>
                                        
                                        
                                        </div>
                                </div>

                        </div>
                        <div class="col-xl-6 col-sm-6">

                                    <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-two">
                                                    <div class="media">
                                                        <div class="media-body">
                                                    
                                                            <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                            NHP Quota/Limit<button type="button" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                            <p>descrition goes here</p>
                                                        </div>
                                                    
                                                    
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>
                                    </div>

                        </div>
                        <div class="col-xl-6 col-sm-6">

                            <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-two">
                                            <div class="media">
                                                <div class="media-body">
                                                
                                                    <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                    Period Grace Time<button type="button" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                    <p>descrition goes here</p>
                                                </div>
                                                
                                            
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </div>
                        <div class="col-xl-6 col-sm-6">

                            <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-two">
                                            <div class="media">
                                                <div class="media-body">
                                            
                                                    <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                    Additional NHP Override<button type="button" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                    <p>descrition goes here</p>
                                                </div>
                                            
                                            
                                            </div>
                                        </div>
                                    
                                    
                                    </div>
                            </div>

                        </div>
                        <div class="col-xl-6 col-sm-6">

                            <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-two">
                                            <div class="media">
                                                <div class="media-body">
                                            
                                                    <h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
                                                    Universal E.O.D Clock-Out<button type="button" class="btn btn-rounded btn-info pull-right"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Show</button></h5>
                                                    <p>descrition goes here</p>
                                                </div>
                                            
                                            
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>

        </div>
 </div>

 

    <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url() ?>public/assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">


    <script src="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.js"></script>
    <script src="<?=base_url() ?>public/js/plugins-init/switchery-init.js"></script>


    <script src="<?=base_url() ?>public/assets/plugins/webticker/jquery.webticker.min.js"></script>
    <script src="<?=base_url() ?>public/js/plugins-init/webticker-init.js"></script>
    <!-- Morris Chart -->
    <script src="<?=base_url() ?>public/assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/morris/morris.min.js"></script>
    <!-- Custom dashboard script -->
    <script src="<?=base_url() ?>public/assets/plugins/amcharts/amcharts.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/amcharts/serial.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/amcharts/amstock.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/amcharts/plugins/export.min.js"></script>

    <script src="<?=base_url() ?>public/js/dashboard/dashboard-2.js"></script>
    <script src="<?=base_url() ?>public/assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?=base_url() ?>public/js/plugins-init/select2-init.js"></script>



    <script src="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.js"></script>
    <script src="<?=base_url() ?>public/js/plugins-init/switchery-init.js"></script>