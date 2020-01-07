<style>
button.btn-space {
        margin-left: 1em;
    }
</style>
<style>
  .bg-red,
  .bg-yellow,
  .bg-aqua,
  .bg-blue,
  .bg-light-blue,
  .bg-green,
  .bg-navy,
  .bg-teal,
  .bg-olive,
  .bg-lime,
  .bg-orange,
  .bg-fuchsia,
  .bg-purple,
  .bg-maroon,
  .bg-black,
  .bg-red-active,
  .bg-yellow-active,
  .bg-aqua-active,
  .bg-blue-active,
  .bg-light-blue-active,
  .bg-green-active,
  .bg-navy-active,
  .bg-teal-active,
  .bg-olive-active,
  .bg-lime-active,
  .bg-orange-active,
  .bg-fuchsia-active,
  .bg-purple-active,
  .bg-maroon-active,
  .bg-black-active,
  .callout.callout-danger,
  .callout.callout-warning,
  .callout.callout-info,
  .callout.callout-success,
  .alert-success,
  .alert-danger,
  .alert-error,
  .alert-warning,
  .alert-info,
  .label-danger,
  .label-info,
  .label-warning,
  .label-primary,
  .label-success,
  .modal-primary .modal-body,
  .modal-primary .modal-header,
  .modal-primary .modal-footer,
  .modal-warning .modal-body,
  .modal-warning .modal-header,
  .modal-warning .modal-footer,
  .modal-info .modal-body,
  .modal-info .modal-header,
  .modal-info .modal-footer,
  .modal-success .modal-body,
  .modal-success .modal-header,
  .modal-success .modal-footer,
  .modal-danger .modal-body,
  .modal-danger .modal-header,
  .modal-danger .modal-footer {
    color: #fff !important;
  }
  .bg-gray {
    color: #000;
    background-color: #d2d6de !important;
  }
  .bg-gray-light {
    background-color: #f7f7f7;
  }
  .bg-black {
    background-color: #111111 !important;
  }
  .bg-red,
  .callout.callout-danger,
  .alert-danger,
  .alert-error,
  .label-danger,
  .modal-danger .modal-body {
    background-color: #dd4b39 !important;
  }
  .bg-yellow,
  .callout.callout-warning,
  .alert-warning,
  .label-warning,
  .modal-warning .modal-body {
    background-color: #f39c12 !important;
  }
  .bg-aqua,
  .callout.callout-info,
  .alert-info,
  .label-info,
  .modal-info .modal-body {
    background-color: #00c0ef !important;
  }
  .bg-blue {
    background-color: #0073b7 !important;
  }
  .bg-light-blue,
  .label-primary,
  .modal-primary .modal-body {
    background-color: #3c8dbc !important;
  }
  .bg-green,
  .callout.callout-success,
  .alert-success,
  .label-success,
  .modal-success .modal-body {
    background-color: #00a65a !important;
  }
  .bg-navy {
    background-color: #001f3f !important;
  }
  .bg-teal {
    background-color: #39cccc !important;
  }
  .bg-olive {
    background-color: #3d9970 !important;
  }
  .bg-lime {
    background-color: #01ff70 !important;
  }
  .bg-orange {
    background-color: #ff851b !important;
  }
  .bg-fuchsia {
    background-color: #f012be !important;
  }
  .bg-purple {
    background-color: #605ca8 !important;
  }
  .bg-maroon {
    background-color: #d81b60 !important;
  }
  .bg-gray-active {
    color: #000;
    background-color: #b5bbc8 !important;
  }
  .bg-black-active {
    background-color: #000000 !important;
  }
  .bg-red-active,
  .modal-danger .modal-header,
  .modal-danger .modal-footer {
    background-color: #d33724 !important;
  }
  .bg-yellow-active,
  .modal-warning .modal-header,
  .modal-warning .modal-footer {
    background-color: #db8b0b !important;
  }
  .bg-aqua-active,
  .modal-info .modal-header,
  .modal-info .modal-footer {
    background-color: #00a7d0 !important;
  }
  .bg-blue-active {
    background-color: #005384 !important;
  }
  .bg-light-blue-active,
  .modal-primary .modal-header,
  .modal-primary .modal-footer {
    background-color: #357ca5 !important;
  }
  .bg-green-active,
  .modal-success .modal-header,
  .modal-success .modal-footer {
    background-color: #008d4c !important;
  }
  .bg-navy-active {
    background-color: #001a35 !important;
  }
  .bg-teal-active {
    background-color: #30bbbb !important;
  }
  .bg-olive-active {
    background-color: #368763 !important;
  }
  .bg-lime-active {
    background-color: #00e765 !important;
  }
  .bg-orange-active {
    background-color: #ff7701 !important;
  }
  .bg-fuchsia-active {
    background-color: #db0ead !important;
  }
  .bg-purple-active {
    background-color: #555299 !important;
  }
  .bg-maroon-active {
    background-color: #ca195a !important;
  }
  [class^="bg-"].disabled {
    opacity: 0.65;
    filter: alpha(opacity=65);
  }
    
  .fc-color-picker {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .fc-color-picker > li {
    float: left;
    font-size: 30px;
    margin-right: 5px;
    line-height: 30px;
  }
  .fc-color-picker > li .fa {
    -webkit-transition: -webkit-transform linear 0.3s;
    -moz-transition: -moz-transform linear 0.3s;
    -o-transition: -o-transform linear 0.3s;
    transition: transform linear 0.3s;
  }
  .fc-color-picker > li .fa:hover {
    -webkit-transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    -o-transform: rotate(30deg);
    transform: rotate(30deg);
  }
  #add-new-event {
    -webkit-transition: all linear 0.3s;
    -o-transition: all linear 0.3s;
    transition: all linear 0.3s;
  }
  .external-event {
    padding: 5px 10px;
    font-weight: bold;
    margin-bottom: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    border-radius: 3px;
    cursor: move;
  }
  .external-event:hover {
    box-shadow: inset 0 0 90px rgba(0, 0, 0, 0.2);
  }
    .text-red {
    color: #dd4b39 !important;
  }
  .text-yellow {
    color: #f39c12 !important;
  }
  .text-aqua {
    color: #00c0ef !important;
  }
  .text-blue {
    color: #0073b7 !important;
  }
  .text-black {
    color: #111111 !important;
  }
  .text-light-blue {
    color: #3c8dbc !important;
  }
  .text-green {
    color: #00a65a !important;
  }
  .text-gray {
    color: #d2d6de !important;
  }
  .text-navy {
    color: #001f3f !important;
  }
  .text-teal {
    color: #39cccc !important;
  }
  .text-olive {
    color: #3d9970 !important;
  }
  .text-lime {
    color: #01ff70 !important;
  }
  .text-orange {
    color: #ff851b !important;
  }
  .text-fuchsia {
    color: #f012be !important;
  }
  .text-purple {
    color: #605ca8 !important;
  }
  .text-maroon {
    color: #d81b60 !important;
  }
  .link-muted {
    color: #7a869d;
  }
