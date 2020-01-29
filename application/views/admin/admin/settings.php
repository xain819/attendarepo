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
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/yadcf/jquery.dataTables.yadcf.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('public/dist/css/sweetalert.css'); ?>">

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js'); ?>"></script>

<script src="<?php echo base_url('public/plugins/papaparse/papaparse.min.js'); ?>"></script>

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


<link rel="stylesheet" href="<?= base_url() ?>public/assets/plugins/smartwizard/dist/css/smart_wizard.min.css">
<link rel="stylesheet"
      href="<?= base_url() ?>public/assets/plugins/smartwizard/dist/css/smart_wizard_theme_circles.min.css">
<!-- Custom Stylesheet -->
<link href="<?= base_url() ?>public/css/style.css" rel="stylesheet">


<div class="row">
    <div class="col-xl-12 mb-5">
        <form id="setting-form">
            <!-- SmartWizard html -->
            <div id="smartwizard1" class="form-wizard">
                <!-- <div> -->
                <ul class="form-wizard-left">
                    <li><a href="#step-1">01</a>
                        <div class="form-wizard-content">
                            <div class="form-wizard-content-upper">
                                <img src="<?php echo base_url() ?>/public/assets/images/avatar/7.png" alt="">
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
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                    mornings heart.</p>
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
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                    mornings heart.</p>
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
                    <li><a href="#step-5">05</a>
                        <div class="form-wizard-content">
                            <div class="form-wizard-content-upper">
                                <img src="../../assets/images/avatar/10.png" alt="">
                                <h4>Import Class </h4>
                                <p>Upload and Import Master SIS data to AttendaTrack</p>
                            </div>
                            <div class="form-wizard-content-bottom">
                                <h4>(+1)408-657-9007</h4>
                                <a href="mailto:support@pocketprincipal.com">support@pocketprincipal.com</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#step-6">06</a>
                        <div class="form-wizard-content">
                            <div class="form-wizard-content-upper">
                                <img src="../../assets/images/avatar/10.png" alt="">
                                <h4>Import Class </h4>
                                <p>Upload and Import Master SIS data to AttendaTrack</p>
                            </div>
                            <div class="form-wizard-content-bottom">
                                <h4>(+1)408-657-9007</h4>
                                <a href="mailto:support@pocketprincipal.com">support@pocketprincipal.com</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#step-7">07</a>
                        <div class="form-wizard-content">
                            <div class="form-wizard-content-upper">
                                <img src="../../assets/images/avatar/10.png" alt="">
                                <h4>General Setting</h4>
                                <p>Setup your general Settings here</p>
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
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="text-label">Name</label>
                                    <input type="text" id="school-settings-name" name="school-settings-name"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Start</label>
                                    <input type="text" id="school-settings-start" name="school-settings-start"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-label">End</label>
                                    <div class="input-group">
                                        <input type="text" id="school-settings-end" class="form-control"
                                               name="school-settings-end">
                                        <!-- <div class="input-group-append">
                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Name_ID</label>
                                    <div class="input-group">
                                        <input type="text" id="school-settings-name-id" name="school-settings-name-id"
                                               class="form-control">
                                        <!-- <div class="input-group-append">
                                            <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                        </div> -->
                                    </div>
                                </div>
                                <button id="update-school-settings" type="button"
                                        class="btn btn-sm btn-warning pull-right">Update
                                </button>
                            </div>

                            <div class="col-lg-8">
                                <table id="school_setting" class="table table-bordered table-striped" width="100%">

                                </table>
                            </div>
                            <!-- <div class="col-lg-4">

                             </div> -->
                        </div>
                        <!-- <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-label">Where are you from*</label>
                                    <input type="text" name="place" class="form-control" required>
                                </div>
                            </div> -->
                    </div>
                    <div id="step-2">
                        <h4 class="card-title mb-5">System Settings</h4>
                        <div class="row text-center">


                            <div class="col-lg-12">
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-6">
                                        <label class="text-label">School Name</label>
                                        <input type="text" id="system-school-name" class="form-control"
                                               style="text-align:center">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-6">
                                        <label class="text-label">School Email Address*</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="system-email"
                                                   style="text-align:center">
                                            <!-- <div class="input-group-append">
                                                <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-6">
                                        <label class="text-label">School Phone Number*</label>
                                        <div class="input-group">
                                            <input type="text" id="system-phone-number" class="form-control"
                                                   style="text-align:center">
                                            <!-- <div class="input-group-append">
                                                <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-6">
                                        <label class="text-label">School Address*</label>
                                        <div class="input-group">
                                            <input type="text" id="system-address" class="form-control"
                                                   style="text-align:center">
                                            <!-- <div class="input-group-append">
                                                <span class="input-group-text bg-transparent" id="inputGroupPrepend2"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <button id="update-system-setting" type="button"
                                        class="btn btn-sm btn-warning pull-right">Update
                                </button>
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
                        <!-- <div class="row"> -->

                        <h4>New ScheduleType</h4>
                        <div class="row">
                            <div class="col-lg-3">
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
                                </select><br><br>
                                <button id="update-scheduletyp-setting" type="button" class="btn btn-sm btn-warning pull-right">Update</button>
                            </div>
                            <div class="col-lg-9">
                                <table id="scheduletype_datatable" class="table table-bordered table-striped"
                                       width="100%"></table>
                            </div>
                        </div>


                        <!-- </div> -->
                        <!-- </div> -->

                    </div>
                    <!-- //  -->
                    <div id="step-4" class="">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input type="text" id='add-sliderStartTime' class="form-control"
                                           placeholder="PeriodStartTime">
                                </div>
                                <div class="form-group">
                                    <label>End Time</label>
                                    <input type="text" id='add-sliderEndTime' class="form-control"
                                           placeholder="PeriodEndTime">
                                </div>
                                <div class="form-group">
                                    <label>Period</label>
                                    <input type="text" id='add-Period' class="form-control" placeholder="Period">
                                </div>
                                <button id="update-period" type="button" class="btn btn-sm btn-warning pull-right">
                                    Update
                                </button>

                            </div>
                            <div class="col-lg-9">
                                <table id="period_datatable" class="table table-bordered table-striped"
                                       width="100%"></table>
                            </div>
                        </div>
                    </div>


                    <div id="step-5" class="">
                        <div class=" card box-body" style='padding:20px;'>
                            <!-- <div class=' card col-xl-12 '> -->
                            <table id="classes" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Class Code</th>
                                    <th>Course Code</th>
                                    <th>Type</th>
                                    <th>Term</th>
                                    <th>Day</th>
                                    <th>Period</th>
                                    <th>Level</th>
                                    <th>Section</th>
                                    <th>Location</th>
                                    <th>TeacherID</th>
                                    <th>StudentID</th>
                                </tr>
                                </thead>
                            </table>
                            <!-- </div> -->
                        </div>

                    </div>
                    <div id="step-6" class="">
                        <div class="card box-body" style='padding:20px;'>

                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>COURSE GROUP</th>
                                    <th>COURSE CODE</th>

                                    <th>SHORT DESCRIPTION</th>
                                    <th>COURSE DESCRIPTION</th>
                                    <th>GRADE LEVEL</th>
                                    <th>CREDITS</th>
                                    <th>CREDITS</th>


                                </tr>
                                </thead>

                            </table>
                        </div>

                    </div>
                    <div id="step-7" class="">
                        <div id='master_list' class="row">
                        </div>
                        <div class="modal fade bd-example-modal-lg " id="ahpf" tabindex="-1" role="dialog"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#f3f6f9;">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hallpass Settings</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body ">
                                        <div class='row' id="hallpass_list_item">
                                            <div class="col-xl-6">
                                                <div class="card transparent-card ">
                                                    <div class="card-header pb-0">
                                                        <h5 class="card-title mb-3">Administrative Hall Pass</h5>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="table-responsive">
                                                            <table id="ahp"
                                                                   class="table trading-activity table-padded table-responsive-fix">
                                                                <thead>
                                                                <tr>
                                                                    <th>action</th>
                                                                    <th>AHP Type</th>
                                                                    <th>Time Allocated</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="table_ahp1">


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="card transparent-card ">
                                                    <div class="card-header pb-0">
                                                        <h5 class="card-title mb-3">Non Administrative Hall Pass</h5>

                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="table-responsive">
                                                            <table id='nhp'
                                                                   class="table trading-activity table-padded table-responsive-fix">
                                                                <thead>
                                                                <tr>
                                                                    <th>action</th>
                                                                    <th>AHP Type</th>
                                                                    <th>Time Allocated</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id='table_nhp1'>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#basicModal">Add Hall Pass
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal" id="basicModal">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Add Hall Pass</h5>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form role="form" id="add_hallpass_form_id">
                                                                <div class="form-group">
                                                                    <input type="text" id='hallpassname'
                                                                           name="hallpassname" class="form-control"
                                                                           placeholder="hall pass name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" id='hallpasstime'
                                                                           name="hallpasstime" class="form-control"
                                                                           placeholder="minutes">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select id="hallpasstype">
                                                                        <option value="1">Administrative</option>
                                                                        <option value="2">None Administrative</option>
                                                                    </select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class='add_hallpass' id='add_hallpass'
                                                                    class="btn btn-primary">Save changes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bootstrap-modal">

                            <!-- Modal for period grace period -->

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg " id="pgt">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Enter Period Time</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" id="frm_time">
                                                <div class="form-group">
                                                    <input type="text" id='gracetime' name="gracetime"
                                                           class="form-control" value='5' placeholder="Minutes"
                                                           required>
                                                </div>
                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id='btn-pgt' class=" btn-pgt btn btn-sm btn-primary">
                                                Save changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bootstrap-modal">

                            <!-- Modal for -->

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg " id="Hall">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Enter Period Time</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" id="frm_time">
                                                <div class="form-group">
                                                    <input type="text" id='gracetime' name="gracetime"
                                                           class="form-control" placeholder="Minutes" required>
                                                </div>
                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class='btn-pgt' id='btn-pgt' class="btn btn-primary">
                                                Save changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bootstrap-modal">

                            <!-- Modal for -->

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg " id="nql">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Enter Passes Per Student</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" id="frm_2whp">
                                                <div class="form-group">
                                                    <input type="text" id='nql-limit' name="nql" class="form-control"
                                                           placeholder="Number" required>
                                                </div>
                                                <select class="select2-width-50" id='select-type' style="width: 100%">

                                                    <option value="Day">Day</option>
                                                    <option value="Week">Week</option>
                                                    <option value="Marking Period">Marking Period</option>
                                                    <option value="Semester">Semester</option>
                                                </select>
                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id='btn-2whp'
                                                    class=" btn-2whp btn btn-sm btn-primary">Save changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal-lg " id="hplt">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hall Pass Lock Time</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" id="frm_time">
                                            <div class="form-group">
                                                <label for="hp_lock_start">Before Start</label>
                                                <input type="text" id='hp_lock_start' name="hallpasslimit"
                                                       class="form-control" placeholder="Before Period:Minutes"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for="hp_lock_end">Before End</label>
                                                <input type="text" id='hp_lock_end' name="hallpasslimit"
                                                       class="form-control" placeholder="After Period:Minutes" required>
                                            </div>
                                        </form>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id='btn-hplt' class=" btn-hplt btn btn-sm btn-primary">
                                            Save changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal-lg " id="slac">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hall Pass Lock Time</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" id="frm_time">
                                            <div class="form-group">

                                                <label for="hp_lock_start">Time</label>
                                                <input type="text" id='time_in' name="hallpasslimit"
                                                       class="form-control" placeholder="Before Period:Minutes"
                                                       required>


                                                <div class="mb-3">
                                                    <select class="select2-width-50" style="width: 100%">
                                                        <option value="1">Main Office</option>
                                                        <option value="2">Current Class</option>
                                                        <option value="2">Other</option>
                                                    </select>
                                                </div>


                                        </form>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" id='btn-nql' class=" btn-nql btn btn-primary">Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg " id="ano">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Additional NHP Override</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="frm_time">
                                        <div class="form-group">
                                            <input type="text" id='AddHP' name="AddHP" class="form-control"
                                                   placeholder="Enter Additional Limit">
                                        </div>

                                    </form>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" id='btn-nql' class=" btn-nql btn btn-primary">Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg " id="tl">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Teacher Limit</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="frm_time">
                                        <div class="form-group">
                                            <input type="text" id='addteacherlimit' name="addteacherlimit"
                                                   class="form-control" placeholder="Enter Teacher Limit">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button " class='btn-nql btn btn-sm btn-primary' id='teacher-limit'
                                            class="btn btn-primary">Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg " id="tt">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">TransitionTime </h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="ttimeform">
                                        <div class="form-group">
                                            <input type="text" id='addtransitiontime' name="addtransitiontime"
                                                   class="form-control" placeholder="Enter Transition Time">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button " class='btn-nql btn btn-sm btn-primary' id='transition-time'
                                            class="btn btn-primary">Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg " id="oc">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Other Contoller</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="frm_time">
                                        <div class="form-group">
                                            <input type="text" id='AddHP' name="AddHP" class="form-control"
                                                   placeholder="Enter Additional Limit">
                                        </div>

                                    </form>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class='btn-nql' id='btn-nql' class="btn btn-sm btn-primary">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
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
<script src="<?= base_url() ?>public/assets/plugins/common/common.min.js"></script>
<script src="<?= base_url() ?>public/js/custom.min.js"></script>
<script src="<?= base_url() ?>public/js/settings.js"></script>
<script src="<?= base_url() ?>public/js/gleek.js"></script>
<script src="<?= base_url() ?>public/js/styleSwitcher.js"></script>
<script src="<?= base_url() ?>public/dist/js/filterDropDown.min.js"></script>
<script src="<?= base_url() ?>public/plugins/yadcf/jquery.dataTables.yadcf.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/editor/css/editor.dataTables.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/yadcf/jquery.dataTables.yadcf.css'); ?>">


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('public/plugins/editor/js/dataTables.editor.min.js'); ?>"></script>

