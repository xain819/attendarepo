
<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/smartwizard/dist/css/smart_wizard.min.css">
    <link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/smartwizard/dist/css/smart_wizard_theme_circles.min.css">
    <!-- Custom Stylesheet -->
    <link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">



                <div class="row">
                    <div class="col-xl-12 mb-5">
                        <form id="setting-form">
                            <!-- SmartWizard html -->
                            <div id="smartwizard1" class="form-wizard">
                                <!-- <div> -->
                                <ul class="form-wizard-left">
                                    <li><a  href="#step-1">01</a>
                                        <div class="form-wizard-content">
                                            <div class="form-wizard-content-upper">
                                                <img src="../../assets/images/avatar/7.png" alt="">
                                                <h4>School Settings</h4>
                                                <!-- <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings heart.</p> -->
                                            </div>
                                            <!-- <div class="form-wizard-content-bottom">
                                                <h4>(+1)408-657-9007</h4>
                                                <a href="mailto:support@pocketprincipal.com">support@pocketprincipal.com</a>
                                            </div> -->
                                        </div>
                                    </li>
                                    <li><a href="#step-2">02</a>
                                        <div class="form-wizard-content">
                                            <div class="form-wizard-content-upper">
                                                <img src="../../assets/images/avatar/8.png" alt="">
                                                <h4>School info</h4>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings heart.</p>
                                            </div>
                                            <div class="form-wizard-content-bottom">
                                                <h4>(+1)408-657-9007</h4>
                                                <a href="mailto:support@pocketprincipal.com">support@pocketprincipal.com</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#step-3">03</a>
                                        <div class="form-wizard-content">
                                            <div class="form-wizard-content-upper">
                                                <img src="../../assets/images/avatar/9.png" alt="">
                                                <h4>Select Day Type</h4>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings heart.</p>
                                            </div>
                                            <div class="form-wizard-content-bottom">
                                                <h4>(+1)408-657-9007</h4>
                                                <a href="mailto:support@pocketprincipal.com">support@pocketprincipal.com</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#step-4">04</a>
                                        <div class="form-wizard-content">
                                            <div class="form-wizard-content-upper">
                                                <img src="../../assets/images/avatar/10.png" alt="">
                                                <h4>Attenda Sync </h4>
                                                <p>Upload and Import Master SIS data to AttendaTrack</p>
                                            </div>
                                            <div class="form-wizard-content-bottom">
                                                <h4>(+1)408-657-9007</h4>
                                                <a href="mailto:support@pocketprincipal.com">support@pocketprincipal.com</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- </div> -->
                                <div id="abc" class="form-wizard-right">
                                    
                                    <div id="step-1">
                                        <h4 class="card-title mb-5">School Settings</h4>
                                        <div id="eeee" class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">Name</label>
                                                    <input type="text" id="school-settings-name" name="school-settings-name" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-label">Start</label>
                                                    <input type="text" id="school-settings-start" name="school-settings-start" class="form-control"  >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-label">End</label>
                                                    <div class="input-group">
                                                        <input type="text" id="school-settings-end" class="form-control border-right-0" name="school-settings-end" >
                                                        <!-- <div class="input-group-append">
                                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">Name_ID</label>
                                                    <div class="input-group">
                                                        <input type="text" id="school-settings-name-id" name="school-settings-name-id" class="form-control border-right-0" >
                                                        <!-- <div class="input-group-append">
                                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">Where are you from*</label>
                                                    <input type="text" name="place" class="form-control" required>
                                                </div>
                                            </div> -->
                                            <button id="update-school-settings" type="button" class="btn btn-sm btn-warning pull-right">Update</button>
                                        </div>
                                    </div>
                                    <div id="step-2">
                                        <h4 class="card-title mb-5">System Settings</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">School Name</label>
                                                    <input type="text" id="system-school-name"  class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">School Email Address*</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control border-right-0" id="system-email"  >
                                                        <!-- <div class="input-group-append">
                                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">School Phone Number*</label>
                                                    <div class="input-group">
                                                        <input type="text"  id="system-phone-number" class="form-control border-right-0">
                                                        <!-- <div class="input-group-append">
                                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">School Address*</label>
                                                    <div class="input-group">
                                                        <input type="text"  id="system-address" class="form-control border-right-0">
                                                        <!-- <div class="input-group-append">
                                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">Your position in Company*</label>
                                                    <input type="text" name="place" class="form-control" required>
                                                </div>
                                            </div> -->
                                        </div>
                                        <button id="update-system-setting" type="button" class="btn btn-sm btn-warning pull-right">Update</button>
                                    </div>
                                    <div id="step-3">
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Period 1 *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Period 2  *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Period 3 *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Period 4 *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Period 5 *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Period 6 *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Period 7 *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Period 8 *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Homeroom *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-4">
                                                <h4>Launch *</h4>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="11.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="12.00" type="number" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <button id="update-period-setting" type="button" class="btn btn-sm btn-warning pull-right">Update</button>
                                    </div>
                                    <div id="step-4" class="">
                                        <div class="row emial-setup">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="mailclient1" class="mailclinet mailclinet-gmail">
                                                        <input type="radio" name="emailclient" id="mailclient1">
                                                        <span class="mail-icon">
                                                            <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mail-text">I'm using Gmail</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="mailclient2" class="mailclinet mailclinet-office">
                                                        <input type="radio" name="emailclient" id="mailclient2">
                                                        <span class="mail-icon">
                                                            <i class="mdi mdi-office" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mail-text">I'm using Office</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="mailclient3" class="mailclinet mailclinet-drive">
                                                        <input type="radio" name="emailclient" id="mailclient3">
                                                        <span class="mail-icon">
                                                            <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mail-text">I'm using Drive</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="mailclient4" class="mailclinet mailclinet-another">
                                                        <input type="radio" name="emailclient" id="mailclient4">
                                                        <span class="mail-icon">
                                                            <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mail-text">I'm using Another Service</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="skip-email text-center">
                                                    <p>Or if want skip this step entirely and setup it later</p>
                                                    <a href="javascript:void()">Skip step</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
            <!-- #/ container -->
   
   
    <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    
    <script src="<?=base_url() ?>public/assets/plugins/smartwizard/dist/js/jquery.smartWizard.min.js"></script>
    <script src="<?=base_url() ?>public/js/plugins-init/smartwizard-init.js"></script>

    <script>
   
    $(document).ready(function(){
        var base_url="<?php echo base_url();?>";
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
                url:'<?php echo base_url(); ?>admin/generalsettings/get_setting',
                type:"POST",
                data:({[csrfName]: csrfHash}),
                dataType:'JSON',
            }).done(function(data){
                 $("#system-school-name").val(data.SchoolName);
                $("#system-email").val(data.Email);
                $("#system-phone-number").val(data.PhoneNumber);
                $("#system-address").val(data.Address);
          

            })
        $(document).on('click','#update-school-settings',function(){
            data={}
            data['name']=$("#school-settings-name").val()
            data['start']=$("#school-settings-start").val() 
            data['end']=$("#school-settings-end").val()
            data['name_id']=$("#school-settings-name-id").val()
            console.log(data)
            $.ajax({
                url:'<?php echo base_url(); ?>admin/generalsettings/insert_schoolsettings',
                type:"POST",
                data:({[csrfName]: csrfHash,data:data}),
                dataType:'JSON',
            }).done(function(data){

            })

            //console.log(getformvalues("#eeee"));
        })
        $(document).on('click','#update-system-setting',function(){
            data={}
            data['SchoolName']=$("#system-school-name").val();
            data['Email']=$("#system-email").val();
            data['PhoneNumber']=$("#system-phone-number").val();
            data['Address']=$("#system-address").val();
            $.ajax({
                url:'<?php echo base_url(); ?>admin/generalsettings/update_system_setting',
                type:"POST",
                data:({[csrfName]: csrfHash,data:data}),
                dataType:'JSON',
            }).done(function(data){
               
          

            })
            console.log(data);
            // $.ajax({
            //     url:'<?php echo base_url(); ?>admin/generalsettings/update_system_setting',
            //     type:"POST",
            //     data:({[csrfName]: csrfHash,data:data}),
            //     dataType:'JSON',
            // }).done(function(data){

            // })
                //alert('abc');
            //console.log(getformvalues("#eeee"));
        })
    })
    </script>