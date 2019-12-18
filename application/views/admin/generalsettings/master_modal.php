<div class="bootstrap-modal">

<!-- Modal for period grace period -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg " id="pgt">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Enter Period Time</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form role="form" id="frm_time">
                    <div class="form-group">
                        <input type="text" id='gracetime' name="gracetime" class="form-control" value='5' placeholder="Minutes" required>
                    </div>
                </form>



            </div>
            <div class="modal-footer">
                    <button type="button"  id='btn-pgt'  class=" btn-pgt btn btn-sm btn-primary">Save changes</button>
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
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form role="form" id="frm_time">
                    <div class="form-group">
                        <input type="text" id='gracetime' name="gracetime" class="form-control" placeholder="Minutes" required>
                    </div>
                </form>



            </div>
            <div class="modal-footer">
                    <button type="button" class='btn-pgt' id='btn-pgt'  class="btn btn-primary">Save changes</button>
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
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form role="form" id="frm_2whp">
                    <div class="form-group">
                        <input type="text" id='nql-limit' name="nql" class="form-control" placeholder="Number" required>
                    </div>
                    <select class="select2-width-50" id='select-type' style="width: 100%">
                  
                             <option value="Day">Day </option>
                    <option value="Week">Week</option>
                    <option value="Marking Period">Marking Period</option>
                    <option value="Semester">Semester</option>
                      </select>
                </form>


            </div>
            <div class="modal-footer">
                    <button type="button"  id='btn-2whp'  class=" btn-2whp btn btn-sm btn-primary">Save changes</button>
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
                        <input type="text" id='hp_lock_start' name="hallpasslimit" class="form-control" placeholder="Before Period:Minutes" required>
                    </div>
                    <div class="form-group">
                    <label for="hp_lock_end">Before End</label>
                        <input type="text" id='hp_lock_end' name="hallpasslimit" class="form-control" placeholder="After Period:Minutes" required>
                    </div>
                </form>



            </div>
            <div class="modal-footer">
                    <button type="button"  id='btn-hplt' class=" btn-hplt btn btn-sm btn-primary">Save changes</button>
            </div>
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
                        <input type="text" id='time_in' name="hallpasslimit" class="form-control" placeholder="Before Period:Minutes" required>
                 
           
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
                    <button type="button"  id='btn-nql'  class=" btn-nql btn btn-primary">Save changes</button>
            </div>
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
                        <input type="text" id='AddHP' name="AddHP" class="form-control" placeholder="Enter Additional Limit">
                    </div>
                 
                </form>



            </div>
            <div class="modal-footer">
                    <button type="button"  id='btn-nql'  class=" btn-nql btn btn-primary">Save changes</button>
            </div>
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
                        <input type="text" id='addteacherlimit' name="addteacherlimit" class="form-control" placeholder="Enter Teacher Limit">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                    <button type="button " class='btn-nql btn btn-sm btn-primary' id='teacher-limit'  class="btn btn-primary">Save changes</button>
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
                        <input type="text" id='addtransitiontime' name="addtransitiontime" class="form-control" placeholder="Enter Transition Time">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                    <button type="button " class='btn-nql btn btn-sm btn-primary' id='transition-time'  class="btn btn-primary">Save changes</button>
            </div>
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
                        <input type="text" id='AddHP' name="AddHP" class="form-control" placeholder="Enter Additional Limit">
                    </div>
                 
                </form>



            </div>
            <div class="modal-footer">
                    <button type="button" class='btn-nql' id='btn-nql'  class="btn btn-sm btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
