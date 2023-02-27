<?php
if( sha1(md5($Requested_Page))== $Check_POSTED_LookupType_Inserted)
{ 
  $userName =  $_SESSION['User_Name'];
  $userName =  $userName.'ADDED';
  include_once '../Controllers/PostControllerData.php';
  $LookupItem_Certain_Actions= new LookupItems($db);
  $LookUpItem_Selected_MAX=$LookupItem_Certain_Actions->Max_Users('CDBO.LookupType','LookupTypeId'); //LookUpItemID MAX value is Selected
  $LookupTypeID=$LookUpItem_Selected_MAX+1;

$Data = array();
$Data = array(
'LookupTypeId'=> $LookupTypeID,
'LookupTypeName'=>$LookUptypeName,
'Desciption'=>$Description,
'Administration'=> $userName ); //An Arrray is set in order to be Inserted into DataBase

 $LookUpTypename_Selected=$LookupItem_Certain_Actions->Insert_Userss($Data,'CDBO.LookupType'); //Employee are Selected
   //session_start();
   $_SESSION['LookUpType']='active';
   $_SESSION['UserConfig']='';
   $_SESSION['LookUpItem']='';
   $_SESSION['Prefrences']='';

if ($LookUpTypename_Selected ==1 )
{ 
   $Message= "^"."New LookUpType  Data Inserted Sucessfully"."^"."Settings.php";
   $Http = "../views/Settings.php?Requested_Message=1$Message";
  header("location:$Http");

}
else
{
 echo  $Message='^'.'SQLSERVER ERROR'."^"."Settings.php";
    $Http = "../views/Settings.php?Requested_Message=2$Message";
   header("location:$Http");
}

}


?>