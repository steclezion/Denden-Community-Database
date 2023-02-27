<?php
$EmployeeId =$Delete_Id;
$Condition ='EmployeeID='.$EmployeeId;
$Deleted_Item = $Employee_Certain_Actions->Delete_Users('CDBO.Employees',$Condition); //Employee are Are about To Be Deleted
$Selected_Element= $Employee_Certain_Actions->Select_Users_Where('CDBO.Employees',$Condition); //Employee Selected

switch($Deleted_Item)
{
case 0:
$Message= '^'.'Data Deleted Sucessfully'."^"."Employees.php";
$Http = "../views/Employees.php?Requested_Message=2.$Message";
echo "<script> window.location='$Http' </script>";
break;
case 1:
$Message= "^"."Employee with ID=$EmployeeId Has Been Deleted Successfuly; Data Base Committed Fully  with No Error"."^"."Employees.php";
$Http = "../views/Employees.php?Requested_Message=1.$Message";
echo "<script> window.location='$Http' </script>";
break;

}




























?>