</style>




<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/yadcf/jquery.dataTables.yadcf.css');?>">

<link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css');?>">

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js');?>"></script>

<script src="<?php echo base_url('public/plugins/papaparse/papaparse.min.js');?>"></script>

<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
                                                <img src="<?php echo base_url()?>/public/assets/images/avatar/7.png" alt="">
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
                                        <!-- <div class="row"> -->
                                                <h4>New ScheduleType</h4>
                                                Title:
                                                <input class="form-control form-white" id="scheduletypetitle" type="text">
                                                Color:
                                        
                                                <select class="form-control form-white" id="scheduletypecolor">
                                                    <option value=""></option>
                                                    <option class="bg-aqua" value="bg-aqua">bg-aqua</option>
                                                    <option class="bg-blue" value="bg-blue">bg-blue</option>
                                                    <option class="bg-light" value="bg-light">bg-light</option>
                                                    <option class="bg-teal" value="bg-teal">bg-teal</option>
                                                    <option class="bg-yellowvalue" value="bg-yellow">bg-yellow</option>
                                                    <option class="bg-orange" value="bg-orange">bg-orange</option>
                                                    <option class="bg-green" value="bg-green">bg-green</option>
                                                    <option class="bg-lime" value="bg-lime">bg-lime</option>
                                                    <option class="bg-red" value="bg-red">bg-red</option>
                                                    <option class="bg-purple" value="bg-purple">bg-purple</option>
                                                    <option class="bg-fuchsia" value="bg-fuchsia">bg-fuchsia</option>
                                                    <option class="bg-muted" value="bg-muted">bg-muted</option>
                                                    <option class="bg-navy" value="bg-navy">bg-navy</option>
                                                </select>
                                                <button id="update-scheduletyp-setting" type="button" class="btn btn-sm btn-warning pull-right">Update</button>
                                                <br>
                                                <br>
                                                <br>
                                                <table id="scheduletype_datatable" class="table table-bordered table-striped" width="100%">
                                                
                                                </table>
                                            <!-- </div> -->
                                        <!-- </div> -->
                                       
                                    </div>
                                    <!-- //  -->
                                    <div id="step-4" class="">
                                        <div class="form-group">
                                            <label >Start Time</label>
                                            <input type="text" id='add-sliderStartTime' class="form-control"   placeholder="PeriodStartTime">
                                        </div>
                                        <div class="form-group">
                                            <label >End Time</label>
                                            <input type="text" id='add-sliderEndTime' class="form-control"   placeholder="PeriodEndTime">
                                        </div>
                                        <div class="form-group">
                                            <label >Period</label>
                                            <input type="text" id='add-Period' class="form-control"   placeholder="Period">
                                        </div>
                                        <button id="update-period" type="button" class="btn btn-sm btn-warning pull-right">Update</button>
                                            <br>
                                            <br>
                                            <br>
                                        <table id="period_datatable" class="table table-bordered table-striped" width="100%">
                                                
                                        </table>
                                    </div>
                                    <!-- // -->
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
            <!-- #/ container -->
   
   


            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
    <script src="<?=base_url() ?>public/dist/js/filterDropDown.min.js"></script>
    <script src="<?=base_url() ?>public/plugins/yadcf/jquery.dataTables.yadcf.js"></script>



