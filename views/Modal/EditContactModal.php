<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/3.3.6/css/bootstrap.min.css">
  <script src="../assets/1.12.0/jquery.min.js"></script>
  <script src="../assets/3.3.6/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function()
{
// Show the Modal on load
$("#myModal").modal({backdrop: "static"});
$("#myModal").modal("show");
});
</script>
<?php
$table_name="`HR.occupantinfo`";
$Condition="PID="."'".$PersonalID."'";
$selected_occupant_info=@$occupantInfo_Certain_Actions->Select_Users_Where($table_name,$Condition);
foreach($selected_occupant_info as $roww){}

$HROccupantInfo=$occupantInfo_Certain_Actions->Select_Users_Where('`HR.occupantinfo`',$Condition);
foreach($HROccupantInfo as $moww){}



    $Firstname=$roww['FirstName'];
    $MiddleName=$roww['MiddleName'];
    $LastName=$roww['LastName'];

    $MotherFirstname=$roww['MotherFirstName'];
    $MotherMiddlename=$roww['MotherMiddleName'];
    $MotherLastname=$roww['MotherLastName'];


    $organization=$roww['CurrentOrganization']; 
    $Nationality=$roww['Nationality'];
    $Ethinincity=$roww['Ethinicity'];
    $CurrentJobs=$roww['CurrentJobs'];
    $MaritalStatus=$roww['MaritalStatus'];
    $EmployeementClass=$roww['EmployeementClass'];
    $EmployeementStatus=$roww['EmployeementStatus'];

$FirstName = $occupantInfo_Certain_Actions->Select_Users_Where('`mol.eritreannames`',"ID=$Firstname");
$MiddleName = $occupantInfo_Certain_Actions->Select_Users_Where('`mol.eritreannames`',"ID=$MiddleName");
$LastName = $occupantInfo_Certain_Actions->Select_Users_Where('`mol.eritreannames`',"ID=$LastName");

$MotherFirstName = $occupantInfo_Certain_Actions->Select_Users_Where('`mol.eritreannames`',"ID=$MotherFirstname");
$MotherMiddleName = $occupantInfo_Certain_Actions->Select_Users_Where('`mol.eritreannames`',"ID=$MotherMiddlename");
$MotherLastName = $occupantInfo_Certain_Actions->Select_Users_Where('`mol.eritreannames`',"ID=$MotherLastname");

$organization=$occupantInfo_Certain_Actions->Select_Users_Where('`company.organization`',"OrganizationID=$organization");
$Nationality=$occupantInfo_Certain_Actions->Select_Users_Where('`company.LookupItem`',"ID=$Nationality");
$Ethinincity=$occupantInfo_Certain_Actions->Select_Users_Where('`company.LookupItem`',"ID=$Ethinincity");
$CurrentJobs=$occupantInfo_Certain_Actions->Select_Users_Where('`wlo.jobslevelfive`',"ID=$CurrentJobs");
$MaritalStatus=$occupantInfo_Certain_Actions->Select_Users_Where('`company.LookupItem`',"ID=$MaritalStatus");
$EmployeementClass=$occupantInfo_Certain_Actions->Select_Users_Where('`company.LookupItem`',"ID=$EmployeementClass");
$EmployeementStatus=$occupantInfo_Certain_Actions->Select_Users_Where('`company.LookupItem`',"ID=$EmployeementStatus");


foreach($EmployeementStatus as $employeementStatus){} 

foreach($CurrentJobs as $currentJobs){}  foreach($MaritalStatus as $maritalStatus){}  foreach($EmployeementClass as $employeementClass){}


foreach($organization as $orrganization){}  foreach($Nationality as $nationality){}  foreach($Ethinincity as $ethinincity){}

foreach($FirstName as $Firstname){}  foreach($MiddleName as $Middlename){}  foreach($LastName as $Lastname){}

