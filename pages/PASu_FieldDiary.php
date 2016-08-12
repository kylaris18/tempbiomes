<?php

  #starting session
  session_start();
  if ((isset($_SESSION['uname']) !='')) 
  {
    if($_SESSION['type'] == 1)
    {
      header("location: pasu_redirect.php");
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
  //var_dump($quarter);
  
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PASuBIOMES | Field Diary</title>
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
            Field Diary
           <!--  <small>Records for Approval</small> -->
           <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
  Add Field Diary
</button>
          <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Field Diary</h4>
      </div>
      <div class="modal-body">
      <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      Locality <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Brgy. Mabato</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Brgy. Mabuhangin</a></li>
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
        <section class="content">
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <!-- <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">Padro Reyes</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span> -->
              </div>
              <!-- /.user-block -->
              
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
          
              <div class="box-body" style="display: block;">
                        <div class="col-md-12">
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
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                                        Bgy. Orani
                                      </a>
                                    </h4>
                                    <div class="btn-group pull-right">
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
                                      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Add Notes</a></li>
                                        <li><a href="#">Edit </a></li>
                                        <li><a href="#">Delete</a></li>
                                      </ul>
                                    </div>
        <!-- <button type="button" class="btn btn-primary btn-sm pull-right" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Add Notes
             </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                         <div class="modal-dialog" role="document">
                        <div class="modal-content">
                     <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Add Notes</h4>
              </div>
              <div class="modal-body">
            <form>
              <div class="form-group">
                 <label for="message-text" class="control-label">Notes:</label>
                  <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save</button>
                  </div>
                 </div>
                </div>
              </div>
              </div> -->
                                  <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                      <ul class="timeline">

                                        <!-- timeline time label -->
                                        <li class="time-label">
                                            <span class="bg-blue">
                                                10 Feb. 2014
                                            </span>
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
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                                        Collapsible Group Danger
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                      <ul class="timeline">

                                        <!-- timeline time label -->
                                        <li class="time-label">
                                            <span class="bg-blue">
                                                10 Feb. 2014
                                            </span>
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
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                                        Collapsible Group Success
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                      <ul class="timeline">

                                        <!-- timeline time label -->
                                        <li class="time-label">
                                            <span class="bg-blue">
                                                10 Feb. 2014
                                            </span>
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
                        </div>
          

            </div>
            <!-- /.box-footer -->
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

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
  </body>
</html>
