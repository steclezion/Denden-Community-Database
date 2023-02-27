
                     
                     <div class="panel-body">
                            
                            <div class="modal fade" id="myHealth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
            <div class="modal-content ">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus fa-2x"></i>Add HealhInfo(ጥዕና-ጉድለት ዘለዎ/ዋ)</h4>
            <div class="col-md-12" >
<div id="border" >
<span style="font-family:Britannic Bold;" class="alert alert-inverse alert-xs">ID</span>:<b id="style"> <?php echo $id; ?></b>
<span class="alert alert-default alert-xs">FullName</span>:<b id="style"><?php echo   $row['FirstName']." ".$row['MiddleName']."".$row['LastName']?></b>
<input value="<?php echo $id." ".$row['FirstName']." ".$row['MiddleName']."".$row['LastName'];  ?>"  id="info" type="hidden" />

 
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
                        <div class="panel-heading">LeaveInfo For Occupant PID=<?php echo $id; ?>
               <input value="<?php echo $id; ?>"   id="PIDD" type="hidden" />
               
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="table_Health" onclick="myFunctionHealth()">
                                <table class="table table-striped table-bordered table-hover" id="table_Healthinfo">
                                    <thead>
                                     <tr>
                                            <th>ID</th>
                                            <th>DiseaseType</th>
                                            <th>Severity</th>
                                            <th>DurationInYears</th>
                                            <th>Remark</th>
                                            
                                            <th><i class="fa fa-minus-square"></i>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                   $Condition="PID="."'".$id."'";
                                   $i=0;
                                   $HealthInfo=$Master->Select_Users_Where('`HR.Health`',$Condition);
                                    $EntryDate= $Master->Select_Users_Where('`HR.occupantinfo`',$Condition);
                                    foreach($EntryDate as $row){}

                                    foreach($HealthInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                            
                                         <td ><?php echo $mow['HealthID']; ?></td>
                                         <td><?php echo $mow['DiseaseType']; ?></td>
                                         <td><?php echo $mow['Severity']; ?></td>
                                        <td><?php echo $mow['DurationInYears']; ?></td>
                                        <td><?php echo $mow['Remark']; ?></td>
                                           
                                           
<td> <button onclick="HealthResult_Delete('delete','table_Health',<?php echo $mow['HealthID']; ?>,'<?php echo $row['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


           
</div>
<h3 id="style"><?php echo "Contacts Health Information"; ?></h3>
 <form  id="commentForm_HealthInfo" method="POST" action="../Routes/Routehandler.php?R=HealthlInfo" name="myFormHealth" onSubmit="return validate_address();" enctype="multipart/form-data" >
 
  <div class="form-group">
    <label class="form-control">DiseaseType</label>
    <input class="form-control" id="DTF" type="text" required  onkeyup="HealthResult_operation(this.value,'DT')"    name="DT"  >
    <div id="DT"></div>
   <input class="form-control" type="hidden"  id="HID">
    <input class="form-control" type="hidden" value="<?php echo $id; ?>" id="PID_Health">
 </div> 
 <div id="Disease" style="display:none"></div>
 <div class="form-group">
<label class="form-control">Severity</label>
<input id="Severity_update" name="Severity_update" style="display:none" class="form-control" />
<select name="Severity" class='form-control' id="Severity_insert" onchange="Severity_update.value=this.value">
<option value="" ></option>
<option value="Restrained" >Restrained</option>
<option value="Moderate"> Mederate</option>
<option value="Fatal">Fatal</option>
</select> 
</div> 

<div class="form-group">
    <label class="form-control">DurationInYears</label>
    <input class="form-control" type="number" max="60" min='0' required   id="DIY"   name="DIY"    >
 
</div> 
 <div class="form-group">
    <label class="form-control">Remark</label>
    <textarea class="form-control" type="text" required  id="Remark_Health"   name="Remark_Health"    ></textarea>
    <input type="hidden" id="Remark_Health_Remark">
 </div>   
                             

<div class="modal-footer">
<div class="col-sm-12">
<div id="savedd_Health"><button  type="button" id="saved_Health" style="display:none"  onclick="HealthResult_operation('insert','table_Health')" class="btn btn-primary">Save Changes</button></div>
<div id="updatedd_Health"><button type="button" id="updated_Health" style="display:none"  onclick="HealthResult_operation('update','table_Health')" class="btn btn-success">update changes</button></div>


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
                        