foreach($MotherFirstName as $MotherFirstname){}  foreach($MotherMiddleName as $MotherMiddlename){}  foreach($MotherLastName as $MotherLastname){}







    

?>
 <script src="../assets_2/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>

<script src="../assets_2/bootstrap-wysihtml5/lib/js/prettify.js"></script>

<script src="../assets_2/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>


<link rel="stylesheet" type="text/css" href="../assets_2/bootstrap-wysihtml5/lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="../assets_2/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
<style>

.input-group-addon
{
    bgcolor:red;
    color:Green;
    padding:10px;
}
#Camp,#filenumber_E,#Religion_E,#GroupGas_E,#Nationality_E,#Gender_E,#OrganizationName_E,#Ethinicity_E,#MaritalStatus_E,#EmployeementStatus_E,#EmployeementClass_E
{

     color:red;
     marquee-behavoiur:slide;
}


</style>

 <div class="panel panel-default">
                     
                     <div class="panel-body">
                         
                         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
         <div class="modal-content ">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus fa-2x"></i>EditContact</h4>
         <img class="img-thumbnail" alt="Cinque Terre" width="304" height="236" src="<?php echo $roww['Picture'];  ?>" name="pp"/>
<span class="alert alert-info">ID</span>:<?php echo $PersonalID; ?>
<span class="alert alert-info">FullName</span><?php echo   $roww['FirstName']." ".$roww['MiddleName']."".$roww['LastName'];     ?>

         </div>
         <div class="modal-body">
         <div class="panel panel-default">
         <div class="panel-heading">Upon Filling This Data Your Relevancy is subjected to Maintain!!</div>
                     <div class="panel-body">
                         <div class="row">
                             <div class="col-md-6">
                                 <h3>Basic Contact's Information</h3>
<form  id="commentForm" method="POST" action="../Routes/Routehandler.php?R=ኣሰናድእመባአታዊዳታ&መለለይቁጽሪ=<?php echo $PersonalID;?>" name="form" onSubmit="return validate();" enctype="multipart/form-data" >
 <div class="form-group">
 <label>FirstName</label>
 <input value="<?php echo trim($Firstname['EnglishNames'])."____";?>" class="form-control" type="text" id="fname" name="firstname"   onkeyup="showResult(this.value,'Firstname_a')" >
 <div id="Firstname_a"></div> 
</div>   

                            
<div class="form-group">
 <label>MiddleName</label>
<input value="<?php echo trim($Middlename['EnglishNames'])."____";?>" class="form-control" type="text" id="mname" name="middlename" onkeyup="showResult(this.value,'Middlename_a')">
<div id="Middlename_a"></div>   
</div>       
              
<div class="form-group">
 <label>LastName</label>
<input value="<?php echo trim($Lastname['EnglishNames'])."____";?>" class="form-control" type="text" id="lname" name="lastname" onkeyup="showResult(this.value,'Lastname_a')">
<div id="Lastname_a"></div>   
</div>
<div class="form-group">
 <label>BirthDate</label>
 <div id="DOB"></div>  <input value="<?php echo $roww['BirthDate'];?>" autocomplete="off" class="form-control" onChange="showResult(this.value,'DOB')" onKeyup="showResult(this.value,'DOB')" onchange="showResult(this.value,'DOB')" onkeydown="showResult(this.value,'DOB')" id="dob" type="DATE" name="DOB"   id="dob"/>
</div> 

<div class="form-group input-group input-group-md">
<span class="input-group-addon">Gender</span>
<input name="Gender_E" id="Gender_E" class="form-control" readonly value="<?php echo $roww['Gender'];?>"/>
<select id="Gender" class="form-control" name="Gender">
<option value=""></option>
<option value="M">Male</option>
<option value="F">Female</option>
</select>
</div>


