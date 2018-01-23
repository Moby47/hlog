<?php
require("includes/downloads.php");
require("includes/functions.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Become A H LOG Member </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
 <!-- font awesome fa fa -->
<link rel="stylesheet" href="css/vendor/icon-sets.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>H</b>LOG</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Sign Up</p>

     <em id="err_reg"></em>

    <form method="POST" action="register.php" class="reg_form">
      <div class="form-group has-feedback">
        <input type="text" class="form-control fname v_fname" name="stu_fname" placeholder="First name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
         <p class="e_fname"></p>
      </div>
       <div class="form-group has-feedback">
        <input type="text" class="form-control v_lname" name="stu_lname" placeholder="Last name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
         <p class="e_lname"></p>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="stu_email" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control pass" name="stu_password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         <i></i>
      </div>
      <div class="form-group">
                  <label>Select A Role</label>
                  <select class="form-control" name="role">
                    <option></option>
                    <option value="instructor">Instructor</option>
                   <option value="student">Student</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Course *Required</label>
                  <select class="form-control" name="stu_course">
                   <option></option>
           <?php display_courses(); ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Course *Optional</label>
                  <select class="form-control" name="stu_course2">
                    <option></option>
           <?php display_courses(); ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Course *Optional</label>
                  <select class="form-control" name="stu_course3">
                    <option></option>
           <?php display_courses(); ?>
                  </select>
                </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat  go"><span class="load"></span>  Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <p>Already A Member?<a href="index.php" class="text-center"> Sign In</a></p>

    <div>
                  <h3 class="text-center"><p class="glyphicon glyphicon-globe"></p> Hiit Plc</h3>
                  <p class="text-center">©2017 All Rights Reserved. <a href="https://web.facebook.com/mobyf">Henry Onyemaobi</a></p>
                </div>
  </div>
  <!-- /.form-box -->
  
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!--custom js-->
<script src="js/register.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
