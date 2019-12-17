<div class="card">
                            <div class="card-body monthly-weather-report">
                                <div class="d-sm-flex d-block justify-content-between mb-4">
                                    <h4 class="card-title"><?php if($this->SchoolName){echo $this->SchoolName;}else{ echo "Not Yet Added in the database";}?></h4>
                                   
                                   
                                </div>
                                <div class="row weather-report-container justify-content-between">
                                    <div class="col-xl-4 col-md-5">
                                        <div class="media-body">
                                            <h4 >Email</h4>
                                            <p>
                                                <?php  
                                                    if($this->Email){
                                                        echo $this->Email;
                                                    }else{
                                                        echo 'Not Yet Added in the database';
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="media-body">
                                            <h4 >Address</h4>
                                            <p>
                                            
                                            <?php  
                                
                                                if($this->Address){
                                                    echo $this->Address;
                                                }else{
                                                    echo 'Not Yet Added in the database';
                                                }
                                            
                                            ?>
                                            </p>
                                        </div>
                                        <div class="media-body">
                                            <h4 >PhoneNumber</h4>
                                            <p><?php  
                                                
                                                if($this->PhoneNumber){
                                                    echo $this->PhoneNumber;
                                                }else{
                                                    echo 'Not Yet Added in the database';
                                                }
                                            
                                            ?></p>
                                        </div>
                                        <div class="media-body">
                                            <h4 >Web Site</h4>
                                            <p> <?php 
                                            if($this->WebSite){
                                                echo $this->WebSite;
                                                }else{
                                                    echo 'Not Yet Added in the database';
                                                }
                                            ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row monthly-weather-report-inner">
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-info"><i class="fas fa-chalkboard-teacher"></i></span>
                                                    <div class="media-body">
                                                        <h4 id='period'>No Period</h4>
                                                        <p>Period</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-info"><i class="fas fa-sort-amount-up"></i></span>
                                                    <div class="media-body">
                                                        <h4 id='count'>None</h4>
                                                        <p>Day</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-info"><i class="fas fa-calendar-week"></i></span>
                                                    <div class="media-body">
                                                        <h4 id='marking'></h4>
                                                        <p>Marking Period</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-info"><i class="fa fa-clock-o"></i></span>
                                                 
                                                    <div  class="media-body">
                                                        <h4 id='datetime'></h4>
                                                        <p>Time</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-info"><i class="fas fa-calendar-day"></i></span>
                                                    <div class="media-body">
                                                    <h4 id='day'>Tuesday</h4>
                                                      <p>Day of Week</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="media pt-3 align-items-center pb-3">
                                                    <span class="mr-3 text-info"><i class="far fa-sun"></i></span>
                                                    <div class="media-body">
                                                        <h4 id='datenow'></h4>
                                                        <p>Date</p>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>