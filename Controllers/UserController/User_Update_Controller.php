<?php
if( sha1(md5($Requested_Page))== $Check_POSTED_Shipper_Update)
{ 
  $userName =  $_SESSION['User_Name'];
  $userName = $userName.'Updated';
  $Data = array();
  $Data = array(
  'CompanyName'=>$CompanyName,
  'Phone'=>$Shipper_Phone_Number,
  'Administrator'=> $userName ); //An Arrray is set in order to be Inserted into DataBase
  $condition = 'ShipperID='.$Shipper_ID;
   $Shipper_Selected=$Shipper_Certain_Actions->Update_Users($Data,'CDBO.Shippers',$condition); //Employee are Selected
     //session_start();
  if ( $Shipper_Selected ==1 )
  { 
     $Message= "^"."Shipper with ShipperID=$Shipper_ID updated Sucessfully"."^"."Shipper.php";;
     $Http = "../views/Shipper.php?Requested_Message=1$Message";
    header("location:$Http");
  
  }
  else
  {
   echo  $Message="^"."SQLSERVER ERROR";
      $Http = "../views/Shipper.php?Requested_Message=2$Message"."^"."Shipper.php";;
     header("location:$Http");
  }

}
?>