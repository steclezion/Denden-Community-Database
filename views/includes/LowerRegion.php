<h2 id="Region">Lower Zone  Denden-Camp</h2>   
<div class="panel-heading">
    <div id="EditModal">  </div>
                            Records for (ታሕተዋይ ቃኘዉ)
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                            <th>PID</th>
                                            <th>Coupon-ID</th>
                                            <th>CouponFile-Number</th>
                                            <th>FullName</th>
                                            <th>BirthDate</th>
                                            <th>Family#</th>
                                            <th>EntryDate</th>
                                            <th>Gender</th>
                                            
                                            <th>Action</th>
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $i=0; 
                                        $occupantInfo_Lower= $occupantInfo_Certain_Actions->Select_Users_Where('`HR.occupantinfo`',"CampRegion ='Lower'");
                                        foreach($occupantInfo_Lower as $row)
                                        {
    $id=$row['PID'];
    $Firstname=$row['FirstName'];
    $MiddleName=$row['MiddleName'];
    $LastName=$row['LastName'];
$FirstName = $occupantInfo_Certain_Actions->Select_Users_Where('`mol.eritreannames`',"ID=$Firstname");
$MiddleName = $occupantInfo_Certain_Actions->Select_Users_Where('`mol.eritreannames`',"ID=$MiddleName");
$LastName = $occupantInfo_Certain_Actions->Select_Users_Where('`mol.eritreannames`',"ID=$LastName");
foreach($FirstName as $Firstname){}  foreach($MiddleName as $Middlename){}  foreach($LastName as $Lastname){}

        ?>
                                        
                                        <tr class="odd gradeX">
                                        <td><?php echo ++$i; ?></td>
                                            <td><?php echo $row['PID']; ?></td>
                                            <td><?php echo $row['CouponFamilyID']; ?></td>
                                            <td><?php echo $row['CouponFileNumber']; ?></td>
<td><?php echo $Firstname['EnglishNames']." ".$Middlename['EnglishNames']." ".$Lastname['EnglishNames']; ?></td>
                                            <td><?php echo $row['BirthDate']; ?></td>
                                            <td><?php echo $row['FamilyNumber']; ?></td>
                                            <td><?php echo $row['EntryDateCamp']; ?></td>
                                            <td><?php echo $row['Gender']; ?></td>
                                          <td>
                           

                                           <button class="btn btn-info btn-xs"><i class="fa fa-check"></i></button>
    <button onClick="showResult_Edit_Modal('<?php echo $row['PID']; ?>','EditModal')" class="btn btn-primary btn-xs">
    <i class="fa fa-pencil"></i></button>
    <a href="javascript:Route_Employee_Delete('<?php echo trim($row['PID']); ?>')"> 
    <button  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>

  		
                                        </tr>
                                    <?php 
                                }?>
                                   
                                    </tbody>
                                </table>
                            </div>
                            <script>



function showResult_Edit_Modal(str,id) 
{
if (window.XMLHttpRequest) {
   xmlhttp = new XMLHttpRequest();
   }else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.onreadystatechange = function() {
          
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  document.getElementById(id).innerHTML = xmlhttp.responseText;
                  document.getElementById(id).style.border = "1px solid #A5ACB2";
               }
            }
          
           if(id=="EditModal" )
           {
            xmlhttp.open("GET","Ajax/livesearch_3.php?Modal="+str,true);
            xmlhttp.send();
           }

 

}
function Route_Employee_Deletee(EmployeeID)
{
  
  if(confirm("You are Deleting A Resident of DendenCamp  with PID="+EmployeeID)){window.location='../routes/RouteHandler.php.?R=PersonalInfo';}else{}
 //window.location = '../routes/RouteHandler.php.?R=PersonalInfo';

 
 
}
                                </script>