<script src="<?php echo base_url('public/plugins/papaparse/papaparse.min.js'); ?>"></script>

<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


<script src="<?php echo base_url('public/dist/js/sweetalert.min.js'); ?>"></script>
<script src="<?= base_url() ?>public/assets/plugins/smartwizard/dist/js/jquery.smartWizard.min.js"></script>
<script src="<?= base_url() ?>public/js/plugins-init/smartwizard-init.js"></script>


<script>
    // res =  window.location.href.split("/");
    // checkstep=( '#'+res[6].split('#')[1]);

    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
        base_url = '<?php echo base_url(); ?>';
    var editor;

    function selectColumns(editor, csv, header) {
        var selectEditor = new $.fn.dataTable.Editor();
        var fields = editor.order();
        console.log(selectEditor);

        for (var i = 0; i < fields.length; i++) {
            var field = editor.field(fields[i]);


            selectEditor.add({
                label: field.label(),
                name: field.name(),
                type: 'select',
                options: header,
                def: header[i]
            });

        }

        selectEditor.create({
            title: 'Map CSV fields',
            buttons: 'Import ' + csv.length + ' records',
            message: 'Select the CSV column you want to use the data from for each field.'
        });

        selectEditor.on('submitComplete', function (e, json, data, action) {
            // Use the host Editor instance to show a multi-row create form allowing the user to submit the data.
            editor.create(csv.length, {
                title: 'Confirm import',
                buttons: 'Submit',
                message: 'Click the <i>Submit</i> button to confirm the import of ' + csv.length + ' rows of data. Optionally, override the value for a field to set a common value by clicking on the field below.'
            });

            for (var i = 0; i < fields.length; i++) {
                var field = editor.field(fields[i]);
                var mapped = data[field.name()];

                for (var j = 0; j < csv.length; j++) {
                    field.multiSet(j, csv[j][mapped]);
                }
            }
            //   a.ajax.reload();
        });
    }

    $(document).ready(function () {
        // Regular editor for the table
        base_url = '<?php echo base_url(); ?>';
        editor = new $.fn.dataTable.Editor({
            ajax: {
                url: base_url + "admin/academicsettings/check_courses",
                data: ({[csrfName]: csrfHash}),
                type: "POST",
                dataSrc: '',
                dataType: 'JSON'
            },

            table: "#example",
            fields: [
                {
                    label: "ID:",
                    name: "id"
                },
                {
                    label: "Course Group:",
                    name: "course_group"
                },
                {
                    label: "Course Code:",
                    name: "course_code"
                },
                {
                    label: "Short Description:",
                    name: "short_desc"
                },
                {
                    label: "Course Description:",
                    name: "course_description"
                },
                {
                    label: "Grade Leve:",
                    name: "teacher_name"
                },
                {
                    label: "Grade Level:",
                    name: "grade_level"
                },
                {
                    label: "Credits:",
                    name: "credits"
                }


            ]

        });

        //lumalabas nman na kaso may error na 403
        //not allowed daw try ko sir.mag import felling ko sa 
        var a = $('#example').DataTable({
            dom: 'Bfrtip',
            ajax: {
                url: base_url + "admin/academicsettings/get_import_courses",
                data: ({[csrfName]: csrfHash}),
                type: "POST",
                dataSrc: '',
                dataType: 'JSON'
            },
            columns: [
                {data: 'id'},
                {data: 'course_group'},
                {data: 'course_code'},
                {data: 'short_desc'},

                {data: 'course_description'},
                {data: 'grade_level'},
                {data: 'credits'},
                {defaultContent: ""}
                // {data: null}


            ],
            select: true,
            buttons: [
                {extend: 'create', editor: editor},
                {extend: 'edit', editor: editor},
                {extend: 'remove', editor: editor},
                {
                    extend: 'csv',
                    text: 'Export CSV',
                    className: 'btn-space',
                    exportOptions: {
                        orthogonal: null
                    }
                },
                {
                    text: 'Import CSV',
                    action: function () {
                        uploadEditor.create({
                            title: 'CSV file import'
                        });
                    }
                },
                {
                    extend: 'selectAll',
                    className: 'btn-space'
                },
                'selectNone',
            ]
        });
        // Upload Editor - triggered from the import button. Used only for uploading a file to the browser
        var uploadEditor = new $.fn.dataTable.Editor({
            fields: [{
                label: 'CSV file:',
                name: 'csv',
                type: 'upload',
                ajax: function (files) {
                    // Ajax override of the upload so we can handle the file locally. Here we use Papa
                    // to parse the CSV.
                    Papa.parse(files[0], {
                        header: true,
                        skipEmptyLines: true,
                        complete: function (results) {
                            if (results.errors.length) {
                                console.log(results);
                                uploadEditor.field('csv').error('CSV parsing error: ' + results.errors[0].message);
                            } else {
                                uploadEditor.close();

                                selectColumns(editor, results.data, results.meta.fields);
                                console.log(results.data[0].Firstname);


                            }
                        }
                    });
                }
            }]
        });
        editor.on('postSubmit', function (event, data, action) {

            a.ajax.reload();
        });
        editor.on('create', function (e, json, data) {
            alert('New row added');
        });

    });
    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>',
        base_url = '<?php echo base_url(); ?>';
    var editor;

    function selectColumns(editor, csv, header) {
        var selectEditor = new $.fn.dataTable.Editor();
        var fields = editor.order();
        console.log(selectEditor);

        for (var i = 0; i < fields.length; i++) {
            var field = editor.field(fields[i]);


            selectEditor.add({
                label: field.label(),
                name: field.name(),
                type: 'select',
                options: header,
                def: header[i]
            });

        }

        selectEditor.create({
            title: 'Map CSV fields',
            buttons: 'Import ' + csv.length + ' records',
            message: 'Select the CSV column you want to use the data from for each field.'
        });

        selectEditor.on('submitComplete', function (e, json, data, action) {
            // Use the host Editor instance to show a multi-row create form allowing the user to submit the data.
            editor.create(csv.length, {
                title: 'Confirm import',
                buttons: 'Submit',
                message: 'Click the <i>Submit</i> button to confirm the import of ' + csv.length + ' rows of data. Optionally, override the value for a field to set a common value by clicking on the field below.'
            });

            for (var i = 0; i < fields.length; i++) {
                var field = editor.field(fields[i]);
                var mapped = data[field.name()];

                for (var j = 0; j < csv.length; j++) {
                    field.multiSet(j, csv[j][mapped]);
                }
            }
            //   a.ajax.reload();
        });
    }

    //if(checkstep=="#step-6"){
    function selectColumns(editor, csv, header) {
        var selectEditor = new $.fn.dataTable.Editor();
        var fields = editor.order();
        console.log(selectEditor);

        for (var i = 0; i < fields.length; i++) {
            var field = editor.field(fields[i]);


            selectEditor.add({
                label: field.label(),
                name: field.name(),
                type: 'select',
                options: header,
                def: header[i]
            });

        }

        selectEditor.create({
            title: 'Map CSV fields',
            buttons: 'Import ' + csv.length + ' records',
            message: 'Select the CSV column you want to use the data from for each field.'
        });

        selectEditor.on('submitComplete', function (e, json, data, action) {
            // Use the host Editor instance to show a multi-row create form allowing the user to submit the data.
            editor.create(csv.length, {
                title: 'Confirm import',
                buttons: 'Submit',
                message: 'Click the <i>Submit</i> button to confirm the import of ' + csv.length + ' rows of data. Optionally, override the value for a field to set a common value by clicking on the field below.'
            });

            for (var i = 0; i < fields.length; i++) {
                var field = editor.field(fields[i]);
                var mapped = data[field.name()];

                for (var j = 0; j < csv.length; j++) {
                    field.multiSet(j, csv[j][mapped]);
                }
            }
            //   a.ajax.reload();
        });
    }

    $(document).ready(function () {
        // Regular editor for the table
        editor = new $.fn.dataTable.Editor({
            ajax: {
                url: base_url + "admin/academicsettings/check_classes",
                data: ({[csrfName]: csrfHash}),
                type: "POST",
                dataSrc: '',
                dataType: 'JSON'
            },

            table: "#classes",
            fields: [

                {label: "Class Code:", name: "class_code"},
                {label: "Course Code:", name: "course_code"},
                {label: "Class Type:", name: "class_type"},
                {label: "Term:", name: "term"},
                {label: "Schedule Type:", name: "schedule_type"},
                {label: "Period:", name: "period_number"},
                {label: "Grade Level:", name: "grade_level"},
                {label: "Section:", name: "section"},
                {label: "Location:", name: "location"},
                {label: "Teacher ID:", name: "teacher_id_number"},
                {label: "State ID:", name: "state_uid"},
                {label: "Student Local ID:", name: "student_local_id"},


            ]

        });

        //lumalabas nman na kaso may error na 403
        //not allowed daw try ko sir.mag import felling ko sa
        var a = $('#classes').DataTable({
            dom: 'Bfrtip',
            ajax: {
                url: base_url + "admin/academicsettings/get_import_classes",
                data: ({[csrfName]: csrfHash}),
                type: "POST",
                dataSrc: '',
                dataType: 'JSON'
            },
            columns: [


                {data: 'class_code'},
                {data: 'course_code'},
                {data: 'class_type'},
                {data: 'term'},
                {data: 'schedule_type'},
                {data: 'period_number'},
                {data: 'grade_level'},
                {data: 'section'},
                {data: 'location'},
                {data: 'teacher_id_number'},

                {data: 'student_local_id'},


            ],
            select: true,
            buttons: [
                {extend: 'create', editor: editor},
                {extend: 'edit', editor: editor},
                {extend: 'remove', editor: editor},
                {
                    extend: 'csv',
                    text: 'Export CSV',
                    className: 'btn-space',
                    exportOptions: {
                        orthogonal: null
                    }
                },
                {
                    text: 'Import CSV',
                    action: function () {
                        uploadEditor.create({
                            title: 'CSV file import'
                        });
                    }
                },
                {
                    extend: 'selectAll',
                    className: 'btn-space'
                },
                'selectNone',
            ]
        });
        // Upload Editor - triggered from the import button. Used only for uploading a file to the browser
        var uploadEditor = new $.fn.dataTable.Editor({
            fields: [{
                label: 'CSV file:',
                name: 'csv',
                type: 'upload',
                ajax: function (files) {
                    // Ajax override of the upload so we can handle the file locally. Here we use Papa
                    // to parse the CSV.
                    Papa.parse(files[0], {
                        header: true,
                        skipEmptyLines: true,
                        complete: function (results) {
                            if (results.errors.length) {
                                console.log(results);
                                uploadEditor.field('csv').error('CSV parsing error: ' + results.errors[0].message);
                            } else {
                                uploadEditor.close();

                                selectColumns(editor, results.data, results.meta.fields);
                                console.log(results.data[0].Firstname);


                            }
                        }
                    });
                }
            }]
        });
        editor.on('postSubmit', function (event, data, action) {

            a.ajax.reload();
        });
        editor.on('create', function (e, json, data) {
            alert('New row added');
        });

    });
    //}
    // step 1, 2,3 ,4
    $(document).ready(function () {
        var base_url = "<?php echo base_url(); ?>";


        //if(checkstep=="#step-2"){
        $(document).on('click', '#update-system-setting', function () {
            data = {};
            data['SchoolName'] = $("#system-school-name").val();
            data['Email'] = $("#system-email").val();
            data['PhoneNumber'] = $("#system-phone-number").val();
            data['Address'] = $("#system-address").val();
            $.ajax({
                url: '<?php echo base_url(); ?>admin/generalsettings/update_system_setting',
                type: "POST",
                data: ({[csrfName]: csrfHash, data: data}),
                dataType: 'JSON',
            }).done(function (data) {


            })
        });
        $.ajax({
            url: '<?php echo base_url(); ?>admin/generalsettings/get_setting',
            type: "POST",
            data: ({[csrfName]: csrfHash}),
            dataType: 'JSON',
        }).done(function (data) {
            $("#system-school-name").val(data.SchoolName);
            $("#system-email").val(data.Email);
            $("#system-phone-number").val(data.PhoneNumber);
            $("#system-address").val(data.Address);


        });
        //}
        // if(checkstep=="#step-1"){
        $(document).on('click', '#update-school-settings', function () {
            data = {};
            data['name'] = $("#school-settings-name").val();
            data['start'] = $("#school-settings-start").val();
            data['end'] = $("#school-settings-end").val();
            data['name_id'] = $("#school-settings-name-id").val();
            console.log(data);
            $.ajax({
                url: '<?php echo base_url(); ?>admin/generalsettings/insert_schoolsettings',
                type: "POST",
                data: ({[csrfName]: csrfHash, data: data}),
                dataType: 'JSON',
            }).done(function (data) {

            })

            //console.log(getformvalues("#eeee"));
        });
        var school_setting = $('#school_setting').DataTable({
            ajax: {
                url: '<?php echo base_url(); ?>admin/admin/get_schoolsettings',
                dataType: 'json',
                type: 'POST',
                data: ({[csrfName]: csrfHash}),
                dataSrc: ""
            },
            columns: [
                //{ "data": "ModulePageID", "title":"ModulePageID"},

                {"data": "Start", "title": "Start"},
                {"data": "end", "title": "End"},
                {"data": "name", "title": "Name"},
                {"data": "name_id", "title": "Name ID"},
                // { "data": "PeriodAccess","title":"PeriodAccess" },

                // { "data": null,"title":"Action",

                //     render:function(data){
                //         return ` <button type="button" value="${data.PeriodID}"  class="delete_period btn btn-xs btn-danger ">Delete <button>`;
                //     }
                // }


            ],
            destroy: true,
        });

        // }
        //if(checkstep=="#step-3"){

        var access_datatable = $('#scheduletype_datatable').DataTable({
            ajax: {
                url: '<?php echo base_url(); ?>admin/generalsettings/get_scheduletype',
                dataType: 'json',
                type: 'POST',
                data: ({[csrfName]: csrfHash}),
                dataSrc: ""
            },
            columns: [
                //{ "data": "ModulePageID", "title":"ModulePageID"},
                {"data": "ScheduleType", "title": "ScheduleType"},
                // { "data": "PeriodAccess","title":"PeriodAccess" },
                {
                    "data": null, "title": "Color",

                    render: function (data) {
                        return ` <button type="button" class="btn ${data.backgroundColor}"> <button>`;
                    }
                },
                {
                    "data": null, "title": "Action",

                    render: function (data) {
                        return ` <button type="button" value="${data.ScheduleTypeID}" class="delete_schedule_type btn btn-xs btn-danger ">Delete <button>`;
                    }
                }


            ],
            destroy: true,
        });
        $(document).on('click', '#update-scheduletyp-setting', function () {
            title = $("#scheduletypetitle").val();
            color = $("#scheduletypecolor").val();
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
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: base_url + "admin/masterscheduler/managescheduletype",
                            type: "POST",
                            data: ({[csrfName]: csrfHash, type: 'add', data: title, color: color}),
                            dataType: 'JSON',
                        })
                            .done(function (data) {
                                if (data === true) {
                                    swal("Success!", "Successfully Added", "success");
                                    access_datatable.ajax.reload();
                                } else {
                                    swal("Failed", "Error Adding Please Contact your system Administrator", 'error');
                                }
                            })

                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });
        });
        $(document).on('click', '.delete_schedule_type', function () {
            id = $(this).val();
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
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: base_url + "admin/masterscheduler/managescheduletype",
                            type: "POST",
                            data: ({[csrfName]: csrfHash, type: "delete", data: id}),
                            dataType: 'JSON',
                        })
                            .done(function (data) {
                                if (data === true) {
                                    swal("Success!", "Successfully Deleted", "success");
                                    access_datatable.ajax.reload();
                                } else {
                                    swal("Failed", "Error Adding Please Contact your system Administrator", 'error');
                                }
                            })

                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });
        });
        //}
        //if(checkstep=="#step-4"){
        var period_datatable = $('#period_datatable').DataTable({
            ajax: {
                url: '<?php echo base_url(); ?>admin/masterscheduler/get_period',
                dataType: 'json',
                type: 'POST',
                data: ({[csrfName]: csrfHash}),
                dataSrc: ""
            },
            columns: [
                //{ "data": "ModulePageID", "title":"ModulePageID"},

                {"data": "Period", "title": "Period"},
                {"data": "PeriodStartTime", "title": "PeriodStartTime"},
                {"data": "PeriodEndTime", "title": "PeriodEndTime"},
                // { "data": "PeriodAccess","title":"PeriodAccess" },

                {
                    "data": null, "title": "Action",

                    render: function (data) {
                        return ` <button type="button" value="${data.PeriodID}"  class="delete_period btn btn-xs btn-danger ">Delete <button>`;
                    }
                }


            ],
            destroy: true,
        });
        $(document).on('click', '.delete_period', function () {
            id = $(this).val();
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
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: base_url + "admin/masterscheduler/delete_period",
                            type: "POST",
                            data: ({[csrfName]: csrfHash, data: id}),
                            dataType: 'JSON',
                        })
                            .done(function (data) {
                                if (data === true) {
                                    swal("Success!", "Successfully Deleted", "success");
                                    period_datatable.ajax.reload();
                                } else {
                                    swal("Failed", "Error Adding Please Contact your system Administrator", 'error');
                                }
                            })

                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });
        });
        $(document).on('click', '#update-period', function () {
            data = {};
            data['PeriodStartTime'] = $("#add-sliderStartTime").val();
            data['PeriodEndTime'] = $("#add-sliderEndTime").val();
            data['Period'] = $("#add-Period").val();
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
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: '<?php echo base_url(); ?>admin/masterscheduler/add__period',
                            type: "POST",
                            data: ({[csrfName]: csrfHash, data: data}),
                            dataType: 'JSON',
                        }).done(function (data) {
                            if (data === true) {
                                swal("Success!", "Successfully updated", "success");
                                period_datatable.ajax.reload();
                            } else {
                                swal("Failed", "Error Adding Please Contact your system Administrator", 'error');
                            }
                        })

                    } else {
                        swal("Cancelled", "Your  file is safe :)", "error");
                    }
                });

        })
        //}
    });
    //if(checkstep=="#step-7"){
    $(document).on('click', '#teacher-limit', function () {
        $limit = $('#addteacherlimit').val();
        swal({
            title: "Are you sure?",
            text: "",
            icon: "warning",
            buttons: true,
            dangerMode: false,
        })
            .then((isConfirm) => {
                if (isConfirm) {
                    console.log(isConfirm);
                    $.ajax({
                        url: base_url + "admin/masterscheduler/insert_teacherlimit ",
                        type: "POST",
                        data: ({[csrfName]: csrfHash, data: $limit}),
                        dataType: 'JSON',
                    })
                        .done(function (data) {
                            swal("Successfully Updated", {
                                icon: "success",
                            });
                        })
                } else {
                    console.log(isConfirm);
                    swal("Cancelled");
                }
            });

    });
    $(document).on('click', '#transition-time', function () {
        $tt = $('#addtransitiontime').val();
        swal({
            title: "Are you sure?",
            text: "",
            icon: "warning",
            buttons: true,
            dangerMode: false,
        })
            .then((isConfirm) => {
                if (isConfirm) {
                    console.log(isConfirm);
                    $.ajax({
                        url: base_url + "admin/masterscheduler/insert_transitiontime ",
                        type: "POST",
                        data: ({[csrfName]: csrfHash, data: $tt}),
                        dataType: 'JSON',
                    })
                        .done(function (data) {
                            swal("Successfully Updated", {
                                icon: "success",
                            });
                        })
                } else {
                    console.log(isConfirm);
                    swal("Cancelled");
                }
            });
    });

    editor = new $.fn.dataTable.Editor({
        dom: 'Bfrtip',
        "pageLength": 20,
        "colReorder": true,

        ajax: {
            url: '<?php echo base_url(); ?>admin/generalsettings/edit_hallpass',
            data: ({[csrfName]: csrfHash, type: 1}),
            type: "POST",
            dataSrc: "info",
            dataType: 'JSON'
        },
        idSrc: 'HallPassID',
        table: "#nhp",

        fields: [

            {label: "TimeAllocated:", name: "TimeAllocated"},


        ]

    });
    editor1 = new $.fn.dataTable.Editor({
        dom: 'Bfrtip',
        "pageLength": 20,
        "colReorder": true,

        ajax: {
            url: '<?php echo base_url(); ?>admin/generalsettings/edit_hallpass',
            data: ({[csrfName]: csrfHash, type: 2}),
            type: "POST",
            dataSrc: "info",
            dataType: 'JSON'
        },
        idSrc: 'HallPassID',
        table: "#ahp",

        fields: [

            {label: "TimeAllocated:", name: "TimeAllocated"},


        ]

    });
    $('#nhp').on('click', 'tbody td:not(:first-child)', function (e) {
        editor.inline(this);


    });
    $('#ahp').on('click', 'tbody td:not(:first-child)', function (e) {
        editor1.inline(this);


    });
    var nhp = $('#nhp').DataTable({
        "searching": false,
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,

        ajax: {
            url: '<?php echo base_url(); ?>admin/generalsettings/get_all_hallpass',
            dataType: 'json',
            type: 'POST',
            data: ({[csrfName]: csrfHash, type: 2}),
            dataSrc: "info"
        },
        idSrc: 'HallPassID',
        columns: [
            {
                "data": null,
                render: function (data, type, row) {
                    if (data.PassTypeID === "2") {
                        return `  <button value='${data.HallPassID}'  class="delete_row btn btn-xs btn-danger  " type="button" >
                                        <i class="fa fa-times" aria-hidden="true"></i> 
                                </button>`;
                    } else {
                        return null;
                    }
                }
            },

            {"data": "HallPass"},
            {"data": "TimeAllocated"},
            {
                "data": null,
                render: function (data, type, row) {
                    var is_checked = '';
                    if (data.is_active == 1) {
                        var is_checked = "checked=''";
                    }
                    return `
                            <input data-id="${data.HallPassID}" id="${data.HallPassID}" id="hp_${data.HallPassID}" type="checkbox" ${is_checked} 
                            class="tgl tgl-ios tgl_checkbox" data-size="small" />
                            `;
                }
            }

        ],
        select: true,
        buttons: [
            // { extend: 'create', editor: editor },
            {extend: 'edit', editor: editor},
            // { extend: 'remove', editor: editor },
            // {
            //     extend: 'csv',
            //     text: 'Export CSV',
            //     className: 'btn-space',
            //     exportOptions: {
            //         orthogonal: null
            //     }
            // },
            // {
            //     text: 'Import CSV',
            //     action: function () {
            //         uploadEditor.create( {
            //             title: 'CSV file import'
            //         } );
            //     }
            // },
            // {
            //     extend: 'selectAll',
            //     className: 'btn-space'
            // },
            // 'selectNone',
        ]
    });
    var ahp = $('#ahp').DataTable({
        "searching": false,
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,

        ajax: {
            url: '<?php echo base_url(); ?>admin/generalsettings/get_all_hallpass',
            dataType: 'json',
            type: 'POST',
            data: ({[csrfName]: csrfHash, type: 1}),
            dataSrc: "info"
        },
        columns: [
            {
                "data": null,
                render: function (data, type, row) {
                    if (data.PassTypeID === "1") {
                        return `  <button value='${data.HallPassID}'  class="delete_row btn btn-xs btn-danger  " type="button" >
                                        <i class="fa fa-times" aria-hidden="true"></i> 
                                </button>`;
                    } else {
                        return null;
                    }
                }
            },
            {"data": "HallPass"},
            {"data": "TimeAllocated"},
            {
                "data": null,
                render: function (data, type, row) {
                    var is_checked = '';
                    if (data.is_active == 1) {
                        var is_checked = "checked=''";
                    }
                    console.log(is_checked);
                    return `
                            <input data-id="${data.HallPassID}" id="${data.HallPassID}" id="hp_${data.HallPassID}" type="checkbox" ${is_checked} 
                            class="tgl tgl-ios tgl_checkbox" data-size="small" />
                            `;
                }
            }

        ]
    });
    $(document).ready(function () {
        editor.on('postSubmit', function (event, data, action) {

            nhp.ajax.reload();
        });
        editor1.on('postSubmit', function (event, data, action) {

            ahp.ajax.reload();
        });

    });
    $("body").on("change", ".tgl_checkbox", function () {
        console.log($(this).data('id'));

        $.post('<?=base_url("admin/generalsettings/change_status") ?>',
            {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                id: $(this).data('id'),
                status: $(this).is(':checked') == true ? 1 : 0,
                data: 'hallpass'


            },
            function (data) {


            });
    });
    $(document).ready(function () {
        const a = $.ajax({
            url: '<?php echo base_url(); ?>admin/generalsettings/get_master_list',
            type: "POST",
            data: ({[csrfName]: csrfHash}),
            dataType: 'JSON',
        }).done(function (data) {
            var result = data;
            masterlist = result.info;
            masterlist.forEach(function (element) {

                const master_name = element.master_name;

                const is_active = element.is_active;
                const id = element.id;
                const id_name = element.id_name;
                const icon = element.icon;
                const value = element.value;

                var is_checked = '';
                if (is_active == 1) {
                    var is_checked = 'checked=""';
                }
                $('[data-toggle="popover"]').popover();
                if (master_name == 'Period Grace Time') {
                    $("#gracetime").val(element.master_value);
                }
                if (id_name == 'hplt') {
                    $("#hp_lock_end").val(element.hp_lock_end);
                    $("#hp_lock_start").val(element.hp_lock_start);
                }
                if (id_name == 'nql') {
                    $("#nql-limit").val(element.value);
                    const aa = element.value.split(",");
                    console.log(aa);
                    $("#nql-limit").val(aa[0]);
                    $("#select-type").val(aa[1]);
                }
                if (id_name == 'slac') {
                    $("#time_in").val(element.master_value);

                }


                const mhl = `<div class="col-xl-4 col-sm-4">
                        <div class="card">
                        <div class="bootstrap-popover  pull-right"><a tabindex="0" class="btn  pull-right far fa-question-circle" role="button" data-toggle="popover" data-trigger="focus" title="Description" 
                                data-content="${element.description}"></a></div>
                        
                                
                                <div class="card-body" style='padding-top:5px;' >
                            
                    
                                
                                        <div class="media">
                                                <div class="media-body">
                                        
                                            

                                                        <h6 class="mt-0 mb- text-info"><i class="${icon} fa-2x" style='padding-right:20px;'></i>
                                                    
                                                        <button data-toggle="modal" data-target="#${id_name}" style='background-color:
                                                        inherit;;border:none;' value=${id} class="mt-0 mb- text-info">${master_name}</button>
                                                        <span class="pull-right" >  <input id="${id}" data-id='${id}' type="checkbox" ${is_checked}
                                                        class="js-switch js-switch-1 js-switch-md" data-size="small" style="margin:10px;"/></span></h6 >
                                            
                                                </div>    
                                        </div>
                            
                                </div>
                            </div>
                        </div>`;


                var master_element = $("<div />");

                master_element.html(mhl);
                $('[data-toggle="popover"]').popover();
                if (master_name != 'no') {
                    $("#master_list").append(mhl);
                }
            });


        });
        $('[data-toggle="popover"]').popover();

    });
    $("body").on("change", ".js-switch", function () {
        console.log($(this).data('id'));
        $.post('<?=base_url("admin/generalsettings/change_status") ?>',
            {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                id: $(this).data('id'),
                status: $(this).is(':checked') == true ? 1 : 0,
                data: 'master'
            },
            function (data) {

            });
    });
    $(document).on('click', '.delete_row', function () {
        id = $(this).val();
        console.log(id);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/generalsettings/delete_hallpass',
            type: "POST",
            data: ({[csrfName]: csrfHash, type: 'delete-row', data: id}),
            dataType: 'JSON',
        }).done(function (data) {
            ahp.ajax.reload();
            nhp.ajax.reload();
        })

    });

    $(document).on('click', '.add_hallpass', function () {
        id = $(this).val();
        const name = $("#hallpassname").val();
        const time = $("#hallpasstime").val();
        const type = $("#hallpasstype").val();
        console.log(name, time, type);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/generalsettings/add_hallpass',
            type: "POST",
            data: ({[csrfName]: csrfHash, name: name, time: time, type: type}),
            dataType: 'JSON',
        }).done(function (data) {
            ahp.ajax.reload();
            nhp.ajax.reload();
        })

    });
    $(document).on('click', '.btn-pgt', function () {
        const gracetime = $("#gracetime").val();
        console.log(gracetime);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/generalsettings/edit_pgt',
            type: "POST",
            data: ({[csrfName]: csrfHash, name: name, gracetime: gracetime}),
            dataType: 'JSON',
        }).done(function (data) {


        })

    });

    $(document).on('click', '.btn-hplt', function () {
        const start = $("#hp_lock_start").val();
        const end = $("#hp_lock_end").val();


        console.log(start);
        console.log(end);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/generalsettings/edit_hplt',
            type: "POST",
            data: ({[csrfName]: csrfHash, name: name, start: start, end: end}),
            dataType: 'JSON',
        }).done(function (data) {


        })

    });
    $(document).on('click', '.btn-2whp', function () {
        const a = $("#nql-limit").val();
        const b = $("#select-type").val();


        $.ajax({
            url: '<?php echo base_url(); ?>admin/generalsettings/edit_2whp',
            type: "POST",
            data: ({[csrfName]: csrfHash, limit: a, type: b}),
            dataType: 'JSON',
        }).done(function (data) {


        })

    });
    //}
</script>






