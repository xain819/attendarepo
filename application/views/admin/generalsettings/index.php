<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/select2/css/select2.min.css">
 
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
         

         
            <div  class="row">

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
                                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Add Hall Pass
                                                                                            </button>
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
                                                                                                                                    <option value="AL">Administrative</option>
                                                                                                                                    <option value="WY">None Administrative</option>
                                                                                                                        </select>
                                                                                                                    
                                                                                                                </div>       
                                                                                                        
                                                                                                    
                                                                                                       
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
                                                            <div class="form-group mb-0">
                                           
                                                             </div> 
                                                            Hall Pass Swipe Overide<span class="pull-right"> <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
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
                                                        Hall Pass Lock Time<span class="pull-right"> <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
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
                                                            Student Later-Arrival Check-in<span class="pull-right">
                                                                 <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" />
                                                        </span></h5>
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

                                                        Hall Pass Time Override<span class="pull-right"> <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
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
                                                        Attenda Swipe Override<span class="pull-right"> <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
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
                                                            NHP Quota/Limit<span class="pull-right"> <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
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
                                                    Period Grace Time<span class="pull-right"> <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
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
                                                    Additional NHP Override<span class="pull-right"> <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
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
                                                    Universal E.O.D Clock-Ou<span class="pull-right"> <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
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


    <script>
   

   var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
       csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
$(document).ready(function(){
 $.ajax({
        url:'<?php echo base_url(); ?>admin/generalsettings/get_all_hallpass',
        type:"POST",
        data:({[csrfName]: csrfHash}),
        dataType:'JSON',
    })
    .done(function(data){
     $('#hallpass').html(data);
     var result=data;
     var hallpass=result.info;
     console.log(hallpass);
    
     const ahp = hallpass.filter(function(test){
         return test.PassTypeID==='1';
       });
     const nhp = hallpass.filter(function(test){
         return test.PassTypeID==='2';
       });
     console.log(ahp);
     console.log(nhp);

     var test=`<div class="card"><div class="card-body">
      <div class="stat-widget-two"><div class="media"> 
             <div class="media-body"><h5 class="mt-0 mb- text-info">
             <ion-icon name="apps"></ion-icon>Attenda Swipe Override
             <span class="pull-right">
             <input id="chk_3" type="checkbox" checked="checked" class="js-switch js-switch-1 js-switch-md" data-size="small" />
             </span></h5> <p>descrition goes here</p> </div> </div> </div></div> </div>`;

    let ahp_2 =` <tr><td>
                        <a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                        <i class="fa fa-close color-danger"></i></a>
                        <span class="text-muted font-weight-semi-bold" style='padding-left:5px;'>  Rest Room</span></td>
                        <td><span class="text-muted font-weight-semi-bold">None</span></td>
                        <td><span class="label label-sm label-rounded label-danger">OFF</span>
                        </td>
                    </tr>`

     console.dir(ahp_2);                        
                         
     var test_element=`     
     <input id="chk_3" type="checkbox" checked="checked" class="js-switch js-switch-1 js-switch-md" data-size="small" />`;
     var hallpass_element = $("<div />");
 
     hallpass_element.html(ahp_2);
    
     $("#tablelist tbody").append(ahp_2);
  


     
    
   

    })
    

 
 
});
</script>