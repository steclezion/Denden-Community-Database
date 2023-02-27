<?php
   @$firstname =  $_GET['firstname'];
   @$middlename=  $_GET['middlename'];
   @$lastname=    $_GET['lastname'];
   @$MFName=      $_GET['MFName'];
   @$MMName=      $_GET['MMName'];
   @$MLName=      $_GET['MLName'];
   @$Residence=  $_GET['Residence'];
   @$DOB  = $_GET['DOB'];
   @$Round = $_GET['Round'];
   @$OrganizationID=$_GET['org'];
   @$suborganizationID= $_GET['suborg'];
   @$DivisionID = $_GET['Divi'];
   @$Jobs = $_GET['Jobs'];
   @$Modal = $_GET['Modal'];
   @$Submit_Firstname=$_GET['Sumbit'];
   @$NationalID = $_GET['NationalID'];
   @$File = $_GET['file_1']; 
   @$EmployeeDate= $_GET['EmployeeDate'];
   @$CouponNumber=$_GET['familyid_a'];

 
   if(isset($firstname)){$q=$firstname;}else if(isset($middlename)){$q=$middlename;} else if(isset($lastname)){$q=$lastname;}
   else if(isset($MFName)){$q=$MFName;}else if(isset($MMName)){$q=$MMName;}else if(isset($MLName)){$q=$MLName;}
   else if(isset($Jobs)){$q=$Jobs;}
 
   include('../../config/database.php');
   include('../../config/core.php');
   include('../../objects/Master.php');
   include('../../objects/SignIn_Class_.php');
   include('../../objects/Session_Class_.php');

   $Master = new Master($db);
   @$EritreanName = $Master->Select_Users_Where('`MOL.EritreanNames`',"(`EnglishNames` like '$q%' or `TigrinyaNames` like '$q%' or `ArabicNames` like '$q%')"); 
 if(isset($Modal))
 {

$id=$Modal;
$condition="EmployeeID="."'".$id."'";
//@$Emp= $Master->Select_Users_Where("hrm.employee",$condition);
foreach($Emp as $row){}
  include("../Modal/EditModal/EditEmployeeModal.php");
 }


 if(isset($File))
 {
  $imageFileType = strtolower(pathinfo($File,PATHINFO_EXTENSION));
  $file= $Master->ControlImage($imageFileType);
  echo $Result = ($file=='Error')?0:"1";
  
 }

 if(isset($EmployeeDate))
 {

  $Hiredate= $Master->check_Employee_Hire_Date($EmployeeDate);
  echo $Result = ($Hiredate=='Error')?0:"1";
  
 }

 
 if(isset($Submit_Firstname))
 {
  $Explode = explode('&',$Submit_Firstname);
  foreach($Explode as $row)
  {

    echo  $row[0];
  }

 }
