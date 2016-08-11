<?php

  #starting session
  session_start();
  if ((isset($_SESSION['uname']) !='')) 
  {
    if($_SESSION['type'] == 1)
    {
      header("location: admin_profile.php");
    }
    elseif($_SESSION['type'] == 3)
    {
      header("location: pasu_profile.php");
    }
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
    <title>HeadBIOMES | Focus Group Discussion</title>
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
                      <th>ID</th>
                      <th style="width: 15%;">
                      	<div class="text-center">PASu</div>
                      </th>
                      <th><div class="text-center">Year / Quarter</th>
                      <th><div class="text-center">Main Issues Discussed (Method 1)</div></th>
                      <th><div class="text-center">Matrix for Resource Uses (Method 2)</div></th>
                      <th><div class="text-center">Matrix for Species Observed (Method 3)</div></th>
                      <th style="width: 115px;"><div class="text-center">Action</div></th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Dean Winchester</td>
                      <td>3rd 2015</td>
                      <td>
                        <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;" data-toggle="modal" data-target="#f1Modal">View</button>
                      </td>
                      <td>
                        <button class="btn btn-block center-block bg-maroon btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <button class="btn btn-block center-block bg-orange btn-sm" style="width: 50%;">View</button>
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
                      <td>2</td>
                      <td>Sam Winchester</td>
                      <td>3rd 2015</td>
                      <td>
                        <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <button class="btn btn-block center-block bg-maroon btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <button class="btn btn-block center-block bg-orange btn-sm" style="width: 50%;">View</button>
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
                      <td>3</td>
                      <td>Misha Collins</td>
                      <td>3rd 2015</td>
                      <td>
                        <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <button class="btn btn-block center-block bg-maroon btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <button class="btn btn-block center-block bg-orange btn-sm" style="width: 50%;">View</button>
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
                      <td>4</td>
                      <td>Bobby Singer</td>
                      <td>3rd 2015</td>
                      <td>
                        <button class="btn btn-block center-block bg-purple btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <button class="btn btn-block center-block bg-maroon btn-sm" style="width: 50%;">View</button>
                      </td>
                      <td>
                        <button class="btn btn-block center-block bg-orange btn-sm" style="width: 50%;">View</button>
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
	          <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Bgy. Morong, Mt. Kanlaon Natural Park</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Bgy. Bundok</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Bgy. Maahas</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="box-group" id="accordion">
                      <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                      <div class="panel box box-primary">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                              Main Topic 1
                            </a>
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
                              Main Topic 2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                              Main Topic 2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                    </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="box-group" id="accordion2">
                      <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                      <div class="panel box box-primary">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="false" class="collapsed">
                              Main Topic 1
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" class="collapsed" aria-expanded="false">
                              Main Topic 2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" class="collapsed" aria-expanded="false">
                              Main Topic 2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                    </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <div class="box-group" id="accordion3">
                      <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                      <div class="panel box box-primary">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3" aria-expanded="false" class="collapsed">
                              Main Topic 1
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3" class="collapsed" aria-expanded="false">
                              Main Topic 2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3" class="collapsed" aria-expanded="false">
                              Main Topic 2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
                    </div>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
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
