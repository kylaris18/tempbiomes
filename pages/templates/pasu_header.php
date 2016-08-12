<header class="main-header">
  <!-- Logo -->
  <a href="../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>B</b>MS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Pasu</b>BIOMES</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Notifications: style can be found in dropdown.less -->
        <!-- Tasks: style can be found in dropdown.less -->
        <li>
          <a>
            <!-- <i class="fa fa-warning"></i>
            <span class="label label-danger">9</span> -->
            <span class="logo-mini">
              <?php
                echo "". $qfinal . " Quarter of " . $_SESSION['year'] ."";
              ?>
            </span>
          </a>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../function/profile-picture.php" class="user-image" alt="User Image">
                  <span class="hidden-xs">
                    <?php 

                      echo "". $_SESSION['p_fname'] . " " . $_SESSION['p_lname'] ."";

                    ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../function/profile-picture.php" class="img-circle" alt="User Image">
                    <p>
                      <?php 
                      
                        echo "". $_SESSION['p_fname'] . " " . $_SESSION['p_lname'] ." - PASU";

                      ?>
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="admin_profile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
  </nav>
</header>

      
