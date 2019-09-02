<div class="bootstrap-modal">

<!-- Modal for period grace period -->

<!-- Modal -->
<div class="modal" id="pgt">
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
                    <button type="button" class='btn-pgt' id='btn-pgt'  class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="bootstrap-modal">

<!-- Modal for -->

<!-- Modal -->
<div class="modal" id="Hall">
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
<div class="modal" id="nql">
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
                    <button type="button" class='btn-2whp' id='btn-2whp'  class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal" id="hplt">
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
                    <button type="button" class='btn-hplt' id='btn-hplt' class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal" id="slac">
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
                    <button type="button" class='btn-nql' id='btn-nql'  class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal" id="ano">
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
                    <button type="button" class='btn-nql' id='btn-nql'  class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal" id="oc">
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
                    <button type="button" class='btn-nql' id='btn-nql'  class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>