<?php

  #starting session
  session_start();
  if ((isset($_SESSION['uname']) !='')) 
  {
    if($_SESSION['type'] == 2)
    {
      header("location: head_profile.php");
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
    <title>AdminBIOMES | Profile</title>
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
     <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../plugins/iCheck/all.css">
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
      <?php include 'templates/admin_header.php';?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php include 'templates/admin_sidebar.php';?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="row">
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="box box-success">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="../function/profile-picture.php" alt="User profile picture">
                  <h3 class="profile-username text-center">
                    <?php 

                      echo "". $_SESSION['fname'] . " " . $_SESSION['lname'] ."";

                    ?>
                  </h3>
                  <p class="text-muted text-center">Administrator</p>
                  <button class="btn btn-success btn-block" data-toggle="modal" data-target="#EditModal"><b>Edit Profile</b></button>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php
                  #connecting to the database by calling the dbconfig file
                  require "../config/dbconfig.php";

                  $ses_name = $_SESSION['uname'];
                  $ses_sql = mysqli_query($db,"SELECT admin_email, admin_gender, admin_bday, admin_address, admin_contactno FROM tbl_admin WHERE admin_uname='$ses_name' ");
                  $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
                  $email = $row['admin_email'];
                  $gender = $row['admin_gender'];
                  $bday = $row['admin_bday'];
                  $address = $row['admin_address'];
                  $contact = $row['admin_contactno'];

                  echo '
                  <strong><i class="fa  fa-envelope margin-r-5"></i>  Email Address</strong>
                  <p class="text-muted">
                    '.$email.'
                  </p>

                  <hr>

                  <strong><i class="fa fa-phone-square margin-r-5"></i>  Contact Number</strong>
                  <p class="text-muted">
                    '.$contact.'
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Permanent Address</strong>
                  <p class="text-muted">
                    '.$address.'
                  </p>

                  <hr>

                  <strong><i class="fa fa-male margin-r-5"></i> Gender</strong>
                  <p class="text-muted">
                    '.$gender.'
                  </p>

                  <hr>

                  <strong><i class="fa fa-gift margin-r-5"></i> Birthday</strong>
                  <p class="text-muted">
                    '.$bday.'
                  </p>';
                ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-green">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Activity</a></li>
                  <li class=""><a href="#notes" data-toggle="tab" aria-expanded="false">Notes</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="box box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title">Biodiversity Management System</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                              <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                              <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
                              <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
                              <li data-target="#carousel-example-generic" data-slide-to="6" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="item active">
                                <img src="../dist/img/carousel/philippine_macaque.png" alt="First slide">
                                <div class="carousel-caption">
                                  First Slide
                                </div>
                              </div>
                              <div class="item">
                                <img src="../dist/img/carousel/rufous_hornbill.png" alt="Second slide">
                                <div class="carousel-caption">
                                  Second Slide
                                </div>
                              </div>
                              <div class="item">
                                <img src="../dist/img/carousel/philippine_deer.png" alt="Third slide">
                                <div class="carousel-caption">
                                  Third Slide
                                </div>
                              </div>
                              <div class="item">
                                <img src="../dist/img/carousel/zebra_lionfish.png" alt="Fourth slide">
                                <div class="carousel-caption">
                                  Fourth Slide
                                </div>
                              </div>
                              <div class="item">
                                <img src="../dist/img/carousel/sea_sponges.png" alt="Fifth slide">
                                <div class="carousel-caption">
                                  Fifth Slide
                                </div>
                              </div>
                              <div class="item">
                                <img src="../dist/img/carousel/tube_corals.png" alt="Sixth slide">
                                <div class="carousel-caption">
                                  Sixth Slide
                                </div>
                              </div>
                              <div class="item">
                                <img src="../dist/img/carousel/cone_shell.png" alt="Seventh slide">
                                <div class="carousel-caption">
                                  Seventh Slide
                                </div>
                              </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                              <span class="fa fa-angle-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                              <span class="fa fa-angle-right"></span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.post -->
                    
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="notes">
                    <div class="box box-success">
                      <div class="box-header ui-sortable-handle">
                        <i class="fa fa-file-text-o"></i>
                        <h3 class="box-title">Add A Note</h3>
                      </div>
                      <div class="box-body">
                        <form action="../function/add_note.php" method="post">
                          <div class="form-group">
                            <input type="text" class="form-control" name="txtSubj" placeholder="Subject">
                          </div>
                          <div>
                            <textarea class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px;" name="txtContent" placeholder="Write something here..."></textarea>
                          </div>
                          <div class="box-footer clearfix">
                          <button class="pull-right btn btn-default" name = "btnSubmit" id="sendEmail">Save <i class="fa fa-arrow-circle-right"></i></button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../function/profile-picture.php" alt="user image">
                        <span class="username">
                          <a href="#">Notes Subject</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">7:30 PM today</span>
                      </div><!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
                    </div>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <div class="modal fade" id="EditModal" role="dialog">
        <div class="modal-dialog modal-md">    
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Profile</h4>
            </div>
            <div class="modal-body" id="format1_modal_body">
              <form role="form">
                <div class="box-body">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Firstname">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Lastname">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                        <input type="text" class="form-control" placeholder="Contact Number">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" placeholder="Complete Address">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="date" class="form-control">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                        <input type="password" class="form-control" id = "exampleInputPassword" placeholder="Password">
                      </div><br>
                      <div class="input-group">
                        <label>Gender</label><br>
                        <input type="radio" class="flat-red" name="gender" value="male" checked> Male
                        <input type="radio" class="flat-red" name="gender" value="female"> Female
                      </div><br>
                      <div class="input-group">
                        <label for="exampleInputFile">Change Profile Picture</label>
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                </div><!-- /.box-body -->
              </form>
            </div>
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Save Changes</button>
              <button type="button" class="btn btn-danger">Cancel</button>
            </div>
          </div>        
        </div>
      </div>

      <!-- Footer -->
      <?php include 'templates\admin_footer.php';?>

      <!-- =============================================== -->
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function(){
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
      });
    </script>
  </body>
</html>
