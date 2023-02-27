<?php
$UserId ="'".$Delete_Id."'";
$Condition ='[User_Name]='.$UserId ;
$condition='[User Name]='.$UserId;
$Deleted_Item_Privilege = $User_Certain_Actions->Delete_Users('AUTH.AppUsersPrivilage',$condition); //Employee are Are about To Be Deleted
$Deleted_Item = $User_Certain_Actions->Delete_Users('AUTH.AppUsers',$Condition); //Employee are Are about To Be Deleted

$Deleted_Row= ($Deleted_Item + $Deleted_Item_Privilege);

switch(trim($Deleted_Row))
{
case 0:
$Message= "^"."UserName  with $UserId is unable to Delete"."^"."Settings.php";;
$Http = "../views/Settings.php?Requested_Message=2.$Message";
echo "<script> window.location='$Http' </script>";
break;
case 1:
$Message= "^"."UserName with $UserId is unable to Delete"."^"."Settings.php";;
$Http = "../views/Settings.php?Requested_Message=2.$Message";
echo "<script> window.location='$Http' </script>";
break;
case 2:
$Message= "^"."UserName with ID=$UserId, Has Been Deleted Successfuly; Data Base Committed Fully  with No Error "."^"."Settings.php";;
$Http = "../views/Settings.php?Requested_Message=1.$Message";
echo "<script> window.location='$Http' </script>";
break;

}

?>