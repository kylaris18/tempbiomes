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
    <title>PASuBIOMES | Transect</title>
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
            Transect
            <small>Walk-Swim-Cruise</small>
            <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
                   Add Transect </button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Transect</h4>
      </div>
      <div class="modal-body">
      <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      Choose Transect <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Walk</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Swim</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cruise</a></li>
                      <li role="presentation" class="divider"></li>
                    </ul>
                  </li>
                  </div>
                    <div class="form-group">
                      <label >Date:</label>
                      <input  class="form-control" id="exampleInputPassword1" placeholder="MM/DD/YYYY">
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Done</button>
      </div>
    </div>
  </div>
</div>
          </h1>
        </section>
          </h1>
        </section>
        <section class="content">
          <div class="box-body" style="display: block;">
            <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><b>Transect Walk</b></a></li>
                      <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><b>Transect Swim</b></a></li>
                      <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false"><b>Transect Cruise</b></a></li>
                      <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                          Actions <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit All</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete All</a></li>
                          <li role="presentation" class="divider"></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Send to Admin</a></li>
                        </ul>
                      </li> -->
                      <!-- <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab_1">
                        <!-- box widget shit -->                    
                        <div class="row">
                          <div class="col-md-12">
                            <div class="box">
                              <div class="box-header with-border">
                                <h3 class="box-title">Transect Report</h3>
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
                                  <thead><tr>
                                    <!-- <th>ID</th>
                                    <th style="width: 15%;">
                                      <div class="text-center">PASU</div>
                                    </th> -->
                                    <th><div class="text-center">ID</div></th>
                                    <th><div class="text-center">Protected Area</div></th>
                                    <th><div class="text-center">Year / Quarter</div></th>
                                    <th><div class="text-center">Main Issues Discussed (Method 1)</div></th>
                                    <th style="width: 115px;"><div class="text-center">Action</div></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                      <?php
                     include 'database/database.php';
                     $pdo = Database::connect();
                     $sql = 'SELECT tbl_transect.tsect_id, tbl_transect.tsect_year, tbl_transect.tsect_quarter
                      FROM tbl_transect
                      INNER JOIN tbl_protected_area
                      ON tbl_transect.tsect_id=tbl_protected_area.pa_location';
                     foreach ($pdo->query($sql) as $row) {
                              echo '<tr>';
                              echo '<td>'. $row['tsect_id'] . '</td>';
                              echo '<td>'. $row['pa_location'] . '</td>';
                              echo '<td>'. $row['tsect_quarter'] . ' / ' . $row['tsect_year'] . '</td>';
                              echo '<td>
                                <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat1'. $row['tsect_id'] . '" onclick = getData("format1", '. $row['tsect_id'] . ');>View</button>
                              </td>
                              <td>
                                <button class="btn btn-block center-block bg-blue btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat1'. $row['tsect_id'] . '" onclick = getData("format2", '. $row['tsect_id'] . ');>View</button>
                              </td>
                              <td>
                                <button class="btn btn-block center-block bg-green btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal" id="btnFormat1'. $row['tsect_id'] . '" onclick = getData("format3", '. $row['tsect_id'] . ');>View</button>
                              </td>
                              <td>
                                <div class="btn-group">
                                <button type="text" class="btn btn-info" data-toggle="modal" data-target="#modal">Actions</button>
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Add</a></li>
                                  <li><a href="#">Edit</a></li>
                                  <li><a href="#">Delete</a></li>
                                </ul>
                              </div>
                              </td>';
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
                      </div><!-- /.tab-pane -->
                      </div>
                     

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
                          <div class="box-body">
                            <div class="col-md-6">
                              <dl>
                              <dt>Date</dt>
                              <dd>June 1, 2015</dd>
                              <dt>Starting Time</dt>
                              <dd>5:59 AM</dd>
                              <dt>Comment</dt>
                              <dd>Sunny weather, dry and dusty trail</dd>
                              </dl>
                            </div>
                            <div class="col-md-6">
                              <dl>
                                <dt>Obeservers</dt>
                                <dd>Charlene Jovanne B. Constantino</dd>
                                <dd>Royce Ann A. Lascano</dd>
                                <dd>Geraldine U. de Chavez</dd>
                                <dd>Angellizza R. Ramirez</dd>
                              </dl>
                            </div>
                            <div id="example4_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example4_length"><label>Show <select name="example4_length" aria-controls="example4" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example4" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example4_info">
                                        <thead>
                                          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Species/use recorded: activate to sort column descending">Species/use recorded</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Number: activate to sort column ascending">Number</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Time or Distance from Transect Start: activate to sort column ascending">Time or Distance from Transect Start</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Remarks on what was recorded: activate to sort column ascending">Remarks on what was recorded</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr></tbody>
                                        <tfoot>
                                          <tr><th rowspan="1" colspan="1">Species/use recorded</th><th rowspan="1" colspan="1">Number</th><th rowspan="1" colspan="1">Time or Distance from Transect Start</th><th rowspan="1" colspan="1">Remarks on what was recorded</th></tr>
                                        </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1 to 10 of 17 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example4_previous"><a href="#" aria-controls="example4" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example4" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example4" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button next" id="example4_next"><a href="#" aria-controls="example4" data-dt-idx="3" tabindex="0">Next</a></li></ul></div></div></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-danger">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                              Locality
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="box-body">
                            <div class="col-md-6">
                              <dl>
                              <dt>Date</dt>
                              <dd>June 1, 2015</dd>
                              <dt>Starting Time</dt>
                              <dd>5:59 AM</dd>
                              <dt>Comment</dt>
                              <dd>Sunny weather, dry and dusty trail</dd>
                              </dl>
                            </div>
                            <div class="col-md-6">
                              <dl>
                                <dt>Obeservers</dt>
                                <dd>Charlene Jovanne B. Constantino</dd>
                                <dd>Royce Ann A. Lascano</dd>
                                <dd>Geraldine U. de Chavez</dd>
                                <dd>Angellizza R. Ramirez</dd>
                              </dl>
                            </div>
                            <div id="example4_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example4_length"><label>Show <select name="example4_length" aria-controls="example4" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example4" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example4_info">
                                        <thead>
                                          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Species/use recorded: activate to sort column descending">Species/use recorded</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Number: activate to sort column ascending">Number</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Time or Distance from Transect Start: activate to sort column ascending">Time or Distance from Transect Start</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Remarks on what was recorded: activate to sort column ascending">Remarks on what was recorded</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr></tbody>
                                        <tfoot>
                                          <tr><th rowspan="1" colspan="1">Species/use recorded</th><th rowspan="1" colspan="1">Number</th><th rowspan="1" colspan="1">Time or Distance from Transect Start</th><th rowspan="1" colspan="1">Remarks on what was recorded</th></tr>
                                        </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1 to 10 of 17 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example4_previous"><a href="#" aria-controls="example4" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example4" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example4" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button next" id="example4_next"><a href="#" aria-controls="example4" data-dt-idx="3" tabindex="0">Next</a></li></ul></div></div></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                             Locality
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="box-body">
                            <div class="col-md-6">
                              <dl>
                              <dt>Date</dt>
                              <dd>June 1, 2015</dd>
                              <dt>Starting Time</dt>
                              <dd>5:59 AM</dd>
                              <dt>Comment</dt>
                              <dd>Sunny weather, dry and dusty trail</dd>
                              </dl>
                            </div>
                            <div class="col-md-6">
                              <dl>
                                <dt>Obeservers</dt>
                                <dd>Charlene Jovanne B. Constantino</dd>
                                <dd>Royce Ann A. Lascano</dd>
                                <dd>Geraldine U. de Chavez</dd>
                                <dd>Angellizza R. Ramirez</dd>
                              </dl>
                            </div>
                            <div id="example4_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example4_length"><label>Show <select name="example4_length" aria-controls="example4" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example4" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example4_info">
                                        <thead>
                                          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Species/use recorded: activate to sort column descending">Species/use recorded</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Number: activate to sort column ascending">Number</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Time or Distance from Transect Start: activate to sort column ascending">Time or Distance from Transect Start</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Remarks on what was recorded: activate to sort column ascending">Remarks on what was recorded</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">Rain tree</td>
                                            <td>5</td>
                                            <td>5:39 am</td>
                                            <td>Seen planted along the way</td>
                                          </tr></tbody>
                                        <tfoot>
                                          <tr><th rowspan="1" colspan="1">Species/use recorded</th><th rowspan="1" colspan="1">Number</th><th rowspan="1" colspan="1">Time or Distance from Transect Start</th><th rowspan="1" colspan="1">Remarks on what was recorded</th></tr>
                                        </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1 to 10 of 17 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example4_previous"><a href="#" aria-controls="example4" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example4" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example4" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button next" id="example4_next"><a href="#" aria-controls="example4" data-dt-idx="3" tabindex="0">Next</a></li></ul></div></div></div>
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
     <script type="text/javascript">
      function getData(formatType, valueID)
        {
            $.ajax({
            url: 'modal_data.php',
            type: 'post',
            data: { mode: formatType, value: valueID}, // mode tska value ung nasa array ng _POST.
            dataType: 'json',
            success: function(result) {
              //console.log(result[0]['fgd1_locality'].length);
              //console.log(format);
              console.log(result);
              //console.log(valueID);
              /*var locality = [][];
              locality[0] = result[0]['fgd1_locality'][0];

              for (var i = 1; i < result[0]['fgd1_locality'].length; i++) {
                if (locality[i - 1] != result[0]['fgd1_locality'][i]) {
                  var locIndex = locality.length;
                  locality[locIndex - 1] = result[0]['fgd1_locality'][i];
                }
              };*/

              //console.log(locality);
              var str = '<h1>Provinces</h1>'; // declaration ng str na variable.
              //console.log(result[0]['fgd1_id'].size());

              // populate options to Province dropdown
              $.each(result[0]['tsect_id'], function(idx, val){
                //console.log(val[0]);
                str += '<br><p>'+val+'</p>'; // nilalagay ko n ung data galing s json s kabila dito.
              });
              
              $('#format1_modal_body').html(str); //dito ko ina-add sa modal ung str na pinaglagyan ko ng json data.


            },
            error: function(error) {
              alert(error);
            }
          });
        } 
    </script>
  </body>
</html>
