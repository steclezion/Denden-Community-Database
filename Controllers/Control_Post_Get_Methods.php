<?php
//Instailize objects of Classes
 // get database connection

 // initialize objects
  $Login = new Login($db);
  $Session_Login= new Session($db);
  $Master = new Master($db);
 
//Login POST--START

switch($Route_Page_Name)
{
case sha1(md5(("Login"))) :

       @$User_Name=$_POST['username'];
       @$Password=sha1(trim($_POST['password']));  
break;

case "AddPersonalInfo":
//PersonalInformation Start
        @$Firstname=$_POST['firstname'];
        @$Middlename= $_POST['middlename'];
        @$Lastname= $_POST['lastname'];
        @$DateofBirth=$_POST['DOB'];                       
        @$Residence = $_POST['Residence'];
        @$nationality=$_POST['nationality'];
        @$Gender=$_POST['Gender'];
        @$NationalID=$_POST['nationalid'];
        @$Ethinicity=$_POST['ethinicity'];
        @$NetSalary=$_POST['NetSalary'];
        @$MotherFirstName=$_POST['MFN'];
        @$MotherMiddleName=$_POST['MMN'];
        @$MotherLastName=$_POST['MLN'];
        @$OrganizationID=$_POST['orgnization'];
        @$CurrentJobs=$_POST['CurrentJobs'];
        @$FamilyNumber=$_POST['DOE'];
        @$CurrentJob=$_POST['CurrentJobs'];
        @$EmployeementClass=$_POST['employeementclass'];
        @$MartialStatus=$_POST['martialstatus'];
        @$file =  $_FILES['file']['name'];
        @$file_content=$_FILES['file']['tmp_name'];
        @$FamilyID=$_POST['familyID'];
        @$FileNumber=$_POST['filenumber'];
        @$Religion=$_POST['Religion'];
        @$EntryDatetoCamp=$_POST['entrydate'];
        @$Remark=$_POST['remark'];
        @$CampRegion =$_POST['Camp'];
        @$GasGroup=$_POST['GasGroup'];
        @$employeementstatus=$_POST['employeementstatus'];
//PersonalInformation Post End
break;
case "ኣሰናድእመባአታዊዳታ":
//PersonalInformation Start
@$Firstname=$_POST['firstname'];
@$Middlename= $_POST['middlename'];
@$Lastname= $_POST['lastname'];
@$DateofBirth=$_POST['DOB'];                       
@$Residence = $_POST['Residence'];
@$nationality=($_POST['nationality']=="")?intval($_POST['Nationality_E']):$_POST['nationality'];
@$Gender=($_POST['Gender']=="")?($_POST['Gender_E']):($_POST['Gender']);
@$NationalID=$_POST['nationalid'];
@$Ethinicity=($_POST['ethinicity']=="")?intval($_POST['Ethinicity_E']):intval($_POST['ethinicity']);
@$NetSalary=$_POST['NetSalary'];
@$MotherFirstName=$_POST['MFN'];
@$MotherMiddleName=$_POST['MMN'];
@$MotherLastName=$_POST['MLN'];
@$OrganizationID=($_POST['orgnization']=="")?intval($_POST['OrganizationName_E']):intval($_POST['orgnization']);
@$CurrentJobs=$_POST['CurrentJobs'];
@$FamilyNumber=$_POST['DOE'];
@$CurrentJob=$_POST['CurrentJobs'];
@$EmployeementClass=($_POST['employeementclass']=="")?intval($_POST['EmployeementClass_E']):intval($_POST['employeementclass']);
@$employeementstatus=($_POST['employeementstatus']=="")?intval($_POST['EmployeementStatus_E']):intval($_POST['employeementstatus']);
@$MartialStatus=($_POST['martialstatus']=="")?intval($_POST['MaritalStatus_E']):intval($_POST['martialstatus']);
@$file =  $_FILES['file']['name'];
@$file_content=$_FILES['file']['tmp_name'];
@$FamilyID=$_POST['familyID'];
@$FileNumber=($_POST['filenumber']=="")?($_POST['filenumber_E']):($_POST['filenumber']);
@$Religion=($_POST['Religion']=="")?($_POST['Religion_E']):($_POST['Religion']);
@$EntryDatetoCamp=$_POST['entrydate'];
@$Remark=($_POST['remark']=="")?($_POST['Remark_E']):($_POST['remark']);
@$CampRegion =($_POST['Camp_Region']=="")?($_POST['Camp_E']):($_POST['Camp_Region']);
@$GasGroup=($_POST['GasGroup']=="")?($_POST['GroupGas_E']):($_POST['GasGroup']);
//PersonalInformation Post End
break;


}
























?>