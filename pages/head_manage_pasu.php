<?php

  #starting session
  session_start();
  if ((isset($_SESSION['uname']) !='')) 
  {
    if($_SESSION['type'] == 1)
    {
      header("location: admin_profile.php");
    }
    elseif($_SESSION['type'] == 3)
    {
      header("location: pasu_profile.php");
    }
  }
  else
  {
    header("location: sign_in.php");
  }
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HeadBIOMES | Approved Reports</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body class="hold-transition skin-purple sidebar-mini">
    <!-- Site wrapper -->
      <div class="wrapper">
      <!-- header -->
      <?php include 'templates\head_header.php';?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php include 'templates\head_sidebar.php';?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Protected Area Officers
          </h1>
        </section>
        <section class="content">
          <div class="box-body" style="display: block;">
            <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><b>Pasu List</b></a></li>
                      <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><b>Register a PASU</b></a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab_1">
                        <!-- box widget shit -->                    
                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">PASU List</h3>
                            <div class="box-tools">
                              <div class="input-group" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                                <div class="input-group-btn">
                                  <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                              </div>
                            </div>
                          </div><!-- /.box-header -->
                          <div class="box-body table-responsive">
                            <table class="table table-bordered">
                              <tbody><tr>
                                <th>Username</th>
                                <th>PASU Name</th>
                                <th>Email</th>
                                <th>Protected Area</th>
                                <th>Action</th>
                              </tr>
                              <tr>
                                <td>kawaiiasuna</td>
                                <td>Bella Chan</td>
                                <td>kawaiiasuna12@gmail.com</td>
                                <td>Taal Protected Area</td>
                                <td>
                                  <form action="pasu-profile.php">
                                    <input type="submit" class="btn btn-block btn-info" name="view" value="View">
                                  </form>
                                </td>
                              </tr>
                              <tr>
                                <td>karlangelo143</td>
                                <td>Karl Angelou Soriano</td>
                                <td>karlangelou143@yahoo.com</td>
                                <td>Calamba</td>
                                <td>
                                  <form action="pasu-profile.php">
                                    <input type="submit" class="btn btn-block btn-info" name="view" value="View">
                                  </form>
                                </td>
                              </tr>
                            </tbody></table>
                          </div><!-- /.box-body -->
                          <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                              <li><a href="#">«</a></li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">»</a></li>
                            </ul><!-- /.box-footer -->
                          </div>              
                        </div>                       
                        <!-- end of box 1 shit -->
                      </div><!-- /.tab-pane -->
                      <div class="tab-pane" id="tab_2">                   
                        <!-- <div class="box"> -->
                          <div class="box-header with-border">
                            <h3 class="box-title">Please Complete the form Below</h3>
                          </div><!-- /.box-header -->
                          <!-- form start -->
                          <form role="form" action="../function/manage_pasu.php">
                            <div class="box-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="txtEmail" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputUsername">Username</label>
                                <input type="text" class="form-control" id="exampleInputUsername" name="txtUname" placeholder="Enter username">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="txtPcode" placeholder="Enter password">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputLastname">Lastname</label>
                                <input type="text" class="form-control" id="exampleInputLastname" name="txtLname" placeholder="Enter lastname">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputFirstname">Firstname</label>
                                <input type="text" class="form-control" id="exampleInputFirstname" name="txtFname" placeholder="Enter firstname">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputAssigned">Assigned Protected Area</label>
                                <select name="txtPa">
                                  <?php
                                  require "../config/dbconfig.php";
                                  $sql = "SELECT pa_id, pa_name FROM tbl_protected_area";
                                  $result = $db->query($sql);
                                  
                                  while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='".$row['pa_id']."'>".$row['pa_name']."</option>";
                                  }
                                  echo "</select>"
                                  ?>

                                </select>
                              </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                              <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                            </div>
                          </form>
                        <!-- </div> -->
                      </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- =============================================== -->

      <!-- Footer -->
      <?php include 'templates\head_footer.php';?>

      <!-- =============================================== -->

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- Select2 -->
    <script src="../plugins/select2/select2.full.min.js"></script>
    <script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
      });
    </script>
  </body>
</html>

