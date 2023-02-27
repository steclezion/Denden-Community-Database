<?php
include('../config/database.php');
include('../config/core.php');
include('../objects/Master.php');
include('../objects/SignIn_Class_.php');
include('../objects/Session_Class_.php');


@$Session_Login= new Session($db);
@$Login = new Login($db);
@$Master = new Master($db);
@$Login_Info =$Login->Authenticating_Login_PC(); //Uses for Session Authenticating
@$User_Name = $_SESSION['User_Name']; //Set User NAme Session
@$Password  = $_SESSION['Password'];  //Set Password Session
@$FullName  = $Session_Login->Retrive_Full_Name($User_Name,$Password); //Retive Data of UserNAme and Password
@$Session_Login::Expire_Session_Login($_SESSION['User_Name'],$_SESSION['Password'],$_SESSION['Expire'] );
@$occupantInfo_Certain_Actions= new Employee($db);
//@$occupantInfo=$occupantInfo_Certain_Actions->Select_Users('[HR].[FullInfo]');

@$occupantInfo=$occupantInfo_Certain_Actions->Select_FixedElements('*,SUBSTRING(PID,8,11)','`HR.occupantinfo`');
@$Employee_Nationality = $occupantInfo_Certain_Actions->Select_Users_Where('`Company.LookupItem`',"LookupTypeID = 4 ");
@$Employee_Ethinicity  = $occupantInfo_Certain_Actions->Select_Users_Where('`Company.LookupItem`',"LookupTypeID =15");
@$organization_Name = $occupantInfo_Certain_Actions->Select_Users_Where('`Company.Organization`','OrganizationID>=0 order by OrganizationName ASC');
@$MartialStatus=$occupantInfo_Certain_Actions->Select_Users_Where('`Company.LookupItem`',"LookupTypeID =37");
@$EmployeementClass=$occupantInfo_Certain_Actions->Select_Users_Where('`Company.LookupItem`',"LookupTypeID =24");
$EmployeementStatus=$occupantInfo_Certain_Actions->Select_Users_Where('`Company.LookupItem`',"LookupTypeID =25");

?>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Denden Camp HR DataAnalysis</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
   <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->

	
	    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/custom.js"></script>
    <style>
#Region{

    font-family:Monotype Corsiva;
}
#style{

    font-family:Algerian;
}

#borderimg {
    border: 10px solid transparent;
    padding: 15px;
    -webkit-border-image: url('../assets/img/border.png') 30 stretch; /* Safari 3.1-5 */
    -o-border-image: url(border.png) 30 round; /* Opera 11-12.1 */
    border-image: url('../assets/img/border.png') 30 stretch;
}

#border {
    border: 10px solid transparent;
    padding: 15px;
    -webkit-border-image: url('../assets/img/border.png') 30 round; /* Safari 3.1-5 */
    -o-border-image: url(border.png) 30 round; /* Opera 11-12.1 */
    border-image: url('../assets/img/border.png') 30 round;
}

