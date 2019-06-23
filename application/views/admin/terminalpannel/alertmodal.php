

<div class="modal fade" tabindex="-1" role="dialog" id="terminal_alert_modal"  >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid" style="padding:20px;">
                    <div class="row">
                        <h1>Present: <?php if($this->username=='123'){echo "<span class='text-success'>On Time</span>";}else{echo "<span class='text-danger'>Late</span>";}?></h1>
                        <?php
                            if($this->username=='123'){
                                echo '<h3>FullName:JoseManalo</h3>';

                            }
                            if($this->username=='1234'){
                                echo '<h3>FullName:NataloJose</h3>';
                                
                            }
                        ?>
                        <h2>ID: <span><?php echo $this->username;?></span></h2>
                        <h2 >TimeIn: <span id="TimeIn"></span> </h2>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.modalbpdy -->
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
           

        