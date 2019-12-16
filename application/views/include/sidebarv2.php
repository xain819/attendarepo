   <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">

                
              

                <?php if($this->rbac->check_module_permission('admin')): ?>  

                
                    <li class="nav-label">Administration</li>

                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/dashboard'); ?>"><i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span><span class="badge badge-success nav-badge"></span></a>
                     
                    </li>

                    <li class="mega-menu mega-menu-lg">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-users-cog"></i><span class="nav-text">Administration</span><span class="badge bg-dpink text-white nav-badge"></span>
                        </a>
                        <ul aria-expanded="false">

                            <li id="admin"><a href="<?= base_url('admin/admin'); ?>">Admin List</a></li>
                            <li id="admin"><a href="<?= base_url('admin/admin/add'); ?>">Add Admin</a></li>
           
                            <li id=""><a href="<?= base_url('admin/profile'); ?>">Admin Profile</a></li>
                            <li id=""><a href="<?= base_url('admin/profile/change_pwd'); ?>">Change Password</a></li>
                        </ul>
                    </li>
                    
                    <?php endif; ?>

        
        
                    <?php if($this->rbac->check_module_permission('admin')): ?>  

                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/generalsettings'); ?>">
                    <i class="fas fa-cog"></i><span class="nav-text">General Setting</span>
                       </a>

                    <li class="mega-menu mega-menu-lg">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-toolbox"></i><span class="nav-text">System Controller</span><span class="badge bg-dpink text-white nav-badge"></span>
                        </a>
                        <ul aria-expanded="false">

                            <li id="admin"><a href="<?= base_url('admin/controlpannel'); ?>">Control Pannel</a></li>
        
                            <li id=""><a href="<?= base_url('admin/controlpannel/manage_terminal'); ?>">Manage Terminal</a></li>
                        </ul>
                    </li>

                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/studentinformation'); ?>" >
                    <i class="fas fa-user-cog"></i><span class="nav-text">Student Information</span>
                        </a>
                      
                    </li>
                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation'); ?>" >
                    <i class="fas fa-chalkboard-teacher"></i><span class="nav-text">Teacher Information</span>
                        </a>
                      
                    </li>
                    <?php endif; ?>
                  

                   

                    <?php if($this->rbac->check_module_permission('admin')): ?>  

                    <li class="nav-label">Master Scheduler</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-calendar-alt"></i> <span class="nav-text">Manage Schedule</span><span class="badge bg-lgreen text-white nav-badge"></span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/masterscheduler'); ?>">Manage Calendar</a>
                            </li>
                            <!-- <li><a href="<?= base_url('admin/masterscheduler/access'); ?>">Manage Schedule Type</a>
                            </li> -->
                            <li><a href="<?= base_url('admin/masterscheduler/period_access'); ?>">Manage Period</a>
                            </li>
                            <!-- <li><a href="<?= base_url('admin/masterscheduler/students_schedule'); ?>">Student Class Schedule</a>
                            </li> -->
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-school"></i><span class="nav-text">Academic Settings</span><span class="badge bg-lgreen text-white nav-badge"></span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/academicsettings/section'); ?>">Section</a>
                            </li>
                            <li><a href="<?= base_url('admin/academicsettings/classes'); ?>">Classes</a>
                            </li>
                            <li><a href="<?= base_url('admin/academicsettings/courses'); ?>">Courses</a>
                            </li>
                            <li><a href="<?= base_url('admin/academicsettings/department'); ?>">Departments</a>
                            </li>
                            <li><a href="<?= base_url('admin/academicsettings/race'); ?>">Race</a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                 
                  
                    <?php if($this->rbac->check_module_permission('teacherinformation')): ?>  
                    <?php if($this->rbac->disable_teacher_dashboard()): ?>  
                    <li class="nav-label">Teacher Dashboard</li>

                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation/attendance_log'); ?>" >
                    <i class="fas fa-clipboard-list"></i><span class="nav-text">Attendance Log</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation/daily_pass_log'); ?>" >
                    <i class="fas fa-sign-out-alt"></i><span class="nav-text">Daily Pass Log</span>
                        </a>
                      
                    </li>
                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation/student_roster'); ?>" >
                    <i class="fas fa-users"></i><span class="nav-text">Student Rosters</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation/settings'); ?>" >
                    <i class="fas fa-chalkboard-teacher"></i><span class="nav-text">Teacher Setttings</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation/reports'); ?>" >
                    <i class="fas fa-scroll"></i><span class="nav-text">Reports</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation/help'); ?>" >
                    <i class="fas fa-question-circle"></i><span class="nav-text">Help and FAQ Setttings</span>
                        </a>
                    </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if($this->rbac->check_module_permission('secretary')): ?>  

                <li class="nav-label">Secretary Dashboard</li>


              
                <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/secretary'); ?>" >
                    <i class="fas fa-sign-out-alt"></i><span class="nav-text">Daily Pass Log</span>
                        </a>
                      
                    </li>

                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation/reports'); ?>" >
                    <i class="fas fa-scroll"></i><span class="nav-text">Reports</span>
                        </a>
                    </li>

                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation/help'); ?>" >
                    <i class="fas fa-question-circle"></i><span class="nav-text">Help and FAQ </span>
                        </a>
                    </li>





                <?php endif; ?>
                <?php if($this->rbac->check_module_permission('admin')): ?>  

                <li class="nav-label">System Settings</li>


              
                <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/academicsettings/schoolsettings'); ?>" >
                <i class="fas fa-cog"></i><span class="nav-text">School Settings</span>
                        </a>
                       
                    </li>






                <?php endif; ?>


            
                   
                    

                </ul>
            </div>
        </div>