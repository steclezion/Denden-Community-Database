<?php
if( sha1(md5($Requested_Page))== $Check_POSTED_Update)
{ 
  $userName =  $_SESSION['User_Name'];
  $userName = $userName.'UPDATED';
  include_once '../Controllers/PostControllerData.php';
 $Existence_OF_IMAGE=!empty($File_Image_Name)?1:0;
switch($Existence_OF_IMAGE)
{
case 0:
$Image_Set='NO';
include_once '../Controllers/EmployeeController/ImageController/ImageControllerEmployeeUpdate.php';
break;
case 1:
$Image_Set='YES';
include_once '../Controllers/EmployeeController/ImageController/ImageControllerEmployeeUpdate.php';
break;


  }
  

}
?>