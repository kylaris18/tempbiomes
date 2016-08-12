<?php

  #starting session
  session_start();
  if ((isset($_SESSION['uname']) !='')) 
  {
    if($_SESSION['type'] == 1)
    {
      header("location: pasu_profile.php");
    }
    elseif($_SESSION['type'] == 2)
    {
      header("location: head_profile.php");
    }
  }
  else
  {
    header("location: sign_in.php");
  }
  $qfinal;
  $quarter = $_SESSION['quarter'];
  if (is_null($quarter)) {
    header("location: pasu_redirect.php");
  }
  else{
    if ($quarter == 1) {
      $qfinal = '1st';
    }
    elseif ($quarter == 2) {
      $qfinal = '2nd';
    }
    elseif ($quarter == 3) {
      $qfinal = '3rd';
    }
    elseif ($quarter == 4) {
      $qfinal = '4th';
    } 
  }
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PASuBIOMES | Photo Documentation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
      <div class="wrapper">
      <!-- header -->
      <?php include 'templates\pasu_header.php';?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php include 'templates\pasu_sidebar.php';?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Photo Documentation
           <!--  <small>Records for Approval</small> -->
           <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
  Add Photo Documentation
</button>
          <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Photo Documentation</h4>
      </div>
      <div class="modal-body">
      <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      Location <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Brgy. Mabato</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Brgy. Mabuhangin</a></li>
                      <li role="presentation" class="divider"></li>
                    </ul>
                  </li>
                  </div>
                  <div class="form-group">
                      <label >Position:</label>
                      <input  class="form-control" id="exampleInputPassword1" placeholder="longitude">
                      <input  class="form-control" id="exampleInputPassword1" placeholder="latitude">
                    </div>
                    <div class="form-group">
                      <label >Date:</label>
                      <input  class="form-control" id="exampleInputPassword1" placeholder="MM/DD/YYYY">
                    </div>
                    <div class="form-group">
                      <label >Remarks:</label>
                         <textarea class="form-control" id="message-text" placeholder="Write your remarks..."></textarea>
                    </div>
                    <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Insert Photo</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Date:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div> -->
                    <!-- <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div> -->
                    <div class="form-group">
                      <!-- <label for="exampleInputFile">File input</label> -->
                      <input type="file" id="exampleInputFile">
                   <!--    <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <!-- <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div> -->
                  </div><!-- /.box-body -->

                  <!-- <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div> -->
                </form>
              </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div><!-- / .box-body -->

                  <!-- <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div> -->
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Done</button>
      </div>
    </div>
  </div>
</div>
          </h1>
        </section>
        <section class="content">
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">Padro Reyes</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
                  <div class="btn-group pull-right">
                        <div class="btn-group">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal">Send</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal" tabindex="-1"role="dialog" aria-labelledby="modalLanel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalLabel">Alert</h4>
                        </div>
                        <div class="modal-body">
                        <h3>Are you sure you want to send (file name)?</h3>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-info" onclick=''>Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick=''>No</button>
                        </div>
                        </div>
                        </div>
                        </div>
                                      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Add Photo</a></li>
                                        <li><a href="#">Edit Photo</a></li>
                                        <li><a href="#">Delete</a></li>
                                      </ul>
                                    </div>
                    </div>
                    </div>
                    </div>
                    </section>
                    </form>
                    </div>

      <!-- =============================================== -->

      <!-- Footer -->
      <?php include 'templates\pasu_footer.php';?>

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
     <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