img {
    border-radius: 8px;
}




    </style>
   
   <script>
         function  myFunctionAddress()
         {
onclick = function() 
{
    var table = document.getElementById('table_address'),rIndex;
///var checkbox = document.getElementById('chkAgree');
///checkbox.checked = false;

for(var i =0; i < table.rows.length ; i++)
{ 
var row = table.rows[i];
//var chkbox = row.cells[0].childNodes[0];

row.onclick = function()
{
   rIndex = this.rowIndex;
  // checkbox.rows[i].checked = true;
    console.log(rIndex);
 
//this.cells[i].innerHTML= null;
//chkbox.checked=true;
//this.cells[0].innerHTML= 'selected';
//document.getElementById('sam').style.color = 'blue';
var updated = document.getElementById('updated_ad');
var saved = document.getElementById('saved_ad');
if(rIndex==0)
{

document.getElementById('HouseNumber').value = "";
document.getElementById('Blocks').value ="";
document.getElementById('HouseArea').value = "";
document.getElementById('MobileNumber').value = "";
document.getElementById('TelephoneNumber').value = "";
document.getElementById('HouseNumber').disabled=false;
document.getElementById('Blocks').disabled=false;
document.getElementById('HouseArea').disabled=false;
document.getElementById('MobileNumber').disabled=false;
document.getElementById('TelephoneNumber').disabled=false;
updated.style.display = "none";
saved.style.display = "block";

}
else{
document.getElementById('HouseNumber').value = this.cells[3].innerHTML;
document.getElementById('AID').value = this.cells[0].innerHTML;
document.getElementById('camp_r').value = this.cells[1].innerHTML;
document.getElementById('Blocks').value = this.cells[2].innerHTML;
document.getElementById('HouseArea').value = this.cells[4].innerHTML;
document.getElementById('MobileNumber').value = this.cells[5].innerHTML;
document.getElementById('TelephoneNumber').value = this.cells[6].innerHTML;


document.getElementById('HouseNumber').disabled=false;
document.getElementById('Blocks').disabled=false;
document.getElementById('HouseArea').disabled=false;
document.getElementById('MobileNumber').disabled=false;
document.getElementById('TelephoneNumber').disabled=false;

saved.style.display = "none";
updated.style.display = "block";

}
//document.getElementById("addd").disabled = true;
//document.getElementById("updated").disabled = false;
//document.getElementById("deleted").disabled = false;
//document.getElementById("table").getElementsByTagName("td").rows[i] .style.color = "blue";

}

}
}

}

  function  myFunctionDependant()
{
onclick = function() 
{
    var table = document.getElementById('table_dependant'),rIndex;
///var checkbox = document.getElementById('chkAgree');
///checkbox.checked = false;

for(var i =0; i < table.rows.length ; i++)
{ 
var row = table.rows[i];
//var chkbox = row.cells[0].childNodes[0];

row.onclick = function()
{
   rIndex = this.rowIndex;
  // checkbox.rows[i].checked = true;
    console.log(rIndex);
 
//this.cells[i].innerHTML= null;
//chkbox.checked=true;
//this.cells[0].innerHTML= 'selected';
//document.getElementById('sam').style.color = 'blue';
var updated = document.getElementById('updated');
var saved = document.getElementById('saved');
if(rIndex==0)
{
    
document.getElementById('dfname').value ="";
document.getElementById('dlname').value = "";
document.getElementById('dmname').value = "";
document.getElementById('dobd').value="";
document.getElementById('dresidentvalue').value="";
document.getElementById('organizationd').value="";
document.getElementById('jobsd').value="";
document.getElementById('netsalaryd').value="";
document.getElementById('realtiond').value="";
document.getElementById('dfname').disabled=false;
document.getElementById('dlname').disabled=false;
document.getElementById('dmname').disabled=false;
document.getElementById('dobd').disabled=false;
document.getElementById('dresidentvalue').disabled=false;
document.getElementById('organizationd').disabled=false;
document.getElementById('jobsd').disabled=false;
document.getElementById('netsalaryd').disabled=false;
document.getElementById('realtiond').disabled=false;

updated.style.display = "none";
saved.style.display = "block";

}
else{
document.getElementById('DID').value = this.cells[0].innerHTML;
document.getElementById('dfname').value = this.cells[1].innerHTML;
document.getElementById('dlname').value = this.cells[3].innerHTML;
document.getElementById('dmname').value = this.cells[2].innerHTML;
document.getElementById('dobd').value=this.cells[4].innerHTML;
document.getElementById('dresidentvalue').value=this.cells[5].innerHTML;
document.getElementById('organizationd').value=this.cells[6].innerHTML;
document.getElementById('jobsd').value=this.cells[7].innerHTML;
document.getElementById('netsalaryd').value=this.cells[8].innerHTML;
document.getElementById('realtiond').value=this.cells[9].innerHTML;
document.getElementById('dfname').disabled=false;
document.getElementById('dlname').disabled=false;
document.getElementById('dmname').disabled=false;
document.getElementById('dobd').disabled=false;
document.getElementById('dresidentvalue').disabled=false;
document.getElementById('organizationd').disabled=false;
document.getElementById('jobsd').disabled=false;
document.getElementById('netsalaryd').disabled=false;
document.getElementById('realtiond').disabled=false;
updated.style.display = "block";
saved.style.display = "none";

}
//document.getElementById("addd").disabled = true;
//document.getElementById("updated").disabled = false;
//document.getElementById("deleted").disabled = false;
//document.getElementById("table").getElementsByTagName("td").rows[i] .style.color = "blue";

}

}
}
}




  function  myFunctionFOS()
{
onclick = function() 
{
    var table = document.getElementById('table_fos'),rIndex;
///var checkbox = document.getElementById('chkAgree');
///checkbox.checked = false;

for(var i =0; i < table.rows.length ; i++)
{ 
var row = table.rows[i];
//var chkbox = row.cells[0].childNodes[0];

row.onclick = function()
{
   rIndex = this.rowIndex;
  // checkbox.rows[i].checked = true;
    console.log(rIndex);
 
//this.cells[i].innerHTML= null;
//chkbox.checked=true;
//this.cells[0].innerHTML= 'selected';
//document.getElementById('sam').style.color = 'blue';
var Edit = document.getElementById('Edit_FOS');
var Add = document.getElementById('Add_FOS');
if(rIndex==0)
{
document.getElementById('Edu').value=""
 //document.getElementById('fos_insert').value=""
//updated.style.display = "none";
Edit.style.display = "none";
Add.style.display = "block";

}
else{
var FOSS=this.cells[3].innerHTML;
document.getElementById('FID').value=this.cells[1].innerHTML;

document.getElementById('EducationLevel').value = this.cells[2].innerHTML;
if(FOSS=="Empty No FOS")
{
   var  fosn=document.getElementById('fosn');
    var FOS=document.getElementById('FieldofStudyName');
    var Foss_s=document.getElementById("FieldofStudyName_fos");
    fosn.style.display="none";
    FOS.style.display="none";
    Foss_s.style.display="none";
}

if(FOSS!="Empty No FOS")
{
document.getElementById('FieldofStudyName').value = this.cells[3].innerHTML;

fosn=document.getElementById('fosn');
    FOS=document.getElementById('FieldofStudyName');
    fosn.style.display="block";
    FOS.style.display="block";
}
//updated.style.display = "block";
Edit.style.display = "block";
Add.style.display="none"

}


}

}
}
}









  function  myFunctionSpouse()
{
onclick = function() 
{
    var table = document.getElementById('table_spouse'),rIndex;
///var checkbox = document.getElementById('chkAgree');
///checkbox.checked = false;

for(var i =0; i < table.rows.length ; i++)
{ 
var row = table.rows[i];
//var chkbox = row.cells[0].childNodes[0];

row.onclick = function()
{
   rIndex = this.rowIndex;
  // checkbox.rows[i].checked = true;
    console.log(rIndex);
 
//this.cells[i].innerHTML= null;
//chkbox.checked=true;
//this.cells[0].innerHTML= 'selected';
//document.getElementById('sam').style.color = 'blue';
var Save = document.getElementById('ssaved');
var Update = document.getElementById('supdated');
var SPID=document.getElementById('SPID').value;
if(rIndex==0)
{
    //
    if(SPID!="")
    {
alert("An Occupant Can only have one Spouse/  ሓደ ተቐማጣይ ሓደ/ሓንቲ መጻመዲ ኣለዋ/ዎ!!");
document.getElementById('SPID').focus();
return false;
Update.style.display = "none";
Save.style.display = "none";
    }
    else{

         if(confirm("Do you want to Add a new spouse=")){}else{return false;}
document.getElementById('Edu').value=""
 //document.getElementById('fos_insert').value=""
//updated.style.display = "none";
Update.style.display = "none";
Save.style.display = "block";
document.getElementById('sfname').disabled= false;
document.getElementById('smname').disabled= false;
document.getElementById('slname').disabled= false;
document.getElementById('sdob').disabled= false;
document.getElementById('myCheck').disabled = false;
document.getElementById('sidnational').disabled= false;
document.getElementById('sresidentvalue').disabled= false;
document.getElementById('Nationalitys').disabled= false;
document.getElementById('Ethinicitys').disabled= false;
document.getElementById('organizations').disabled= false;
document.getElementById('jobss').disabled= false;
document.getElementById('netsalarys').disabled= false;

    }


}


else{
    var str = this.cells[1].innerHTML;
    var arr = str.split(" ");
    //document.getElementById("demo").innerHTML = arr[2];
    var org=this.cells[7].innerHTML;
    if(org=="HOUSE WIFE")
    {
        org="";

    }
document.getElementById('sfname').value= arr[0];
document.getElementById('smname').value=arr[1];
document.getElementById('slname').value=arr[2];
document.getElementById('sdob').value=this.cells[2].innerHTML;
document.getElementById('sidnational').value=this.cells[3].innerHTML;
document.getElementById('sresidentvalue').value=this.cells[4].innerHTML;
document.getElementById('Nationalitys').value=this.cells[5].innerHTML;
document.getElementById('Ethinicitys').value=this.cells[6].innerHTML;
document.getElementById('organizations').value=org;;
document.getElementById('jobss').value=this.cells[8].innerHTML;
document.getElementById('netsalarys').value=this.cells[9].innerHTML;

document.getElementById('sfname').disabled= false;
document.getElementById('smname').disabled= false;
document.getElementById('slname').disabled= false;
document.getElementById('sdob').disabled= false;
document.getElementById('myCheck').disabled = false;
document.getElementById('sidnational').disabled= false;
document.getElementById('sresidentvalue').disabled= false;
document.getElementById('Nationalitys').disabled= false;
document.getElementById('Ethinicitys').disabled= false;
document.getElementById('organizations').disabled= false;
document.getElementById('jobss').disabled= false;
document.getElementById('netsalarys').disabled= false;

Update.style.display = "block";
Save.style.display = "none";



}


}

}
}
}







