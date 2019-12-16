<div class="modal modal-default" id="edit-teacher-modal-primary">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Teacher</h4>
              </div>
              <div class="modal-body">
                <form role="form" id="edit-teacher-form-id">
                    <div class="form-group">
                        <label >IDNumber</label>
                        <input type="email" class="form-control"id="edit-IDNumber"  name=teacher[IDNumber]  placeholder="IDNumber">
                    </div>
                    <div class="form-group">
                        <label >FirstName</label>
                        <input type="text" class="form-control"id="edit-FirstName"  name=teacher[FirstName]  placeholder="FirstName">
                    </div>
                    <div class="form-group">
                        <label >LastName</label>
                        <input type="text" class="form-control"id="edit-LastName"  name=teacher[LastName] placeholder="LastName">
                    </div>
                    <div class="form-group">
                        <label >Gender</label>
                        <select class="form-control select2"id="edit-Gender"  name=teacher[Gender] style="width: 100%;">
                            <option value=""></option>
                            <option value="1">Female</option>
                            <option value="0">Male</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >BirthDate</label>
                        <input type="date" class="form-control"id="edit-BirthDate" name=teacher[BirthDate] placeholder="BirthDate">
                    </div>
                    <div class="form-group">
                        <label >Contact Number</label>
                        <input type="text" class="form-control"id="edit-ContactNumber"name=teacher[ContactNumber]  placeholder="Contact Number">
                    </div>
                    <!-- /.box-body -->
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control select2"id="edit-DepartmentID" name=teacher[DepartmentID] style="width: 100%;">
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control"id="edit-Password" name=teacher[Password]  placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label >TeacherID</label>
                        <input type="email"  readonly class="form-control" id="edit-TeacherID"  name=teacher[TeacherID]  placeholder="TeacherID">
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default " id="editteacher">Save changes</button>
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
   