<?php

if (isset($_POST['submit']))
{
include 'config/database.php';
include 'objects/SignIn_Class_.php';
include 'objects/Session_Class_.php';
include 'objects/Employee_Class.php';

 // get database connection
$database = new Database();
$db = $database->getConnection();
 // initialize objects
 @$Login = new Login($db);
 @$Session_Login= new Session();
 $Employee_Certain_Actions = new Employee($db); //$db DataBase Object 

$Requested_Page = $_GET['Requested_Page'];
@$Check_POSTED = $_POST['Check_Signin']; 
@$Check_POSTED_Employee = $_POST['Check_Employee_Insert']; 
if(sha1(md5($Requested_Page)) == $Check_POSTED)
{ $User_Name =$_POST['username'];
  $Password  =sha1(trim($_POST['password']));  
  $User_Error =  "<script type=\"text/javascript\"> alert( \"Login is Denied For UserName $User_Name    \"); window.location = \"index.php\";   </script>"	;
  $Session = $Session_Login->Set_Session_Login($User_Name,$Password);
  $Session_Explode = explode(":",$Session);
  $_SESSION['User_Name']= $Session_Explode[0]; 
  $_SESSION['Password'] = $Session_Explode[1];
  $_SESSION['Expire']   = $Session_Explode[2];
  $_SESSION['LogininfoKeyIdentification'] = sha1( $_SESSION['User_Name']).md5($_SESSION['Password']);
  $LogininfnoKeyIdentification =  $_SESSION['LogininfoKeyIdentification'];
  $Login_Info =$Login->Authenticating_Login_PC();
  $Login_info_PC_Name= $Login_Info[0];
  $LogStatus='Sing-in';
  $userName =  $_SESSION['User_Name'];
  $Time='GETDATE()';
  $Return_Result=$Login->Auth_Login_Information($userName,$Time,$Login_info_PC_Name,$LogininfnoKeyIdentification,$LogStatus);
  $_SESSION['LogininfoKeyIdentification'] =   $Return_Result;
 $stmt= ($Login->Check_Login($User_Name,$Password) == 0 )?$User_Error:header('location:Views/dashboard.php');
 $Pop_Up_Screen_First= ($stmt);//Check_Login($User_Name,$Password);
}
elseif(sha1(md5($Requested_Page)) != $Check_POSTED)
{
  $Pop_Up_Screen =  "<script type=\"text/javascript\">window.location = \"index.php\";   </script>"	;
}

elseif(sha1(md5($Requested_Page))== $Check_POSTED_Employee)
{
  $FirstName=$_POST['FirstName'];
  $LastName=$_POST['LastName'];
  $Title=$_POST['Title'];
  $Title_Courtesy=$_POST['Title_Of_Courtesy'];
  $EmployeeHireDate=$_POST['HireDate'];
  $EmployeeBirthDate=$_POST['BirthDate'];
  $EmployeeAddress=$_POST['Address'];
  $City=$_POST['City'];
  $Region=$_POST['Region'];
  $phone_Number=$_POST['Phone_Number'];
  $Photo=$_POST['Photo'];
  $Data = array();
  $Data = array(0=>$FirstName,1=>$LastName,2=>$Title,3=>$Title_Courtesy,4=>$EmployeeHireDate,5=>$EmployeeBirthDate,6=>$EmployeeAddress,7=>$City,8=>$Region,9=>$phone_Number,10=>$Photo);

  //$Data = [$FirstName,$LastName,$Title,$Title_Courtesy,$EmployeeHireDate,$EmployeeBirthDate,$EmployeeAddress,$City,$Region,$phone_Number,$Photo];
  $Employee_Selected=  $Select_Employee->Employee_Insert_Users($Data); //Employee are Selected
  if($Employee_Selected==1){echo "Correct";}
}










}






























?>