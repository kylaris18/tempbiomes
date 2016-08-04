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

            echo "". $_SESSION['p_fname'] . " " . $_SESSION['p_lname'] ."";

          ?>
        <a href="#">09054586521</a>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="PASuProfile.php">
          <i class="fa fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-eye"></i> <span>View Past Records</span> <!-- <small class="label pull-right bg-green">Hot</small> -->
          <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i>Field Diary</a></li>
          <li><a href="FocusGroupDiscussion.php"><i class="fa fa-circle-o"></i>Focus Group Discussion</a></li>
          <li><a href="TransectWalk.php"><i class="fa fa-circle-o"></i>Transect</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Photo Documentation</a></li>
        </ul>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-paw"></i>
          <span>Add Species</span>
        </a>
      </li>
      <li class="treeview">
        <a href="FieldDiary.php">
          <i class="fa fa-book"></i>
          <span>Field Diary</span>
        </a>
      </li>
      <li class="treeview">
        <a href="FocusGroupDiscussion.php">
          <i class="fa fa-users"></i> 
          <span>Focus Group Discussion</span>
        </a>
      </li>
      <li class="treeview">
        <a href="TransectWalk.php">
          <i class="fa fa-map-signs"></i> 
          <span>Transect</span>
        </a>
      <li> 
        <a href="PhotoDocumentation.php">
          <i class="fa fa-photo"></i> 
          <span>Photo Documentation</span>
        </a>
      </li>
      <li>
       <a href="PASuAnalysis.php">
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