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
    <title>AdminBIOMES | Field Diary</title>
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
            Focus Group Discussion
            <small>Records for Approval</small>
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">PASu List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th style="width: 15%;">
                          <div class="text-center">PASU</div>
                        </th>
                        <th><div class="text-center">Protected Area</div></th>
                        <th><div class="text-center">Year / Quarter</th>
                        <th><div class="text-center">Field Diary</div></th>
                        <th style="width: 115px;"><div class="text-center">Action</div></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        include 'database/database.php';
                        $pdo = Database::connect();
                        $sql = 'SELECT tbl_field_diary.fd_id, tbl_pasu.pasu_fname, tbl_pasu.pasu_lname, tbl_protected_area.pa_name, tbl_field_diary.fd_quarter, tbl_field_diary.fd_year
                          FROM tbl_field_diary
                          INNER JOIN tbl_pasu
                          ON tbl_field_diary.pasu_id=tbl_pasu.pasu_id
                          AND tbl_field_diary.fd_status = 2
                          INNER JOIN tbl_protected_area
                          ON tbl_field_diary.pa_id=tbl_protected_area.pa_id';
                        foreach ($pdo->query($sql) as $row) {
                          echo '<tr>';
                          echo '<td>'. $row['fd_id'] . '</td>';
                          echo '<td>'. $row['pasu_fname'] . ' ' . $row['pasu_lname'] . '</td>';
                          echo '<td>'. $row['pa_name'] . '</td>';
                          echo '<td><div class="text-center">'. $row['fd_quarter'] . ' / ' . $row['fd_year'] . '</div></td>';
                          echo '<td>
                              <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat1'. $row['fd_id'] . '" onclick = getData('. $row['fd_id'] . ');>View</button>
                            </td>
                            <td><div class="text-center">
                              <div class="btn-group">
                              <button type="button" onclick="changeStat(0, '.$row['fd_id'].', 1)" class="btn btn-sm btn-info">Approve</button>
                              <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a onClick="changeStat(0, '.$row['fd_id'].', 1); return false;" href="#">Accept</a></li>
                                <li><a onClick="changeStat(1, '.$row['fd_id'].', 1); return false;" href="#">Reject</a></li>
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
            <h4 class="modal-title">Field Diary (Data)</h4>
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
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- SweetAlert -->
    <script src="../dist/js/sweetalert.min.js"></script>
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
    <script type="text/javascript">
      function getData(valueID){
        $.ajax({
          url: 'model/modal_fdData.php',
          type: 'post',
          data: { value: valueID}, // mode tska value ung nasa array ng _POST.
          dataType: 'json',
          success: function(result) {
            console.log(result);

            var locality = [];

            locality[0] = result[0]['fdd_locality'][0];

            for (var i = 1; i < result[0]['fdd_locality'].length; i++) {
              for (var j = 0; j < locality.length; j++) {
                if (locality[j] != result[0]['fdd_locality'][i-1]) {
                  var locIndex = locality.length;
                  locality[locIndex] = result[0]['fdd_locality'][i];
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
              var strtlinehead = '<ul class="timeline timeline-inverse">';
              var strtlineloop = '';
              var strtlineend = '<li><i class="fa fa-clock-o bg-gray"></i></li></ul>';
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
                strloophead += '<li><a href="#'+valID+'Tab" data-toggle="tab">'+val+'</a></li>'; // nilalagay ko n ung data galing s json s kabila dito.
                strtabhead += '<div class="tab-pane" id="'+valID+'Tab">';  
              }

              var dateIndex = [];
              for (var z = 0; z < result[0]['fdd_date'].length; z++) {
                if (val == result[0]['fdd_locality'][z]) {
                  diIndex = dateIndex.length;
                  dateIndex[diIndex] = z;
                }
              }


              strtlineloop = '<li class="time-label">'+
                      '<span class="bg-green">'+
                        ''+result[0]['fdd_date'][dateIndex[0]]+''+
                      '</span>'+
                '</li>';
              for (var y = 0; y < dateIndex.length; y++) {
                strtlineloop += '<li>'+
                      '<i class="fa fa-clock-o bg-blue"></i>'+

                      '<div class="timeline-item">'+

                        '<h3 class="timeline-header">Time: '+result[0]['fdd_time'][dateIndex[y]]+'</h3>'+

                        '<div class="timeline-body">'+result[0]['fdd_data'][dateIndex[y]]+''+
                        '</div>'+
                      '</div>'+
                    '</li>';
              }

              strloopbody += strtabhead  + strtlinehead + strtlineloop + strtlineend + strtabend;

              });
              var strFinal = strStart + strheadstart + strloophead + strheadend + strbodystart + strloopbody + strbodyend + strEnd;
              //var strFinal = strupper + strmid + strlower;
            $('#modal_body').html(strFinal); //dito ko ina-add sa modal ung str na pinaglagyan ko ng json data.
            

          },
          error: function(error) {
            alert(error);
            $('#modal_body').html("error");
            $('#modal_title').html("There is an error. Please try");
          }
        });
      }

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
