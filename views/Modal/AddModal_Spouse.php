
                     
                        <div class="panel-body">
                            
                            <div class="modal fade" id="mySPO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
            <div class="modal-content ">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus fa-2x"></i>Add SpouseInformation</h4>
            <div class="col-md-12" >
<div id="border" >
<span style="font-family:Britannic Bold;" class="alert alert-inverse alert-xs">SpouseMale-ID</span>:<b> <?php echo $id; ?></b>
<span class="alert alert-default alert-xs">FullName</span>:<b><?php echo   $row['FirstName']." ".$row['MiddleName']."".$row['LastName']?></b>
          </div>
          </div>

            </span>

<br><br>

            </div>
            <br><br><br>
            <div class="modal-body">
            <div class="panel panel-default">
            <div class="panel-heading">Upon Filling This Data Your Full-Attention is subjected to Maintain!!</div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="panel-heading">
                         SPOUSE For Occupant PID=<?php echo $id; ?>
                        </div>
                        <div class="panel-body">
  <div class="table-responsive" id="spouse_table"  onclick="myFunctionSpouse()">
<table class="table table-condensed table-bordered table-hover" id="table_spouse">
                                    <thead>
                                  
                                        <tr class="danger">
                                            <th>ID</th>
                                            <th>FullName</th>
                                            <th>Date of Birth</th>
                                            <th>National ID</th>
                                            <th>Resident ID</th>
                                            <th>Nationality</th>
                                            <th>Ethinicity</th>
                                            <th>organization</th>
                                            <th>Job</th>
                                            <th>NSalary</th>
                                            <th><i class="fa fa-minus-square"></i>Action</th>
                                            
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                   $Condition="PID="."'".$id."'"."order by  SpouseInfoID ASC";
                                    $SpouseInfo=$Master->Select_Users_Where('`HR.SpouseInfo`',$Condition);
                                    foreach($SpouseInfo as $row) 
                                    {?>
                                        <tr>
                                            <td ><?php echo $row['SpouseInfoID']; ?></td>
                                            <td><?php echo $row['FirstName']." ". $row['MiddleName']." ".$row['LastName'];  ?></td>
                                     
                                            <td><?php echo $row['BirthDate']; ?></td>
                                            <td><?php echo $row['NationalID']; ?></td>
                                            <td><?php echo $row['ResidentID']; ?></td>
                                            <td><?php echo $row['Nationality']; ?></td>
                                            <td><?php echo $row['Ethinicity']; ?></td>
                                            <td><?php echo $row['Organization']; ?></td>
                                            <td><?php echo $row['CurrentJob']; ?></td>
                                            <td><?php echo $row['NetSalary']; ?></td>
    <td> <button onclick="SpouseResult_Delete('delete','spouse_table',<?php echo $row['SpouseInfoID']; ?>,'<?php echo $row['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php  $SpouseInfoID=(intval(@$row['SpouseInfoID'])=="")?"":@$row['SpouseInfoID'];
}?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


              
</div>

<h3 id="style"><?php echo "Basic Contacts Spouse Information"; ?></h3>
 <form  id="commentForm_Spouse" method="POST" action="../Routes/Routehandler.php?R=AddSpouselInfo" name="myForm_Spouse" onSubmit="return validate_spouse();" enctype="multipart/form-data" >
 <div class="form-group">
    <label>Spouse-FirstName</label>
    <input id="SPID"  value="<?php echo @$SpouseInfoID; ?>" type="hidden" />
    <input class="form-control" disabled type="text" id="sfname" required name="sfirstname"   onkeyup="showResult_Spouse(this.value,'sFirstname_a')" >
    <input type="hidden" class="form-control" id="PID_SPOU" value="<?php echo $id;?>" />
    <div id="sFirstname_a"></div> 
</div>                               
   <div class="form-group">
    <label>Spouse-MiddleName</label>
  <input class="form-control" disabled type="text" id="smname" required  name="smiddlename" onkeyup="showResult_Spouse(this.value,'sMiddlename_a')">
  <div id="sMiddlename_a"></div>   
