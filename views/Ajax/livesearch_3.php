<?php
@$Modal = $_GET['Modal'];
@$DOB  = $_GET['DOB'];
@$filenumber=$_GET['filenumber'];
@$check_family_id=$_GET['check_family_id'];
@$Resident=$_GET['Resident_AA'];
@$Cur_org=$_GET['Cur_org'];
@$EducationLevel=$_GET['fosname'];
@$FOSNAME=$_GET['FOSNAME'];
@$FOSNAMEE=$_GET['FOSNAMEE'];
@$Blocks_add=$_GET['Blocks_add'];
@$Mid_add=$_GET['Mid_add'];
@$Tell_add=$_GET['Tell_add'];
@$EducationLevel_fos=$_GET['EducationLevel_fos'];


@$insert=$_GET['insert'];
@$update=$_GET['update'];
@$delete=$_GET['delete'];
@$EducationL=$_GET['EducationLevel'];
@$Access=$_GET['Access'];
@$PID=$_GET['PID'];
@$Fos=$_GET['Fos'];







 $EducationL=(substr($EducationL,0,2)==12)?substr($EducationL,0,2)."+".substr($EducationL,3,3):$EducationL;






   include('../../config/database.php');
   include('../../config/core.php');
   include('../../objects/Master.php');
   include('../../objects/SignIn_Class_.php');
   include('../../objects/Session_Class_.php');
   $Master = new Master($db);
   $Fosname=$Master->Select_Users_Where('`Company.LookupItem`',"LookupTypeID = 18 AND Name Like '$FOSNAME%' ");
   $Blocks=$Master->Select_Users_Where('`Company.LookupItem`',"LookupTypeID = 45 AND Name Like '$Blocks_add%' ");


if(isset($EducationLevel_fos))
{
    echo  '<i class="btn btn-primary btn-sm" >Choose Education Level  From Here </i>  <i class="fa fa-share"></i>
     
    <select class="form-control" selected name="fosname"     onchange="Verify_Edu(this.value)"  required>
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
    <option value="DOCTOR">DOCTOR</option>';   
    echo '</select>';
}



   if(isset($Resident))
   {
    $ResidentID= $Master->check_CouponNumberID($Resident);
    $ID="'".$ResidentID."'";
    $check_RID=$Master->Check_File_Coupon($ID,'`HR.OccupantInfo`','ResidentID');
echo $Result = (($check_RID=='Error') || ($check_RID=='Error'))?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'>Verify Data And Check Length </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";



   }
if(isset($Modal))
{

 $id=$Modal;
 $condition="PID="."'".$id."'";
 $Emp= $Master->Select_Users_Where("`HR.occupantinfo`",$condition);
foreach($Emp as $row){}
 include_once("../Modal/post_modal.php");
}

