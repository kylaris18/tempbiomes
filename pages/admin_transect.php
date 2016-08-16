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
    <title>AdminBIOMES | Transect</title>
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
    <!-- Sweetalert -->
    <link rel="stylesheet" href="../dist/css/sweetalert.css">
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
            Transect
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
                  <table id="mainTable" class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 2%;"><div class="text-center">ID</div></th>
                        <th style="width: 15%;">
                          <div class="text-center">PASu</div>
                        </th>
                        <th><div class="text-center">Protected Area</th>
                        <th><div class="text-center">Year / Quarter</th>
                        <th><div class="text-center">Transect Walk</div></th>
                        <th><div class="text-center">Transect Swim</div></th>
                        <th><div class="text-center">Transect Cruise</div></th>
                        <th style="width: 115px;"><div class="text-center">Action</div></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                     include 'database/database.php';
                     $pdo = Database::connect();
                     $sql = 'SELECT tbl_transect.tsect_id, tbl_pasu.pasu_fname, tbl_pasu.pasu_lname, tbl_protected_area.pa_name, tbl_transect.tsect_quarter, tbl_transect.tsect_year
                      FROM tbl_transect
                      INNER JOIN tbl_pasu
                      ON tbl_transect.pasu_id=tbl_pasu.pasu_id
                      AND tbl_transect.tsect_status = 2
                      INNER JOIN tbl_protected_area
                      ON tbl_transect.pa_id=tbl_protected_area.pa_id';

                     foreach ($pdo->query($sql) as $row) {

                              $sqlFirst = "SELECT  (
                                          SELECT COUNT(tsect_id)
                                          FROM   tbl_transect_walk WHERE tsect_id = {$row['tsect_id']}
                                          ) AS count1,
                                          (
                                          SELECT COUNT(*)
                                          FROM   tbl_transect_swim WHERE tsect_id = {$row['tsect_id']}
                                          ) AS count2,
                                          (
                                          SELECT COUNT(*)
                                          FROM   tbl_transect_cruise WHERE tsect_id = {$row['tsect_id']}
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
                              echo '<td>'. $row['tsect_id'] . '</td>';
                              echo '<td>'. $row['pasu_fname'] . ' ' . $row['pasu_lname'] . '</td>';
                              echo '<td>'. $row['pa_name'] . '</td>';
                              echo '<td><div class="text-center">'. $row['tsect_quarter'] . ' / ' . $row['tsect_year'] . '</div></td>';
                              echo '<td>
                                <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat1'. $row['tsect_id'] . '" onclick = getData("walk",'. $row['tsect_id'] . '); '.$stat1.'>View</button>
                              </td>
                              <td>
                                <button class="btn btn-block center-block bg-maroon btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat2'. $row['tsect_id'] . '" onclick = getData("swim",'. $row['tsect_id'] . '); '.$stat2.'>View</button>
                              </td>
                              <td>
                                <button class="btn btn-block center-block bg-orange btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat3'. $row['tsect_id'] . '" onclick = getData("cruise",'. $row['tsect_id'] . '); '.$stat3.'>View</button>
                              </td>
                              <td><div class="text-center">
                                <div class="btn-group">
                                <button type="button" onclick="changeStat(0, '.$row['tsect_id'].', 3)" class="btn btn-sm btn-info">Approve</button>
                                <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a onClick="changeStat(0, '.$row['tsect_id'].',3); return false;" href="#">Accept</a></li>
                                  <li><a onClick="changeStat(1, '.$row['tsect_id'].',3); return false;" href="#">Reject</a></li>
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
            <h4 class="modal-title" id="modal_title"></h4>
          </div>
          <div class="modal-body" id="modal_body">
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                </div>
              </div>
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
      $(document).ready(function(){
        $('#mainTable').DataTable({
          "paging": true,
          /*"lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false*/
        });
      });
    </script>
    <script>
      function getData(type, valueID){
        console.log(type);
        console.log(valueID);
        $.ajax({
          url: 'model/model_transect.php',
          type: 'post',
          data: { mode: type, value: valueID}, // mode tska value ung nasa array ng _POST.
          dataType: 'json',
          success: function(result) {

            if (type == "walk") {
              console.log(result);

              var locality = [];

              locality[0] = result[0]['twalk_location'][0];

              for (var i = 1; i < result[0]['twalk_location'].length; i++) {
                var toadd = true;
                for (var j = 0; j < locality.length; j++) {   
                  if (locality[j] == result[0]['twalk_location'][i]) {
                    toadd = false;
                  }
                }
                if (toadd) {
                  var locIndex = locality.length;
                  locality[locIndex] = result[0]['twalk_location'][i];
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

                for (var j = 0; j < result[0]['twalk_location'].length; j++) {
                  if (result[0]['twalk_location'][j] == val) {

                    var twalk_id = result[0]['twalk_id'][j];
                    var twalkData = [];
                    
                    $.ajax({
                      async: false,
                      url: 'model/model_transect_data.php',
                      type: 'post',
                      data: { mode: "walk", value: twalk_id}, // mode tska value ung nasa array ng _POST.
                      dataType: 'json',
                      success: function(ajaxData) {
                        twalkData = ajaxData;            
                      },
                      error: function(error) {
                        return 'error';
                      }
                    });

                    var tablehead = '';
                    var tableloop = '';
                    var tableend = '';

                    // tablehead process
                    tablehead = '<table class="table table-bordered" id="'+valID+'Table">'+
                      '<thead>'+
                        '<tr>'+
                          '<th><div class="text-center">Species / use recorded</div></th>'+
                          '<th><div class="text-center">Number</div></th>'+
                          '<th><div class="text-center">Time (or distance from transect start)</div></th>'+
                          '<th><div class="text-center">Remarks on what was recorded</div></th>'+
                        '</tr>'+
                      '</thead><tbody>';

                    tableend = '</tbody></table>';

                    for (var d = 0; d < twalkData[0]['twalkdata_id'].length; d++) {
                      tableloop += '<tr>'+
                        '<td><div class="text-center">'+twalkData[0]['twalkdata_record'][d]+'</div></td>'+
                        '<td><div class="text-center">'+twalkData[0]['twalkdata_quantity'][d]+'</div></td>'+
                        '<td><div class="text-center">'+twalkData[0]['twalkdata_time'][d]+'</div></td>'+
                        '<td>'+twalkData[0]['twalkdata_remarks'][d]+'</td>'+
                        '</tr>';
                    }

                    var twalkdataTable = tablehead + tableloop + tableend;

                    box_body = '<div class="row">'+
                    '<div class="col-md-6">'+
                      '<dl>'+
                        '<dt>Date</dt>'+
                        '<dd>'+result[0]['twalk_date'][j]+'</dd>'+
                        '<dt>Length of Transect</dt>'+
                        '<dd>'+result[0]['twalk_lenght'][j]+'</dd>'+
                        '<dt>Comment</dt>'+
                        '<dd>'+result[0]['twalk_comment'][j]+'</dd>'+
                      '</dl>'+
                    '</div>'+
                    '<div class="col-md-6">'+
                      '<dl>'+
                        '<dt>Obeservers</dt>'+
                        '<dd>'+result[0]['twalk_observer'][j]+'</dd>'+
                        '<dt>Starting Time</dt>'+
                        '<dd>'+result[0]['twalk_time'][j]+'</dd>'+
                      '</dl>'+
                    '</div><div class="col-md-12">'+twalkdataTable+'</div></div>';
                  } 
                };

                strloopbody += strtabhead + box1 + box2 + box_body + box2end + box1end + strtabend;

                });
                var strFinal = strStart + strheadstart + strloophead + strheadend + strbodystart + strloopbody + strbodyend + strEnd; 
                //var strFinal = strupper + strmid + strlower;
              $('#modal_body').html(strFinal); 
              $('#modal_title').html('Transect Walk');
              $('.table').DataTable();
            } 

            else if (type == "swim") {
              var locality = [];

              locality[0] = result[0]['tswim_location'][0];

              for (var i = 1; i < result[0]['tswim_location'].length; i++) {
                var toadd = true;
                for (var j = 0; j < locality.length; j++) {   
                  if (locality[j] == result[0]['tswim_location'][i]) {
                    toadd = false;
                  }
                }
                if (toadd) {
                  var locIndex = locality.length;
                  locality[locIndex] = result[0]['tswim_location'][i];
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

                for (var j = 0; j < result[0]['tswim_location'].length; j++) {
                  if (result[0]['tswim_location'][j] == val) {

                    var tswim_id = result[0]['tswim_id'][j];
                    var tswimData = [];
                    console.log(tswim_id);
                    
                    $.ajax({
                      async: false,
                      url: 'model/model_transect_data.php',
                      type: 'post',
                      data: { mode: "swim", value: tswim_id}, // mode tska value ung nasa array ng _POST.
                      dataType: 'json',
                      success: function(ajaxData) {
                        console.log(ajaxData);
                        tswimData = ajaxData;            
                      },
                      error: function(error) {
                        return 'error';
                      }
                    });


                    var tablehead = '';
                    var tableloop = '';
                    var tableend = '';

                    // tablehead process
                    tablehead = '<table class="table table-bordered" id="'+valID+'Table">'+
                      '<thead>'+
                        '<tr>'+
                          '<th><div class="text-center">Species / use recorded</div></th>'+
                          '<th><div class="text-center">Number</div></th>'+
                          '<th><div class="text-center">Time (or distance from transect start)</div></th>'+
                          '<th><div class="text-center">Remarks on what was recorded</div></th>'+
                        '</tr>'+
                      '</thead><tbody>';

                    tableend = '</tbody></table>';

                   // console.log(tswimData);

                    for (var d = 0; d < tswimData[0]['tsdata_id'].length; d++) {
                      tableloop += '<tr>'+
                        '<td><div class="text-center">'+tswimData[0]['tsdata_record'][d]+'</div></td>'+
                        '<td><div class="text-center">'+tswimData[0]['tsdata_quantity'][d]+'</div></td>'+
                        '<td><div class="text-center">'+tswimData[0]['tsdata_start_time'][d]+' - '+tswimData[0]['tsdata_end_time'][d]+'</div></td>'+
                        '<td>'+tswimData[0]['tsdata_remarks'][d]+'</td>'+
                        '</tr>';
                    }

                    var tswimdataTable = tablehead + tableloop + tableend;

                    box_body = '<div class="row">'+
                    '<div class="col-md-6">'+
                      '<dl>'+
                        '<dt>Date</dt>'+
                        '<dd>'+result[0]['tswim_date'][j]+'</dd>'+
                        '<dt>Length of Transect</dt>'+
                        '<dd>'+result[0]['tswim_lenght'][j]+'</dd>'+
                        '<dt>Comment</dt>'+
                        '<dd>'+result[0]['tswim_comment'][j]+'</dd>'+
                      '</dl>'+
                    '</div>'+
                    '<div class="col-md-6">'+
                      '<dl>'+
                        '<dt>Obeservers</dt>'+
                        '<dd>'+result[0]['tswim_observer'][j]+'</dd>'+
                        '<dt>Starting Time</dt>'+
                        '<dd>'+result[0]['tswim_time'][j]+'</dd>'+
                      '</dl>'+
                    '</div><div class="col-md-12">'+tswimdataTable+'</div></div>';
                  } 
                };

                strloopbody += strtabhead + box1 + box2 + box_body + box2end + box1end + strtabend;

              });
              var strFinal = strStart + strheadstart + strloophead + strheadend + strbodystart + strloopbody + strbodyend + strEnd; 
              //var strFinal = strupper + strmid + strlower;
              $('#modal_body').html(strFinal); 
              $('#modal_title').html('Transect Swim');
              $('.table').DataTable();
            }

            else if (type == "cruise"){
              console.log(result);

              var locality = [];

              locality[0] = result[0]['tcruise_location'][0];

              for (var i = 1; i < result[0]['tcruise_location'].length; i++) {
                var toadd = true;
                for (var j = 0; j < locality.length; j++) {   
                  if (locality[j] == result[0]['tcruise_location'][i]) {
                    toadd = false;
                  }
                }
                if (toadd) {
                  var locIndex = locality.length;
                  locality[locIndex] = result[0]['tcruise_location'][i];
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

                for (var j = 0; j < result[0]['tcruise_location'].length; j++) {
                  if (result[0]['tcruise_location'][j] == val) {

                    var tcruise_id = result[0]['tcruise_id'][j];
                    var tcruiseData = [];
                    
                    $.ajax({
                      async: false,
                      url: 'model/model_transect_data.php',
                      type: 'post',
                      data: { mode: "cruise", value: tcruise_id}, // mode tska value ung nasa array ng _POST.
                      dataType: 'json',
                      success: function(ajaxData) {
                        tcruiseData = ajaxData;            
                      },
                      error: function(error) {
                        return 'error';
                      }
                    });
                    console.log(tcruiseData);

                    var tablehead = '';
                    var tableloop = '';
                    var tableend = '';

                    // tablehead process
                    tablehead = '<table class="table table-bordered" id="'+valID+'Table">'+
                      '<thead>'+
                        '<tr>'+
                          '<th><div class="text-center">Species / use recorded</div></th>'+
                          '<th><div class="text-center">Number</div></th>'+
                          '<th><div class="text-center">Time (or distance from transect start)</div></th>'+
                          '<th><div class="text-center">Remarks on what was recorded</div></th>'+
                        '</tr>'+
                      '</thead><tbody>';

                    tableend = '</tbody></table>';

                    for (var d = 0; d < tcruiseData[0]['tcdata_id'].length; d++) {
                      tableloop += '<tr>'+
                        '<td><div class="text-center">'+tcruiseData[0]['tcdata_record'][d]+'</div></td>'+
                        '<td><div class="text-center">'+tcruiseData[0]['tcdata_quantity'][d]+'</div></td>'+
                        '<td><div class="text-center">'+tcruiseData[0]['tcdata_time'][d]+'</div></td>'+
                        '<td>'+tcruiseData[0]['tcdata_remarks'][d]+'</td>'+
                        '</tr>';
                    }

                    var tcruisedataTable = tablehead + tableloop + tableend;

                    box_body = '<div class="row">'+
                    '<div class="col-md-6">'+
                      '<dl>'+
                        '<dt>Date</dt>'+
                        '<dd>'+result[0]['tcruise_date'][j]+'</dd>'+
                        '<dt>Length of Transect</dt>'+
                        '<dd>'+result[0]['tcruise_lenght'][j]+'</dd>'+
                        '<dt>Comment</dt>'+
                        '<dd>'+result[0]['tcruise_comment'][j]+'</dd>'+
                      '</dl>'+
                    '</div>'+
                    '<div class="col-md-6">'+
                      '<dl>'+
                        '<dt>Obeservers</dt>'+
                        '<dd>'+result[0]['tcruise_observer'][j]+'</dd>'+
                        '<dt>Starting Time</dt>'+
                        '<dd>'+result[0]['tcruise_time'][j]+'</dd>'+
                      '</dl>'+
                    '</div><div class="col-md-12">'+tcruisedataTable+'</div></div>';
                  } 
                };

                strloopbody += strtabhead + box1 + box2 + box_body + box2end + box1end + strtabend;

                });
                var strFinal = strStart + strheadstart + strloophead + strheadend + strbodystart + strloopbody + strbodyend + strEnd; 
                //var strFinal = strupper + strmid + strlower;
              $('#modal_body').html(strFinal); 
              $('#modal_title').html('Transect Cruise');
              $('.table').DataTable();
              
            }

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

        console.log(titleText);


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