<div class="form-group">
 <label>NationalID</label>
 <div id="nationalid"></div> <input value="<?php echo $roww['NationalID'];?>" autocomplete="off" class="form-control" onChange="showResult(this.value,'nationalid')" onKeyup="showResult(this.value,'nationalid')" onkeydown="showResult(this.value,'nationalid')" id="idnational" type="text" name="nationalid"   />
</div>  


<div class="form-group">
 <label>ResidentID</label>
 <div id="Residence_A"></div> <input  value="<?php echo $roww['ResidentID'];?>" value="ASC" autocomplete="off" class="form-control" onChange="showResult(this.value,'Residence_A')" onKeyup="showResult(this.value,'Residence_A')" onkeydown="showResult(this.value,'Residence_A')" id="residentvalue" type="text" name="Residence"   />
</div> 



<div class="form-group input-group input-group-md">
<span class="input-group-addon">CurrentOrganization</span>
<input class="form-control" name="OrganizationName_E" id="OrganizationName_E" type="text" readonly value="<?php echo $moww['CurrentOrganization']."||".$orrganization['OrganizationName'];?>"/>
 <select autocomplete="off" class="form-control" width="12" id="orgg" name="orgnization" onchange="showResult(this.value,'org')" >
                  <option value=""></option>
                <?php foreach($organization_Name as $row)  
             {    ?>
                 <option value="<?php echo $row['OrganizationID'] ?>"><?php echo $row['OrganizationName'] ?> </option>
                <?php 
             } ?>
                 </select>   </div>  
				 
				 
				 
<div class="form-group input-group input-group-md">
<span class="input-group-addon">Nationality</span>
<input class="form-control" name="Nationality_E" id="Nationality_E" readonly type="text" value="<?php echo $moww['Nationality']."||".$nationality['Name'];?>"     />

 <select autocomplete="off" class="form-control" id="nationality" name="nationality">
                  <option value=""></option>
                <?php  foreach($Employee_Nationality as $row)  {    ?>
                 <option value="<?php echo $row['Id']; ?>"><?php echo $row['Name'] ?> </option>
                <?php } ?>
                 </select>
</div>  
<div class="form-group input-group input-group-md">
<span class="input-group-addon">Ethinicity</span>
<input class="form-control" name="Ethinicity_E" id="Ethinicity_E" readonly type="text" value="<?php echo $moww['Ethinicity']."||".$ethinincity['Name'];?>"/>


 <select autocomplete="off" class="form-control" id="ethinicity" name="ethinicity" >
                  <option value=""></option>
                <?php  foreach($Employee_Ethinicity as $row)  {    ?>
                 <option value="<?php echo $row['Id'] ?>"><?php echo $row['Name'] ?> </option>
                <?php } ?>
                 </select>
</div> 
<div class="form-group">
 <label>CurrentJob</label>
 <input value="<?php echo $moww['CurrentJobs'].$currentJobs['LevelFiveJobs']."____";?>" class="form-control" autocomplete="off" onkeyup = "showResult(this.value,'Jobs')"   onkeydown = "showResult(this.value,'Jobs')" name="CurrentJobs"  id="job" type="text"  />
                 <div id="Jobs"></div>     
             </div> 
 
<div class="form-group">
 <label>Picture</label>
 <img src="<?php echo $roww['Picture'];?>" width="100" height="100" />
 <input type="hidden" id="Pic" value="<?php echo $roww['Picture'];  ?>" />
<div id="file_1"></div> <input class="form-control" onChange="showResult(this.value,'file_1')"  value="<?php echo $roww['Picture'];?>" type="file" id="file" name="file" >
</div>  


<div class="form-group input-group input-group-md">
<span class="input-group-addon">Gas-KUR Group</span>
<input name="GroupGas_E" id="GroupGas_E"  class="form-control" readonly type="text" value="<?php echo $roww['GroupGas'];?>"/></i>
<select id="Gas" class="form-control" name="GasGroup">
<option value=""></option>
             <option value="A">A</option>
             <option value="B">B</option>
             <option value="C">C</option>
                 </select>
             </div> </div>
			 
			 
			 

 <div class="col-md-6">
                                 
                                 <h3>Contact's PersonalInformation</h3>
                               
                                 <div class="form-group input-group input-group-md">
