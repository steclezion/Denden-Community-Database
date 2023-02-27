
                     
                     <div class="panel-body">
                            
                            <div class="modal fade" id="myLeave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
            <div class="modal-content ">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus fa-2x"></i>Add LeaveInfo(ካብ መዓስከር ዝወጸሉ ግዜ)</h4>
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
                        <div class="panel-heading">
                LeaveInfo For Occupant PID=<?php echo $id; ?>
               
                <input value="<?php echo $id; ?>"   id="PIDD" type="hidden" />
               
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="table_Leave" onclick="myFunctionLeave()">
                                <table class="table table-striped table-bordered table-hover" id="table_Leaveinfo">
                                    <thead>
                                     <tr>
                                            <th>ID</th>
                                            <th>EntryDate</th>
                                            <th>ExitDate</th>
                                            <th>NO Stay in Years</th>
                                            <th>Remark</th>
                                            
                                            <th><i class="fa fa-minus-square"></i>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                   $Condition="PID="."'".$id."'";
                                   $i=0;
                                    $DependantInfo=$Master->Select_Users_Where('`HR.LeaveInfo`',$Condition);
                                    $EntryDate= $Master->Select_Users_Where('`HR.occupantinfo`',$Condition);
                                    foreach($EntryDate as $pow){}

                                    foreach($DependantInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                            
                                         <td ><?php echo $mow['LeaveinfoID']; ?></td>
                                         <td><?php echo $mow['EntryDate']; ?></td>
                                            <td><?php echo $mow['ExitDate']; ?></td>
                                            <td><?php echo $mow['NumberofStayYears']; ?></td>
                                            <td><?php echo $mow['Remark']; ?></td>
                                           
                                           
<td> <button onclick="LeaveResult_Delete('delete','table_Leave',<?php echo $mow['LeaveinfoID']; ?>,'<?php echo $row['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


           
</div>
<h3 id="style"><?php echo "Basic Contacts Leave Information"; ?></h3>
 <form  id="commentForm_LeaveInfo" method="POST" action="../Routes/Routehandler.php?R=LeaveInfolInfo" name="myFormLeave" onSubmit="return validate_address();" enctype="multipart/form-data" >
 
  <div class="form-group">
    <label class="form-control">EntryDate</label>
    <input class="form-control" type="Date" required readonly  id="EntryDate" value="<?php echo $pow['EntryDateCamp']; ?>"   name="EntryDate"  onkeyup="Check_Date_a(this.value,EntryDate.value,info.value)" onchange="Check_Date_a(this.value,EntryDate.value,info.value)"   >
    <input class="form-control" type="hidden" value="<?php echo $mow['LeaveinfoID']; ?>" id="LID">
    <input class="form-control" type="hidden" value="<?php echo $id; ?>" id="PID_Leave">
 </div> 
 <div class="form-group">
    <label class="form-control">ExitDate</label>
    <input class="form-control" type="date" required onkeyup="Check_Date(this.value,EntryDate.value,info.value)"    id="Exit"   name="Exit"    >
 
</div> 

<div class="form-group">
    <label class="form-control">NumberofStayinYEARS</label>
    <input class="form-control" type="text" required  readonly  id="stayy"   name="stay"    >
 
</div> 
 <div class="form-group">
    <label class="form-control">Remark</label>
    <textarea class="form-control" type="text" required  id="RemLeave"   name="RemLeave"    ></textarea>
    <input type="hidden" id="Rem">
 </div>   
                             

<div class="modal-footer">
<div class="col-sm-12">
<div id="savedd_Leave"><button  type="button" id="saved_Leave" style="display:none"  onclick="LeaveResult_operation('insert','table_Leave')" class="btn btn-primary">Save Changes</button></div>
<div id="updatedd_Leave"><button type="button" id="updated_Leave" style="display:none"  onclick="LeaveResult_operation('update','table_Leave')" class="btn btn-success">update changes</button></div>


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
                        
                        