if(isset($DOB))
{
  
$DB= $Master->check_Birth_Date($DOB);
echo $Result = ($DB=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'>Year<2001 or Year>1929 </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";

}


if(isset($filenumber))
{
  
$Check_filenumber = $Master->Check_File_Coupon($filenumber,'`HR.OccupantInfo`','`CouponFileNumber`');

echo $Result = ($Check_filenumber=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'>FileNumbersExists</span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";

}


if(isset($check_family_id))
{
    $CouponNumberID= $Master->check_CouponNumberID($check_family_id);
    $check_CouponNumber=$Master->Check_File_Coupon($check_family_id,'`HR.OccupantInfo`','`CouponFamilyID`');
echo $R  = ($check_CouponNumber=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'>CouponID-Number Exists</span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";

}

if(isset($EducationLevel) &&  ($EducationLevel=="BA" ||  $EducationLevel=="BSc" || $EducationLevel=="DIPLOMA" || $EducationLevel=="CERTIFICATE" || $EducationLevel=="PHD" || $EducationLevel=="MASTERS"  || $EducationLevel=="DOCTOR"))
{
    ?>
    <div class="form-group"> 
     <label id="style"><strong>FieldofStudy:Name</strong></label>
    <input class="form-control" type="text" id="fname_fos" name="FOSName"  required onkeyup="showResult_FOS(this.value,'FOSNAME')" >
   </div>
<div id="FOSNAME"></div>
<?php
}

if(isset($FOSNAMEE) )
{

    echo  '<i class="btn btn-primary btn-sm" >Choose Fieldofstudy  From Here </i>  <i class="fa fa-share"></i>
     
    <select class="form-control" selected name="fosname"     onchange="FieldofStudyName.value=this.value"  required>
           <option  value="" > </option>';
    
          foreach( $Fosname as $row  )
      {
          
        echo '<option  value="'.trim($row['Name']).'" > <i class="alert alert-warning">'.$row['Name'].'</option>';
      
      }
      
    echo '</select>';


}

if(isset($FOSNAME) )
{

    echo  '<i class="btn btn-success btn-sm" >Choose Fieldofstudy  From Here </i>  <i class="fa fa-share"></i>
     
    <select class="form-control" selected name="fosname"  id="fos_insert"  onchange="fname_fos.value=this.value"  required>
           <option  value="" > </option>';
    
          foreach( $Fosname as $row  )
      {
          
        echo '<option  value="'.trim($row['Name']).'" > <i class="alert alert-warning">'.$row['Name'].'</option>';
      
      }
      
    echo '</select>';


}


if(isset($Blocks_add))
{
    echo  '<i class="btn btn-success btn-sm" >Choose Blocks  From Here </i>  <i class="fa fa-share"></i>
     
    <select class="form-control" selected name="Blocks_name" id="Blocks_name"  onChange="Blocks.value=this.value"    required>
           <option  value="" > </option>';
    
          foreach( $Blocks as $row  )
      {
          
        echo '<option  value="'.trim($row['Name']).'" > <i class="alert alert-warning">'.$row['Name'].'</option>';
      
      }
      
    echo '</select>';

}

if(isset($Mid_add))
{
  
$MID_ID= $Master->check_Mobile_Number($Mid_add);
echo $Result = ($MID_ID=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'> </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";

}


if(isset($Tell_add))
{
  
$Tell= $Master->check_Tele_Number($Tell_add);
echo $Result = ($Tell=='Error')?"<span class='alert alert-danger'><i class='fa fa-exclamation-triangle'> </span>":"<span class='alert alert-success'><i class='fa fa-check'></span>";

}


if(isset($insert))
{
    $FID=$Master->Max_Users('`HR.Fieldofstudy`','`FieldofstudyID`');
    $FieldofstudyID=$FID+1;

$Data = array(
        'PID'=>$PID,
        'FieldofstudyID'=>$FieldofstudyID,
        'FieldofstudyName'=>$Fos,
        'EducationLevel'=>$EducationL,
        'Who'=>$Access);

$FOS_Inserted=$Master->Insert_Users($Data,'`HR.Fieldofstudy`'); //Employee are Selected


    ?>
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
                                   $Condition="PID="."'".$PID."'";
                                   $i=0;
                                    $DependantInfo=$Master->Select_Users_Where('`HR.Fieldofstudy`',$Condition);
                                    foreach($DependantInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                        <td id="did"><?php echo $i; ?></td>    
                                        <td id="did"><?php echo $mow['FieldofstudyID']; ?></td>
                                            <td><?php echo $mow['EducationLevel']; ?></td>
                                            <td><?php echo $mow['FieldofstudyName']; ?></td>
<td> <button onclick="FOSResult_Delete('delete','table_fieldofstudy',<?php echo $mow['FieldofstudyID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>

                                    </tbody>
                                </table>
                            </div>

    <?php





}



if(isset($update))
{
    $FID=$_GET['FID'];
   

$Data = array(
        
        'FieldofstudyID'=>$FID,
        'FieldofstudyName'=>$Fos,
        'EducationLevel'=>$EducationL,
        'Who'=>$Access);

        $Condition="`PID`="."'".$PID."'"." AND "."`FieldofstudyID`=".$FID;

        $Dependant_Updated=@$Master->Update_Users($Data,'`hr.Fieldofstudy`',$Condition);


    ?>
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
                                   $Condition="PID="."'".$PID."'";
                                   $i=0;
                                    $DependantInfo=$Master->Select_Users_Where('`HR.Fieldofstudy`',$Condition);
                                    foreach($DependantInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                        <td id="did"><?php echo $i; ?></td>    
                                        <td id="did"><?php echo $mow['FieldofstudyID']; ?></td>
                                            <td><?php echo $mow['EducationLevel']; ?></td>
                                            <td><?php echo $mow['FieldofstudyName']; ?></td>
<td> <button onclick="FOSResult_Delete('delete','table_fieldofstudy',<?php echo $mow['FieldofstudyID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>

                                    </tbody>
                                </table>
                            </div>

    <?php





}


if($delete=="delete")
{ $FID=$_GET['FID'];

    $condition='`FieldofstudyID`='.$FID." AND PID="."'".$PID."'";
    $DID=$Master->Delete_Users('`HR.Fieldofstudy`',$condition);

        


  ?>
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
                                   $Condition="PID="."'".$PID."'";
                                   $i=0;
                                    $DependantInfo=$Master->Select_Users_Where('`HR.Fieldofstudy`',$Condition);
                                    foreach($DependantInfo as $mow) 
                                    {$i++;?>
                                        <tr>
                                        <td id="did"><?php echo $i; ?></td>    
                                        <td id="did"><?php echo $mow['FieldofstudyID']; ?></td>
                                            <td><?php echo $mow['EducationLevel']; ?></td>
                                            <td><?php echo $mow['FieldofstudyName']; ?></td>
        <td> <button onclick="FOSResult_Delete('delete','table_fieldofstudy',<?php echo $mow['FieldofstudyID']; ?>,'<?php echo $mow['PID']; ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
                                        </tr>
<?php }?>

                                    </tbody>
                                </table>
                            </div>
                                      
                                    </tbody>
                                </table>
                            </div>
  <?php
  
  }









?>