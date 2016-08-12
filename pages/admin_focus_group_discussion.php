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
    <title>AdminBIOMES | Focus Group Discussion</title>
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
    <!-- Datatables -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="../dist/css/sweetalert.css">

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
                        <th style="width: 2%;"><div class="text-center">ID</div></th>
                        <th style="width: 15%;">
                          <div class="text-center">PASu</div>
                        </th>
                        <th><div class="text-center">Protected Area</div></th>
                        <th><div class="text-center">Year / Quarter</div></th>
                        <th><div class="text-center">Main Issues Discussed (Method 1)</div></th>
                        <th><div class="text-center">Matrix for Resource Uses (Method 2)</div></th>
                        <th><div class="text-center">Matrix for Species Observed (Method 3)</div></th>
                        <th style="width: 115px;"><div class="text-center">Action</div></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                     include 'database/database.php';
                     $pdo = Database::connect();

                     $sql = 'SELECT tbl_fgd.fgd_id, tbl_pasu.pasu_fname, tbl_pasu.pasu_lname, tbl_protected_area.pa_name, tbl_fgd.fgd_quarter, tbl_fgd.fgd_year
                      FROM tbl_fgd
                      INNER JOIN tbl_pasu
                      ON tbl_fgd.pasu_id=tbl_pasu.pasu_id
                      AND tbl_fgd.fgd_status = 2
                      INNER JOIN tbl_protected_area
                      ON tbl_fgd.pa_id=tbl_protected_area.pa_id';

                     foreach ($pdo->query($sql) as $row) {

                              $sqlFirst = "SELECT  (
                                          SELECT COUNT(fgd_id)
                                          FROM   tbl_fgd_format1 WHERE fgd_id = {$row['fgd_id']}
                                          ) AS count1,
                                          (
                                          SELECT COUNT(*)
                                          FROM   tbl_fgd_format2 WHERE fgd_id = {$row['fgd_id']}
                                          ) AS count2,
                                          (
                                          SELECT COUNT(*)
                                          FROM   tbl_fgd_format3 WHERE fgd_id = {$row['fgd_id']}
                                          ) AS count3
                                  FROM    DUAL";

                                  //echo $sqlFirst;
                               foreach ($pdo->query($sqlFirst) as $row1) {
                                }


                                $stat1 = 'disabled';
                                 $stat2 = 'disabled';
                                 $stat3 = 'disabled';

                                 if ($row1['count1'] != 0) {
                                   $stat1 = '';
                                 }
                                 if ($row1['count2'] != 0) {
                                   $stat2 = '';
                                 }
                                 if ($row1['count3'] != 0) {
                                   $stat3 = '';
                                 }


                              echo '<tr>';
                              echo '<td>'. $row['fgd_id'] . '</td>';
                              echo '<td>'. $row['pasu_fname'] . ' ' . $row['pasu_lname'] . '</td>';
                              echo '<td>'. $row['pa_name'] . '</td>';
                              echo '<td><div class="text-center">'. $row['fgd_quarter'] . ' / ' . $row['fgd_year'] . '</div></td>';
                              echo '<td>
                                <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat1'. $row['fgd_id'] . '" onclick = getData("format1",'. $row['fgd_id'] . '); '.$stat1.'>View</button>
                              </td>
                              <td>
                                <button class="btn btn-block center-block bg-maroon btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat2'. $row['fgd_id'] . '" onclick = getData("format2",'. $row['fgd_id'] . '); '.$stat2.'>View</button>
                              </td>
                              <td>
                                <button class="btn btn-block center-block bg-orange btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat3'. $row['fgd_id'] . '" onclick = getData("format3",'. $row['fgd_id'] . '); '.$stat3.'>View</button>
                              </td>
                              <td><div class="text-center">
                                <div class="btn-group">
                                <button type="button" onclick="changeStat(0, '.$row['fgd_id'].', 0)" class="btn btn-sm btn-info">Approve</button>
                                <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a onClick="changeStat(0, '.$row['fgd_id'].',0); return false;" href="#">Accept</a></li>
                                  <li><a onClick="changeStat(1, '.$row['fgd_id'].',0); return false;" href="#">Reject</a></li>
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

      <!-- format 1 modal -->
      <div class="modal fade" id="f1Modal" role="dialog">
        <div class="modal-dialog modal-lg">    
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" id="modal_title"></h4>
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
    </body>

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Ajax -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
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
      function getData(formatID, valueID){
        $.ajax({
          url: 'model/modal_data.php',
          type: 'post',
          data: { mode: formatID, value: valueID}, // mode tska value ung nasa array ng _POST.
          dataType: 'json',
          success: function(result) {
            //console.log(result[0]['fgd1_locality'].length);
            //console.log(format);
           // console.log(result);
            //console.log(valueID);
            if (formatID == 'format1') {
              var locality = [];
            

              locality[0] = result[0]['fgd1_locality'][0];

              for (var i = 1; i < result[0]['fgd1_locality'].length; i++) {
                for (var j = 0; j < locality.length; j++) {
                  if (locality[j] != result[0]['fgd1_locality'][i]) {
                    var locIndex = locality.length;
                    locality[locIndex] = result[0]['fgd1_locality'][i];
                  }
                }
              }

             // console.log(locality);
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
              $.each(locality, function(idx, val){
                //console.log(val[0]);
                var tempID = 0;
                var strtabhead = '';
                var box1 = '<div class="box box-solid">';
                var box2 = '<div class="box-body">';
                var straccordhead = '';
                var straccordloop = '';
                var straccordend = '</div>';
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
                  straccordhead += '<div class="box-group" id="'+valID+'Accordion">';
                  strheadcount++;
                }
                else{
                  strloophead += '<li><a href="#'+valID+'Tab" data-toggle="tab">'+val+'</a></li>'; // nilalagay ko n ung data galing s json s kabila dito.
                  strtabhead += '<div class="tab-pane" id="'+valID+'Tab">';
                  straccordhead += '<div class="box-group" id="'+valID+'Accordion">';  
                }


                for (var j = 0; j < result[0]['fgd1_locality'].length; j++) {
                  if (result[0]['fgd1_locality'][j] == val) {

                    straccordloop += 
                    '<div class="panel box box-primary">'+
                      '<div class="box-header with-border">'+
                        '<h4 class="box-title">'+
                          '<a data-toggle="collapse" data-parent="#'+valID+'Accordion" href="#'+valID + j+'" aria-expanded="false" class="collapsed">'+
                            result[0]['fgd1_main_issue'][j]+''+
                          '</a>'+
                        '</h4>'+
                      '</div>'+
                      '<div id="'+valID+j+'" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">'+
                        '<div class="box-body">'+
                          '<h4>Resource uses chosen for monitoring:</h4>'+
                          '<ul>'+
                            '<li>Hunting of wild pigs,</li>'+
                            '<li>hunting of wild deer,</li>'+
                            '<li>freshwater fish catch,</li>'+
                            '<li>use of household timber,</li>'+
                            '<li>lobster catch.</li>'+
                          '</ul>'+
                          '<h5>Description:</h5><br>'+
                          '<p>'+result[0]['fgd1_description'][j]+'</p>'+
                          '<br><br>'+
                          '<h4>Proposed Solution:</h4><br>'+
                          '<p>'+result[0]['fgd1_pasu_solution'][j]+'</p>'+
                        '</div>'+
                      '</div>'+
                    '</div> <!-- panel primary -->';
                  } 
                };
                
                strloopbody += strtabhead + box1 + box2 + straccordhead + straccordloop + straccordend + box2end + box1end + strtabend;

              });

              var strFinal = strStart + strheadstart + strloophead + strheadend + strbodystart + strloopbody + strbodyend + strEnd;
              //console.log(strFinal);
              $('#modal_body').html(strFinal); //dito ko ina-add sa modal ung str na pinaglagyan ko ng json data.
              $('#modal_title').html("Main Issues Discussed (Method 1)");
            }

            else if (formatID == 'format2') {
              var strupper = '<div class="row">'+
                '<div class="col-md-12">'+
                  '<div class="box box-solid">'+
                    '<div class="box-header with-border">'+
                      '<h3 class="box-title">Resources List</h3>'+
                    '</div>'+
                    '<div class="box-body">'+
                      '<table class="table table-bordered">'+
                        '<thead>'+
                          '<tr>'+
                            '<th><div class="text-center">Resource use</div></th>'+
                            '<th><div class="text-center">Place Extracted</th>'+
                            '<th><div class="text-center">Method of Extraction</div></th>'+
                            '<th><div class="text-center">Quantity Extracted by CMG Members</div></th>'+
                            '<th><div class="text-center">Quantity Extracted by other members in the Brgy.</div></th>'+
                            '<th><div class="text-center">Total number of days/hours spent in extraction by CMG members</div></th>'+
                            '<th><div class="text-center">Use and other remarks</div></th>'+
                          '</tr>'+
                        '</thead>'+
                        '<tbody>';
              var strmid = '';
              var strlower = '</tbody>'+
                      '</table>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>';

              for (var i = 0; i < result[0]['fgd_id'].length; i++) {
                strmid += '<tr>'+
                  '<td>'+ result[0]['fgd2_resource'][i] +'</td>'+
                  '<td>'+ result[0]['fgd2_extraction_place'][i] +'</td>'+
                  '<td>'+ result[0]['fgd2_extraction_method'][i] +'</td>'+
                  '<td>'+ result[0]['fgd2_quantity_cmg'][i] +'</td>'+
                  '<td>'+ result[0]['fgd2_quantity_brgy'][i] +'</td>'+
                  '<td>'+ result[0]['fgd2_days_hrs'][i] +'</td>'+
                  '<td>'+ result[0]['fgd2_remarks'][i] +'</td>'+
                '</tr';
              };

              var strFinal = strupper + strmid + strlower;
              $('#modal_body').html(strFinal); //dito ko ina-add sa modal ung str na pinaglagyan ko ng json data.
              $('#modal_title').html("Matrix for Resource Uses (Method 2)");
            }

            else if (formatID == 'format3') {
              var strupper = '<div class="row">'+
                '<div class="col-md-12">'+
                  '<div class="box box-solid">'+
                    '<div class="box-header with-border">'+
                      '<h3 class="box-title">Species List</h3>'+
                    '</div>'+
                    '<div class="box-body">'+
                      '<table class="table table-bordered">'+
                        '<thead>'+
                          '<tr>'+
                            '<th><div class="text-center">Species</div></th>'+
                            '<th><div class="text-center">Place Extracted</th>'+
                            '<th><div class="text-center">Quantity</div></th>'+
                            '<th><div class="text-center">How observed</div></th>'+
                            '<th><div class="text-center">Date</div></th>'+
                            '<th><div class="text-center">Name of observer</div></th>'+
                            '<th><div class="text-center">Remarks</div></th>'+
                          '</tr>'+
                        '</thead>'+
                        '<tbody>';
              var strmid = '';
              var strlower = '</tbody>'+
                      '</table>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>';

              for (var i = 0; i < result[0]['fgd_id'].length; i++) {
                strmid += '<tr>'+
                  '<td>'+ result[0]['fgd3_species'][i] +'</td>'+
                  '<td>'+ result[0]['fgd3_place'][i] +'</td>'+
                  '<td>'+ result[0]['fgd3_quantity'][i] +'</td>'+
                  '<td>'+ result[0]['fgd3_how_observed'][i] +'</td>'+
                  '<td>'+ result[0]['fgd3_date'][i] +'</td>'+
                  '<td>'+ result[0]['fgd3_observer'][i] +'</td>'+
                  '<td>'+ result[0]['fgd3_remarks'][i] +'</td>'+
                '</tr';
              };

              var strFinal = strupper + strmid + strlower;
              $('#modal_body').html(strFinal); //dito ko ina-add sa modal ung str na pinaglagyan ko ng json data.
              $('#modal_title').html("Matrix for Species Observed (Method 3)");
            }

          },
          error: function(error) {
            alert(error);
            $('#modal_body').html("error");
            $('#modal_title').html("There is an error. Please try");
          }
        });
      }

      function changeStat(type, fgdID, method){
        console.log(type, fgdID, method);
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
            data: { ID: fgdID, type: type, mode: method }, // mode 0 = fgd, 1 = field diary, 2 = photo doc, 3 = transect
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
