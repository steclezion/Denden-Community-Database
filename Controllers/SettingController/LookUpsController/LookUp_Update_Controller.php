<?php
if( sha1(md5($Requested_Page))== $Check_POSTED_LookupItem_Update)
{ 
  $userName =  $_SESSION['User_Name'];
  $userName = $userName.'Updated';
  $Data = array();
  $Data = array(
    'LookupItemName'=>$LookupItemName,
    'LookupTypeId'=> $LookUPTypeID,
    'Descritption'=>$Description,
    'Administrator'=> $userName ); //An Arrray is set in order to be Inserted into DataBase
    $condition='LookUpItemId='.$LookUpItemID;

$LookUpItemName_Selected=$Customer_Certain_Actions->Update_Users($Data,'CDBO.LookUpItem',$condition); //Employee are Selected
     //session_start();($Data,'CDBO.Shippers',$condition)
     
  if ($LookUpItemName_Selected ==1 )
  { 
    $_SESSION['LookUpItem']='active';
$_SESSION['UserConfig']='';
$_SESSION['Prefrences']='';
     $Message= "^"."LookUpItemName with LookUpItemID=$LooUPTypeID updated Sucessfully"."^"."Settings.php";
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