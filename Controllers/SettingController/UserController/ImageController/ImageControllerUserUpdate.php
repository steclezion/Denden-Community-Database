<?php
 $Requested_Image=$Image_Set;

switch($Requested_Image)
{
  case 'YES':
$Employee_Image=$Employee_Certain_Actions->Image_Handler(ELIAS_COFFEE_SHOP,ELIAS_COFFEE_SHOP_IMAGE_SIZE,$File_Image_Name, $File_Image_type,$File_Image_Size,$File_Image_Temp_Name);
$image = explode('^', $Employee_Image);
 if($image[0]==1 )
 {
   $Upload_Path = $image[2].$LastName.$FirstName.$image[3];
   $Data = array();
  $Data = array('FirstName'=>$FirstName,'LastName'=>$LastName,
  'Title'=>$Title,'TitleOfCourtesy'=>$Title_Courtesy,'HireDate'=>$EmployeeHireDate,
  'BirthDate'=>$EmployeeBirthDate,'Address'=>$EmployeeAddress,
  'City'=>$City,'Region'=>$Region,'HomePhone'=>$phone_Number,
  'Photo'=>$image[1], 'PhotoPath'=>$Upload_Path,
  'Administrator'=> $userName );
   $Employee_Update_Check=$Employee_Certain_Actions->Update_Users($Data,'CDBO.Employees',$condition_Employee_Update); //Update are Selected
   //session_start();
if ($Employee_Update_Check ==1 )
{ 
  $Upload_File=move_uploaded_file($File_Image_Temp_Name,$Upload_Path);
$Message= "^"."EmployeeID=$EmployeeID updated Sucessfully"."^"."Employees.php";
  $Http = "../views/Employees.php?Requested_Message=1$Message";
   header("location:$Http");

}
else
{
  $Message="^"."SQLSERVER ERROR WITH EMPLOYEEID $EmployeeID"."^"."Employees.php";
  $Http = "../views/Employees.php?Requested_Message=2$Message";
   header("location:$Http");
}
  
}
else{
  $Message= '^'.'Image Couldnot be uploaded to the server try again Please '."^"."Employees.php";;;

  $Http = "../views/Employees.php?Requested_Message=3$Message";

  header("location:$Http");

}
break;
case 'NO':
$Data = array();
$Data = array('FirstName'=>$FirstName,'LastName'=>$LastName,
'Title'=>$Title,'TitleOfCourtesy'=>$Title_Courtesy,'HireDate'=>$EmployeeHireDate,
'BirthDate'=>$EmployeeBirthDate,'Address'=>$EmployeeAddress,
'City'=>$City,'Region'=>$Region,'HomePhone'=>$phone_Number,
'Administrator'=> $userName );
 $Employee_Update_Check=$Employee_Certain_Actions->Update_Users($Data,'CDBO.Employees',$condition_Employee_Update); //Employee are Selected
 //session_start();
if ($Employee_Update_Check ==1 )
{ 
$Upload_File=move_uploaded_file($File_Image_Temp_Name,$Upload_Path);
$Message= "^"."EmployeeID=$EmployeeID updated Sucessfully"."^"."Employees.php";
$Http = "../views/Employees.php?Requested_Message=1$Message";
 header("location:$Http");

}
else
{
$Message="^"."SQLSERVER ERROR WITH EMPLOYEEID $EmployeeID"."^"."Employees.php";
$Http = "../views/Employees.php?Requested_Message=2$Message";
 header("location:$Http");
}
break;

}
?>