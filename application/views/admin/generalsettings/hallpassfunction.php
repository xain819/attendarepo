<div class="modal fade  bd-example-modal-lg " id="ahpf" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content"  style="background-color:#f3f6f9;" >
                <div class="modal-header">
                    <h5 class="modal-title">Hallpass Settings</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                
                <div class="modal-body " >

                
                <div class='row' id="hallpass_list_item">
                <div class="col-xl-6">
        <div class="card transparent-card ">
            <div class="card-header pb-0">
                <h5 class="card-title mb-3">Administrative Hall Pass</h5>
            
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="table_ahp" class="table trading-activity table-padded table-responsive-fix">
                        <thead>
                            <tr>
                            
                                <th>AHP Type</th>
                                <th>Time Allocated</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                              
                          
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
                    <table id='table_nhp' class="table trading-activity table-padded table-responsive-fix">
                        <thead>
                            <tr>
                                <th>NHP Type</th>
                                <th>Time Allocated</th>
                                <th>Status </th>
                            </tr>
                        </thead>
                        <tbody class='hallpass'>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

 
</div>



                </div>
                <div class="modal-footer">

                <div class="bootstrap-modal">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Add Hall Pass
                                </button>
                            <!-- Modal -->
                            <div class="modal fade"   id="basicModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Hall Pass</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                        <form role="form" id="add_hallpass_form_id">
                                            <div class="form-group">
                                        
                                                <input type="text" id='hallpassname' name="hallpassname" class="form-control" placeholder="hall pass name" required>
                                            </div>
                                            <div class="form-group">
                                            
                                                <input type="text" id='hallpasstime' name="hallpasstime" class="form-control" placeholder="minutes" required>
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
                                            
                                            <button type="button" class='add_hallpass' id='add_hallpass' class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>







