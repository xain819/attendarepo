<script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
<div class="modal modal-default fade" id="edit-student-modal-primary">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add student</h4>
              </div>
              <div class="modal-body">
                <form role="form" id="edit-student-form-id">
                    <div class="form-group">
                        <label >IDNumber</label>
                        <input type="email" class="form-control" id="edit-IDNumber" name=editstudent[IDNumber]  placeholder="IDNumber">
                    </div>
                    <div class="form-group">
                        <label >FirstName</label>
                        <input type="text" class="form-control" id="edit-FirstName" name=editstudent[FirstName]  placeholder="FirstName">
                    </div>
                    <div class="form-group">
                        <label >LastName</label>
                        <input type="text" class="form-control" id='edit-LastName'  name=editstudent[LastName] placeholder="LastName">
                    </div>
                    <div class="form-group">
                        <label >Gender</label>
                        <select class="form-control select2" id="edit-Gender"  name=editstudent[Gender] style="width: 100%;">
                            <option value=""></option>
                            <option value="1">Female</option>
                            <option value="0">Male</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >BirthDate</label>
                        <input type="date" class="form-control" id="edit-BirthDate" name=editstudent[BirthDate] placeholder="BirthDate">
                    </div>
                    <div class="form-group">
                        <label >Contact Number</label>
                        <input type="text" class="form-control" id="edit-ContactNumber" name=editstudent[ContactNumber]  placeholder="Contact Number">
                    </div>
                    <!-- /.box-body -->
                    <div class="form-group">
                        <label>RaceID</label>
                        <select class="form-control select2" id="edit-RaceID" name=editstudent[RaceID]  style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>SectionID</label>
                        <select class="form-control select2" id="edit-SectionID" name=editstudent[SectionID]  style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>GradeLevel</label>
                        <select class="form-control select2" id="edit-GradeLevelID" name=editstudent[GradeLevelID]  style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Distinction</label>
                        <select class="form-control select2" id="edit-DistinctionID" name=editstudent[DistinctionID]  style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control" id="edit-Password" name=editstudent[Password]  placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label >Enabled</label>
                        <select class="form-control select2" id="edit-Enabled"  name=editstudent[Enabled] style="width: 100%;">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >StudentID</label>
                        <input type="text" readonly class="form-control" id="edit-StudentID" name=editstudent[StudentID]  placeholder="StudentID">
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default " id="editstudent">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <script src="<?= base_url() ?>public/plugins/select2/select2.full.min.js"></script>
        <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
        <script>
             $(".select2").select2();
        </script>
   