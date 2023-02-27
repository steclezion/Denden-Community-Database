
                     
                        <div class="panel-body">
                            
                            <div class="modal fade" id="myDEP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
            <div class="modal-content ">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus fa-2x"></i>Add DependantInformation</h4>
            <div class="col-md-12" >
<div id="border" >
<span style="font-family:Britannic Bold;" class="alert alert-inverse alert-xs">Forman/Forwoman-ID</span>:<b> <?php echo $id; ?></b>
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
                            <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Dependants For Occupant PID=<?php echo $id; ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="table"  onclick="myFunctionDependant()">
                                <table class="table table-striped table-bordered table-hover" id="table_dependant">
                                    <thead>
                                  
                                        <tr>
                                            <th>DepID</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>DOB</th>
                                            <th>Resident</th>
                                            <th>orga nization</th>
                                            <th>Job</th>
                                            <th>Netsalary</th>
                                            <th>R/ship</th>
                                            <th><i class="fa fa-minus-square"></i>Action</th>
                                            
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                   $Condition="PID="."'".$id."'";
                                    $DependantInfo=$Master->Select_Users_Where('`HR.DependantInfo`',$Condition);
                                    foreach($DependantInfo as $row) 
                                    {?>
                                        <tr>
                                            <td id="did"><?php echo $row['DependantID']; ?></td>
                                            <td><?php echo $row['FirstName']; ?></td>
                                            <td><?php echo $row['MiddleName']; ?></td>
                                            <td><?php echo $row['LastName']; ?></td>
                                            <td><?php echo $row['BirthDate']; ?></td>
                                            <td><?php echo $row['ResidentID']; ?></td>
                                            <td><?php echo $row['CurrentOrganization']; ?></td>
                                            <td><?php echo $row['Job']; ?></td>
                                            <td><?php echo $row['NetSalary']; ?></td>
                                            <td><?php echo $row['RelationWithForMan']; ?></td>
    <td> <button onclick="showResult_Delete('delete','table',<?php echo $row['DependantID']; ?>,'<?php echo $row['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


              
</div>





<div class="col-md-12">                     
<h3 id="style"><?php echo "Basic Contacts Dependants Information"; ?></h3>
 <form  id="commentForm_Dependants" method="POST" action="../Routes/Routehandler.php?R=AddDependantInfo" name="myForm_Dependant" onSubmit="return validate_dependant();" enctype="multipart/form-data" >
 <div class="form-group">
    <label>Dependant-FirstName</label>
    <input id="DID"  type="hidden" readonly>
    <input class="form-control" type="text" id="dfname" required name="dfirstname"   onkeyup="showResult_Dependant(this.value,'dFirstname_a')" >
    <input id="PID" value="<?php echo $id;  ?>" type="hidden">
   
    <div id="dFirstname_a"></div> 
</div>                               
   <div class="form-group">
    <label>Dependant-MiddleName</label>
  <input class="form-control" type="text" id="dmname" required  name="dmiddlename" onkeyup="showResult_Dependant(this.value,'dMiddlename_a')">
  <div id="dMiddlename_a"></div>   
</div>                     
   <div class="form-group">
    <label>Dependant-LastName</label>
   <input class="form-control" type="text" id="dlname" required name="dlastname" onkeyup="showResult_Dependant(this.value,'dLastname_a')">
   <div id="dLastname_a"></div>   
</div>
   <div class="form-group">
    <label>Dependant-BirthDate</label>
    <div id="dDOB"></div>  <input autocomplete="off"  required class="form-control"   type="DATE" name="DOB"   id="dobd"/>
   </div>  
   <div class="form-group">
    <label>Dependant-ResidentID</label>
    <div id="dResidence_A"></div>  <div id="dResidence_AA"></div> <input required value="ASC" autocomplete="off" class="form-control" onChange="showResult_Dependant(this.value,'dResidence_A')" onKeyup="showResult_Dependant(this.value,'dResidence_A')" onkeydown="showResult_Dependant(this.value,'dResidence_A')" id="dresidentvalue" type="text" name="dResidence"   onKeyup="showResult_Dependant(this.value,'dResidence_AA')"/>
   </div>  

     <div class="form-group">
    <label>Relation with Forman/Woman of The House</label>
    <input  autocomplete="off" class="form-control"   onkeyup="showResult_Dependant(this.value,'drelation')" onkeydown="showResult_Dependant(this.value,'drelation')"  id="realtiond" type="text" name="relation" />
  <div id="drelation"></div>
   </div>                
<button type="button" ><i class="now-ui-icons ui-1_simple-add"> </i>  
  <input type="checkbox" class="form-control" id="myCheckd" onclick="myFunction()">isEmployed</button>
 
  <br>
  <div   id="textd" style="display:none"  class="collapse">
  <div class="form-group">
    <label>CurrentOrganization</label>
    <input  autocomplete="off" class="form-control" onChange="showResult_Dependant(this.value,'dorganization')" onKeyup="showResult_Dependant(this.value,'dorganization')" onkeydown="showResult_Dependant(this.value,'dorganization')" id="organizationd" type="text" name="dorganization" />
   <div id="dorganization"></div>
                    </div>  
 <div class="form-group">
    <label>CurrentJob</label>
    <input class=" form-control" autocomplete="off" onkeyup = "showResult_Dependant(this.value,'dJobs')"   onkeydown = "showResult(this.value,'dJobs')" name="dCurrentJobs"  id="jobsd" type="text"  />
                    <div id="dJobs"></div>     
                </div> 

<div class="form-group input-group">
<label>NetSalary</label>
<div id="dnet_salary_a"></div>  
 <input name="netsalaryd" id="netsalaryd"    type="number" class="form-control">
<span class="input-group-addon">.00</span>
</div>
</div>
<div class="modal-footer">
<div class="col-sm-12">
<div id="new"><button type="button" id="newed" style="display:none" onclick="myfunctionaddNew()" class="btn btn-info">Add New Dependant </button></div>
<div id="savedd"><button  type="button" id="saved" style="display:block"  onclick="showResult_operation('insert','table','oper')" class="btn btn-primary">Save Changes</button></div>
<div id="updatedd"><button type="button" id="updated" style="display:none"  onclick="showResult_operation('update','table','oper')" class="btn btn-success">update changes</button></div>


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