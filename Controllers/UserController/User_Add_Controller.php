<?php

if( sha1(md5($Requested_Page))== $Check_POSTED_User_Inserted)
{ 
  $userName =  $_SESSION['User_Name'];

  include_once '../Controllers/PostControllerData.php';

$Data = array(
'[User_Name]'=>$UserName,
'[Full Name]'=>$FullName,
'[Password Hash]'=>$Password,
'[Salt]'=>$Salt,
'[AboutMe]'=>$About,
'[Action_Responsible]'=> $userName ); //An Arrray is set in order to be Inserted into DataBase

$RoleID_MAX=$User_Certain_Actions->Max_Users('[AUTH].[AppUsersPrivilage]','RoleID'); //UserId MAX value is Selected
$RoleID=$RoleID_MAX+1;
$Data_Privilege = array(
  '[RoleID]'=>$RoleID,
  '[Privilege_ID]'=>$PrivilegeID,
  '[User Name]'=>$UserName,
);
 $UserInserted=$User_Certain_Actions->Insert_Userss($Data,'AUTH.AppUsers'); //Users are to be Addedd Smothly the Powe of InsertClass Hooo!
 $UserInserted_Privilege=$User_Certain_Actions->Insert_Users($Data_Privilege,'AUTH.AppUsersPrivilage'); //Users are to be Addedd Smothly the Powe of InsertClass Hooo!



   //session_start();
  
   if($UserInserted==1 && $UserInserted_Privilege==1 )
   { 
      $Message= '^'.' NEW User Data Inserted Sucessfully'."^"."Settings.php";
      $Http = "../views/Settings.php?Requested_Message=1$Message";
      header("location:$Http");
   
   }
   else
   {
       $Message='^'.'SQLSERVER ERROR-UserName is Duplicated Try with Other Possible Options Please'."^"."Settings.php";
       $Http = "../views/Settings.php?Requested_Message=2$Message";
       header("location:$Http");
   }

   
}


?>