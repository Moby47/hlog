<?php
require("includes/downloads.php");
require("includes/functions.php");
session_start();
redirect_unauthorised();
only_student();
$fname=$_SESSION['fname'];
$stat=$_SESSION['status'];

$time=$_SESSION['date_reg'];

$course=$_SESSION['course']; $course2=$_SESSION['course2'];  $course3=$_SESSION['course3']; 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Dashboard</title>
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
   <!-- ionicon style -->
  <link rel="stylesheet" href="ionicons-2.0.1/css/ionicons.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/skins/_all-skins.min.css">
  <!-- font -->
<link rel="stylesheet" href="css/vendor/icon-sets.css">
<!-- custom style -->
  <link rel="stylesheet" href="css/style.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="student.php"  class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>log</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>H</b>LOG</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
        
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo "<b>$fname</b>" ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/user.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo "$fname" ." "."-"." ". "$stat" ?>
                  <small>Member since  <?php echo $time?> </small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="text-center">

                  <a ><?php logout(); ?>
                     <form method="POST" action="student.php"><!--form logout div-->
          
         <button type="submit"  class=" btn btn-danger center-block"  name="logout">
             <span class="glyphicon glyphicon-log-out"></span>  Logout</button>
         </form>

         
                  </a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left ">
           <img src="images/hiit.png" class="img-responsive" alt="Logo">
        </div>
        
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text"  name="search" placeholder="Find File....." class="form-control search"/>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVIGATION</li>
       
       
        <li>
          <a href="student.php">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            </span>
          </a>
        </li>

        <li>
          <a href="forum.php">
            <i class="fa fa-comments"></i> <span>Forum</span>
          </a>
        </li>
 
   <li>
          <a href="settings.php">
            <i class="fa fa-cogs"></i> <span>Settings</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"><!-- ................................content........................-->
    <!-- Content Header (Page header) -->
    <section class="content-header"><!-- ................................head........................-->
      <h1>
        C PANEL
      </h1>
      
    </section><!-- ................................head........................-->

    <!-- Main content -->
    <section class="content"><!-- ................................body........................-->
     
     <div class="row"><!-- ................................uploads/courses........................-->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4 class="count_up"></h4>

              <p>Files Available</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-document"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-folder"> </i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4>1<sup>st</sup> Course</h4>

              <p><?php echo $course; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-easel"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-book"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4>2<sup>nd</sup> Course</h4>

              <p><?php echo $course2; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-bookmarks"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-book"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4>3<sup>rd</sup> Course</h4>

              <p><?php echo $course3; ?></p>
            </div>
            <div class="icon">
              <i class="ion-ios-lightbulb-outline"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-book"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div><!-- ................................uploads/courses........................-->







<div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class=""></i> </h3>
        </div>
        <div class="box-body">
          <div class="row">
           
 <div class="col-md-6"><!-- ................................container........................-->
          <div class="box box-default"><!-- ................................downloads........................-->
            <div class="box-header with-border">
              <i class="fa fa-graduation-cap"></i>

              <h3 class="box-title">Course Files</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <ul id="pageData" class="text-center list table"></ul>

									</div>
              
              
            </div>
            <!-- /.box-body -->
          </div><!-- ................................downloads........................-->
          <!-- /.box -->

          <div class="col-md-6"><!-- ...............................search res........................-->
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-search"></i>

              <h3 class="box-title">Search Results</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
            <ul class=" display_dd">

                                    </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div><!-- ...............................search res........................-->


        </div><!-- ................................container........................-->






       

    </section><!-- ................................body........................-->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer"><!-- ................................tail........................-->
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2018 <a href="https://web.facebook.com/mobyf">Henry Onyemaobi</a>.</strong> All rights
    reserved.
  </footer><!-- ................................tail........................-->

</div><!-- ................................content........................-->
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!--custom js-->
<script src="js/student.js"></script>
</body>
</html>
