<?php
@$occupantInfo_Certain_Actions= new Employee($db);
switch($Route_Page_Name)
{
 case 'InsertEmployee':
 switch ($CampRegion)
 {

    case "Upper":
    $CampRegiong=0;
    break;

    case "Middle":
    $CampRegiong=1;
    break;
    
    case "Lower":
    $CampRegiong=2;
    break;

    case "War-Disabled":
    $CampRegiong=3;
    break;
    
 }

$PID=$occupantInfo_Certain_Actions->Max_Users('`hr.occupantInfo`','SUBSTR(PID,8,11)');
 //$PID=explode('-',$PrevoiusID);
 
$uniqueID=@$occupantInfo_Certain_Actions->Generate_Random(@$DateofBirth,$CampRegiong,$PID);
 $name = $file;
 $target_dir = "../assets/EmployeeImage/";
 $target_file = $target_dir . basename($file);
// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif","mp4","avi","mpeg");
// Check extension
 if( in_array($imageFileType,$extensions_arr) ){
// Convert to base64 
$image_base64 = base64_encode(file_get_contents($file_content) );
$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
// Insert record
//$query = "insert into images(name,image) values('".$name."','".$image."')";
//Convert The Name to ID

$Firstname_Exploded = explode('____',$Firstname);
$Middlename_Exploded = explode('____',$Middlename);
$Lastname_Exploded = explode('____',$Lastname);

$MotherFirstName_Exploded=explode('____',$MotherFirstName);
$MotherLastName_Exploded=explode('____',$MotherLastName);
$MotherMiddleName_Exploded=explode('____',$MotherMiddleName);


$Fcondition = trim("'".$Firstname_Exploded[0]."'");
$Mcondition = trim("'".$Middlename_Exploded[0]."'");
$Lcondition = trim("'".$Lastname_Exploded[0]."'");


$MFcondition = trim("'".$MotherFirstName_Exploded[0]."'");
$MMcondition = trim("'".$MotherMiddleName_Exploded[0]."'");
$MLcondition = trim("'".$MotherLastName_Exploded[0]."'");


$Firstname=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$Fcondition");
$Middlename=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$Mcondition");
$Lastname=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$Lcondition");



$MotherFirstName=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$MFcondition");
$MotherMiddleName=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$MMcondition");
$MotherLastName=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$MLcondition");

foreach($Firstname as $Firstname){} foreach($Middlename as $Middlename){} foreach($Lastname as $Lastname){}

foreach($MotherFirstName as $MotherFirstName){} foreach($MotherMiddleName as $MotherMiddleName){} foreach($MotherLastName as $MotherLastName){}
    


$Data = array('PID'=> $uniqueID,'EmployeementStatus'=>$employeementstatus,'CouponFamilyID'=>$FamilyID,'CouponFileNumber'=>$FileNumber,'FirstName'=>$Firstname['L'], 'MiddleName'=>$Middlename['L'],'LastName'=>$Lastname['L'],'BirthDate'=>$DateofBirth,'FamilyNumber'=>$FamilyNumber,'EntryDateCamp'=>$EntryDatetoCamp,'Picture'=>$image,'Gender'=>$Gender,'NationalID'=>$NationalID,'ResidentID'=>$Residence,'GroupGas'=>$GasGroup,'CurrentOrganization'=>$OrganizationID,'Nationality'=>$nationality,'Ethinicity'=>$Ethinicity,'MotherFirstName'=>$MotherFirstName['L'],'MotherMiddleName'=>$MotherMiddleName['L'],'MotherLastName'=>$MotherLastName['L'],'MaritalStatus'=>$MartialStatus,'EmployeementClass'=>$EmployeementClass,'CurrentJobs'=>intval($CurrentJob),'NetSalary'=>$NetSalary,'Religion'=>$Religion,'CampRegion'=>$CampRegion,'Remark'=>$Remark,'Who'=>$_SESSION['User_Name']);

// Upload file
move_uploaded_file($file_content,$target_dir.$name);
$Employee_Inserted=$occupantInfo_Certain_Actions->Insert_Users($Data,'`hr.occupantInfo`'); //Employee are Selected
if($Employee_Inserted==1)
{ $Camp_Request=trim($CampRegion);
    $Page=sha1($Camp_Request);
$Message="<script type=\"text/javascript\"> alert( \"New Occupantnfo Successfully Saved\"); window.location = \"../Views/PersonalInformation.php?Request_Page=$Page\";   </script>";
echo $Message = ($Employee_Inserted==1)?$Message:'Error in Insertion';
}
else
{

    $Camp_Request=trim($CampRegion);
           $Page=sha1($Camp_Request);
$Message="<script type=\"text/javascript\"> alert( \"Error In Server Data couldnot Be saved Confirm to Administrator Please \"); window.location = \"../Views/PersonalInformation.php?Request_Page=$Page\";   </script>";

echo $Message = ($Employee_Inserted==1)?$Message:'Error in Insertion';}
 }

break;



case 'DeleteEmployee':
$Page=sha1('Upper');
$table_name='`hr.occupantInfo`';
$condition='PID='."'".$EmployeeID."'";
$DeleteEmployee = @$occupantInfo_Certain_Actions->Delete_Users($table_name,$condition);
$DeleteEmployee = @$occupantInfo_Certain_Actions->Delete_Users('`hr.addressinfo`',$condition);
$DeleteEmployee = @$occupantInfo_Certain_Actions->Delete_Users('`hr.dependantinfo`',$condition);
$DeleteEmployee = @$occupantInfo_Certain_Actions->Delete_Users('`hr.fieldofstudy`',$condition);
$DeleteEmployee = @$occupantInfo_Certain_Actions->Delete_Users('`hr.health`',$condition);
$DeleteEmployee = @$occupantInfo_Certain_Actions->Delete_Users('`hr.leaveinfo`',$condition);
$DeleteEmployee = @$occupantInfo_Certain_Actions->Delete_Users('`hr.spouseinfo`',$condition);


$Message="<script type=\"text/javascript\"> alert( \"PID=$EmployeeID Deleted Successfuly\"); window.location = \"../Views/PersonalInformation.php?Request_Page=$Page\";   </script>";
echo $Message = ($DeleteEmployee==1)?$Message:'Error in Deletion';

break;




case 'EditContact':

$PID = $መንነት_ቁጽሪ;
 @$name = $file;
 @$target_dir = "../assets/EmployeeImage/";
 @$target_file = $target_dir . basename($file);
// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif","mp4","avi","mpeg");
// Check extension
 if( in_array($imageFileType,$extensions_arr) ){
// Convert to base64 
$image_base64 = base64_encode(file_get_contents($file_content) );
$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
// Insert record
//$query = "insert into images(name,image) values('".$name."','".$image."')";
//Convert The Name to ID

$Firstname_Exploded = explode('____',$Firstname);
$Middlename_Exploded = explode('____',$Middlename);
$Lastname_Exploded = explode('____',$Lastname);

$MotherFirstName_Exploded=explode('____',$MotherFirstName);
$MotherLastName_Exploded=explode('____',$MotherLastName);
$MotherMiddleName_Exploded=explode('____',$MotherMiddleName);


$Fcondition = trim("'".$Firstname_Exploded[0]."'");
$Mcondition = trim("'".$Middlename_Exploded[0]."'");
$Lcondition = trim("'".$Lastname_Exploded[0]."'");


$MFcondition = trim("'".$MotherFirstName_Exploded[0]."'");
$MMcondition = trim("'".$MotherMiddleName_Exploded[0]."'");
$MLcondition = trim("'".$MotherLastName_Exploded[0]."'");


$Firstname=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$Fcondition");
$Middlename=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$Mcondition");
$Lastname=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$Lcondition");



$MotherFirstName=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$MFcondition");
$MotherMiddleName=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$MMcondition");
$MotherLastName=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$MLcondition");

foreach($Firstname as $Firstname){} foreach($Middlename as $Middlename){} foreach($Lastname as $Lastname){}

foreach($MotherFirstName as $MotherFirstName){} foreach($MotherMiddleName as $MotherMiddleName){} foreach($MotherLastName as $MotherLastName){}
    $Imcondition=trim("'".$PID."'");


    $Data = array('CouponFamilyID'=>$FamilyID,'CouponFileNumber'=>$FileNumber,'FirstName'=>$Firstname['L'], 'MiddleName'=>$Middlename['L'],'LastName'=>$Lastname['L'],'BirthDate'=>$DateofBirth,'FamilyNumber'=>$FamilyNumber,'EntryDateCamp'=>$EntryDatetoCamp,'Picture'=>$image,'Gender'=>$Gender,'NationalID'=>$NationalID,'ResidentID'=>$Residence,'GroupGas'=>$GasGroup,'CurrentOrganization'=>$OrganizationID,'Nationality'=>$nationality,'Ethinicity'=>$Ethinicity,'MotherFirstName'=>$MotherFirstName['L'],'MotherMiddleName'=>$MotherMiddleName['L'],'MotherLastName'=>$MotherLastName['L'],'MaritalStatus'=>$MartialStatus,'EmployeementClass'=>$EmployeementClass,'EmployeementStatus'=>$employeementstatus,'CurrentJobs'=>intval($CurrentJob),'NetSalary'=>$NetSalary,'Religion'=>$Religion,'CampRegion'=>$CampRegion,'Remark'=>$Remark,'Who'=>$_SESSION['User_Name']);
     
// Upload file
move_uploaded_file($file_content,$target_dir.$name);
$Employee_Updated=@$occupantInfo_Certain_Actions->Update_Users($Data,'`hr.occupantInfo`','PID='.$Imcondition); //Employee updated Command object
      
           $Camp_Request=trim($CampRegion);
           $Page=sha1($Camp_Request);
$Message="<script type=\"text/javascript\"> alert( \"PID=$PID updated Successfully\"); window.location = \"../Views/PersonalInformation.php?Request_Page=$Page\";   </script>";
echo $Message = ($Employee_Updated==1)?$Message:'Error in Insertion';
 }
 else{

    $Firstname_Exploded = explode('____',$Firstname);
    $Middlename_Exploded = explode('____',$Middlename);
    $Lastname_Exploded = explode('____',$Lastname);
    
    $MotherFirstName_Exploded=explode('____',$MotherFirstName);
    $MotherLastName_Exploded=explode('____',$MotherLastName);
    $MotherMiddleName_Exploded=explode('____',$MotherMiddleName);
    
    
    $Fcondition = trim("'".$Firstname_Exploded[0]."'");
    $Mcondition = trim("'".$Middlename_Exploded[0]."'");
    $Lcondition = trim("'".$Lastname_Exploded[0]."'");
    
    
    $MFcondition = trim("'".$MotherFirstName_Exploded[0]."'");
    $MMcondition = trim("'".$MotherMiddleName_Exploded[0]."'");
    $MLcondition = trim("'".$MotherLastName_Exploded[0]."'");
    
    
    $Firstname=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$Fcondition");
    $Middlename=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$Mcondition");
    $Lastname=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$Lcondition");
    
    
    
    $MotherFirstName=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$MFcondition");
    $MotherMiddleName=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$MMcondition");
    $MotherLastName=@$occupantInfo_Certain_Actions->Select_FixedElements_Where('ID','`MOL.EritreanNames`',"EnglishNames=$MLcondition");
    
    $Imcondition=trim("'".$PID."'");
    $Image = @$occupantInfo_Certain_Actions->Select_FixedElements_Where('Picture','`hr.occupantInfo`',"PID=$Imcondition");
    foreach($Image as $Image){} 

   foreach($Firstname as $Firstname){} foreach($Middlename as $Middlename){} foreach($Lastname as $Lastname){}
    
    foreach($MotherFirstName as $MotherFirstName){} foreach($MotherMiddleName as $MotherMiddleName){} foreach($MotherLastName as $MotherLastName){}
    
    $P=$Image['L'];
    
    $Data = array('CouponFamilyID'=>$FamilyID,'CouponFileNumber'=>$FileNumber,'FirstName'=>$Firstname['L'], 'MiddleName'=>$Middlename['L'],'LastName'=>$Lastname['L'],'BirthDate'=>$DateofBirth,'FamilyNumber'=>$FamilyNumber,'EntryDateCamp'=>$EntryDatetoCamp,'Picture'=>$P,'Gender'=>$Gender,'NationalID'=>$NationalID,'ResidentID'=>$Residence,'GroupGas'=>$GasGroup,'CurrentOrganization'=>$OrganizationID,'Nationality'=>$nationality,'Ethinicity'=>$Ethinicity,'MotherFirstName'=>$MotherFirstName['L'],'MotherMiddleName'=>$MotherMiddleName['L'],'MotherLastName'=>$MotherLastName['L'],'MaritalStatus'=>$MartialStatus,'EmployeementClass'=>$EmployeementClass,'EmployeementStatus'=>$employeementstatus,'CurrentJobs'=>intval($CurrentJob),'NetSalary'=>$NetSalary,'Religion'=>$Religion,'CampRegion'=>$CampRegion,'Remark'=>$Remark,'Who'=>$_SESSION['User_Name']);

      $Employee_Updated=@$occupantInfo_Certain_Actions->Update_Users($Data,'`hr.occupantInfo`','PID='.$Imcondition); //Employee updated Command object
   
           $Camp_Request=trim($CampRegion);
           $Page=sha1($Camp_Request);
    $Message="<script type=\"text/javascript\"> alert( \"PId=$PID updated Successfully\"); window.location = \"../Views/PersonalInformation.php?Request_Page=$Page&Camp_Request=$Camp_Request\";   </script>";
echo $Message = ($Employee_Updated==1)?$Message:'Error in Insertion';
    




    
 }





break;





}





























?>