<?php

@$Insert=$_GET['insert_Health'];
@$Duration_In_Years=$_GET['Duration_In_Year'];
@$DiseaseType=$_GET['DieseaseType'];
@$PID=$_GET['PID'];
@$Severity_update=$_GET['Severity_update'];
@$Remark=$_GET['Remark'];
@$Access=$_GET['Access'];
@$HID=$_GET['HID'];
@$update=$_GET['update_Health'];
@$delete_Health=$_GET['delete_Health'];

include('../../config/database.php');
include('../../config/core.php');
include('../../objects/Master.php');
include('../../objects/SignIn_Class_.php');
include('../../objects/Session_Class_.php');

$Master = new  Employee($db);

if(isset($Insert))
{

    $HID=$Master->Max_Users('`HR.Health`','`HealthID`');
    $HealthInfoID=$HID+1;

    $Data = array(
      'PID'=>$PID
      ,'HealthID'=>$HealthInfoID
      ,'DiseaseType'=>$DiseaseType
      ,'Severity'=>$Severity_update
      ,'DurationInYears'=>$Duration_In_Years
	  ,'Remark'=>$Remark
      ,'Who'=>$Access);
    
    
            $Health_Inserted=$Master->Insert_Users($Data,'`HR.Health`'); //Employee are Selected

?>
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
                                   $Condition="PID="."'".$PID."'";
                                   $i=0;
                                   $HealthInfo=$Master->Select_Users_Where('`HR.Health`',$Condition);
                                   

                                    foreach($HealthInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                            
                                         <td ><?php echo $mow['HealthID']; ?></td>
                                         <td><?php echo $mow['DiseaseType']; ?></td>
                                         <td><?php echo $mow['Severity']; ?></td>
                                        <td><?php echo $mow['DurationInYears']; ?></td>
                                        <td><?php echo $mow['Remark']; ?></td>
                                           
                                           
<td> <button onclick="HealthResult_Delete('delete','table_Health',<?php echo $mow['HealthID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>



<?php

}

if(isset($update))
{

   

    $Data = array(
      'DiseaseType'=>$DiseaseType
      ,'Severity'=>$Severity_update
      ,'DurationInYears'=>$Duration_In_Years
	  ,'Remark'=>$Remark
      ,'Who'=>$Access);


$Condition="PID="."'".$PID."'"." AND "."HealthID=".$HID;

$Heath_Updated=@$Master->Update_Users($Data,'`HR.Health`',$Condition); //Employee updated Command object
    
    

?>
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
                                   $Condition="PID="."'".$PID."'";
                                   $i=0;
                                   $HealthInfo=$Master->Select_Users_Where('`HR.Health`',$Condition);
                                   

                                    foreach($HealthInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                            
                                         <td ><?php echo $mow['HealthID']; ?></td>
                                         <td><?php echo $mow['DiseaseType']; ?></td>
                                         <td><?php echo $mow['Severity']; ?></td>
                                        <td><?php echo $mow['DurationInYears']; ?></td>
                                        <td><?php echo $mow['Remark']; ?></td>
                                           
                                           
<td> <button onclick="HealthResult_Delete('delete','table_Health',<?php echo $mow['HealthID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>



<?php

}

if($delete_Health=="delete")
{

    $condition='`HealthID`='.$HID." AND PID="."'".$PID."'";
    $DID=$Master->Delete_Users('`hr.Health`',$condition);

        


  ?>
  
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
                                   $Condition="PID="."'".$PID."'";
                                   $i=0;
                                   $HealthInfo=$Master->Select_Users_Where('`HR.Health`',$Condition);
                                   

                                    foreach($HealthInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                            
                                         <td ><?php echo $mow['HealthID']; ?></td>
                                         <td><?php echo $mow['DiseaseType']; ?></td>
                                         <td><?php echo $mow['Severity']; ?></td>
                                        <td><?php echo $mow['DurationInYears']; ?></td>
                                        <td><?php echo $mow['Remark']; ?></td>
                                           
                                           
<td> <button onclick="HealthResult_Delete('delete','table_Health',<?php echo $mow['HealthID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>
  <?php
  
  }

































?>