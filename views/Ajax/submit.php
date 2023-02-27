<?php
  
        @$Submit_Firstname=$_GET['Submit_Firstname'];
        @$Middlename= $_GET['Middlename'];
        @$Lastname= $_GET['Lastname'];
        @$MotherFirstName=$_GET['MotherFirstName'];
        @$MotherMiddletName=$_GET['MotherMiddletName'];
        @$MotherLastName=$_GET['MotherLastName'];
        @$Nationality=$_GET['Nationality'];
        @$Ethinicity=$_GET['Ethinicity'];
        @$BasicSalaryNew=$_GET['BasicSalaryNew'];
        @$BasicSalaryOld=$_GET['BasicSalaryOld'];
        @$MiliraryID=$_GET['MiliraryID'];
        @$DateofRecruitment=$_GET['DateofRecruitment'];
        @$OrganizationID=$_GET['OrganizationID'];
        @$SuborganizationID=$_GET['SuborganizationID'];
        @$DivisionID=$_GET['DivisionID'];
        @$SubdivisionID=$_GET['SubdivisionID'];
        @$CurrentJob=$_GET['CurrentJob'];
        @$EmployeementClass=$_GET['EmployeementClass'];
        @$EmployeeStatus=$_GET['EmployeeStatus'];
        @$DriverLence=$_GET['DriverLence'];
        @$MartialStatus=$_GET['MartialStatus'];
        @$PaidBy=$_GET['PaidBy'];
        @$Scars=$_GET['Scars'];
        @$BloodType=$_GET['BloodType'];
        @$remarks=$_GET['remarks'];
        @$EmployeementDate=$_GET['EmployeementDate'];
        @$Round=$_GET['Round'];
        @$file = $_GET['File'];
       
        
        
$EmployeeID =uniqid();        
 
   

 
echo "<h1>Data Hasbeen Saved 
EmployeeID Given= $EmployeeID
 FirstName=$Submit_Firstname 
 MiddleName=$Middlename 
 LastName=$Lastname
 Mother Last name=$MotherFirstName
 Mother Middle name =$MotherMiddletName
 Mother Last Name = $MotherLastName
 Nationality=s$Nationality
 $Ethinicity
 $BasicSalaryNew
 $BasicSalaryOld
 $MiliraryID
 $DateofRecruitment
 $OrganizationID
 $SuborganizationID
 $DivisionID
 $SubdivisionID
 $CurrentJob
 $EmployeementClass
 $EmployeeStatus
 $DriverLence
 $MartialStatus
 $PaidBy
 $Scars
 $BloodType
 $remarks
 $EmployeementDate
 $Round     
 $file   

 </h1>";
 echo '<button type="button" id="Submit" onclick="showResult(1,"Submit")" class="btn btn-primary">update changes</button>
 <a href="Javascript:Route_Page("PersonalInfo")" > <button type="button" onclick="Route_Page("PersonalInfo")" class="btn btn-danger"><i class="fa fa-refresh"></i></button></a>';
 $file=$_FILES["file"]["tmp_name"];
 $target_dir = "../uploads/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

 ?>
 