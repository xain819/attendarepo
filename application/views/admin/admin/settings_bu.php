
<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/smartwizard/dist/css/smart_wizard.min.css">
    <link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/smartwizard/dist/css/smart_wizard_theme_circles.min.css">
    <!-- Custom Stylesheet -->
    <link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">



                <div class="row">
                    <div class="col-xl-12 mb-5">
                        <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                            <!-- SmartWizard html -->
                            <div id="smartwizard1" class="form-wizard">
                                <!-- <div> -->
                                <ul class="form-wizard-left">
                                    <li><a href="#step-1">01</a>
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
                                <div class="form-wizard-right">
                                    <h4 class="card-title mb-5">Attenda Track Installation Wizard</h4>
                                    <div id="step-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-label">Name</label>
                                                    <input type="text" name="firstName" class="form-control" placeholder="Parsley" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-label">Start</label>
                                                    <input type="text" name="lastName" class="form-control" placeholder="Montana" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">Email Address*</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control border-right-0" id="" aria-describedby="inputGroupPrepend2" placeholder="cellophane@gmail.com" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">Phone Number*</label>
                                                    <div class="input-group">
                                                        <input type="text" name="phoneNumber" class="form-control border-right-0" placeholder="(+1)408-657-9007" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">Where are you from*</label>
                                                    <input type="text" name="place" class="form-control" required>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div id="step-2">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">School Name*</label>
                                                    <input type="text" name="firstName" class="form-control" placeholder="Cellophane Square" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">School Logo*</label>
                                                   <input type="file" class="form-control" id="validationDefaultUsername9" aria-describedby="inputGroupPrepend2">
                                                </div>
                                            
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">School Email Address*</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control border-right-0" id="" aria-describedby="inputGroupPrepend2" placeholder="cellophane@gmail.com" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-label">School Phone Number*</label>
                                                    <div class="input-group">
                                                        <input type="text" name="phoneNumber" class="form-control border-right-0" placeholder="(+1)408-657-9007" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                                        </div>
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