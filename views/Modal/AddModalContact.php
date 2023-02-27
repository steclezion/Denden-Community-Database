<?php include('JavascriptCommon_all.php') ; ?>
<div class="panel panel-default">
                     
                        <div class="panel-body">
                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus fa-2x"></i>AddNewOccupant
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
            <div class="modal-content ">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus fa-2x"></i>AddNewContact</h4>
            </div>
            <div class="modal-body">
            <div class="panel panel-default">
            <div class="panel-heading">Upon Filling This Data Your Relevancy is subjected to Maintain!!</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Basic Contact's Information</h3>
 <form  id="commentForm" method="POST" action="../Routes/Routehandler.php?R=AddPersonalInfo" name="form" onSubmit="return validate();" enctype="multipart/form-data" >
    <div class="form-group">
    <label>FirstName</label>
    <input class="form-control" type="text" id="fname" name="firstname"   onkeyup="showResult(this.value,'Firstname_a')" >
    <div id="Firstname_a"></div> 
</div>                               
   <div class="form-group">
    <label>MiddleName</label>
  <input class="form-control" type="text" id="mname" name="middlename" onkeyup="showResult(this.value,'Middlename_a')">
  <div id="Middlename_a"></div>   
</div>                     
   <div class="form-group">
    <label>LastName</label>
   <input class="form-control" type="text" id="lname" name="lastname" onkeyup="showResult(this.value,'Lastname_a')">
   <div id="Lastname_a"></div>   
</div>
   <div class="form-group">
    <label>BirthDate</label>
    <div id="DOB"></div>  <input autocomplete="off" class="form-control" onChange="showResult(this.value,'DOB')" onKeyup="showResult(this.value,'DOB')" onchange="showResult(this.value,'DOB')" onkeydown="showResult(this.value,'DOB')" id="dob" type="DATE" name="DOB"   id="dob"/>
   </div> 
   <div class="form-group">
    <label>Gender</label>
    <select id="Gender" class="form-control" name="Gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
                    </select>
</div>
   <div class="form-group">
    <label>NationalID</label>
    <div id="nationalid"></div> <input autocomplete="off" class="form-control" onChange="showResult(this.value,'nationalid')" onKeyup="showResult(this.value,'nationalid')" onkeydown="showResult(this.value,'nationalid')" id="idnational" type="text" name="nationalid"   />
   </div>  
   <div class="form-group">
    <label>ResidentID</label>
    <div id="Residence_A"></div>  <div id="Residence_AA"></div> <input value="ASC" autocomplete="off" class="form-control" onChange="showResult(this.value,'Residence_A')" onKeyup="showResult(this.value,'Residence_A')" onkeydown="showResult(this.value,'Residence_A')" id="residentvalue" type="text" name="Residence"   onKeyup="showResult(this.value,'Residence_AA')"/>
   </div> 
   <div class="form-group">
    <label>CurrentOrganization</label>
    <select autocomplete="off" class="form-control" width="12" id="orgg" name="orgnization" onchange="showResult(this.value,'org')"   >
                     <option value=""></option>
                   <?php foreach($organization_Name as $row)  
                {    ?>
                    <option value="<?php echo $row['OrganizationID'] ?>"><?php echo $row['OrganizationName'] ?> </option>
                   <?php 
                } ?>
                    </select>   </div>  
   <div class="form-group">
    <label>Nationality</label>
    <select autocomplete="off" class="form-control" id="nationality" name="nationality">
                     <option value=""></option>
                   <?php  foreach($Employee_Nationality as $row)  {    ?>
                    <option value="<?php echo $row['Id']; ?>"><?php echo $row['Name'] ?> </option>
                   <?php } ?>
                    </select>
</div>  
   <div class="form-group">
    <label>Ethinicity</label>
    <select autocomplete="off" class="form-control" id="ethinicity" name="ethinicity" >
                     <option value=""></option>
                   <?php  foreach($Employee_Ethinicity as $row)  {    ?>
                    <option value="<?php echo $row['Id'] ?>"><?php echo $row['Name'] ?> </option>
                   <?php } ?>
                    </select>
