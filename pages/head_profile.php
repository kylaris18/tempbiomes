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
    <title>HeadBIOMES| Profile</title>
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
    <link rel="stylesheet" type="text/css" href="../dist/css/sweetalert.css">
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
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-success">
                <div class="box-body box-profile">
                  <img id = "defaultpic" class="profile-user-img img-responsive img-circle" src="../function/profile-picture.php" alt="User profile picture">
                  <h3 class="profile-username text-center">
                    <?php echo "". $_SESSION['h_fname'] . " " . $_SESSION['h_lname'] .""; ?>
                  </h3>
                  <p class="text-muted text-center">Head Administrator</p>
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
                    $ses_sql = mysqli_query($db,"SELECT head_email, head_gender, head_address, head_contactno FROM tbl_head WHERE head_uname='$ses_name' ");
                    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
                    $email = $row['head_email'];
                    $gender = $row['head_gender'];
                    $address = $row['head_address'];
                    $contact = $row['head_contactno'];

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
                    </p>';
                  ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Modal -->
      <div class="modal fade" id="EditModal" role="dialog">
        <div class="modal-dialog modal-md">    
          <!-- Modal content-->
          <?php
            $profdataquery = 'SELECT * from tbl_head WHERE head_id = '. $_SESSION['ID'];
            $profSql = mysqli_query($db, $profdataquery);
            $row1 = mysqli_fetch_array($profSql,MYSQLI_ASSOC);
          ?>
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Profile</h4>
            </div>
            <div class="modal-body" id="format1_modal_body">
              <form role="form" id="updateProfile">
                <div class="box-body">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="firstName" class="form-control" value="<?php echo $row1['head_fname']?>" placeholder="Firstname">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="lastName" class="form-control" value="<?php echo $row1['head_lname']?>" placeholder="Lastname">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" id="email" class="form-control" value="<?php echo $row1['head_email']?>" placeholder="Email">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                        <input type="text" id="contactno" class="form-control" value="<?php echo $row1['head_contactno']?>" placeholder="Contact Number">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" id="address" class="form-control" value="<?php echo $row1['head_address']?>" placeholder="Complete Address">
                      </div><br>
<!--                       <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="date" id="birthday" class="form-control">
                      </div><br> -->
                      <div class="input-group">
                        <label>Gender</label><br>
                        <?php
                          if ($row1['head_gender'] == "Female") {
                            echo '<input id="gender_Male" type="radio" class="flat-red" name="gender" value="Male"> Male';
                            echo '<input id="gender_Female" type="radio" class="flat-red" name="gender" value="Female" checked> Female';
                          } else {
                            echo '<input id="gender_Male" type="radio" class="flat-red" name="gender" value="Male" checked> Male';
                            echo '<input id="gender_Female" type="radio" class="flat-red" name="gender" value="Female"> Female';
                          }
                        ?>                       
                      </div>
                      <!-- <div class="input-group">
                        <label for="exampleInputFile">Change Profile Picture</label>
                        <input type="file" id="picture">
                      </div> -->
                    </div>
                </div><!-- /.box-body -->
              </form>
            </div>
            
            <div class="modal-footer">
              <button type="button" onclick="getData('<?php echo $_SESSION['ID']?>')" class="btn btn-success">Save Changes</button>
              <button type="button" data-dismiss="modal" data-target="#EditModal" class="btn btn-danger">Cancel</button>
            </div>
          </div>        
        </div>
      </div>
      
      <!-- Footer -->
      <?php include 'templates\head_footer.php';?>

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
    <!-- Sweetalert js -->
    <script src="../dist/js/sweetalert.min.js"></script>
    <script src="../dist/js/sweetalert-dev.js"></script>
    <script>
      $(function(){
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
      });
    </script>
    <script>
      function getData(profileID){

        console.log($('#firstName').val());
        swal({
          title: "Are you sure you want to continue?",
          text: "Please check content before proceeding.",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#7D26CD",
          confirmButtonText: 'Yes, please.',
          closeOnConfirm: false
        },
        function(){
          var gender;
          if(document.getElementById('gender_Male').checked) {
            gender = 'Male';
          }else if(document.getElementById('gender_Female').checked) {
            gender = 'Female';
          }
          var data={
            firstName: $('#firstName').val(),
            lastName: $('#lastName').val(),
            email: $('#email').val(),
            contactno: $('#contactno').val(),
            address: $('#address').val(),
            gender: gender,
            birthday: $('#birthday').val(),
            picture: $('#picture').val(),
            id: profileID
          }
          console.log(data);
          $.ajax({
            type: "POST",
            url: 'model/model_profData.php',
            data: data,
            success: function() {
              swal({
                title: "Success!",
                text: "Please log out then log in again to view the changes.",   
                type: "success"
              }, 
              function(){ 
                setTimeout(function(){ window.location.reload(true); }); 
              });
              
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
