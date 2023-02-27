<?php
 
   @$Access=$_GET['Access'];
   @$update=$_GET['update'];
   @$insert=$_GET['insert'];
   @$delete=$_GET['delete'];


@$Firstname=$_GET['Firstname'];
@$Middlename=$_GET['Middlename'];
@$Lastname=$_GET['Lastname'];
@$DOB=$_GET['DOB'];
@$nationalid=$_GET['nationalid'];
@$resident=$_GET['resident'];
@$nationalilty=$_GET['nationalilty'];
@$Ethinicity=$_GET['Ethinicity'];
@$organization=$_GET['organization'];
@$jobs=$_GET['jobs'];
@$netsalary=$_GET['netslary'];
@$PID=$_GET['PID'];
@$SID=$_GET['SID'];



@$update_Leave=$_GET['update_Leave'];
@$insert_Leave=$_GET['insert_Leave'];
@$delete_Leave=$_GET['delete_Leave'];


@$EntryDate=$_GET['EntryDate'];
@$Exit_Date=$_GET['ExitDate'];
@$Access=$_GET['Access'];
@$NumberofYear=$_GET['Numberofyear'];
@$Remark=$_GET['Remark'];
@$LID=$_GET['LID'];



  include('../../config/database.php');
  include('../../config/core.php');
  include('../../objects/Master.php');
  include('../../objects/SignIn_Class_.php');
  include('../../objects/Session_Class_.php');

  $Master = new Master($db);



  if($update=='update') 
  {
    $Data = array(
         'FirstName'=>$Firstname
        ,'MiddleName'=>$Middlename
        ,'LastName'=>$Lastname
        ,'NationalID'=>$nationalid
        ,'ResidentID'=>$resident
        ,'BirthDate'=>$DOB
        ,'Nationality'=>$nationalilty
        ,'Ethinicity'=>$Ethinicity
        ,'Organization'=>$organization
        ,'CurrentJob'=>$jobs
        ,'NetSalary'=>$netsalary
       ,'Who'=>$Access);

 $Condition="`PID`="."'".$PID."'"." AND "."`SpouseInfoID`=".$SID;

$Spouse_Updated=@$Master->Update_Users($Data,'`HR.SpouseInfo`',$Condition); //Employee updated Command object



  ?>
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
                                   $Condition="PID="."'".$PID."'";
                                    $SpouseInfo=$Master->Select_Users_Where('`HR.SpouseInfo`',$Condition);
                                    foreach($SpouseInfo as $row) 
                                    {?>
                                        <tr>
                                            <td id="did"><?php echo $row['SpouseInfoID']; ?></td>
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
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>


  <?php
  
  }



if($insert=="insert")
{


    $SID=$Master->Max_Users('`HR.SpouseInfo`','`SpouseInfoID`');
    $SpouseInfoID=$SID+1;

    $Data = array(
         'PID'=>$PID
         ,'SpouseInfoID'=>$SpouseInfoID
       ,'FirstName'=>$Firstname
       ,'MiddleName'=>$Middlename
       ,'LastName'=>$Lastname
       ,'NationalID'=>$nationalid
       ,'ResidentID'=>$resident
       ,'BirthDate'=>$DOB
       ,'Nationality'=>$nationalilty
       ,'Ethinicity'=>$Ethinicity
       ,'Organization'=>$organization
       ,'CurrentJob'=>$jobs
       ,'NetSalary'=>$netsalary
      ,'Who'=>$Access);


        $Spouse_Inserted=$Master->Insert_Users($Data,'`HR.SpouseInfo`'); //Employee are Selected
        


  ?>
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
                                   $Condition="PID="."'".$PID."'";
                                    $DependantInfo=$Master->Select_Users_Where('`HR.SpouseInfo`',$Condition);
                                    foreach($DependantInfo as $row) 
                                    {?>
                                        <tr>
                                            <td id="did"><?php echo $row['SpouseInfoID']; ?></td>
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
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>
  <?php
  
  }

  if($delete=="delete")
{

    $condition='`SpouseInfoID`='.$SID." AND PID="."'".$PID."'";
    $DID=$Master->Delete_Users('`HR.SpouseInfo`',$condition);

        


  ?>
  
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
                                   $Condition="PID="."'".$PID."'";
                                    $SpouseInfo=$Master->Select_Users_Where('`HR.SpouseInfo`',$Condition);
                                    foreach($SpouseInfo as $row) 
                                    {?>
                                        <tr>
                                            <td id="did"><?php echo $row['SpouseInfoID']; ?></td>
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
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>
  <?php
  
  }



  if(isset($update_Leave))
  {
  
      $Data = array(
          'LeaveinfoID'=>$LID
          ,'ExitDate'=>$Exit_Date
          ,'EntryDate'=>$EntryDate
          ,'NumberofStayYears'=>$NumberofYear
          ,'Remark'=>$Remark
          ,'Who'=>$Access);
  
  $Condition="(`PID`="."'".$PID."'"." AND "."`LeaveinfoID`=".$LID.")";
  
  $Spouse_Updated=@$Master->Update_Users($Data,'`HR.LeaveInfo`',$Condition);
  
  
  
  ?>
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
                                     $Condition="`PID`="."'".$PID."'";
                                     $i=0;
                                      $DependantInfo=$Master->Select_Users_Where('`HR.LeaveInfo`',$Condition);
                                      foreach($DependantInfo as $mow) 
                                      {$i++;?>
                                          <tr>
                                              
                                           <td ><?php echo $mow['LeaveinfoID']; ?></td>
                                           <td><?php echo $mow['EntryDate']; ?></td>
                                              <td><?php echo $mow['ExitDate']; ?></td>
                                              <td><?php echo $mow['NumberofStayYears']; ?></td>
                                              <td><?php echo $mow['Remark']; ?></td>
                                             
                                             
  <td> <button onclick="LeaveResult_Delete('delete','table_Leave',<?php echo $mow['LeaveinfoID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                          </tr>
  <?php }?>
                                        
                                      </tbody>
                                  </table>
                              </div>
              
              
              
              <?php
  
  }
  
  if(isset($insert_Leave))
  {
      $PLID=$Master->Max_Users('`HR.LeaveInfo`','LeaveinfoID');
      $LeaveinfoID=$PLID+1;
  
      $Data = array(
          'PID'=>$PID
          ,'LeaveinfoID'=>$LeaveinfoID
          ,'EntryDate'=>$EntryDate
          ,'ExitDate'=>$Exit_Date
          ,'NumberofStayYears'=>$NumberofYear
          ,'Remark'=>$Remark
        ,'Who'=>$Access);
  
        $Leaave_Inserted=$Master->Insert_Users($Data,'`HR.LeaveInfo`'); //Employee are Selected
  
  
  
  ?>
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
                                     $Condition="PID="."'".$PID."'";
                                     $i=0;
                                      $DependantInfo=$Master->Select_Users_Where('`HR.LeaveInfo`',$Condition);
                                      foreach($DependantInfo as $mow) 
                                      {$i++;?>
                                          <tr>
                                              
                                           <td ><?php echo $mow['LeaveinfoID']; ?></td>
                                           <td><?php echo $mow['EntryDate']; ?></td>
                                              <td><?php echo $mow['ExitDate']; ?></td>
                                              <td><?php echo $mow['NumberofStayYears']; ?></td>
                                              <td><?php echo $mow['Remark']; ?></td>
                                             
                                             
                                              <td> <button onclick="LeaveResult_Delete('delete','table_Leave',<?php echo $mow['LeaveinfoID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                          </tr>
  <?php }?>
                                        
                                      </tbody>
                                  </table>
                              </div>
              
              
              
              <?php
  
  }
  
  
  
  
  
  if($delete_Leave=="delete")
  {
  
      $condition='`LeaveInfoID` ='.$LID." AND PID="."'".$PID."'";
      $DID=$Master->Delete_Users('`hr.LeaveInfo`',$condition);
  
          
  
  
    ?>
    
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
                                     $Condition="PID="."'".$PID."'";
                                     $i=0;
                                      $DependantInfo=$Master->Select_Users_Where('`HR.LeaveInfo`',$Condition);
                                      foreach($DependantInfo as $mow) 
                                      {$i++;?>
                                          <tr>
                                              
                                           <td ><?php echo $mow['LeaveinfoID']; ?></td>
                                           <td><?php echo $mow['EntryDate']; ?></td>
                                              <td><?php echo $mow['ExitDate']; ?></td>
                                              <td><?php echo $mow['NumberofStayYears']; ?></td>
                                              <td><?php echo $mow['Remark']; ?></td>
                                             
                                             
                                              <td> <button onclick="LeaveResult_Delete('delete','table_Leave',<?php echo $mow['LeaveinfoID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                          </tr>
  <?php }?>
                                        
                                      </tbody>
                                  </table>
                              </div>
    <?php
    
    }
  
  
  
  
  
  
  
  
  
  
  
    ?>