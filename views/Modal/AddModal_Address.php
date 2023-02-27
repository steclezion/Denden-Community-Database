
                     
                        <div class="panel-body">
                            
                            <div class="modal fade" id="myADD" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
            <div class="modal-content ">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus fa-2x"></i>Add Address</h4>
            <div class="col-md-12" >
<div id="border" >
<span style="font-family:Britannic Bold;" class="alert alert-inverse alert-xs">ID</span>:<b id="style"> <?php echo $id; ?></b>
<span class="alert alert-default alert-xs">FullName</span>:<b id="style"><?php echo   $row['FirstName']." ".$row['MiddleName']."".$row['LastName']?></b>
<span class="alert alert-default alert-xs">Zone</span>:<b id="style"><?php echo "Zoba-Maekel";?></b>
<span class="alert alert-default alert-xs">Subzone</span>:<b id="style"><?php echo  "Tiravolo";?></b><br>
<span class="alert alert-default alert-xs">Localadmin</span>:<b id="style"><?php echo  "Denden-Camp";?></b>&nbsp;
<span class="alert alert-default alert-xs">Village</span>:<b id="style"><?php echo  "Denden-Camp";?></b><br>


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
                Address For Occupant PID=<?php echo $id; ?>
               
                <input value="<?php echo $id; ?>"   id="PIDD" type="hidden" />
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="table_ad" onclick="myFunctionAddress()">
                                <table class="table table-striped table-bordered table-hover" id="table_address">
                                    <thead>
                                     <tr>
                                            <th>AID</th>
                                            <th>Camp Zone</th>
                                            <th>Block Number</th>
                                            <th>House Number</th>
                                            <th>House Area</th>
                                            <th>Mobile Number</th>
                                            <th>Telephone Number</th>
                                            <th><i class="fa fa-minus-square"></i>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                   $Condition="PID="."'".$id."'";
                                   $i=0;
                                    $DependantInfo=$Master->Select_Users_Where('`HR.Addressinfo`',$Condition);
                                    foreach($DependantInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                            <td id="did"><?php echo $mow['AddressID']; ?></td>
                                            <td><?php echo $row['CampRegion']; ?></td>
                                            <td><?php echo $mow['BlockNumber']; ?></td>
                                            <td><?php echo $mow['HouseNumber']; ?></td>
                                            <td><?php echo $mow['HouseArea']; ?></td>
                                            <td><?php echo $mow['MobileNumber']; ?></td>
                                            <td><?php echo $mow['TelephoneNumber']; ?></td>
                                           
<td> <button onclick="AddressResult_Delete('delete','table_ad',<?php echo $mow['AddressID']; ?>,'<?php echo $row['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


              
</div>
<h3 id="style"><?php echo "Basic Contacts Address Information"; ?></h3>
 <form  id="commentForm_address" method="POST" action="../Routes/Routehandler.php?R=AddPersonalInfo" name="myForm" onSubmit="return validate_address();" enctype="multipart/form-data" >
 
  <div class="form-group">
    <label class="form-control">HouseNumber</label>
    <input class="form-control" type="number" required  id="HouseNumber"   name="HouseNumber"    >
    <input class="form-control" type="hidden" value="<?php echo $mow['AddressID']; ?>" id="AID">
    <input class="form-control" type="hidden" value="<?php echo $row['CampRegion'];?>" id="camp_r">
 </div> 
 <div class="form-group">
    <label class="form-control">BlockNumber</label>
    <input class="form-control" type="number" required onkeyup="showResult_address(this.value,'Blocks_add')"  id="Blocks"   name="Blocks"    >
    <div id="Blocks_add"></div> 
</div> 
 <div class="form-group">
    <label class="form-control">HouseArea</label>
    <input class="form-control" type="text" required  id="HouseArea"   name="HouseArea"    >
 </div>   
 <div class="form-group">
    <label class="form-control">MobileNumber</label>
    <div id="Mid_add"></div>
    
    <input class="form-control" type="number" required  id="MobileNumber"   name="MobileNumber"    onkeyup="showResult_address(this.value,'Mid_add')" >
   </div>   
 <div class="form-group">
    <label class="form-control">TelephoneNumber</label>
    <div id="Tell_add"></div>
    <input class="form-control" type="number" required  id="TelephoneNumber"   name="TelephoneNumber"   onkeyup="showResult_address(this.value,'Tell_add')"  >
    
 </div>                               

<div class="modal-footer">
<div class="col-sm-12">
<div id="new_ad"><button type="button" id="newed_ad" style="display:none" onclick="myfunctionaddNew()" class="btn btn-info">Add New Dependant </button></div>
<div id="savedd_ad"><button  type="button" id="saved_ad" style="display:block"  onclick="showResult_operation_address('insert','table_ad','oper')" class="btn btn-primary">Save Changes</button></div>
<div id="updatedd_ad"><button type="button" id="updated_ad" style="display:none"  onclick="showResult_operation_address('update','table_ad','oper')" class="btn btn-success">update changes</button></div>


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