function myFunctionLeave()
{
onclick = function() 
{
    var table = document.getElementById('table_Leaveinfo'),rIndex;
///var checkbox = document.getElementById('chkAgree');
///checkbox.checked = false;

for(var i =0; i < table.rows.length ; i++)
{ 
var row = table.rows[i];
//var chkbox = row.cells[0].childNodes[0];

row.onclick = function()
{
   rIndex = this.rowIndex;
  // checkbox.rows[i].checked = true;
    console.log(rIndex);
 
//this.cells[i].innerHTML= null;
//chkbox.checked=true;
//this.cells[0].innerHTML= 'selected';
//document.getElementById('sam').style.color = 'blue';
var save = document.getElementById('saved_Leave');
var update = document.getElementById('updated_Leave');


if(rIndex==0)
{ 
var LID=this.cells[0].innerHTML;
document.getElementById('Exit').value="";
document.getElementById('stayy').value="";
document.getElementById('RemLeave').value = "";
document.getElementById('LID').disabled=false;
document.getElementById('EntryDate').disabled = true;
document.getElementById('Exit').disabled =false;
document.getElementById('stayy').disabled = false;
document.getElementById('Rem').disabled=false;
document.getElementById('RemLeave').disabled = false;

update.style.display = "none";
save.style.display = "block";

}
else
{

document.getElementById('LID').value=this.cells[0].innerHTML;
document.getElementById('EntryDate').value = this.cells[1].innerHTML;
document.getElementById('Exit').value = this.cells[2].innerHTML;
document.getElementById('stayy').value = this.cells[3].innerHTML;
document.getElementById('Rem').value=this.cells[4].innerHTML;
document.getElementById('RemLeave').value = this.cells[4].innerHTML;
document.getElementById('LID').disabled=false;
document.getElementById('EntryDate').disabled = true;
document.getElementById('Exit').disabled =false;
document.getElementById('stayy').disabled = false;
document.getElementById('Rem').disabled=false;
document.getElementById('RemLeave').disabled = false;

update.style.display = "block";
save.style.display="none"
}
}
}
}
}