<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/yadcf/jquery.dataTables.yadcf.css');?>">



<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js');?>"></script>

<script src="<?php echo base_url('public/plugins/papaparse/papaparse.min.js');?>"></script>

<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script> -->

<script src="<?php echo base_url('public/dist/js/sweetalert.min.js');?>"></script>
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
        var access_datatable=$('#scheduletype_datatable').DataTable({
				ajax: {
                    url:'<?php echo base_url(); ?>admin/generalsettings/get_scheduletype',
					dataType: 'json',
					type: 'POST',
                    data:({[csrfName]: csrfHash}),
					dataSrc:""
				},
				columns: [
					//{ "data": "ModulePageID", "title":"ModulePageID"},
					{ "data": "ScheduleType","title":"ScheduleType" },
					// { "data": "PeriodAccess","title":"PeriodAccess" },
					{ "data": null,"title":"Color",
                    
                        render:function(data){
                            return ` <button type="button" class="btn ${data.backgroundColor}"> <button>`;
                        }
                    },
					{ "data": null,"title":"Action",
                    
                        render:function(data){
                            return ` <button type="button" value="${data.ScheduleTypeID}" id="delete_schedule_type" class="btn btn-xs btn-danger ">Delete <button>`;
                        }
                    }

					
				],
				destroy: true,
			})
        $(document).on('click','#update-scheduletyp-setting',function(){
            title= $("#scheduletypetitle").val();
            color= $("#scheduletypecolor").val();
            swal({
                title: "Are you sure?",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, save it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url:base_url+"admin/masterscheduler/managescheduletype",
                        type:"POST",
                        data:({[csrfName]: csrfHash,type:'add',data:title,color:color}),
                        dataType:'JSON',
                    })
                    .done(function(data){
                        if(data===true){
                            swal("Success!", "Successfully Added", "success");
                            access_datatable.ajax.reload();
                        }else{
                            swal("Failed","Error Adding Please Contact your system Administrator",'error');
                        }
                    })
                
                } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        })
      
        $(document).on('click','#delete_schedule_type',function(){
            id=$(this).val();
            swal({
                title: "Are you sure?",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url:base_url+"admin/masterscheduler/managescheduletype",
                        type:"POST",
                        data:({[csrfName]: csrfHash,type:"delete",data:id}),
                        dataType:'JSON',
                    })
                    .done(function(data){
                        if(data===true){
                            swal("Success!", "Successfully Deleted", "success");
                            access_datatable.ajax.reload();
                        }else{
                            swal("Failed","Error Adding Please Contact your system Administrator",'error');
                        }
                    })
                
                } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        })
        
        var period_datatable=$('#period_datatable').DataTable({
				ajax: {
                    url:'<?php echo base_url(); ?>admin/masterscheduler/get_period',
					dataType: 'json',
					type: 'POST',
                    data:({[csrfName]: csrfHash}),
					dataSrc:""
				},
				columns: [
					//{ "data": "ModulePageID", "title":"ModulePageID"},
                    
					{ "data": "Period","title":"Period" },
					{ "data": "PeriodStartTime","title":"PeriodStartTime" },
					{ "data": "PeriodEndTime","title":"PeriodEndTime" },
					// { "data": "PeriodAccess","title":"PeriodAccess" },
					
					{ "data": null,"title":"Action",
                    
                        render:function(data){
                            return ` <button type="button" value="${data.PeriodID}" id="delete_period" class="btn btn-xs btn-danger ">Delete <button>`;
                        }
                    }

					
				],
				destroy: true,
		})
        $(document).on('click','#delete_period',function(){
            id=$(this).val();
            swal({
                title: "Are you sure?",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url:base_url+"admin/masterscheduler/delete_period",
                        type:"POST",
                        data:({[csrfName]: csrfHash,data:id}),
                        dataType:'JSON',
                    })
                    .done(function(data){
                        if(data===true){
                            swal("Success!", "Successfully Deleted", "success");
                            period_datatable.ajax.reload();
                        }else{
                            swal("Failed","Error Adding Please Contact your system Administrator",'error');
                        }
                    })
                
                } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        })
        $(document).on('click','#update-period',function(){
            data={}
            data['PeriodStartTime']=$("#add-sliderStartTime").val();
            data['PeriodEndTime']=$("#add-sliderEndTime").val();
            data['Period']=$("#add-Period").val();
            swal({
                title: "Are you sure?",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url:'<?php echo base_url(); ?>admin/masterscheduler/add__period',
                        type:"POST",
                        data:({[csrfName]: csrfHash,data:data}),
                        dataType:'JSON',
                    }).done(function(data){
                        if(data===true){
                            swal("Success!", "Successfully updated", "success");
                            period_datatable.ajax.reload();
                        }else{
                            swal("Failed","Error Adding Please Contact your system Administrator",'error');
                        }
                    })
                
                } else {
                swal("Cancelled", "Your  file is safe :)", "error");
                }
            });
            
        })


    })
    </script>