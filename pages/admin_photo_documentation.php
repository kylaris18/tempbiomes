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
    <link rel="stylesheet" href="../dist/css/AdminLTE.css">
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="../plugins/datatables/dataTables.bootstrap.css">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="../dist/css/sweetalert.css">
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
            Photo Documentation
            <small>Records for Approval</small>
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Photo Documentation List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="table_pd" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th style="width: 15%;">
                          <div class="text-center">PASU</div>
                        </th>
                        <th><div class="text-center">Protected Area</div></th>
                        <th><div class="text-center">Year / Quarter</th>
                        <th><div class="text-center">Photo Documentation</div></th>
                        <th style="width: 115px;"><div class="text-center">Action</div></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        include 'database/database.php';
                        $pdo = Database::connect();
                        $sql = 'SELECT tbl_photo_doc.pd_id, tbl_pasu.pasu_fname, tbl_pasu.pasu_lname, tbl_protected_area.pa_name, tbl_photo_doc.pd_quarter, tbl_photo_doc.pd_year
                          FROM tbl_photo_doc
                          INNER JOIN tbl_pasu
                          ON tbl_photo_doc.pasu_id=tbl_pasu.pasu_id
                          AND tbl_photo_doc.pd_status = 2
                          INNER JOIN tbl_protected_area
                          ON tbl_photo_doc.pa_id=tbl_protected_area.pa_id';
                        foreach ($pdo->query($sql) as $row) {
                          echo '<tr>';
                          echo '<td>'. $row['pd_id'] . '</td>';
                          echo '<td>'. $row['pasu_fname'] . ' ' . $row['pasu_lname'] . '</td>';
                          echo '<td>'. $row['pa_name'] . '</td>';
                          echo '<td><div class="text-center">'. $row['pd_quarter'] . ' / ' . $row['pd_year'] . '</div></td>';
                          echo '<td>
                              <button class="btn btn-block center-block btn-success btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat1'. $row['pd_id'] . '" onclick = getData('. $row['pd_id'] . ');>View</button>
                            </td>
                            <td><div class="text-center">
                              <div class="btn-group">
                              <button type="button" onclick="changeStat(0, '.$row['pd_id'].', 2)" class="btn btn-sm btn-info">Approve</button>
                              <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a onClick="changeStat(0, '.$row['pd_id'].', 2); return false;" href="#">Accept</a></li>
                                <li><a onClick="changeStat(1, '.$row['pd_id'].', 2); return false;" href="#">Reject</a></li>
                              </ul>
                            </div>
                            </div></td>';
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
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <div class="modal fade" id="f1Modal" role="dialog">
        <div class="modal-dialog modal-lg">    
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Photo Document Details</h4>
            </div>
            <div class="modal-body" id="modal_body">

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
    <!-- SweetAlert -->
    <script src="../dist/js/sweetalert.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
     <!-- page script -->
    <script>
      $(function () {
        $("#table_pd").DataTable();
      });
    </script>
    <script>
      function getData(valueID){
        console.log(valueID);
        $.ajax({
          url: 'model/model_photodoc.php',
          type: 'post',
          data: {value: valueID}, // mode tska value ung nasa array ng _POST.
          dataType: 'json',
          success: function(result) {

          
              console.log(result);

              var locality = [];

              locality[0] = result[0]['pde_locality'][0];

              for (var i = 1; i < result[0]['pde_locality'].length; i++) {
                for (var j = 0; j < locality.length; j++) {
                  if (locality[j] != result[0]['pde_locality'][i-1]) {
                    var locIndex = locality.length;
                    locality[locIndex] = result[0]['pde_locality'][i];
                  }
                }
              }

              console.log(locality);

              var strStart = '<div class="nav-tabs-green">';
              var strheadstart = '<ul class="nav nav-tabs">';
              var strloophead = '';
              var strheadend = '</ul>';
              var strbodystart = '<div class="tab-content">'
              var strloopbody = '';
              var strbodyend = '</div>';
              var strEnd = '</div>';
              var strshit = '</div>';

              var strheadcount = 0;
              var daycount = 0;
              $.each(locality, function(idx, val){
                //console.log(val[0]);
                var tempID = 0;
                var strtabhead = '';
                var box1 = '<div class="box box-solid">';
                var box2 = '<div class="box-body">';
                var box_body = '';
                var box2end = '</div>';
                var box1end = '</div>';
                var strtabend = '</div>';

                var sar = val.split('');
                for(var i = 0; i < val.length; i++){
                  sar[i] = sar[i].replace(" ", "-");
                  sar[i] = sar[i].replace(".", "");
                }
                var valID = sar.join('');
               // console.log(valID);
                if (strheadcount == 0) {
                  strloophead += '<li class="active"><a href="#'+valID+'Tab" data-toggle="tab">'+val+'</a></li>';
                  strtabhead += '<div class="tab-pane active" id="'+valID+'Tab">';
                  strheadcount++;
                }
                else{
                  strloophead += '<li><a href="#'+valID+'Tab" data-toggle="tab">'+val+'</a></li>';
                  strtabhead += '<div class="tab-pane" id="'+valID+'Tab">';  
                }

                for (var j = 0; j < result[0]['pde_locality'].length; j++) {
                  if (result[0]['pde_locality'][j] == val) {

                    var pde_id = result[0]['pde_id'][j];
                    var photodocData = [];

                    
                    $.ajax({
                      async: false,
                      url: 'model/model_photodoc_data.php',
                      type: 'post',
                      data: {value: pde_id}, // mode tska value ung nasa array ng _POST.
                      dataType: 'json',
                      success: function(ajaxData) {
                        photodocData = ajaxData;
                        console.log(photodocData);            
                      },
                      error: function(error) {
                        return 'error';
                      }
                    });

                    var photos = '';

                    for (var d = 0; d < photodocData[0]['pdd_id'].length; d++) {
                      photos += '<div class="col-md-12"><div class = "col-md-6">'+
                        '<div><img style="max-width: 100%" alt="photo Documentation Photo" src="'+photodocData[0]['pdd_photo'][d]+'"></div><br></div>'+
                        '<div class="col-md-6"><dl><dt> Photo Name: </dt>'+
                        '<dd>'+photodocData[0]['pdd_name'][d]+'</dd>'+
                        '<dt> View/Angle Position: </dt>'+
                        '<dd>'+photodocData[0]['pdd_angle_pos'][d]+'</dd>'+
                        '<dt> Description: </dt>'+
                        '<dd>'+photodocData[0]['pdd_description'][d]+'</dd>'+
                        '</dl></div></div>';
                    }

                    box_body = '<div class="row">'+
                    '<div class="col-md-6">'+
                      '<dl>'+
                        '<dt>Date</dt>'+
                        '<dd>'+result[0]['pde_date'][j]+'</dd>'+
                        '<dt>Comment</dt>'+
                        '<dd>'+result[0]['pde_remarks'][j]+'</dd>'+
                      '</dl>'+
                    '</div>'+
                    '<div class="col-md-6">'+
                      '<dl>'+
                        '<dt>Obeserver</dt>'+
                        '<dd>'+result[0]['pde_observer'][j]+'</dd>'+
                        '<dt>Position</dt>'+
                        '<dd>'+result[0]['pde_gps_position'][j]+'</dd>'+
                      '</dl>'+
                    '</div>'+photos+'</div>';
                  } 
                };

                strloopbody += strtabhead + box1 + box2 + box_body + box2end + box1end + strtabend;

                });
                var strFinal = strStart + strheadstart + strloophead + strheadend + strbodystart + strloopbody + strbodyend + strEnd; 
                //var strFinal = strupper + strmid + strlower;
              $('#modal_body').html(strFinal); 

          },
          error: function(error) {
            alert(error);
            $('#modal_body').html("error");
            $('#modal_title').html("There is an error. Please try");
          }
        });
      }

      /*approve request / Change status*/
      function changeStat(type, methodID, mode){
        var titleText = '';
        var confirmColor = '';

        //0 is accept, 1 is reject
        if (type == 0) {
          titleText = 'Accept Report?';
          confirmColor = '#00A65A';          
        } else{
          titleText = 'Reject Report?';
          confirmColor = '#d9534f';
        };


        swal({
          title: titleText,
          text: "Please check content before proceeding. You will not be able to undo this action later.",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: confirmColor,
          confirmButtonText: 'Yes, please.',
          closeOnConfirm: false
        },
        function(){
          $.ajax({
            url: 'model/modal_changeStatus.php',
            type: 'post',
            data: { ID: methodID, type: type, mode: mode }, // mode 0 = fgd, 1 = field diary, 2 = photo doc, 3 = transect
            success: function(result) {
              swal("Nice!", "You successfully approved the request!", "success");
              setTimeout(function(){ window.location.reload(true); }, 1500);
            },
            error: function(error) {
              alert(error);
            }
          });
        });
      }
    </script>
  </body>
</html>
