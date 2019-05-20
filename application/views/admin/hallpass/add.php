<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body with-border">
        <div class="col-md-6">
          <h4><i class="fa fa-plus"></i> &nbsp; Add New Hall Pass</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('admin/hallpass/add'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Hall Pass List</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/hallpass/add'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
              
                <label for="HallPass" class="col-sm-2 control-label">Hall Pass</label>

                <div class="col-sm-9">
                  <input type="text" name="HallPass" class="form-control" id="HallPass" placeholder="">
                </div>
              </div>

              <div class="form-group col-lg-12">
                <label for="PassTypeID" class="col-sm-2 control-label">Select Type*</label>
                <div class="col-sm-9">
                  <select name="PassTypeID" class="form-control">
                    <option value="">Select Type</option>
                    <?php foreach($PassType as $role): ?>
                      <option value="<?= $role['PassTypeID']; ?>"><?= $role['PassType']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="TimeAllocated" class="col-sm-2 control-label">TimeAllocated In Minutes</label>

                <div class="col-sm-9">
                  <input type="number" name="TimeAllocated" class="form-control" id="TimeAllocated" placeholder="5" value="5">
                </div>
              </div>
              
       
      
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Add New Hall Pass" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 