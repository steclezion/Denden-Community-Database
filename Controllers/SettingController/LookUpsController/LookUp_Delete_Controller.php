<?php
$LookUpItemID =$Delete_Id;
$Condition ='LookUpItemId='.$LookUpItemID ;
$Deleted_Item = $LookupItem_Certain_Actions->Delete_Users('CDBO.LookUpitem',$Condition); //Employee are Are about To Be Deleted


switch($Deleted_Item)
{
case 0:
$Message= "^"."LookUpItemID with $LookUpItemID  is unable to Delete"."^"."Settings.php";
$_SESSION['LookUpItem']='active';
$_SESSION['UserConfig']='';
$_SESSION['Prefrences']='';
$Http = "../views/Settings.php?Requested_Message=2.$Message";
echo "<script> window.location='$Http' </script>";
break;
case 1:
$Message= "^"."LookUpItemID with ID=$LookUpItemID, Has Been Deleted Successfuly;Data Base Committed Fully  with No Error"."^"."Settings.php";;
$Http = "../views/Settings.php?Requested_Message=1.$Message";
echo "<script> window.location='$Http' </script>";
break;

}

?>