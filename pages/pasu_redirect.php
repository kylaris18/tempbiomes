<?php
  #starting session
  session_start();
  include 'database/database.php';
  $pdo = Database::connect();
  $sql = "SELECT *
    FROM tbl_pasu_status
    WHERE pasu_uname = '".$_SESSION['uname']."' AND ps_status = 0;";
    //var_dump($sql);
    $ongoing = 0;
  foreach ($pdo->query($sql) as $row) {
    if ($row) {
      $ongoing = 1;
      $_SESSION['quarter'] = $row['ps_quarter'];
      $_SESSION['year'] = $row['ps_year'];
    }
  }

  if ($ongoing == 1) {
    header('Location: pasu_profile.php');
  }

  Database::disconnect();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PASuBIOMES | PASU Profile</title>
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
      
      <body>
       <!-- Site wrapper -->
       <div class="wrapper">
        <div class="content-wrapper" style="background-color:#cccccc; margin:0;">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
             <!--  <img src="../dist/img/DENRlogo.png" style="width:100%; padding-top:30%;"> -->
             <!-- <form role="form" > -->

              <div class="box box-info" style="margin-top:40%;">
                <div class="box-header with-border">
                  <h3 class="box-title">Oops!</h3>
                  <div style="float:right;"><a href="logout.php">Log out</a></div>
                </div><!-- /.box-header -->              
                <div class="box-body">

                  <div>
                    <label>Choose your option.</label><br>
                    <p>You do not have any present monitoring. What do you want to do?</p>
                  </div><br>

                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button class="btn btn-md btn-primary" style="width: 150px;" data-toggle="modal" data-target="#SetModal"> Start a new BIOMES.</button>
                  <button class="btn btn-md btn-danger" style="float: right; width: 150px;"> View Past Reacords.</button>
                </div><!-- /.box-footer -->
            </div>
          </div>
          <div class="modal fade" id="SetModal" role="dialog">
          <div class="modal-dialog modal-md">    
            <!-- Modal content-->
          
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Monitoring</h4>
              </div>
              <div class="modal-body" id="format1_modal_body">
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <select name="quarter" id="quarter">
                        <option value="1">1st Quarter</option>
                          <option value="2">2nd Quarter</option>
                          <option value="3">3rd Quarter</option>
                          <option value="4">4th Quarter</option>
                        </select>
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" id="year" placeholder="Year">
                      </div><br>
                    </div>
                  </div><!-- /.box-body -->
                </form>
              </div>

              <div class="modal-footer">
                <button type="submit" onclick="getData('<?php echo $_SESSION['uname']; ?>')" class="btn btn-primary">Continue</button>
                <button type="button" class="btn btn-danger">Cancel</button>
              </div>
            </div>        
          </div>
        </div>

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

           function getData(sessionName) {
              var data={
                quarter: $('#quarter').val(),
                year: $('#year').val(),
                id: sessionName
              }
              //console.log(data);
              $.ajax({
                url: 'model/model_redirect.php',
                type: 'post',
                data: data, // mode 0 = fgd, 1 = field diary, 2 = photo doc, 3 = transect
                success: function(result) {
                  window.location.assign("pasu_profile.php");
                },
                error: function(error) {
                  alert(error);
                }
              });
           }   
      </script>

    </body>
    </html>