function myFunctionHealth()
{
onclick = function() 
{
    var table = document.getElementById('table_Healthinfo'),rIndex;
///var checkbox = document.getElementById('chkAgree');
///checkbox.checked = false;

for(var i =0; i < table.rows.length ; i++)
{ 
var row = table.rows[i];
//var chkbox = row.cells[0].childNodes[0];

row.onclick = function()
{
   rIndex = this.rowIndex;
  // checkbox.rows[i].checked = true;
    console.log(rIndex);
 
//this.cells[i].innerHTML= null;
//chkbox.checked=true;
//this.cells[0].innerHTML= 'selected';
//document.getElementById('sam').style.color = 'blue';
var save = document.getElementById('saved_Health');
var update = document.getElementById('updated_Health');
var Severty_update = document.getElementById('Severity_update');
var Disease=document.getElementById('Disease');

if(rIndex==0)
{ 
var LID=this.cells[0].innerHTML;
document.getElementById('DIY').value="";
document.getElementById('DTF').value="";
document.getElementById('Remark_Health').value = "";





document.getElementById('DIY').disabled=false;
document.getElementById('DTF').disabled = false;
document.getElementById('Remark_Health').disabled =false;


update.style.display = "none";
save.style.display = "block";
Severty_update.style.display="none";
Disease.style.display="none";

}
else
{
   
document.getElementById('HID').value=this.cells[0].innerHTML;
document.getElementById('DTF').value = this.cells[1].innerHTML;
document.getElementById('DIY').value = this.cells[3].innerHTML;
document.getElementById('Severity_update').value=this.cells[2].innerHTML;


document.getElementById('Remark_Health').value = this.cells[4].innerHTML;



document.getElementById('HID').disabled=false;
document.getElementById('DIY').disabled = false;
document.getElementById('DTF').disabled =false;
document.getElementById('Remark_Health').disabled = false;
document.getElementById('Severity_update').disabled=true;

update.style.display = "block";
save.style.display="none"
Severty_update.style.display="block";
}
}
}
}
}

   </script>