if(isset($firstname))
{
  echo  '<i class="btn btn-warning btn-sm" >Choose Names From Here </i>  <i class="fa fa-share"></i>
     
<select class="form-control" selected name="firstname_live" id="firstname_live" onfocus="firstname.value=this.value"  onchange="firstname.value=this.value">
       <option  value="" > </option>';
      foreach( $EritreanName as $row  )
  {
	  
    echo '<option  value="'.trim($row['EnglishNames']).'____&nbsp;'.trim($row['TigrinyaNames']).'&nbsp;'.trim($row['ArabicNames']).'" > <i class="alert alert-warning">'.$row['EnglishNames'].'</i><br>&nbsp;'.$row['TigrinyaNames'].'<br>&nbsp; '.$row['ArabicNames'].'</option>';
  
  }

echo '</select>';

}
if(isset($middlename))
{
  echo  '<i class="btn btn-warning btn-sm" >Choose Names From Here </i>  <i class="fa fa-share"></i>
  <select class="form-control" selected name ="Middlename" id="middlename_live"  onfocus="middlename.value=this.value"  onchange="mname.value=this.value">
  <option  value="" > </option>';

  foreach( $EritreanName as $row  )
{

  echo '<option  value="'.trim($row['EnglishNames']).'____&nbsp;'.trim($row['TigrinyaNames']).'&nbsp;'.trim($row['ArabicNames']).'" > <i class="alert alert-warning">'.$row['EnglishNames'].'</i><br>&nbsp;'.$row['TigrinyaNames'].'<br>&nbsp; '.$row['ArabicNames'].'</option>';

    }
    
  echo '</select>';

}
if(isset($lastname))
{

  echo  '<i class="btn btn-warning btn-sm" >Choose Names From Here </i>  <i class="fa fa-share"></i>
  <select class="form-control" selected name ="lastname_live" id="lastname_live"  onfocus="lastname.value=this.value"  onchange="lname.value=this.value">
  <option  value="" > </option>';

  foreach( $EritreanName as $row  )
{

  echo '<option  value="'.trim($row['EnglishNames']).'____&nbsp;'.trim($row['TigrinyaNames']).'&nbsp;'.trim($row['ArabicNames']).'" > <i class="alert alert-warning">'.$row['EnglishNames'].'</i><br>&nbsp;'.$row['TigrinyaNames'].'<br>&nbsp; '.$row['ArabicNames'].'</option>';

    
    }
    
  echo '</select>';


}
if(isset($MFName))
{

  echo  '<i class="btn btn-warning btn-sm" >Choose Names From Here </i>  <i class="fa fa-share"></i>
  <select class="form-control" selected name ="MFName_live" id="mfname_live" onfocus="mfn.value=this.value"  onchange="mfn.value=this.value">
  <option  value="" > </option>';

  foreach( $EritreanName as $row  )
{

  echo '<option  value="'.trim($row['EnglishNames']).'____&nbsp;'.trim($row['TigrinyaNames']).'&nbsp;'.trim($row['ArabicNames']).'" > <i class="alert alert-warning">'.$row['EnglishNames'].'</i><br>&nbsp;'.$row['TigrinyaNames'].'<br>&nbsp; '.$row['ArabicNames'].'</option>';

    
    }
    
  echo '</select>';


}
if(isset($MMName))
{

  echo  '<i class="btn btn-warning btn-sm" >Choose Names From Here </i>  <i class="fa fa-share"></i>
  <select class="form-control" selected name ="MMName"  onfocus="mmn.value=this.value"  onchange="mmn.value=this.value">
  <option  value="" > </option>';

  foreach( $EritreanName as $row  )
{

  echo '<option  value="'.trim($row['EnglishNames']).'____&nbsp;'.trim($row['TigrinyaNames']).'&nbsp;'.trim($row['ArabicNames']).'" > <i class="alert alert-warning">'.$row['EnglishNames'].'</i><br>&nbsp;'.$row['TigrinyaNames'].'<br>&nbsp; '.$row['ArabicNames'].'</option>';

    
    }
    
  echo '</select>';


}
if(isset($MLName))
{

  echo  '<i class="btn btn-warning btn-sm" >Choose Names From Here </i>  <i class="fa fa-share"></i>
  <select class="form-control" selected name ="MLName"  onfocus="mlnn.value=this.value"  onchange="mln.value=this.value">
  <option  value="" > </option>';

  foreach( $EritreanName as $row  )
{

  echo '<option  value="'.trim($row['EnglishNames']).'____&nbsp;'.trim($row['TigrinyaNames']).'&nbsp;'.trim($row['ArabicNames']).'" > <i class="alert alert-warning">'.$row['EnglishNames'].'</i><br>&nbsp;'.$row['TigrinyaNames'].'<br>&nbsp; '.$row['ArabicNames'].'</option>';

    }
    
  echo '</select>';


}
if(isset($Jobs) && !empty($Jobs))
{
  @$Currentjobs = $Master->Select_Users('`WLO.JobsLevelFive`');
  @$Currentjobs = $Master->Select_Users_Where('`WLO.JobsLevelFive`',"( `LevelFiveJobs` like '$q%')"); 

   
  echo  '<i class="btn btn-warning btn-sm" >Choose Names From Here </i>  <i class="fa fa-share"></i>
  <select class="form-control" selected name ="Jobs" onchange="job.value=this.value">
         <option  value="" > </option>';
  
        foreach($Currentjobs as $row)
    {
      
      echo '<option  value="'.$row['ID'].'.'.$row['LevelFiveJobs'].'" > <i class="alert alert-warning">'.$row['LevelFiveJobs'].'</option>';
    
    }
    
  echo '</select>';


}
if(isset($Residence))
{
  
$ResidentID= $Master->check_ResidentID($Residence);
echo $Result = ($ResidentID=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'> </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";

}

if(isset($CouponNumber))
{
  
$CouponNumberID= $Master->check_CouponNumberID($CouponNumber);
$ID="'".$CouponNumber."'";
$check_CouponNumber=$Master->Check_File_Coupon($ID,'`HR.OccupantInfo`','CouponFamilyID');
echo $Result = (($CouponNumberID=='Error') || ($check_CouponNumber=='Error'))?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'>Verify Data And Check Length </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";

}

if(isset($NationalID))
{
 $IDNational=$Master->check_NationalID($NationalID);
 
 echo $Result = ($IDNational=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'> </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";


}

if(isset($DOB))
{
  
$ResidentID= $Master->check_Birth_Date($DOB);
echo $Result = ($ResidentID=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'>Year<2001 or Year>1929 </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";

}
if(isset($Round))
{
  
  echo  '<i class="btn btn-warning btn-sm" >Choose Round Here </i>  <i class="fa fa-share"></i>
  <select class="form-control" selected name ="round_round" id="round" onchange="round_round.value=this.value">
        <option  value="" > </option>';
  
        for($i=1;$i<=35 ; $i++ )
    {
      
      echo '<option  value="'.$i.'" > <i class="alert alert-warning">'.$i.'</option>';
    
    }
    
  echo '</select>';

}
 // 

if(!empty($OrganizationID) && $OrganizationID >0 )
{
  $condition =(isset($OrganizationID))?"OrganizationID=".@$OrganizationID:"OrganizationID=NULL";
  @$Suborganization = @$Master->Select_Users_Where("`company.suborganization`",@$condition);
  ?>
  <select style="color:black" autocomplete="off" class="form-control" width="12" name="suborganization"   Onchange="showResult(this.value,'suborg')">
  <option value=""></option> 
                <?php  foreach($Suborganization as $row)  
                {    
                  ?>
          <option value="<?php echo $row['SubOrganizationID']; ?>"><i style="color:black"><?php echo $row['SubOrganizationName'];?></i></option>';
                   
              <?php  } ?>
                </select>
<?php
}

if(!empty($suborganizationID) && $suborganizationID >0 )
{
  echo $condition =(isset($suborganizationID))?"subOrganizationID=".@$suborganizationID:"suborganizationID=NULL";
  @$Suborganization = @$Master->Select_Users_Where("`company.Division`",@$condition);
  ?>
  <select style="color:black" autocomplete="off" class="form-control" width="12" name="suborganization"   required  onchange="showResult(this.value,'Divi')">
  <option value=""></option> 
               <?php  foreach($Suborganization as $row)  
                {    
                  ?>
          <option value="<?php echo $row['DivisionID']; ?>"><i style="color:black"><?php echo $row['DivisionName'];?></i></option>';
                   
              <?php  } ?>
                </select>
<?php
}

if(!empty($DivisionID) && $DivisionID >0 )
{
  $condition =(isset($DivisionID))?"DivisionID=".@$DivisionID:"DivisionID=NULL";
  @$Division = @$Master->Select_Users_Where("`company.SubDivision`",@$condition);
  ?>
  <select style="color:black"  required autocomplete="off" class="form-control" width="12" name="SubdivisionnameID"   onchange="showResult(this.value,'SubDiv')">
              <option value=""></option> 
               <?php  foreach($Division as $row)  
                {    
                  ?>
          <option value="<?php echo $row['SubDivisionID']; ?>"><i style="color:black"><?php echo $row['SubDivisionName'];?></i></option>';
                   
              <?php  } ?>
                </select>
<?php
}


















?>