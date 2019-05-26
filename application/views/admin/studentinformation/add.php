<div class="modal modal-default fade" id="student-modal-primary">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add student</h4>
              </div>
              <div class="modal-body">
                <form role="form" id="add-student-form-id">
                    <div class="form-group">
                        <label >IDNumber</label>
                        <input type="email" class="form-control" name=student[IDNumber]  placeholder="IDNumber">
                    </div>
                    <div class="form-group">
                        <label >FirstName</label>
                        <input type="text" class="form-control" name=student[FirstName]  placeholder="FirstName">
                    </div>
                    <div class="form-group">
                        <label >LastName</label>
                        <input type="text" class="form-control"  name=student[LastName] placeholder="LastName">
                    </div>
                    <div class="form-group">
                        <label >Gender</label>
                        <select class="form-control select2"  name=student[Gender] style="width: 100%;">
                            <option value=""></option>
                            <option value="1">Female</option>
                            <option value="0">Male</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >BirthDate</label>
                        <input type="date" class="form-control" name=student[BirthDate] placeholder="BirthDate">
                    </div>
                    <div class="form-group">
                        <label >Contact Number</label>
                        <input type="text" class="form-control"name=student[ContactNumber]  placeholder="Contact Number">
                    </div>
                    <!-- /.box-body -->
                    <div class="form-group">
                        <label>RaceID</label>
                        <select class="form-control select2" name=student[RaceID] id="add-RaceID" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>SectionID</label>
                        <select class="form-control select2" name=student[SectionID] id="add-Section" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>GradeLevel</label>
                        <select class="form-control select2" name=student[GradeLevelID] id="add-GradeLevel" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Distinction</label>
                        <select class="form-control select2" name=student[DistinctionID] id="add-Distinction" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control" name=student[Password]  placeholder="Password">
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default " id="addstudent">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <script src="<?= base_url() ?>public/plugins/select2/select2.full.min.js"></script>
        <script>
             $(".select2").select2();
        </script>
   