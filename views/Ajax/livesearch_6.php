<?php
   @$HouseNumber  =  $_GET['HouseNumber'];
   @$HouseArea =  $_GET['HouseArea'];
   @$Blocks   =    $_GET['Blocks'];
   @$MobileNumber  =  $_GET['MobileNumber'];
   @$TelephoneNumber = $_GET['TelephonNumber'];
   @$PID=$_GET['PID'];
   @$AID=$_GET['AID'];
   @$Camp_Region = $_GET['CampZone'];
   @$Access=$_GET['Access'];
   @$update=$_GET['update'];
   @$insert=$_GET['insert'];
   @$delete=$_GET['delete'];

   @$DT=$_GET['DT'];


  include('../../config/database.php');
  include('../../config/core.php');
  include('../../objects/Master.php');
  include('../../objects/SignIn_Class_.php');
  include('../../objects/Session_Class_.php');

  $Master = new Master($db);
 $Condition="PID=".$PID." AND "."AID=".$AID;
 @$Disease= $Master->Select_Users_Where('`Company.LookupItem`',"`Name` Like '$DT%' AND LookupTypeID=39");

  if($update=='update') 
  {
    $Data = array(
      'Zone'=>"Maekel",
      'SubZone'=>"Tiravolo",
      'LocalAdmin'=>"Denden Camp",
      'Village'=>"Denden Camp",
      'CampZone'=>$Camp_Region,
      'BlockNumber'=>$Blocks,
      'HouseNumber'=>$HouseNumber,
      'HouseArea'=>$HouseArea,
      'MobileNumber'=>$MobileNumber,
      'TelephoneNumber'=>$TelephoneNumber,
    'Who'=>$Access);

 $Condition="PID="."'".$PID."'"." AND "."AddressID=".$AID;

$Dependant_Updated=@$Master->Update_Users($Data,'`HR.Addressinfo`',$Condition); //Employee updated Command object



  ?>
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
                                   $Condition="PID="."'".$PID."'";
                                   $i=0;
                                    $DependantInfo=$Master->Select_Users_Where('`HR.Addressinfo`',$Condition);
                                    foreach($DependantInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                        <td id="did"><?php echo $mow['AddressID']; ?></td>
                                            <td><?php echo $mow['CampZone']; ?></td>
                                            <td><?php echo $mow['BlockNumber']; ?></td>
                                            <td><?php echo $mow['HouseNumber']; ?></td>
                                            <td><?php echo $mow['HouseArea']; ?></td>
                                            <td><?php echo $mow['MobileNumber']; ?></td>
                                            <td><?php echo $mow['TelephoneNumber']; ?></td>
                                           
<td> <button onclick="AddressResult_Delete('delete','table',<?php echo $mow['AddressID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>


  <?php
  
  }



if($insert=="insert")
{


    $AID=$Master->Max_Users('`HR.AddressInfo`','AddressID');
    $AddressID=$AID+1;

$Data = array(
            'PID'=>$PID,
            'AddressID'=>$AddressID,
            'Zone'=>"Maekel",
            'SubZone'=>"Tiravolo",
            'LocalAdmin'=>"Denden Camp",
            'Village'=>"Denden Camp",
            'CampZone'=>$Camp_Region,
            'BlockNumber'=>$Blocks,
            'HouseNumber'=>$HouseNumber,
            'HouseArea'=>$HouseArea,
            'MobileNumber'=>$MobileNumber,
            'TelephoneNumber'=>$TelephoneNumber,
          'Who'=>$Access);


        $Dependant_Inserted=$Master->Insert_Users($Data,'`HR.AddressInfo`'); //Employee are Selected
       
        $Message="<script type=\"text/javascript\"> alert( \"New Dependant Successfully Saved\");\";   </script>";
         $Message = ($Dependant_Inserted==1)?$Message:'Error in Insertion';
        


  ?>
  
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
                                   $Condition="PID="."'".$PID."'";
                                   $i=0;
                                    $DependantInfo=$Master->Select_Users_Where('`HR.Addressinfo`',$Condition);
                                    foreach($DependantInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                        <td id="did"><?php echo $mow['AddressID']; ?></td>
                                            <td><?php echo $mow['CampZone']; ?></td>
                                            <td><?php echo $mow['BlockNumber']; ?></td>
                                            <td><?php echo $mow['HouseNumber']; ?></td>
                                            <td><?php echo $mow['HouseArea']; ?></td>
                                            <td><?php echo $mow['MobileNumber']; ?></td>
                                            <td><?php echo $mow['TelephoneNumber']; ?></td>
                                           
<td> <button onclick="AddressResult_Delete('delete','table',<?php echo $mow['AddressID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>
  <?php
  
  }

  if($delete=="delete")
{

    $condition='AddressID='.$AID." AND PID="."'".$PID."'";
    $DID=$Master->Delete_Users('`HR.AddressInfo`',$condition);

        


  ?>
  
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
                                   $Condition="PID="."'".$PID."'";
                                   $i=0;
                                    $DependantInfo=$Master->Select_Users_Where('`HR.Addressinfo`',$Condition);
                                    foreach($DependantInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                        <td id="did"><?php echo $mow['AddressID']; ?></td>
                                            <td><?php echo $mow['CampZone']; ?></td>
                                            <td><?php echo $mow['BlockNumber']; ?></td>
                                            <td><?php echo $mow['HouseNumber']; ?></td>
                                            <td><?php echo $mow['HouseArea']; ?></td>
                                            <td><?php echo $mow['MobileNumber']; ?></td>
                                            <td><?php echo $mow['TelephoneNumber']; ?></td>
                                           
<td> <button onclick="AddressResult_Delete('delete','table',<?php echo $mow['AddressID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>
                                      
                                    </tbody>
                                </table>
                            </div>
  <?php
  
  }



  if(isset($DT))
  {
    echo  '<i style="display:block"  id="Disease"   class="btn btn-primary btn-sm" >Choose Disease Types From Here   </i>  <i id="Disease" style="display:block" class="fa fa-share"></i>
       
  <select id="Disease" style="display:block" class="form-control" selected name="DT_seleced"   onchange="DT.value=this.value">
         <option  value="" > </option>';
  
        foreach( $Disease as $row  )
    {
      
      echo '<option  value="'.trim($row['Name']).'" > <i class="alert alert-warning">'.$row['Name'].'</option>';
    
    }
    
  echo '</select>';
  }






















  ?>