<span class="input-group-addon">Contact's MaritalStatus</span>
<input  class="form-control" name="MaritalStatus_E" id="MaritalStatus_E" readonly type="text" value="<?php echo $moww['MaritalStatus']."||".$maritalStatus['Name'];?>"/>

                         <select autocomplete="off" class="form-control" width="12" name="martialstatus" id="ms">
                  <option value=""></option>
                <?php foreach($MartialStatus as $row)  
             {    ?>
                 <option value="<?php echo $row['Id'] ?>"><?php echo $row['Name'] ?> </option>
                <?php 
             } ?>
                 </select>                                        </div>

                    <div class="form-group input-group input-group-md">
<span class="input-group-addon">Contact's EmployeeStatus</span>
<input name="EmployeementStatus_E"  class="form-control" id="EmployeementStatus_E" readonly type="text" value="<?php echo $moww['EmployeementStatus']."".$employeementStatus['Name'];?>"/>

                         <select autocomplete="off" class="form-control" width="12" name="employeementstatus"  id="empstat"  >
                  <option value=""></option>
                <?php foreach($EmployeementStatus as $row)  
             {    ?>
                 <option value="<?php echo $row['Id'] ?>"><?php echo $row['Name'] ?> </option>
                <?php 
             } ?>
                 </select>                                    </div>



    <div class="form-group input-group input-group-md">
<span class="input-group-addon">Contact's EmployeeClass</span>
<input class="form-control" name="EmployeementClass_E" id="EmployeementClass_E" readonly type="text" value="<?php echo $moww['EmployeementClass']."||".$employeementClass['Name'];?>"/>


<select autocomplete="off" class="form-control" width="12" name="employeementclass"  id="empclass" >
                  <option value=""></option>
                <?php foreach($EmployeementClass as $row)  
             {    ?>
                 <option value="<?php echo $row['Id'] ?>"><?php echo $row['Name'] ?> </option>
                <?php 
             } ?>
                 </select></div>
                                     <div class="form-group has-error">
     <label class="control-label" for="inputError">Contact's Family Number(ቑጽሪ ስድራቤት)</label>
<div id="Edate_a"></div>  <input type="number" value="<?php echo $roww['FamilyNumber'] ?>"  class="form-control" id="inputError" name="DOE" onchange="showResult(this.value,'Edate_a')" />
                                     </div>
                               
                                 <h3>Contact's Net-Salary</h3>
                               
                                     <div class="form-group input-group">
                                      <div id="net_salary_a"></div>   <input value="<?php echo $roww['NetSalary'] ?>"  name="NetSalary" id="netsalary"  type="text" class="form-control">
                                         <span class="input-group-addon">.00</span>
                                     </div>
  <h3>Contact's Coupon-Information </h3>
                                
<div class=" form-group input-group input-group-md">
<span class="input-group-addon">FamilyID</span>
<div id="familyid_a" ></div> <input id="family_id" value="<?php echo $roww['CouponFamilyID'] ?>" type="text" Value="ASF" name="familyID" onload="showResult(this.value,'familyid_a')"  onkeyup="showResult(this.value,'familyid_a')" class="form-control" placeholder="FamliyID"  />
<div id="check_family_id"></div>
</div>

<div class="form-group input-group input-group-md">
<span class="input-group-addon">FileNumber</span>
<input value="<?php echo $roww['CouponFileNumber']; ?>" class="form-control" type="text" id="filenumber_E" name="filenumber_E" readonly />
<div id="filenumber_a"> </div> <input value="<?php echo $roww['CouponFileNumber']; ?>" type="number" name="filenumber" id="filenumber" class="form-control" placeholder="FileNumber"  onKeydown="showResult(this.value,'filenumber_a')"  onKeyup="showResult(this.value,'filenumber_a')"/>
</div>                                         
<h3>Contact's Religion-Information</h3>
                     