</div>                     
   <div class="form-group">
    <label>Spouse-LastName</label>
   <input class="form-control" disabled  type="text" id="slname" required name="lastname" onkeyup="showResult_Spouse(this.value,'sLastname_a')">
   <div id="sLastname_a"></div>   
</div>
   <div class="form-group">
    <label>Spouse-BirthDate</label>
    <div id="sDOB"></div>  <input disabled autocomplete="off"  required class="form-control"  onKeyup="showResult_Spouse(this.value,'sDOB')" onchange="showResult_Spouse(this.value,'sDOB')"  type="DATE" name="DOB"   id="sdob"/>
   </div> 
   <div class="form-group">
    <label>Spouse-NationalID</label>
    <div id="snationalid"></div> <input disabled autocomplete="off" class="form-control" onChange="showResult_Spouse(this.value,'snationalid')" onKeyup="showResult_Spouse(this.value,'snationalid')" onkeydown="showResult_Spouse(this.value,'snationalid')" id="sidnational" type="text" name="snationalid"   />
   </div>  
   <div class="form-group">
    <label>Spouse-ResidentID</label>
    <div id="sResidence_A"></div>  <div id="sResidence_AA"></div> <input disabled required value="ASC" autocomplete="off" class="form-control" onChange="showResult_Spouse(this.value,'sResidence_A')" onKeyup="showResult_Spouse(this.value,'sResidence_A')" onkeydown="showResult_Spouse(this.value,'sResidence_A')" id="sresidentvalue" type="text" name="sResidence"   onKeyup="showResult_Spouse(this.value,'sResidence_AA')"/>
   </div>     
   <div class="form-group">
    <label>Nationality</label>
    
   <input  autocomplete="off" required class="form-control" disabled onChange="showResult_Spouse(this.value,'sNationality')" onKeyup="showResult_Spouse(this.value,'sNationality')" onkeydown="showResult_Spouse(this.value,'sNationality')" id="Nationalitys" type="text" name="sNationality" />
   <div id="sNationality"></div>
</div>  
   <div class="form-group">
    <label>Ethinicity</label>
    <input  autocomplete="off" required class="form-control" v onChange="showResult_Spouse(this.value,'sEthinicity')" onKeyup="showResult_Spouse(this.value,'sEthinicity')" onkeydown="showResult_Spouse(this.value,'sEthinicity')" id="Ethinicitys" type="text" name="sEthinicity" />
   <div id="sEthinicity"></div>
</div>             
<button type="button" ><i class="now-ui-icons ui-1_simple-add"> </i>  
  <input type="checkbox" class="form-control" id="myCheck" disabled onclick="myFunction('mycheck','text')">isEmployed</button>
 
  <br>
  <div   id="text" style="display:none"  class="collapse">
  <div class="form-group">
    <label>CurrentOrganization</label>
    <input  autocomplete="off" class="form-control" disabled onChange="showResult_Spouse(this.value,'sorganization')" onKeyup="showResult_Spouse(this.value,'sorganization')" onkeydown="showResult_Spouse(this.value,'sorganization')" id="organizations" type="text" name="sorganization" />
   <div id="sorganization"></div>
                    </div>  
 <div class="form-group">
    <label>CurrentJob</label>
    <input class=" form-control" autocomplete="off" disabled onkeyup = "showResult_Spouse(this.value,'sJobs')"   onkeydown = "showResult(this.value,'sJobs')" name="sCurrentJobs"  id="jobss" type="text"  />
                    <div id="sJobs"></div>     
                </div> 

<div class="form-group input-group">
<label>NetSalary</label>
<div id="snet_salary_a"></div>  
 <input name="netsalarys" id="netsalarys"   disabled  type="number" class="form-control">
<span class="input-group-addon">.00</span>
</div>
</div>
<div class="modal-footer">
<div class="col-sm-12">
<div id="saves"><button  type="button" id="ssaved" style="display:none"  onclick="SpouseResult_operation('insert','spouse_table')" class="btn btn-primary">Save Changes</button></div>
<div id="updateds"><button type="button" id="supdated" style="display:none"  onclick="SpouseResult_operation('update','spouse_table')" class="btn btn-success">update changes</button></div>


</div>

</div>
</form> 
  </div>



              
</div>
                    </div>
                                    </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                 
