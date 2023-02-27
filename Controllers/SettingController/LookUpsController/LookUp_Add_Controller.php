<?php
if( sha1(md5($Requested_Page))== $Check_POSTED_LookupItem_Inserted)
{ 
  $userName =  $_SESSION['User_Name'];
  $userName =  $userName.'ADDED';
  include_once '../Controllers/PostControllerData.php';
  $LookupItem_Certain_Actions= new LookupItems($db);
  $LookUpItem_Selected_MAX=$LookupItem_Certain_Actions->Max_Users('CDBO.LookUpItem','LookUpItemId'); //LookUpItemID MAX value is Selected
  echo $LookupItemID=$LookUpItem_Selected_MAX+1;

$Data = array();
$Data = array(
'LookUpItemId'=>$LookupItemID,
'LookupItemName'=>$LookupItemName,
'LookupTypeId'=> $LookUPTypeID,
'Descritption'=>$Description,
'Administrator'=> $userName ); //An Arrray is set in order to be Inserted into DataBase

$LookUpItemName_Selected=$Customer_Certain_Actions->Insert_Userss($Data,'CDBO.LookUpItem'); //Employee are Selected
   //session_start();
   
if ($LookUpItemName_Selected ==1 )
{ 
   $Message= "^"."LookUpItem $LookupItemName Data Inserted Sucessfully"."^"."Settings.php";
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