<div class="form-group input-group input-group-md">
<span class="input-group-addon">Contact's Religion</span>
<input id="Religion_E" name="Religion_E" class="form-control" readonly type="text" value="<?php echo $roww['Religion'];?>"/>

 <select class="form-control" name="Religion"  id="religion"  >
     <option value=""></option>
             <option value="Chirstian">Chirstian</option>
             <option value="Moslem">Moslem</option>
            


                 </select>
</div>
<h3>Contact's Mothers Information</h3>
<div class="form-group">
 <label>MothersFirstName</label>
<input value="<?php echo trim($MotherFirstname['EnglishNames'])."____";?>" class="form-control" type="text" id="mfn" name="MFN" onkeyup="showResult(this.value,'MFName_a')">

<div id="MFName_a"></div>
</div>
<div class="form-group">
 <label>MothersMiddleName</label>
 <input value="<?php echo trim($MotherMiddlename['EnglishNames'])."____";?>"  class="form-control" type="text" id="mmn" name="MMN" onkeyup="showResult(this.value,'MMName_a')">
 <div id="MMName_a"></div>   
</div>
<div class="form-group">
 <label>MothersLastName</label>
<input value="<?php echo trim($MotherLastname['EnglishNames'])."____";?>" class="form-control" type="text" id="mln" name="MLN" onkeyup="showResult(this.value,'MLName_a')">
<div id="MLName_a"></div>   
</div>
<h3>Entrance Date to Denden Camp</h3>
<div class="form-group input-group input-group-md">
<span class="input-group-addon">EntryDate</span>
<div id="entrydate_a" ></div> <input value="<?php echo $roww['EntryDateCamp'];?>"  type="date" name="entrydate" id="edate"  class="form-control" placeholder="EntrydatetoCamp" />
</div>

<div class="form-group input-group input-group-md">
<span class="input-group-addon">CampRegion-Place</span>
<input type="text" readonly value="<?php echo trim($roww['CampRegion']);?>"  name="Camp_E"   id="Camp"  class="form-control" placeholder="Region/Zone" />
<select class="form-control" name="Camp_Region"  id="camp_region"  >
     <option value=""></option>
             <option value="Upper">UpperZone</option>
             <option value="Middle">MiddleZone</option>
             <option value="Lower">LowerZone</option>
             <option value="War-Disabled">War-Disabled</option>
</select>
</div>
                             </div>
                         </div>
                         <h3>Remark</h3>
                     
                     <div class="form-group">
<span class="input-group-addon">Prevoius Remark:
<input name="Remark_E" type="Text" value="<?php echo $roww['Remark'];?>" id="Remark_E"/>
<textarea  id="textarea"    PlaceHolder="<?php echo $roww['Remark'];?>" name="remark" id="remark"  class="form-control" placeholder="Remark" />

</textarea>
<script>
	$('#textarea').wysihtml5();
    $('#textareaa').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>

</div>
                         
                     </div>
                 </div>
                                 </div>
                                     <div class="modal-footer">
                                         <?php
                                        $Requested=substr($PersonalID,5,5);
                                        if($Requested==0)
                                        {
                                            $page="Upper";
                                        }
                                        if($Requested==1)
                                        {
                                            $page="Middle";
                                        }
                                        if($Requested==2)
                                        {
                                            $page="Lower";
                                        }
             
                                              ?>
                                     <a href="javascript:Route_Page('<?php echo $page;?>')" ><button type="button" class="btn btn-default" >Close</button></a>
                                         <button type="submit" onsubmit="return validate()" class="btn btn-primary">Save changes</button>
                                     </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                   <?php include('JavascriptCommon_Edit.php'); ?>
                   