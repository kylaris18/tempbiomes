<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../function/profile-picture.php" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>
          <?php 

            echo "". $_SESSION['fname'] . " " . $_SESSION['lname'] ."";

          ?>
        </p>
        <a href="#">09054586521</a>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="admin_profile.php">
        <i class="fa fa-user"></i>
        <span>Profile</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-check"></i> 
          <span>Records for Approval</span> 
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="admin_focus_group_discussion.php"><i class="fa fa-circle-o"></i> Focus Group Discussion</a></li>
          <li><a href="admin_field_diary.php"><i class="fa fa-circle-o"></i> Field Diary</a></li>
          <li><a href="admin_photo_documentation.php"><i class="fa fa-circle-o"></i> Photo Documentation</a></li>
          <li><a href="admin_transect.php"><i class="fa fa-circle-o"></i> Transect</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="admin_approved_reports.php">
          <i class="fa fa-check-square-o"></i>
          <span>Recently Approved Reports</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i> 
          <span>View All Records</span>
        </a>
      </li>
      <li>
        <a href="admin_analysis.php">
          <i class="fa fa-area-chart"></i> 
          <span>Analysis of Reports</span>
        </a>
      </li>
      <li class="header">GUIDES</li>
      <li>
        <a href="#">
          <i class="fa fa-question-circle text-red"></i> 
          <span>Help</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>