<?php
  #starting session
  session_start();
  if ((isset($_SESSION['uname']) !='')) {
    if($_SESSION['type'] == 1) {
      header("location: admin_profile.php");
    }
    elseif($_SESSION['type'] == 3) {
      header("location: pasu_profile.php");
    }
  }
  else {
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
    <!-- Data Tables Plugins -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">

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
            <h1>Add Species</h1>
          </section>
          <section class="content">
            <div class="box-body" style="display: block;">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><b>Registered Species</b></a></li>
                  <li><a href="#tab_2" data-toggle="tab" aria-expanded="false"><b>Approve Species Request</b></a></li>
                  <li><a href="#tab_3" data-toggle="tab" aria-expanded="false"><b>Add Species</b></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <!-- box widget shit -->                    
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">List of Registered Species</h3>
                      </div><!-- /.box-header -->
                      <div class="box-body table-responsive">
                        <table class="table table-bordered" id="table_id">
                        <thead>
                          <tr>
                            <th><div class="text-center">ID</div></th>
                            <th><div class="text-center">Species Name</div></th>
                            <th><div class="text-center">Scientific Name</div></th>
                            <th><div class="text-center">Type</div></th>
                            <th><div class="text-center">Action</div></th>
                            <th><div class="text-center">Action</div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            #connecting to the database by calling the dbconfig file
                            include 'database/database.php';
                            $pdo = Database::connect();

                            $species_status = '1';

                            #Retrieve data from the database
                            $sql = "SELECT species_id, species_type, species_name, species_Sc_name FROM tbl_species WHERE species_status = '".$species_status."'";
                            
                            foreach ($pdo->query($sql) as $row) {
                              echo '<tr>';
                              echo '<td><div class="text-center">'. $row['species_id'] . '</div></td>';
                              echo '<td><div class="text-center">'. $row['species_name'] . '</div></td>';
                              echo '<td><div class="text-center">'. $row['species_Sc_name'] . '</div></td>';
                              echo '<td><div class="text-center">'. $row['species_type'] . '</div></td>';
                              echo '<td><div class="text-center">
                                <button class="btn btn-block center-block bg-purple btn-sm" style="width: 80%;" data-toggle="modal" data-target="#f1Modal">view</button></div></td>

                                <td><div class="text-center">
                                <button class="btn btn-block center-block btn-danger btn-sm" style="width: 80%;" data-toggle="modal" data-target="#f1Modal">Delete</button></div></td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                        </table>
                      </div><!-- /.box-body -->             
                    </div>                       
                    <!-- end of box 1 shit -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">List of Protected Area</h3>
                      </div><!-- /.box-header -->
                      <div class="box-body table-responsive">
                        <table class="table table-bordered" id="table_id2">
                        <thead>
                          <tr>
                            <th><div class="text-center">ID</div></th>
                            <th><div class="text-center">Species Name</div></th>
                            <th><div class="text-center">Scientific Name</div></th>
                            <th><div class="text-center">Type</div></th>
                            <th><div class="text-center">Action</div></th>
                            <th><div class="text-center">Action</div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $species_status2 = '2';

                            #Retrieve data from the database
                            $sql2 = "SELECT species_id, species_type, species_name, species_Sc_name FROM tbl_species WHERE species_status = '".$species_status2."'";
                            
                            foreach ($pdo->query($sql2) as $row2) {
                              echo '<tr>';
                              echo '<td><div class="text-center">'. $row2['species_id'] . '</div></td>';
                              echo '<td><div class="text-center">'. $row2['species_name'] . '</div></td>';
                              echo '<td><div class="text-center">'. $row2['species_Sc_name'] . '</div></td>';
                              echo '<td><div class="text-center">'. $row2['species_type'] . '</div></td>';
                              echo '<td><div class="text-center">
                                <button class="btn btn-block center-block bg-purple btn-sm" style="width: 80%;" data-toggle="modal" data-target="#f1Modal">view</button></div></td>

                                <td><div class="text-center">
                                <button class="btn btn-block center-block btn-danger btn-sm" style="width: 80%;" data-toggle="modal" data-target="#f1Modal">Delete</button></div></td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                        </table>
                      </div><!-- /.box-body -->             
                    </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <div class="box-header with-border">
                      <h3 class="box-title"> Add Species</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <form role="form" method="POST" action="../function/add_species.php" enctype="multipart/form-data"><br>
                          <div class="form-group">                          
                            <label>Species Type</label>
                            <select name="drp_type">
                              <option value="Flora">Flora</option>
                              <option value="Fauna">Fauna</option>
                            </select>
                          </div>
                          <div class="input-group">
                            <input type="file" name="imgProfile" accept="image/*">
                          </div><br>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-paw"></i></span>
                            <input type="text" class="form-control" name="txtSpeciesName" placeholder="Enter the Species Name" required>
                          </div><br>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa  fa-flask"></i></span>
                            <input type="text" class="form-control" name="txtScientificName" placeholder="Scientific Name" required>
                          </div><br>
                          <div>
                            <textarea class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px;" name="txtContent" placeholder="Write a description here..."></textarea>
                          </div><br>
                          <div class="box-footer clearfix">
                            <button class="pull-right btn btn-default" name = "btnSubmit" id="sendEmail"><i class="fa  fa-plus-circle"></i> Save</button>
                          </div>  
                        </form>
                      </div>           
                    </div>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
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
                <h4 class="modal-title">Reassigned PASU to Another Protected Area</h4>
              </div>
              <div class="modal-body">
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
      <!-- Select2 -->
      <script src="../plugins/select2/select2.full.min.js"></script>
      <script>
        $(document).ready(function(){
          $('#table_id').DataTable();
          $('#table_id2').DataTable();
          // $(function() {
          //   $("li").on("click",function() {
          //     console.log('damn booty!');
          //     $('.table').DataTable();
          //   });
          // });
        });
      </script>
      <script type="text/javascript">
        $(function () {
          //Initialize Select2 Elements
          $(".select2").select2();
        });
      </script>
  </body>
</html>

