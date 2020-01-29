<link rel="stylesheet" href="<?= base_url() ?>public/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
<link href="<?= base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?= base_url() ?>public/css/style.css" rel="stylesheet">
<script src="<?= base_url() ?>public/assets/plugins/common/common.min.js"></script>
<script src="<?= base_url() ?>public/js/custom.min.js"></script>
<script src="<?= base_url() ?>public/js/settings.js"></script>
<script src="<?= base_url() ?>public/js/gleek.js"></script>
<script src="<?= base_url() ?>public/js/styleSwitcher.js"></script>


<div class="row">
    <div class="card col-md-12">
        <div class="box">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body my-form-body">
                <?php if (isset($msg) || validation_errors() !== ''): ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                        <?= validation_errors(); ?>
                        <?= isset($msg) ? $msg : ''; ?>
                    </div>
                <?php endif; ?>

                <?php echo form_open(base_url('admin/admin/add'), 'class="form-horizontal"'); ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">User Name</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="firstname" class="col-sm-2 control-label">First Name</label>


                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">Last Name</label>


                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>


                            <input type="email" name="email" class="form-control" id="email" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>


                            <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>


                            <input type="password" name="password" class="form-control" id="password" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row" style="align-items: center;">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="role" class="col-sm-3 control-label">Select Admin Role*</label>
                            <select name="role" class="form-control">
                                <option value="">Select Role</option>
                                <?php foreach ($admin_roles as $role): ?>
                                    <option value="<?= $role['admin_role_id']; ?>"><?= $role['admin_role_title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                                <input type="submit" name="submit" value="Add New Admin" class="btn btn-info  text-left">
                        </div>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>


</div>