<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
 function showhide(id) {
    var e = document.getElementById(id);
    e.style.display = (e.style.display == 'block') ? 'none' : 'block';
 }
</script>


<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets_2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets_2/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
 DendenCampHR
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     --
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../../assets_2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets_2/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets_2/demo/demo.css" rel="stylesheet" />
</head>

<body class="offline-doc">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="#pablo">DENDEN HEROS' CAMP</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
    <a class="nav-link" href="examples/dashboard.html">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" " target="_blank">
              Have an issue?
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image: url('../../assets_2/img/header.jpg');"></div>
    <div class="container text-center">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1 class="title">
            DENDEN HR DATA ANALYSIS
          </h1>
          <h3 class="description">Version v1.3.0</h3>
          <br/>
      
        	<a href="javascript:showhide('Login')" class="btn btn-primary btn-round btn-lg">Sign-in</a>
									<br><br><br>
									<div id="Login" style="display:none;">
                                    <?php
    echo '<form class="form-login" action="../../Routes/RouteHandler.php?R='.sha1(md5("Login")).'&T='.sha1(time()).'"  method="POST">'; ?>
      
      <input width="50" value="<?php echo sha1(md5('Sign-in')); ?>" class ="form-control" type="hidden" name="Check_Signin">
<span style="color:YELLOW"> UserName:&nbsp;&nbsp;&nbsp;<br></span><input width="50" class ="form-control" type="text" name="username">
 &nbsp<span style="color:YELLOW">Password:&nbsp;&nbsp;&nbsp;</span><input class ="form-control" type="password" name="password">
    &nbsp;&nbsp;&nbsp;	<span class="btn btn-danger btn-round btn-lg"> <input type="submit" value="LogIn" class="form-control" name="submit"></span>
										
					                 </form>
		                                   </div>
        </div>
      </div>
    </div>
  </div>
 <?php include('../footer.php'); ?>
  <!--   Core JS Files   -->
  <script src="../../assets_2/js/core/jquery.min.js"></script>
  <script src="../../assets_2/js/core/popper.min.js"></script>
  <script src="../../assets_2/js/core/bootstrap.min.js"></script>
  <script src="../../assets_2/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src=""></script>
  <!-- Chart JS -->
  <script src="../../assets_2/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets_2/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets_2/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets_2/demo/demo.js"></script>
</body>

</html>
