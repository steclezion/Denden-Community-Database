<?php
   @$firstname =  $_GET['Firstname'];
   @$middlename=  $_GET['Middename'];
   @$lastname=    $_GET['Lastname'];
   @$Residence=  $_GET['Resident'];
   @$DOB  = $_GET['DOB'];
   @$Jobs = $_GET['jobs'];
   @$Netsalary = $_GET['Netsalary'];
   @$relation=$_GET['relation'];
   @$organization=$_GET['organization'];
   @$Data=$_GET['update'];
   @$ID=$_GET['DID'];
   @$id=$_GET['PID'];
   @$Access=$_GET['Access'];
   @$Employed=($organization=="")?"O":1;
   @$insert=$_GET['insert'];
   @$delete=$_GET['delete'];
   @$drelation=$_GET['drelation'];



  include('../../config/database.php');
  include('../../config/core.php');
  include('../../objects/Master.php');
  include('../../objects/SignIn_Class_.php');
  include('../../objects/Session_Class_.php');

  $Master = new Master($db);
  $Firstname_Exploded = explode('____',$firstname);
  $Middlename_Exploded = explode('____',$middlename);
  $Lastname_Exploded = explode('____',$lastname);
  @$relationn=$Master->Select_Users_Where('`COMPANY.LookupItem`',"(Name like '$drelation%' AND LookupTypeId=46)");

    $firstname= trim($Firstname_Exploded[0]);
    $middlename = trim($Middlename_Exploded[0]);
    $lastname = trim($Lastname_Exploded[0]);


    if(isset($drelation))
    {
      echo  '<i class="btn btn-warning btn-sm" >Choose Spouse Ethincity From Here </i>  <i class="fa fa-share"></i>
         
    <select class="form-control" selected name="Relation" id="ddrelation"   required onchange="realtiond.value=this.value">
           <option  value="" > </option>';
    
          foreach(  $relationn  as $row  )
      {
          
        echo '<option  value="'.trim($row['Name']).'" > <i class="alert alert-warning">'.$row['Name'].'</option>';
      
      }
    
    }


  if($Data=='update') 
  {
    $Data = array(
        'FirstName'=>$firstname,
        'MiddleName'=>$middlename,
        'LastName'=>$lastname,
        'BirthDate'=>$DOB,
        'ResidentID'=>$Residence,
        'RelationWithForMan'=>$relation,
        'CurrentOrganization'=>$organization,
        'Job'=>$Jobs,
        'NetSalary'=>$Netsalary,
        'Employeed'=>$Employed,
        'Who'=>$Access);
 $condition='(DependantID='.$ID." AND ".'PID='."'".$id."')";

$Dependant_Updated=@$Master->Update_Users($Data,'`HR.DependantInfo`',$condition); //Employee updated Command object



  ?>

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
                <td><?php echo $row['DependantID']; ?></td>
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
<div id="new"><button type="button" id="newed" style="display:block" onclick="myfunctionaddNew()" class="btn btn-info">Add New Dependant </button></div>

  <?php
  
  }



if($insert=="insert")
{


    $DID=$Master->Max_Users('`HR.DependantInfo`','DependantID');
     $dependantID=$DID+1;


    $Data = array(
        'PID'=>$id,
        'DependantID'=>$dependantID,
        'FirstName'=>$firstname,
        'MiddleName'=>$middlename,
        'LastName'=>$lastname,
        'BirthDate'=>$DOB,
        'ResidentID'=>$Residence,
        'RelationWithForMan'=>$relation,
        'CurrentOrganization'=>$organization,
        'Job'=>$Jobs,
        'NetSalary'=>$Netsalary,
        'Employeed'=>$Employed,
        'Who'=>$Access);


        $Dependant_Inserted=$Master->Insert_Users($Data,'`HR.DependantInfo`'); //Employee are Selected
       
        $Message="<script type=\"text/javascript\"> alert( \"New Dependant Successfully Saved\");\";   </script>";
         $Message = ($Dependant_Inserted==1)?$Message:'Error in Insertion';
        


  ?>
  
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
                <td><?php echo $row['DependantID']; ?></td>
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
  <?php
  
  }

  if($delete=="delete")
{

    $condition='DependantID='.$ID;
    $DID=$Master->Delete_Users('`HR.DependantInfo`',$condition);

        


  ?>
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
                <th><i class="fa fa-minus-square">Action</i></th>
        
            </tr>
        </thead>
        <tbody>
        <?php  
      $Condition="PID="."'".$id."'";
        $DependantInfo=$Master->Select_Users_Where('`HR.DependantInfo`',$Condition);
        foreach($DependantInfo as $row) 
        {?>
            <tr>
                <td><?php echo $row['DependantID']; ?></td>
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
  <?php
  
  }

























  ?>