 
 <div class="panel-body">       
                            <div class="modal fade" id="myFOS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
            <div class="modal-content ">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus fa-2x"></i>Add Field of Study</h4>
            <div class="col-md-12" >
<div id="border" >
<span style="font-family:Britannic Bold;" class="alert alert-inverse alert-xs">ID</span>:<b> <?php echo $id; ?></b>
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
<div class="table-responsive" id="table_fieldofstudy" onclick="myFunctionFOS()">
<table class="table table-striped table-bordered table-hover" id="table_fos">
                                    <thead>
                                     <tr>
                                          <th> ID</th>
                                            <th>FieldofstudyID</th>
                                            <th>Education Level</th>
                                            <th>Field Study Name</th>
                                            <th><i class="fa fa-minus-square"></i>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                   $Condition="PID="."'".$id."'";
                                   $i=0;
                                    $DependantInfo=$Master->Select_Users_Where('`HR.Fieldofstudy`',$Condition);
                                    foreach($DependantInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                        <td id="did"><?php echo $i; ?></td>    
                                        <td id="did"><?php echo $mow['FieldofstudyID']; ?></td>
                                            <td><?php echo $mow['EducationLevel']; ?></td>
                                            <td><?php echo $mow['FieldofstudyName']; ?></td>
    <td> <button onclick="FOSResult_Delete('delete','table_fieldofstudy',<?php echo $mow['FieldofstudyID']; ?>,'<?php echo $row['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>

                                    </tbody>
                                </table>
                            </div>


                                <div class="col-md-6" style="display:block" id="Add_FOS">
                                    <h3 id="style">Basic Contacts Field of Study</h3>
 <form  id="commentForm_fos" method="POST" action="../Routes/Routehandler.php?R=AddFOSlInfo" name="myFormFos" onSubmit="return validate_fos();" enctype="multipart/form-data" > 
    <div class="form-group">
    <label>EducationLevel</label>
    <input type="hidden" id="PID_FOS" value="<?php echo $id;?>" />
    <select id="Edu" class="form-control" name="Education" onchange="showResult_FOS(this.value,'fosname')" required >
                <option value=""></option>
                <option value="Illitrate">Illitrate</option>
                <option value="Grade1">Grade 1</option>
                <option value="Grade2">Grade 2</option>
                <option value="Grade3">Grade 3</option>
                <option value="Grade4">Grade 4</option>
                <option value="Grade5">Grade 5</option>
                <option value="Grade6">Grade 6</option>
                <option value="Grade7">Grade 7</option>
                <option value="Grade8">Grade 8</option>
                <option value="Grade9">Grade 9</option>
                <option value="Grade10">Grade 10</option>
                <option value="Grade11">Grade 11</option>
                <option value="Grade12">Grade 12 Complete</option>
                <option value="BA">BACHELOR DEGREE(BA)</option>
                <option value="BSc">BACHELOR DEGREE(BSc)</option>
                <option value="DIPLOMA">DIPLOMA</option>
                <option value="CERTIFICATE">CERTIFICATE</option>
                <option value="PHD">PHD</option>
                <option value="MASTERS">MASTERS</option>
                <option value="DOCTOR">DOCTOR</option>
                    </select>
</div>   
 <div id="fosname"></div> 


<div class="modal-footer">
<div id="savedd_fos_"><button  type="button" id="saved_fos_" style="display:none"  onclick="showResult_Fos('insert_','table_fieldofstudy')" class="btn btn-primary">Save Changes</button></div>
<div id="savedd_fos"><button  type="button" id="saved_fos" style="display:block"  onclick="showResult_Fos('insert','table_fieldofstudy')" class="btn btn-primary">Save Changes</button></div>
<div id="updatedd_fos"><button type="button" id="updated_fos" style="display:none"  onclick="showResult_Fos('update','table_fieldofstudy')" class="btn btn-success">update changes</button></div>
</div>
</form>
</div>



<div class="col-md-6" style="display:none" id="Edit_FOS">
<h3 id="style">Edit Contacts Field of Study</h3>
<div class="form-group">
    <label>EducationLevel</label>
    <input type="hidden" class="form-control" id="FID"  />
    <input class="form-control" type="text" required  id="EducationLevel"   name="EducationLevel"   onkeyup="showResult_FOS(this.value,'EducationLevel_fos')"  >
    <div id="EducationLevel_fos"></div> 
</div> 

<div class="form-group">
    <label style="display:block" id="fosn" >FieldofStudyName</label>
    <input class="form-control" type="text" style="display:block" required  id="FieldofStudyName"   name="FieldofStudyLevel"   onkeyup="showResult_FOS(this.value,'FieldofStudyName_fos')"  >
    <div id="FieldofStudyName_fos" style="display:block"></div> 
</div> 
      
<div class="modal-footer">
<div id="updatedd_fos_"><button type="button" id="updated_fos_" style="display:none"  onclick="showResult_Fos('update_','table_fieldofstudy')" class="btn btn-success">update changes</button></div>

<div id="updatedd_fos"><button type="button" id="updated_fos" style="display:block"  onclick="showResult_Fos('update','table_fieldofstudy')" class="btn btn-success">update changes</button></div>
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
                          
                    
                             </div>  
                             </div>
                          
                    

        