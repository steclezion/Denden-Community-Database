<?php
if( sha1(md5($Requested_Page))==$Check_POSTED_Settings_Update)
{ 
  $userName =  $_SESSION['User_Name'];
  $userName = $userName.'Updated';
  $Data = array();
  $Data = array(
    'SystemName'=>$SystemName,
    'SystemTitle'=>$SystemTitle,
    'Address'=>$Address,
    'Phone'=>$Phone,
    'PayPalEmail'=>$PayPalEmail,
    'Currency'=>$Currency,
    'SystemEmail'=>$SystemEmail,
    'Language'=>$Language,
    'Administrator'=> $userName ); //An Arrray is set in order to be Inserted into DataBase
    $condition='SettingsID='.$SettingID;

$Settings_Selected=$Settings_Certain_Actions->Update_Users($Data,'CDBO.Settings',$condition); //Employee are Selected
     //session_start();($Data,'CDBO.Shippers',$condition)
     $_SESSION['LookUpItem']=' ';
     $_SESSION['UserConfig']='';
     $_SESSION['Prefrences']='active';

  if ($Settings_Selected ==1 )
  { 
   
     $Message= "^"."Configuration  updated Sucessfully"."^"."Settings.php";
     $Http = "../views/Settings.php?Requested_Message=1$Message";
     header("location:$Http");
  
  }
  else
  {
     $Message="^"."SQLSERVER ERROR"."^"."Settings.php";
      $Http = "../views/Settings.php?Requested_Message=2$Message";
     header("location:$Http");
  }

}
?>