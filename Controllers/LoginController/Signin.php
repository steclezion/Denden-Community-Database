<?php
     
     $User_Error="<script type=\"text/javascript\"> alert( \"Login is Denied For UserName $User_Name    \"); window.location = \"../\";   </script>";
     $Session = $Session_Login->Set_Session_Login($User_Name,$Password);
     $Session_Explode = explode(":",$Session);
     @session_start();
     $_SESSION['User_Name']= $Session_Explode[0]; 
     $_SESSION['Password'] = $Session_Explode[1];
     $_SESSION['Expire']   = $Session_Explode[2];
     $_SESSION['LogininfoKeyIdentification'] = sha1( $_SESSION['User_Name']).md5($_SESSION['Password']);
     $LogininfnoKeyIdentification =  $_SESSION['LogininfoKeyIdentification'];
     $selectDB = "MYSQLCONNECTION";
     switch($selectDB)
     {
     case "MSSQL":
     $db = $database->getMSSQLConnection();
     //$Login_Info =$Login->Authenticating_Login_PC();
     break;
     case "MYSQLCONNECTION":
     $db = $database->getMysqlConnection();
     $Login_Info =$Login->Authenticating_LoginToMYSQL_PC();
     break;
     }
    

    $Login_info_PC_Name= $Login_Info[0];
     $LogStatus='Sing-in';
     $userName =  $_SESSION['User_Name'];
     $Time='NOW()';
     $Return_Result=$Login->Auth_Login_Information($userName,$Time,$Login_info_PC_Name,$LogininfnoKeyIdentification,$LogStatus);
     $_SESSION['LogininfoKeyIdentification'] =   $Return_Result;
     $Message = "Login is Denied For UserName  ".$User_Name;
     echo $stmt= ($Login->Check_Login($User_Name,$Password) == 0 )?$Master->Message($Message,"../"):header('location:../Views/');
     
   
 
   
     

















// $Pop_Up_Screen =  "<script type=\"text/javascript\">window.location = \"index.php\";   </script>"	;
























?>