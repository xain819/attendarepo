<link rel="stylesheet" href="<?=base_url() ?>public/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
<link href="<?=base_url() ?>public/assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
<link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>

  <div class="row">
    <div class="col-md-12 card ">
      <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/profile/change_pwd'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="password" class="col-sm-3 control-label">New Password</label>

                <div class="col-sm-8">
                  <input type="text" name="password" class="form-control" id="password" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="confirm_pwd" class="col-sm-3 control-label">Confirm Password</label>

                <div class="col-sm-8">
                  <input type="text" name="confirm_pwd" class="form-control" id="confirm_pwd" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Change Password" class="btn btn-info pull-left">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 


 <script>
    $("#admin").addClass('active');
  </script>