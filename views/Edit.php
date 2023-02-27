<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include('../includes/Header.php');?>
<body>


    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
              <?php  include('../includes/sidebar.php'); ?>
		
		
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                        <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Edit <?php echo $Route_Page = $_GET['TableName']; ?></h3>
        <div class="row mt">
          <div class="col-lg-12">
          <?php
          $Route_Page = $_GET['TableName'];
          $PID= $_GET['PID'];
          switch($Route_Page)
          {
          case 'OccupantInfo':
          $PersonalID=$PID;
          include('Modal/EditContactModal.php');
          break;
          
          
          }
          ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
  
   
</body>
</html>











