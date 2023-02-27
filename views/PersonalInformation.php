<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php  include('../includes/Header.php'); ?>

<body>
    <div id="wrapper">
    <?php  include('../includes/navBar.php'); ?> 
           <!-- /. NAV TOP  -->
                <?php  include('../includes/sidebar.php'); ?> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <?php 
                    $R=$_GET['Request_Page'];
                        switch($R)
                        {
                            case sha1('Upper'):
                            $Camp="Upper";
                            break;
                            case sha1('Middle'):
                            $Camp="Middle";
                            break;
                            case sha1('Lower'):
                            $Camp="Lower";
                            break;
                            case sha1('War-Disabled'):
                            $Camp="War-Disabled";
                            break;
                            case sha1('All'):
                            $Camp="All";
                            break;
                        }
                           ?>
                        <h5><?php echo $_SESSION['User_Name']; ?>, Love to see you back. </h5>
                        <input value = "<?php echo $_SESSION['User_Name']; ?>"  id="LOP" type="hidden"/>
                        <!--  Modals-->
<div class="col-md-12" >
                  <?php 
                  if($R!=sha1('Alll')){include('Modal/AddModalContact.php'); }?>
</div>                  <?php  // include('Modal/AddModal_FOS.php'); ?>
                </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        

                        <?php 
                         $R=$_GET['Request_Page'];
                        switch($R)
                        {
                            case sha1('Upper'):
                            include('includes/UpperRegion.php');
                            break;
                            case sha1('Middle'):

                            include('includes/MiddleRegion.php');
                            break;
                            case sha1('Lower'):
                            include('includes/LowerRegion.php');
                            break;
                            case sha1('All'):
                            include('includes/AllRegion.php');
                            break;
                            case sha1('War-Disabled'):
                            include('includes/War-Disabled.php');
                            break;
                        }

                           ?>
                           
                        </div>

                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
          
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>


    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>
