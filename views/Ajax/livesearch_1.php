<?php
   @$firstname =  $_GET['firstname'];
   @$middlename=  $_GET['middlename'];
   @$lastname=    $_GET['lastname'];
   @$Residence=  $_GET['Residence'];
   @$DOB  = $_GET['DOB'];
   @$Round = $_GET['Round'];
   @$OrganizationID=$_GET['org'];
   @$Jobs = $_GET['sJobs'];
   @$NationalID = $_GET['NationalID'];
   @$Nationality=$_GET['sNationality'];
   @$Ethinicity=$_GET['sEthinicity'];
   @$organization=$_GET['sorganization'];

 
   if(isset($firstname)){$q=$firstname;}else if(isset($middlename)){$q=$middlename;} else if(isset($lastname)){$q=$lastname;}
   else if(isset($MFName)){$q=$MFName;}else if(isset($MMName)){$q=$MMName;}else if(isset($MLName)){$q=$MLName;}
   else if(isset($Jobs)){$q=$Jobs;}
 
   include('../../config/database.php');
   include('../../config/core.php');
   include('../../objects/Master.php');
   include('../../objects/SignIn_Class_.php');
   include('../../objects/Session_Class_.php');

   $Master = new Master($db);
   @$EritreanName = $Master->Select_Users_Where('`MOL.EritreanNames`',"(EnglishNames like '$q%' or TigrinyaNames like '$q%' or ArabicNames like '$q%')"); 
   @$National=$Master->Select_Users_Where('`COMPANY.LookupItem`',"(Name like '$Nationality%' AND LookupTypeId=4)");
   @$sEthinicity=$Master->Select_Users_Where('`COMPANY.LookupItem`',"(Name like '$Ethinicity%' AND LookupTypeId=34)");
   @$sorganization=$Master->Select_Users_Where('`company.organization`',"(`OrganizationName` like '$organization%')");
   
   
  if(isset($Jobs) && !empty($Jobs))
  {
    @$Currentjobs = $Master->Select_Users("`WLO.JobsLevelFive`");
    @$Currentjobs = $Master->Select_Users_Where('`WLO.JobsLevelFive`',"(`LevelFiveJobs` like '$q%')"); 
  
     
    echo  '<i class="btn btn-warning btn-sm" >Choose CurrentJobs From Here </i>  <i class="fa fa-share"></i>
    <select class="form-control" selected name ="Jobss" required  onchange="jobss.value=this.value">
           <option  value="" > </option>';
    
          foreach($Currentjobs as $row)
      {
        
        echo '<option  value="'.$row['LevelFiveJobs'].'" > <i class="alert alert-warning">'.$row['LevelFiveJobs'].'</option>';
      
      }
      
    echo '</select>';
  
  
  }

   
   if(isset($Ethinicity))
   {
     echo  '<i class="btn btn-warning btn-sm" >Choose Spouse Ethincity From Here </i>  <i class="fa fa-share"></i>
        
   <select class="form-control" selected name="firstname_live" id="ssEthinicity"   required onchange="Ethinicitys.value=this.value">
          <option  value="" > </option>';
   
         foreach( $sEthinicity as $row  )
     {
         
       echo '<option  value="'.trim($row['Name']).'" > <i class="alert alert-warning">'.$row['Name'].'</option>';
     
     }
   
   }
   if(isset($organization))
   {
     echo  '<i class="btn btn-warning btn-sm" >Choose Spouse Working Current Organization  From Here </i>  <i class="fa fa-share"></i>
        
   <select class="form-control" selected name="firstname_live" id="ssorganization"    onchange="organizations.value=this.value">
          <option  value="" > </option>';
   
         foreach( $sorganization as $row  )
     {
         
       echo '<option  value="'.trim($row['OrganizationName']).'" > <i class="alert alert-warning">'.$row['OrganizationName'].'</option>';
     
     }
   
   }


   
   
   if(isset($DOB))
   {
     
   $DOB= $Master->check_Birth_Date($DOB);
   echo $Result = ($DOB=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'>Year<2001 or Year>1929 </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";
   
   }


   if(isset($Nationality))
{
  echo  '<i class="btn btn-warning btn-sm" >Choose Spouse Nationality From Here </i>  <i class="fa fa-share"></i>
     
<select class="form-control" selected name="firstname_live" id="ssNationality"  required onchange="Nationalitys.value=this.value">
       <option  value="" > </option>';

      foreach( $National as $row  )
  {
	  
    echo '<option  value="'.trim($row['Name']).'" > <i class="alert alert-warning">'.$row['Name'].'</option>';
  
  }

}

if(isset($firstname))
{
  echo  '<i class="btn btn-warning btn-sm" >Choose Spouse FirstName From Here </i>  <i class="fa fa-share"></i>
     
<select class="form-control" selected name="firstname_live" id="firstname_live" required    onchange="sfirstname.value=this.value">
       <option  value="" > </option>';

      foreach( $EritreanName as $row  )
  {
	   
    echo '<option  value="'.trim($row['EnglishNames']).'____&nbsp;'.trim($row['TigrinyaNames']).'&nbsp;'.trim($row['ArabicNames']).'" > <i class="alert alert-warning">'.$row['EnglishNames'].'</i><br>&nbsp;'.$row['TigrinyaNames'].'<br>&nbsp; '.$row['ArabicNames'].'</option>';
  
  }
  
echo '</select>';
}
if(isset($middlename))
{
  echo  '<i class="btn btn-warning btn-sm" >Choose Spouse Middle Name From Here </i>  <i class="fa fa-share"></i>
  <select class="form-control" selected name ="Middlename" id="middlename_live" required     onchange="smname.value=this.value">
  <option  value="" > </option>';

  foreach( $EritreanName as $row  )
{

  echo '<option  value="'.trim($row['EnglishNames']).'____&nbsp;'.trim($row['TigrinyaNames']).'&nbsp;'.trim($row['ArabicNames']).'" > <i class="alert alert-warning">'.$row['EnglishNames'].'</i><br>&nbsp;'.$row['TigrinyaNames'].'<br>&nbsp; '.$row['ArabicNames'].'</option>';

    }
    
  echo '</select>';

}
if(isset($lastname))
{

  echo  '<i class="btn btn-warning btn-sm" >Choose Spouse Last Name From Here </i>  <i class="fa fa-share"></i>
  <select class="form-control" selected name ="lastname_live" id="lastname_live" required   o  onchange="slname.value=this.value">
  <option  value="" > </option>';

  foreach( $EritreanName as $row  )
{

  echo '<option  value="'.trim($row['EnglishNames']).'____&nbsp;'.trim($row['TigrinyaNames']).'&nbsp;'.trim($row['ArabicNames']).'" > <i class="alert alert-warning">'.$row['EnglishNames'].'</i><br>&nbsp;'.$row['TigrinyaNames'].'<br>&nbsp; '.$row['ArabicNames'].'</option>';

    
    }
    
  echo '</select>';


}



if(isset($NationalID))
{
 $IDNational=$Master->check_NationalID($NationalID);
 
 echo $Result = ($IDNational=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'> </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";

}


if(isset($Residence))
{
  
$ResidentID= $Master->check_ResidentID($Residence);
echo $Result = ($ResidentID=='Error')?"
<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'> </span>":
"<span class='alert alert-success'><i class='fa fa-check'></span>";

}



?>