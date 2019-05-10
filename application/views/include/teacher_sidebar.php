<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);  
?>  

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= ucwords($this->session->userdata('name')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li id="dashboard" class="treeview">
          <a href="<?= base_url('teacher/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="dashboard"><a href="<?= base_url('teacher/dashboard'); ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
      </ul>

      <?php if($this->rbac->check_module_permission('users')): ?>
      <ul class="sidebar-menu">
        <li id="users" class="treeview">
            <a href="#">
              <i class="fa fa-user"></i> <span>Attendance Logs</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id=""><a href="<?= base_url('teacher/users'); ?>"><i class="fa fa-circle-o"></i>Users List</a></li>
            </ul>
          </li>
      </ul>
      <?php endif; ?>

      <?php if($this->rbac->check_module_permission('joins')): ?>
      <ul class="sidebar-menu">
        <li id="joins" class="treeview">
            <a href="#">
              <i class="fa fa-i-cursor"></i> <span>Daily Pass Logs</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
             
              <li class=""><a href="<?= base_url('teacher/joins/simple'); ?>"><i class="fa fa-circle-o"></i> Simple Join</a></li>
            </ul>
          </li>
      </ul>
      <?php endif; ?>


      

  

      <?php if($this->rbac->check_module_permission('joins')): ?>
      <ul class="sidebar-menu">
        <li id="joins" class="treeview">
            <a href="#">
              <i class="fa fa-i-cursor"></i> <span>Student Rosters</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
             
              <li class=""><a href="<?= base_url('teacher/joins/simple'); ?>"><i class="fa fa-circle-o"></i> Simple Join</a></li>
            </ul>
          </li>
      </ul>
      <?php endif; ?>

   


  
   
      <?php if($this->rbac->check_module_permission('admin')): ?>  
       <ul class="sidebar-menu">
        <li id="admin" class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Teacher Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="admin"><a href="<?= base_url('teacher/admin'); ?>"><i class="fa fa-circle-o"></i> Admin List</a></li>
            <li id=""><a href="<?= base_url('teacher/profile'); ?>"><i class="fa fa-circle-o"></i>Admin Profile</a></li>
            <li id=""><a href="<?= base_url('teacher/profile'); ?>"><i class="fa fa-circle-o"></i>Admin Profile</a></li>
            <li id=""><a href="<?= base_url('teacher/profile/change_pwd'); ?>"><i class="fa fa-circle-o"></i>Change Password</a></li>
          </ul>
        </li>
      </ul>
      <?php endif; ?>
        
      
     
  


      <ul class="sidebar-menu">
        <li id="charts" class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="chartjs"><a href="<?= base_url('teacher/charts/chartjs'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
              <li id="morris"><a href="<?= base_url('teacher/charts/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
              <li id="flot"><a href="<?= base_url('teacher/charts/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
              <li id="inline"><a href="<?= base_url('teacher/charts/inline'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
      </ul>

      <?php if($this->rbac->check_module_permission('joins')): ?>
      <ul class="sidebar-menu">
        <li id="joins" class="treeview">
            <a href="#">
              <i class="fa fa-i-cursor"></i> <span>Frequently Ask Questions</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
             
              <li class=""><a href="<?= base_url('teacher/joins/simple'); ?>"><i class="fa fa-circle-o"></i> Simple Join</a></li>
            </ul>
          </li>
      </ul>
      <?php endif; ?>





      
    
     
      
      
     
        
  


    </section>
    <!-- /.sidebar -->
  </aside>

  
<script>
  $("#<?= $cur_tab ?>").addClass('active');
</script>
