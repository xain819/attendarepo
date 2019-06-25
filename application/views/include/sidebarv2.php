   <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">

                
              

                    
                    <li class="nav-label">Administration</li>

                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/dashboard'); ?>"><i class="mdi mdi-page-layout-body"></i><span class="nav-text">Dashboard</span><span class="badge badge-success nav-badge"></span></a>
                     
                    </li>

                    <?php if($this->rbac->check_module_permission('admin')): ?>  
                    <li class="mega-menu mega-menu-lg">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i><span class="nav-text">Administration</span><span class="badge bg-dpink text-white nav-badge"></span>
                        </a>
                        <ul aria-expanded="false">

                            <li id="admin"><a href="<?= base_url('admin/admin'); ?>">Admin List</a></li>
                            <li id=""><a href="<?= base_url('admin/profile'); ?>">Admin Profile</a></li>
                            <li id=""><a href="<?= base_url('admin/profile/change_pwd'); ?>">Change Password</a></li>
                        </ul>
                    </li>
                    
                    <?php endif; ?>

        
                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/generalsettings'); ?>">
                        <i class="mdi mdi-page-layout-body"></i><span class="nav-text">General Setting</span>
                       </a>

                    <li class="mega-menu mega-menu-lg">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i><span class="nav-text">System Controller</span><span class="badge bg-dpink text-white nav-badge"></span>
                        </a>
                        <ul aria-expanded="false">

                            <li id="admin"><a href="<?= base_url('admin/controlpannel'); ?>">Control Pannel</a></li>
        
                            <li id=""><a href="<?= base_url('admin/controlpannel/manage_terminal'); ?>">Manage Terminal</a></li>
                        </ul>
                    </li>

                  

                   



                    <li class="nav-label">Master Scheduler</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-email-outline"></i> <span class="nav-text">Manage Schedule</span><span class="badge bg-lgreen text-white nav-badge"></span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/masterscheduler'); ?>">Manage Calendar</a>
                            </li>
                            <li><a href="<?= base_url('admin/masterscheduler/access'); ?>">Manage Schedule Type</a>
                            </li>
                            <li><a href="<?= base_url('admin/masterscheduler/period_access'); ?>">Manage Period</a>
                            </li>
                            <li><a href="<?= base_url('admin/masterscheduler/students_schedule'); ?>">Student Class Schedule</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-email-outline"></i> <span class="nav-text">Academic Settings</span><span class="badge bg-lgreen text-white nav-badge"></span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/academicsettings/section'); ?>">Manage Section</a>
                            </li>
                            <li><a href="<?= base_url('admin/academicsettings/courses'); ?>">Manage Classes</a>
                            </li>
                            <li><a href="<?= base_url('admin/academicsettings/subjects'); ?>">Manage Courses</a>
                            </li>
                            <li><a href="<?= base_url('admin/academicsettings/department'); ?>">Manage Departments</a>
                            </li>
                            <li><a href="<?= base_url('admin/academicsettings/race'); ?>">Manage Race</a>
                            </li>
                        </ul>
                    </li>
                  

                    <li class="nav-label">Teacher Dashboard</li>
                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/teacherinformation'); ?>" >
                        <i class="mdi mdi-page-layout-body"></i><span class="nav-text">Teacher Information</span>
                        </a>
                      
                    </li>
                 
                    <li class="mega-menu mega-menu-sm"><a class="has-arrow" href="<?= base_url('admin/studentinformation'); ?>" >
                        <i class="mdi mdi-page-layout-body"></i><span class="nav-text">Student Information</span>
                        </a>
                      
                    </li>
                 
                   
                    

                </ul>
            </div>
        </div>