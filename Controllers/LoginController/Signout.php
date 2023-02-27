<?php
include '../../config/database.php';
include '../../config/core.php';
include '../../objects/SignIn_Class_.php';
include '../../objects/Session_Class_.php';

$Login = new Login($db);
$Session_Out= new Session($db);
$LogStatus='Sing-out';
$LogininfoKeyIdentification = $_SESSION['LogininfoKeyIdentification'] ;
$userName =$Time=$Login_info_PC_Name='';
$Return_Result=$Login->Auth_Login_Information($userName,$Time,$Login_info_PC_Name,$LogininfoKeyIdentification,$LogStatus);
$Session_Out->SignOut();
?>