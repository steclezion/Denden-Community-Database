<!--  MODALS -->
<!-- Button trigger modal -->
<style>
div.img {
   margin: 5px;
   border: 1px solid #ccc;
   float: left;
   width: 200px;
}

div.img:hover {
   border: 1px solid #777;
}

div.img img {
   width: 100%;
   height:100%;
}

div.desc {
   padding: 15px;
   text-align: center;
}
</style>
<div class="pull-center">
 <div class="alert alert-default alert-dismissable">
 
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h4><i class="fa fa-angle-right"></i> Edit Employee <i class="fa fa-arrows-h"></i>EmpID :<?php echo $id;?> </h4>
             <!-- Standard button -->
             <?php
              $Firstname=$row['FirstName'];
              $MiddleName=$row['MiddleName'];
              $LastName=$row['LastName'];

$FirstName =$Master->Select_Users_Where('`mol.eritreannames`',"ID=$Firstname");
$MiddleName =$Master->Select_Users_Where('`mol.eritreannames`',"ID=$MiddleName");
$LastName =$Master->Select_Users_Where('`mol.eritreannames`',"ID=$LastName");


foreach($FirstName as $Firstname){}  foreach($MiddleName as $Middlename){}  foreach($LastName as $Lastname){}

  $row['FirstName']=$Firstname['EnglishNames'];
  $row['MiddleName']= $Middlename['EnglishNames'];
  $row['LastName']=$Lastname['EnglishNames'];




             ?>
  <a href='Edit.php?PID=<?php echo $id;?>&TableName=OccupantInfo'>
  <button   class="btn btn-danger">  <i class="fa fa-pencil"></i>EmployeeInfo </button></a>
             <button class="btn btn-success" data-toggle="modal" data-target="#myFOS">
             <i class="fa fa-pencil"></i>FieldofStudy</button>
             <button class="btn btn-info" data-toggle="modal" data-target="#myADD">
             <i class="fa fa-pencil"></i>AddressInfo</button>
             <button class="btn btn-theme04" data-toggle="modal" data-target="#mySPO">
             <i class="fa fa-pencil"></i>SpouseInfo</button>
             <button class="btn btn-default" data-toggle="modal" data-target="#myDEP">
             <i class="fa fa-pencil"></i>Dependants</button>
             <button class="btn btn-primary" data-toggle="modal" data-target="#myLeave">
             <i class="fa fa-pencil"></i>LeaveInformation(out)</button>
             <button class="btn btn-danger" data-toggle="modal" data-target="#myHealth">
             <i class="fa fa-pencil"></i>Health</button>


            <!-- <button class="btn btn-default" data-toggle="modal" data-target="#myModal">
             <i class="fa fa-pencil"></i>ContactExperience</button>-->


<div class="img">
<a target="_blank" href="<?php echo $row['Picture']?>">
<img id="borderimg" src="<?php echo $row['Picture']?>" alt="Trolltunga Norway" width="100" height="100">
</a>

</div>
           </div>
    
             <!-- Modal -->
         
             </div>
             <?php include('AddModal_FOS.php');?>
             <?php  include('AddModal_Address.php');?>
             <?php  include('AddModal_Spouse.php');?>
             <?php  include('AddModal_Dependant.php');?>
             <?php  include('AddModal_LeaveInfo.php');?>
             <?php  include('AddModal_Health.php');?>
