</div> 
   <div class="form-group">
    <label>CurrentJob</label>
    <input class=" form-control" autocomplete="off" onkeyup = "showResult(this.value,'Jobs')"   onkeydown = "showResult(this.value,'Jobs')" name="CurrentJobs"  id="job" type="text"  />
                    <div id="Jobs"></div>     
                </div> 
    
   <div class="form-group">
    <label>Picture</label>
   <div id="file_1"></div> <input class="form-control" onChange="showResult(this.value,'file_1')"  type="file" id="file" name="file" >
   </div>  
   <div class="form-group">
    <label>Gas-KUR Group</label>
    <select id="Gas" class="form-control" name="GasGroup">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                    </select>
                </div> 





    </div>

    <div class="col-md-6">
                                    
                                    <h3>Contact's PersonalInformation</h3>
                                  

                            <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess">Contact's  MaritalStatus</label>
                            <select autocomplete="off" class="form-control" width="12" name="martialstatus" id="ms">
                     <option value=""></option>
                   <?php foreach($MartialStatus as $row)  
                {    ?>
                    <option value="<?php echo $row['Id'] ?>"><?php echo $row['Name'] ?> </option>
                   <?php 
                } ?>
                    </select>                                        </div>

                      <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess">Contact's EmployeementStatus </label>
                            <select autocomplete="off" class="form-control" width="12" name="employeementstatus"  id="empstat"  >
                     <option value=""></option>
                   <?php foreach($EmployeementStatus as $row)  
                {    ?>
                    <option value="<?php echo $row['Id'] ?>"><?php echo $row['Name'] ?> </option>
                   <?php 
                } ?>
                    </select>                                    </div>




                                        <div class="form-group has-warning">
            <label class="control-label" for="inputWarning">Contact's Employee Class</label>
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
   <div id="Edate_a"></div>  <input type="number" class="form-control" id="inputError" name="DOE" onchange="showResult(this.value,'Edate_a')" />
                                        </div>
                                  
                                    <h3>Contact's Net-Salary</h3>
                                  
                                        <div class="form-group input-group">
                                         <div id="net_salary_a"></div>   <input name="NetSalary" id="netsalary"  type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                       

                                    <h3>Contact's Coupon-Information </h3>
                                   
  <div class=" form-group input-group input-group-md">
  <span class="input-group-addon">FamilyID</span>
 <div id="familyid_a" ></div> <input id="family_id" type="text" Value="ASF" name="familyID" onload="showResult(this.value,'familyid_a')"  onkeyup="showResult(this.value,'familyid_a')" class="form-control" placeholder="FamliyID"  />
<div id="check_family_id"></div>
</div>

<div class="form-group input-group input-group-md">
  <span class="input-group-addon">FileNumber</span>
 <div id="filenumber_a"> </div> <input type="number" name="filenumber" id="filenumber" class="form-control" placeholder="FileNumber"  onKeydown="showResult(this.value,'filenumber_a')"  onKeyup="showResult(this.value,'filenumber_a')"/>
</div>                                         
  <h3>Contact's Religion-Information</h3>
                        
                                    <div class="form-group input-group input-group-sm">
                                    <span class="input-group-addon">Religion</span>
    <select class="form-control" name="Religion"  id="religion"  >
        <option value=""></option>
                <option value="Chirstian">Chirstian</option>
                <option value="Moslem">Moslem</option>
               


                    </select>
</div>
<h3>Contact's Mothers Information</h3>
   <div class="form-group">
    <label>MothersFirstName</label>
   <input class="form-control" type="text" id="mfn" name="MFN" onkeyup="showResult(this.value,'MFName_a')">
   
   <div id="MFName_a"></div>
</div>
   <div class="form-group">
    <label>MothersMiddleName</label>
    <input class="form-control" type="text" id="mmn" name="MMN" onkeyup="showResult(this.value,'MMName_a')">
    <div id="MMName_a"></div>   
</div>
   <div class="form-group">
    <label>MothersLastName</label>
   <input class="form-control" type="text" id="mln" name="MLN" onkeyup="showResult(this.value,'MLName_a')">
   <div id="MLName_a"></div>   
</div>
<h3>Entrance Date to Denden Camp</h3>
<div class="form-group input-group input-group-sm">
<span class="input-group-addon">EntryDate</span>
<div id="entrydate_a" ></div> <input type="date" name="entrydate" id="edate"  class="form-control" placeholder="EntrydatetoCamp" />
</div>

<div class="form-group input-group input-group-sm">
<span class="input-group-addon">CampRegion-Place</span>
<?php if($Camp!='All')
{   ?>
<div id="entrydate_a" ></div> <input type="text" readonly name="Camp"  value="<?php echo $Camp;?>" id="Camp"  class="form-control" placeholder="EntrydatetoCamp" />
<?php
}

else
{
    ?>
  
<select class="form-control" name="Camp"  id="camp_region"  >
     <option value=""></option>
             <option value="Upper">UpperZone</option>
             <option value="Middle">MiddleZone</option>
             <option value="Lower">LowerZone</option>
             <option value="War-Disabled">War-Disabled</option>
</select>

<?php
}
?>
</div>
                                </div>
                            </div>
                            <h3>Remark</h3>
                        
                        <div class="form-group input-group input-group-lg">
<span class="input-group-addon">Remark</span>
<textarea  width="100" height="400"  name="remark" id="remark"  class="form-control" placeholder="Remark" />


</textarea>
</div>
                            
                        </div>
                    </div>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" onsubmit="return validate()" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include('JavascriptCommon.php'); ?>

                 