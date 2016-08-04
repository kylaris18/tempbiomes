<?php

  #starting session
  session_start();
  if ((isset($_SESSION['uname']) !='')) 
  {
    #Session not destroy
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
    <title>AdminBIOMES | Photo Documentation</title>
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
            Photo Documentation
            <small>Records for Approval</small>
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">List</h3>
                  <div class="box-tools">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><a href="#">«</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th><div class="text-center">ID</div></th>
                      <th style="width: 15%;">
                        <div class="text-center">PASU</div>
                      </th>
                      <th><div class="text-center">Protected Area</div></th>
                      <th><div class="text-center">Year / Quarter</th>
                      <th><div class="text-center">Matrix for Resource Uses (Method 1)</div></th>
                      <th style="width: 115px;"><div class="text-center">Action</div></th>
                    </tr>
                    <tr>
                      <td><div class="text-center">1</div></td>
                      <td><div class="text-center">Dean Winchester</div></td>
                      <td><div class="text-center">Mount Makiling</div></td>
                      <td><div class="text-center">3rd 2015</div></td>
                      <td>
                        <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal">View</button>
                      </td>
                      <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-info">Approve</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Accept</a></li>
                          <li><a href="#">Reject</a></li>
                        </ul>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td><div class="text-center">2</div></td>
                      <td><div class="text-center">Sam Winchester</div></td>
                      <td><div class="text-center">Mount Makiling</div></td>
                      <td><div class="text-center">3rd 2015</div></td>
                      <td>
                        <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-info">Approve</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Accept</a></li>
                          <li><a href="#">Reject</a></li>
                        </ul>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td><div class="text-center">3</td>
                      <td><div class="text-center">Misha Collins</div></td>
                      <td><div class="text-center">Mount Makiling</div></td>
                      <td><div class="text-center">3rd 2015</div></td>
                      <td>
                        <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-info">Approve</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Accept</a></li>
                          <li><a href="#">Reject</a></li>
                        </ul>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td><div class="text-center">4</div></td>
                      <td><div class="text-center">Bobby Singer</div></td>
                      <td><div class="text-center">Mount Makiling</div></td>
                      <td><div class="text-center">3rd 2015</div></td>
                      <td>
                        <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-info">Approve</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Accept</a></li>
                          <li><a href="#">Reject</a></li>
                        </ul>
                      </div>
                      </td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

    <div class="modal fade" id="f1Modal" role="dialog">
      <div class="modal-dialog modal-lg">    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Main Issues Discussed (Method 1)</h4>
          </div>
          <div class="modal-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="box-group" id="accordion">
                      <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                      <div class="panel box box-primary">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                              Locality
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="box box-solid">
                    <div class="box-body">
                      <dl>
                        <dt>Position</dt>
                        <dd>281109/1548455 marked as Starting Point/ Route</dd>
                        <dt>Date</dt>
                        <dd>June 1, 2015</dd>
                        <dt>Full Name of Observer</dt>
                        <dd>Royce Ann A. Lascano</dd>
                        <dt>Remarks</dt>
                        <dd>Sunny weather; dry/dusty trail</dd>
                      </dl>
                      <div class="row margin-bottom">
                        <div class="col-md-6">
                          <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-md-6">
                          <dl>
                            <dt>Photo Name:</dt>
                            <dd>PD-02-101</dd>
                            <dt>View/Angle Position:</dt>
                            <dd>281109/1548455</dd>
                            <dt>Description:</dt>
                            <dd>Starting point. Right after first bamboo gate from Alas-as view deck.</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="row margin-bottom">
                        <div class="col-md-6">
                          <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-md-6">
                          <dl>
                            <dt>Photo Name:</dt>
                            <dd>PD-02-101</dd>
                            <dt>View/Angle Position:</dt>
                            <dd>281109/1548455</dd>
                            <dt>Description:</dt>
                            <dd>Starting point. Right after first bamboo gate from Alas-as view deck.</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="row margin-bottom">
                        <div class="col-md-6">
                          <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-md-6">
                          <dl>
                            <dt>Photo Name:</dt>
                            <dd>PD-02-101</dd>
                            <dt>View/Angle Position:</dt>
                            <dd>281109/1548455</dd>
                            <dt>Description:</dt>
                            <dd>Starting point. Right after first bamboo gate from Alas-as view deck.</dd>
                          </dl>
                        </div>
                      </div> 
                    </div>                   
                  </div>
                        </div>
                      </div>
                      <div class="panel box box-danger">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                              Main Topic 2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="box box-solid">
                    <div class="box-body">
                      <dl>
                        <dt>Position</dt>
                        <dd>281109/1548455 marked as Starting Point/ Route</dd>
                        <dt>Date</dt>
                        <dd>June 1, 2015</dd>
                        <dt>Full Name of Observer</dt>
                        <dd>Royce Ann A. Lascano</dd>
                        <dt>Remarks</dt>
                        <dd>Sunny weather; dry/dusty trail</dd>
                      </dl>
                      <div class="row margin-bottom">
                        <div class="col-md-6">
                          <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-md-6">
                          <dl>
                            <dt>Photo Name:</dt>
                            <dd>PD-02-101</dd>
                            <dt>View/Angle Position:</dt>
                            <dd>281109/1548455</dd>
                            <dt>Description:</dt>
                            <dd>Starting point. Right after first bamboo gate from Alas-as view deck.</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="row margin-bottom">
                        <div class="col-md-6">
                          <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-md-6">
                          <dl>
                            <dt>Photo Name:</dt>
                            <dd>PD-02-101</dd>
                            <dt>View/Angle Position:</dt>
                            <dd>281109/1548455</dd>
                            <dt>Description:</dt>
                            <dd>Starting point. Right after first bamboo gate from Alas-as view deck.</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="row margin-bottom">
                        <div class="col-md-6">
                          <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-md-6">
                          <dl>
                            <dt>Photo Name:</dt>
                            <dd>PD-02-101</dd>
                            <dt>View/Angle Position:</dt>
                            <dd>281109/1548455</dd>
                            <dt>Description:</dt>
                            <dd>Starting point. Right after first bamboo gate from Alas-as view deck.</dd>
                          </dl>
                        </div>
                      </div> 
                    </div>                   
                  </div>
                        </div>
                      </div>
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                              Main Topic 2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="box box-solid">
                    <div class="box-body">
                      <dl>
                        <dt>Position</dt>
                        <dd>281109/1548455 marked as Starting Point/ Route</dd>
                        <dt>Date</dt>
                        <dd>June 1, 2015</dd>
                        <dt>Full Name of Observer</dt>
                        <dd>Royce Ann A. Lascano</dd>
                        <dt>Remarks</dt>
                        <dd>Sunny weather; dry/dusty trail</dd>
                      </dl>
                      <div class="row margin-bottom">
                        <div class="col-md-6">
                          <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-md-6">
                          <dl>
                            <dt>Photo Name:</dt>
                            <dd>PD-02-101</dd>
                            <dt>View/Angle Position:</dt>
                            <dd>281109/1548455</dd>
                            <dt>Description:</dt>
                            <dd>Starting point. Right after first bamboo gate from Alas-as view deck.</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="row margin-bottom">
                        <div class="col-md-6">
                          <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-md-6">
                          <dl>
                            <dt>Photo Name:</dt>
                            <dd>PD-02-101</dd>
                            <dt>View/Angle Position:</dt>
                            <dd>281109/1548455</dd>
                            <dt>Description:</dt>
                            <dd>Starting point. Right after first bamboo gate from Alas-as view deck.</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="row margin-bottom">
                        <div class="col-md-6">
                          <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-md-6">
                          <dl>
                            <dt>Photo Name:</dt>
                            <dd>PD-02-101</dd>
                            <dt>View/Angle Position:</dt>
                            <dd>281109/1548455</dd>
                            <dt>Description:</dt>
                            <dd>Starting point. Right after first bamboo gate from Alas-as view deck.</dd>
                          </dl>
                        </div>
                      </div> 
                    </div>                   
                  </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <div class="btn-group">
                <button type="button" class="btn btn-info">Approve</button>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Accept</a></li>
                  <li><a href="#">Reject</a></li>
                </ul>
              </div>
          </div>
        </div>        
      </div>
    </div>
    
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
