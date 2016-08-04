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
            Recently Approved Reports
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Compiled Reports</h3>
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
                      <th>P.A. Super Intendent</th>
                      <th>Date</th>
                      <th>Protected Area</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td><button class="btn btn-block btn-info" data-toggle="modal" data-target="#reportsModal">View</button></td>
                    </tr>
                    <tr>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td><button class="btn btn-block btn-info" data-toggle="modal" data-target="#reportsModal">View</button></td>
                    </tr>
                    <tr>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td><button class="btn btn-block btn-info" data-toggle="modal" data-target="#reportsModal">View</button></td>
                    </tr>
                    <tr>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td><button class="btn btn-block btn-info" data-toggle="modal" data-target="#reportsModal">View</button></td>
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
                  <div class="nav-tabs-green">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#fgd" data-toggle="tab">Focus Group Discussion</a></li>
                      <li><a href="#field-diary" data-toggle="tab">Field Diary</a></li>
                      <li><a href="#photo-doc" data-toggle="tab">Photo Documentation</a></li>
                      <li><a href="#transect" data-toggle="tab">Transect</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="active tab-pane" id="fgd">
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><b>Main Issues Discussed (Format 1)</b></a></li>
                            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><b>Matrix for Resource Uses (Format 2)</b></a></li>
                            <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false"><b>Matrix for Species Observed (Format 3)</b></a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                              <!-- box widget shit -->                     
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title"><b>Protected Area Name</b></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <div class="box-group" id="accordion">
                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                    <div class="panel box box-primary">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">Bgy. Morong, Mt. Kanlaon Natural Park</a>
                                        </h4>
                                      </div>
                                      <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="box-body">
                                          <h4>Resource uses chosen for monitoring:</h4>
                                          <ul>
                                            <li>Hunting of wild pigs,</li>
                                            <li>hunting of wild deer,</li>
                                            <li>freshwater fish catch,</li>
                                            <li>use of household timber,</li>
                                            <li>lobster catch.</li>
                                          </ul>
                                          <p>The Group stated that hunting of wild pigs has decreased since last quarter but this
                                          was attributed to seasonal changes and not to a decrease in the pig population. There
                                          was no change in the number of people involved in hunting wild pigs since last quarter,
                                          only normal seasonal changes. However, the number of wild pigs is still below what it
                                          was in previous years. The barangay has therefore recently decided to establish a
                                          closed season for hunting in December and January. Blasting of wild pigs is practised,
                                          particularly in the fields, in order to prevent pigs eating the rice. There was a short
                                          discussion of blasting around how to solve the fact that blasting is illegal according to
                                          the law but considered important for the protection of the rice harvest. No solution
                                          was found but the discussion will continue.
                                          <br><br>
                                          There are still very many traps. The Group discussed the need to limit the number of
                                          traps; no agreement was reached within the Group but all agreed that over-hunting was
                                          taking place. One of the Group members gave the example that it took 4 days to catch
                                          one pig with 3 traps in the vicinity of lower Blos River.
                                          <br><br>
                                          All pigs are reported to have been consumed within the Barangay, with some of the pigs
                                          being sold to other barangay members (should be continued with results on the other
                                          resource uses, hunting of wild deer, catch of freshwater fish, use of household timber,
                                          catch of lobster).</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel box box-danger">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                                            Collapsible Group Danger
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="box-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel box box-success">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                                            Collapsible Group Success
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="box-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- /.box-body -->
                              </div><!-- /.box -->
                              <!-- end of box 1 shit -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title"><b>Protected Area Name</b></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <div class="box">
                                    <div class="box-header">
                                      <h3 class="box-title">Matrix for Resource Uses</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                      <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th>Resource use</th>
                                            <th>Place extracted</th>
                                            <th>Method of Extraction</th>
                                            <th>Quantity extracted by CMG members</th>
                                            <th>Quantity extracted by others in the Bgy.</th>
                                            <th>Total number of days/hours spent in extraction by CMG members</th>
                                            <th>Use and other remarks</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                              Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                              Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                              Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td>5.5</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                              Explorer 6</td>
                                            <td>Win 98+</td>
                                            <td>6</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td>7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td>6</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td>1.9</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.1</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.1</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.2</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.2</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.3</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.3</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.4</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.4</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.5</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.5</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.6</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.8</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Seamonkey 1.1</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Epiphany 2.20</td>
                                            <td>Gnome</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td>125.5</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>Safari 1.3</td>
                                            <td>OSX.3</td>
                                            <td>312.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>Safari 2.0</td>
                                            <td>OSX.4+</td>
                                            <td>419.3</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>Safari 3.0</td>
                                            <td>OSX.4+</td>
                                            <td>522.1</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>OmniWeb 5.5</td>
                                            <td>OSX.4+</td>
                                            <td>420</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>iPod Touch / iPhone</td>
                                            <td>iPod</td>
                                            <td>420.1</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>S60</td>
                                            <td>S60</td>
                                            <td>413</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 7.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 8.0</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 8.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.0</td>
                                            <td>Win 95+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.2</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.5</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera for Wii</td>
                                            <td>Wii</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Nokia N800</td>
                                            <td>N800</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Nintendo DS browser</td>
                                            <td>Nintendo DS</td>
                                            <td>8.5</td>
                                            <td>C/A<sup>1</sup></td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>KHTML</td>
                                            <td>Konqureror 3.1</td>
                                            <td>KDE 3.1</td>
                                            <td>3.1</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>KHTML</td>
                                            <td>Konqureror 3.3</td>
                                            <td>KDE 3.3</td>
                                            <td>3.3</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>KHTML</td>
                                            <td>Konqureror 3.5</td>
                                            <td>KDE 3.5</td>
                                            <td>3.5</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Tasman</td>
                                            <td>Internet Explorer 4.5</td>
                                            <td>Mac OS 8-9</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.1</td>
                                            <td>Mac OS 7.6-9</td>
                                            <td>1</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.2</td>
                                            <td>Mac OS 8-X</td>
                                            <td>1</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.1</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>Links</td>
                                            <td>Text only</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>Lynx</td>
                                            <td>Text only</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td>-</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>PSP browser</td>
                                            <td>PSP</td>
                                            <td>-</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>U</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                            <th>Resource use</th>
                                            <th>Place extracted</th>
                                            <th>Method of Extraction</th>
                                            <th>Quantity extracted by CMG members</th>
                                            <th>Quantity extracted by others in the Bgy.</th>
                                            <th>Total number of days/hours spent in extraction by CMG members</th>
                                            <th>Use and other remarks</th>
                                          </tr>
                                        </tfoot>
                                      </table>
                                    </div><!-- /.box-body -->
                                  </div><!-- /.box -->
                                </div><!-- /.box-body -->
                              </div><!-- /.box -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title"><b>Protected Area Name</b></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <div class="box">
                                    <div class="box-header">
                                      <h3 class="box-title">Matrix for Resource Uses</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                      <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th>Species</th>
                                            <th>Place</th>
                                            <th>Numbers</th>
                                            <th>How observed</th>
                                            <th>Date</th>
                                            <th>Name of observer</th>
                                            <th>Remarks</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                              Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                              Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                              Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td>5.5</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                              Explorer 6</td>
                                            <td>Win 98+</td>
                                            <td>6</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td>7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td>6</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td>1.9</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.1</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.1</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.2</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.2</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.3</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.3</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.4</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.4</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.5</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.5</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.6</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.8</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Seamonkey 1.1</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Gecko</td>
                                            <td>Epiphany 2.20</td>
                                            <td>Gnome</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td>125.5</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>Safari 1.3</td>
                                            <td>OSX.3</td>
                                            <td>312.8</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>Safari 2.0</td>
                                            <td>OSX.4+</td>
                                            <td>419.3</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>Safari 3.0</td>
                                            <td>OSX.4+</td>
                                            <td>522.1</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>OmniWeb 5.5</td>
                                            <td>OSX.4+</td>
                                            <td>420</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>iPod Touch / iPhone</td>
                                            <td>iPod</td>
                                            <td>420.1</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Webkit</td>
                                            <td>S60</td>
                                            <td>S60</td>
                                            <td>413</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 7.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 8.0</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 8.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.0</td>
                                            <td>Win 95+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.2</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.5</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Opera for Wii</td>
                                            <td>Wii</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Nokia N800</td>
                                            <td>N800</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Presto</td>
                                            <td>Nintendo DS browser</td>
                                            <td>Nintendo DS</td>
                                            <td>8.5</td>
                                            <td>C/A<sup>1</sup></td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>KHTML</td>
                                            <td>Konqureror 3.1</td>
                                            <td>KDE 3.1</td>
                                            <td>3.1</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>KHTML</td>
                                            <td>Konqureror 3.3</td>
                                            <td>KDE 3.3</td>
                                            <td>3.3</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>KHTML</td>
                                            <td>Konqureror 3.5</td>
                                            <td>KDE 3.5</td>
                                            <td>3.5</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Tasman</td>
                                            <td>Internet Explorer 4.5</td>
                                            <td>Mac OS 8-9</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.1</td>
                                            <td>Mac OS 7.6-9</td>
                                            <td>1</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.2</td>
                                            <td>Mac OS 8-X</td>
                                            <td>1</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.1</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>Links</td>
                                            <td>Text only</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>Lynx</td>
                                            <td>Text only</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td>-</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Misc</td>
                                            <td>PSP browser</td>
                                            <td>PSP</td>
                                            <td>-</td>
                                            <td>C</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                          <tr>
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>U</td>
                                            <td> 4</td>
                                            <td>X</td>
                                          </tr>
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                            <th>Species</th>
                                            <th>Place</th>
                                            <th>Numbers</th>
                                            <th>How observed</th>
                                            <th>Date</th>
                                            <th>Name of observer</th>
                                            <th>Remarks</th>
                                          </tr>
                                        </tfoot>
                                      </table>
                                    </div><!-- /.box-body -->
                                  </div><!-- /.box -->
                                </div><!-- /.box-body -->
                              </div><!-- /.box -->
                            </div><!-- /.tab-pane -->
                          </div><!-- /.tab-content -->
                        </div><!-- /.nav-tabs-custom -->
                      </div><!--/.tab-pane -->
                      <div class="tab-pane" id="field-diary">
                        <div class="box box-solid">
                          <div class="box-header with-border">
                            <h3 class="box-title"><b>Protected Area Name</b></h3>
                          </div><!-- /.box-header -->
                          <div class="box-body">
                            <div class="box-group" id="fdaccordion">
                              <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                              <div class="panel box box-primary">
                                <div class="box-header with-border">
                                  <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#fdaccordion" href="#fdcollapseOne" aria-expanded="false" class="collapsed">Bgy. Orani</a>
                                  </h4>
                                </div>
                                <div id="fdcollapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                  <div class="box-body">
                                    <ul class="timeline">
                                      <!-- timeline time label -->
                                      <li class="time-label">
                                        <span class="bg-blue">10 Feb. 2014</span>
                                      </li>
                                      <!-- /.timeline-label -->
                                      <!-- timeline item -->
                                      <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-clock-o bg-green"></i>
                                        <div class="timeline-item">
                                          <h3 class="timeline-header"><a href="#">12:05</a></h3>
                                          <div class="timeline-body">
                                            Today nag beach kami with my boyfriend. Ang saya saya namin. We were taking selfies and eat together with subuan pa. xD I'm so kilig talaga. &lt;3
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-clock-o bg-green"></i>
                                        <div class="timeline-item">
                                          <h3 class="timeline-header"><a href="#">12:16</a></h3>
                                          <div class="timeline-body">
                                            Lorem ipsum keme keme keme 48 years tungril pamentos planggana pinkalou intonses krung-krung emena gushung emena gushung tungril tetetet at ang tungril shonget shokot ano Cholo urky na ang chaka shonga-shonga tamalis ng fayatollah kumenis ugmas kasi nang at bakit bakit at ang ano.
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-clock-o bg-green"></i>
                                        <div class="timeline-item">
                                          <h3 class="timeline-header"><a href="#">13:55</a></h3>
                                          <div class="timeline-body">
                                            Pamenthol biway Mike krang-krang pranella tamalis at bakit warla krung-krung na tungril boyband at ang klapeypey-klapeypey pamin na ang tanders kasi Mike bakit effem Cholo krang-krang kemerloo krung-krung kasi nang juts ugmas na chipipay na lorem ipsum keme keme ang pamentos buya neuro quality control bella bokot bonggakea mabaho mahogany na intonses pamentos ng at nang jupang-pang wiz.

                                            Bonggakea tanders jowabella balaj paminta intonses boyband fayatollah kumenis juts ang biway boyband ma-kyonget ang ng doonek katol at ang chopopo na ang planggana ang ang conalei pamenthol quality control bakit ng nang at ang at bakit ng wiz ng na planggana ng ng bakit bakit sa urky wiz shala sa shonga lulu nang boyband borta.
                                          </div>
                                        </div>
                                      </li>
                                      <!-- END timeline item -->
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="panel box box-danger">
                                <div class="box-header with-border">
                                  <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#fdaccordion" href="#fdcollapseTwo" class="collapsed" aria-expanded="false">Collapsible Group Danger</a>
                                  </h4>
                                </div>
                                <div id="fdcollapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                  <div class="box-body">
                                    <ul class="timeline">
                                      <!-- timeline time label -->
                                      <li class="time-label">
                                        <span class="bg-blue">10 Feb. 2014</span>
                                      </li>
                                      <!-- /.timeline-label -->
                                      <!-- timeline item -->
                                      <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-clock-o bg-green"></i>
                                        <div class="timeline-item">
                                          <h3 class="timeline-header"><a href="#">12:05</a></h3>
                                          <div class="timeline-body">
                                            Met Juan at Pinagbanderahan, Orani from barangay proper with: 
                                            2 bundles of rattans consisting of a total of 50 poles, average diameter 3 cm average length 5m.
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                          <!-- timeline icon -->
                                          <i class="fa fa-clock-o bg-green"></i>
                                          <div class="timeline-item">
                                              <h3 class="timeline-header"><a href="#">12:16</a></h3>
                                              <div class="timeline-body">
                                                  Met Juan at Pinagbanderahan, Orani from barangay proper with: 
                                                  2 bundles of rattans consisting of a total of 50 poles, average diameter 3 cm average length 5m.
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <!-- timeline icon -->
                                          <i class="fa fa-clock-o bg-green"></i>
                                          <div class="timeline-item">

                                              <h3 class="timeline-header"><a href="#">13:55</a></h3>

                                              <div class="timeline-body">
                                                  Met Juan at Pinagbanderahan, Orani from barangay proper with: 
                                                  2 bundles of rattans consisting of a total of 50 poles, average diameter 3 cm average length 5m.
                                              </div>
                                          </div>
                                      </li>
                                      <!-- END timeline item -->
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="panel box box-success">
                                <div class="box-header with-border">
                                  <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#fdaccordion" href="#fdcollapseThree" class="collapsed" aria-expanded="false">
                                      Collapsible Group Success
                                    </a>
                                  </h4>
                                </div>
                                <div id="fdcollapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                  <div class="box-body">
                                    <ul class="timeline">
                                      <!-- timeline time label -->
                                      <li class="time-label">
                                        <span class="bg-blue">10 Feb. 2014</span>
                                      </li>
                                      <!-- /.timeline-label -->
                                      <!-- timeline item -->
                                      <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-clock-o bg-green"></i>
                                        <div class="timeline-item">
                                          <h3 class="timeline-header"><a href="#">12:05</a></h3>
                                          <div class="timeline-body">
                                            Met Juan at Pinagbanderahan, Orani from barangay proper with: 
                                            2 bundles of rattans consisting of a total of 50 poles, average diameter 3 cm average length 5m.
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-clock-o bg-green"></i>
                                        <div class="timeline-item">
                                          <h3 class="timeline-header"><a href="#">12:16</a></h3>
                                          <div class="timeline-body">
                                            Met Juan at Pinagbanderahan, Orani from barangay proper with: 
                                            2 bundles of rattans consisting of a total of 50 poles, average diameter 3 cm average length 5m.
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-clock-o bg-green"></i>
                                        <div class="timeline-item">
                                          <h3 class="timeline-header"><a href="#">13:55</a></h3>
                                            <div class="timeline-body">
                                              Met Juan at Pinagbanderahan, Orani from barangay proper with: 
                                              2 bundles of rattans consisting of a total of 50 poles, average diameter 3 cm average length 5m.
                                            </div>
                                        </div>
                                      </li>
                                      <!-- END timeline item -->
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      </div><!-- /.tab-pane -->
                      <div class="tab-pane" id="photo-doc">
                        <div class="box box-solid">
                          <div class="box-header with-border">
                            <h3 class="box-title"><b>Brgy. Alas-as, San Nicolas, Batangas</b></h3>
                          </div>
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
                      </div><!-- /.tab-pane -->
                      <div class="tab-pane" id="transect">
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#tr-tab_1" data-toggle="tab" aria-expanded="true"><b>Transect Walk</b></a></li>
                            <li class=""><a href="#tr-tab_2" data-toggle="tab" aria-expanded="false"><b>Transect Swim</b></a></li>
                            <li class=""><a href="#tr-tab_3" data-toggle="tab" aria-expanded="false"><b>Transect Cruise</b></a></li>
                            <!-- <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="tr-tab_1">
                            <!-- box widget shit -->                    
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title"><b>Protected Area Name</b></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <div class="box-group" id="traccordion">
                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                    <div class="panel box box-primary">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#traccordion" href="#trcollapseOne" aria-expanded="false" class="collapsed">Bgy. Morong, Mt. Kanlaon Natural Park</a>
                                        </h4>
                                      </div>
                                      <div id="trcollapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                                          <table id="example10" class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th>Species/use recorded</th>
                                                <th>Number</th>
                                                <th>Time or Distance from Transect Start</th>
                                                <th>Remarks on what was recorded</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>Rain tree</td>
                                                <td>5</td>
                                                <td>5:39 am</td>
                                                <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                              <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                              </tr>
                                            </tbody>
                                            <tfoot>
                                              <tr>
                                                <th>Species/use recorded</th>
                                                <th>Number</th>
                                                <th>Time or Distance from Transect Start</th>
                                                <th>Remarks on what was recorded</th>
                                              </tr>
                                            </tfoot>
                                          </table>
                                        </div><!-- /.box-body -->
                                      </div>
                                    </div>
                                    <div class="panel box box-danger">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#traccordion" href="#trcollapseTwo" class="collapsed" aria-expanded="false">Collapsible Group Danger</a>
                                        </h4>
                                      </div>
                                      <div id="trcollapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                                          <table id="example11" class="table table-bordered table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                               <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                              </tbody>
                                              <tfoot>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </tfoot>
                                          </table>
                                        </div><!-- /.box-body -->
                                      </div>
                                    </div>
                                    <div class="panel box box-success">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#traccordion" href="#trcollapseThree" class="collapsed" aria-expanded="false"> Collapsible Group Success</a>
                                        </h4>
                                      </div>
                                      <div id="trcollapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                                            <table id="example3" class="table table-bordered table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                               <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                              </tbody>
                                              <tfoot>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </tfoot>
                                            </table>
                                        </div><!-- /.box-body -->
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- /.box-body -->
                              </div><!-- /.box -->                       
                            <!-- end of box 1 shit -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane" id="tr-tab_2">                   
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title"><b>Protected Area Name</b></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <div class="box-group" id="accordion2">
                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                    <div class="panel box box-primary">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="false" class="collapsed">Bgy. Morong, Mt. Kanlaon Natural Park</a>
                                        </h4>
                                      </div>
                                      <div id="collapseOne2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                                            <table id="example4" class="table table-bordered table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                               <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                              </tbody>
                                              <tfoot>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </tfoot>
                                            </table>
                                        </div><!-- /.box-body -->
                                      </div>
                                    </div>
                                    <div class="panel box box-danger">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" class="collapsed" aria-expanded="false">Collapsible Group Danger</a>
                                        </h4>
                                      </div>
                                      <div id="collapseTwo2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                                            <table id="example5" class="table table-bordered table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                               <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                              </tbody>
                                              <tfoot>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </tfoot>
                                            </table>
                                        </div><!-- /.box-body -->
                                      </div>
                                    </div>
                                    <div class="panel box box-success">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" class="collapsed" aria-expanded="false">Collapsible Group Success</a>
                                        </h4>
                                      </div>
                                      <div id="collapseThree2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                                            <table id="example6" class="table table-bordered table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                               <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                              </tbody>
                                              <tfoot>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </tfoot>
                                            </table>
                                        </div><!-- /.box-body -->
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- /.box-body -->
                              </div><!-- /.box -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane" id="tr-tab_3">                    
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title"><b>Protected Area Name</b></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <div class="box-group" id="accordion3">
                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                    <div class="panel box box-primary">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3" aria-expanded="false" class="collapsed">Bgy. Morong, Mt. Kanlaon Natural Park</a>
                                        </h4>
                                      </div>
                                      <div id="collapseOne3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                                            <table id="example7" class="table table-bordered table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                               <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                              </tbody>
                                              <tfoot>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </tfoot>
                                            </table>
                                        </div><!-- /.box-body -->
                                      </div>
                                    </div>
                                    <div class="panel box box-danger">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3" class="collapsed" aria-expanded="false">
                                            Collapsible Group Danger
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseTwo3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                                            <table id="example8" class="table table-bordered table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                               <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                              </tbody>
                                              <tfoot>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </tfoot>
                                            </table>
                                        </div><!-- /.box-body -->
                                      </div>
                                    </div>
                                    <div class="panel box box-success">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3" class="collapsed" aria-expanded="false">
                                            Collapsible Group Success
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseThree3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                                            <table id="example9" class="table table-bordered table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                               <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                                <tr>
                                                  <td>Rain tree</td>
                                                  <td>5</td>
                                                  <td>5:39 am</td>
                                                  <td>Seen planted along the way</td>
                                                </tr>
                                              </tbody>
                                              <tfoot>
                                                <tr>
                                                  <th>Species/use recorded</th>
                                                  <th>Number</th>
                                                  <th>Time or Distance from Transect Start</th>
                                                  <th>Remarks on what was recorded</th>
                                                </tr>
                                              </tfoot>
                                            </table>
                                        </div><!-- /.box-body -->
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- /.box-body -->
                              </div><!-- /.box -->
                            </div><!-- /.tab-pane -->
                          </div><!-- /.tab-content -->
                        </div>
                      </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                  </div>
                  <!-- /.nav-tabs-custom -->
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
    </script>
  </body>
</html>