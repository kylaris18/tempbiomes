<?php

  #starting session
  session_start();
  if ((isset($_SESSION['uname']) !='')) 
  {
    
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
    <title>AdminBIOMES | Approved Reports</title>
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
    <!-- Datatables -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
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
  <body class="hold-transition skin-green sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- header -->
      <?php include 'templates\admin_header.php';?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php include 'templates\admin_sidebar.php';?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Recently Approved Reports
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Compiled Reports</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 2%;"><div class="text-center">ID</div></th>
                        <th style="width: 15%;">
                          <div class="text-center">P.A. Superintendent</div>
                        </th>
                        <th><div class="text-center">Date</div></th>
                        <th><div class="text-center">Year / Quarter</div></th>
                        <th><div class="text-center">Protected Area</div></th>
                        <th style="width: 115px;"><div class="text-center">Action</div></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                     include 'database/database.php';
                     $pdo = Database::connect();

                     $sql = 'SELECT tbl_reports.rep_id, tbl_pasu.pasu_fname, tbl_pasu.pasu_lname, tbl_reports.rep_date, tbl_protected_area.pa_name, tbl_reports.rep_quarter, tbl_reports.rep_year
                      FROM tbl_reports
                      INNER JOIN tbl_pasu
                      ON tbl_reports.pasu_id=tbl_pasu.pasu_id
                      INNER JOIN tbl_protected_area
                      ON tbl_reports.pa_id=tbl_protected_area.pa_id';

                     foreach ($pdo->query($sql) as $row) {
                        echo '<tr>';
                        echo '<td>'. $row['rep_id'] . '</td>';
                        echo '<td>'. $row['pasu_fname'] . ' ' . $row['pasu_lname'] . '</td>';
                        echo '<td>'. $row['rep_date'] . '</td>';
                        echo '<td><div class="text-center">'. $row['rep_quarter'] . ' / ' . $row['rep_year'] . '</div></td>';
                        echo '<td>'. $row['pa_name'] . '</td>';
                        
                        echo '<td><form action="report.php" method="POST" target="_blank">
                                <input type="hidden" name="id" value="'. $row['rep_id'] . '">
                                <input class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;" type="submit" value="Submit">
                              </form>
                        </td>';
/*                        <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;" data-toggle="modal" data-target="#reportsModal" id="btnFormat1'. $row['rep_id'] . '" onclick = getData("format1",'. $row['rep_id'] . ');>View</button>*/
                        echo '</tr>';
                      }
                     Database::disconnect();
                    ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div>
            </div>
          </div>
          <div id="reportsModal" class="modal fade modal-info">
            <div class="modal-dialog" style="width: 1000px;">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">Modal Info</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-outline">Save changes</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- =============================================== -->

      <!-- Footer -->
      <?php include 'templates\admin_footer.php';?>

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
      $(document).ready(function(){
        $(".table").DataTable({
          "paging": true,
          /*"lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false*/
        });
      });
    </script>
    <!-- <script>
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
        $('#example3').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $('#example4').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $('#example5').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $('#example6').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $('#example7').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $('#example8').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $('#example9').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $('#example10').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $('#example11').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script> -->
  </body>
</html>