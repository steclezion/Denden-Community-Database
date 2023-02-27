 <script>
function showResult(str,id) 
{
var fname=document.form.firstname.value;

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
           if(id=="Firstname_a" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?firstname="+str,true);
            xmlhttp.send();
           }
           if(id=="Middlename_a" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?middlename="+str,true);
            xmlhttp.send();
           }
           if(id=="Lastname_a" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?lastname="+str,true);
            xmlhttp.send();
           }
           if(id=="MFName_a" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?MFName="+str,true);
            xmlhttp.send();
           }
           if(id=="MMName_a" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?MMName="+str,true);
            xmlhttp.send();
           }
           if(id=="MLName_a" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?MLName="+str,true);
            xmlhttp.send();
           }
           if(id=="nationalid" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?NationalID="+str,true);
            xmlhttp.send();
           }
           if(id=="Residence_A" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?Residence="+str,true);
            xmlhttp.send();
           }
           if(id=="DOB" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?DOB="+str,true);
            xmlhttp.send();
           }
           if(id=="Jobs" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?Jobs="+str,true);
            xmlhttp.send();
           }
           if(id=="file_1" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?file_1="+str,true);
            xmlhttp.send();
           }
           if(id=="EditModal" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?Modal="+str,true);
            xmlhttp.send();
           }
           if(id=='familyid_a')
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?familyid_a="+str,true);
            xmlhttp.send();
           }
           
           if(id=="filenumber_a")
           {
            xmlhttp.open("GET","Ajax/livesearch_3.php?filenumber="+str,true);
            xmlhttp.send();
           }
           if(id=="check_family_id")
           {
            xmlhttp.open("GET","Ajax/livesearch_3.php?check_family_id="+str,true);
            xmlhttp.send();
           }

}





















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
          
           if(id=="EditModal")
           {
            xmlhttp.open("GET","Ajax/livesearch_3.php?Modal="+str,true);
            xmlhttp.send();
           }


           if(id=="filenumber_a")
           {
            xmlhttp.open("GET","Ajax/livesearch_3.php?filenumber="+str,true);
            xmlhttp.send();
           }

}











function validate()
{

var file=document.form.file.value;
var pic=document.form.Pic.value;
var fname=document.form.fname.value;
var mname=document.form.mname.value;
var lname=document.form.lname.value;
var Gender=document.form.Gender.value;
var Gender_E=document.form.Gender_E.value;
var dob=document.form.DOB.value;
var nationalid=document.form.idnational.value;
var residence=document.form.residentvalue.value;
var org=document.form.orgg.value;
var OrganizationName_E=document.form.OrganizationName_E.value;
var nationality=document.form.nationality.value;
var Nationality_E=document.form.Nationality_E.value;
var ethinicity=document.form.ethinicity.value;
var Ethinicity_E=document.form.Ethinicity_E.value;
var job=document.form.job.value;
var ms=document.form.ms.value;
var MaritalStatus_E=document.form.MaritalStatus_E.value;
var empclass=document.form.empclass.value;
var EmployeementClass_E=document.form.EmployeementClass_E.value;
var inputError=document.form.inputError.value;
var netsalary=document.form.netsalary.value;
var family_id=document.form.family_id.value;
var filenumber=document.form.filenumber.value;
var filenumber_E=document.form.filenumber_E.value;
var religion=document.form.religion.value;
var Religion_E=document.form.Religion_E.value;
var mfn=document.form.mfn.value;
var mlnn=document.form.mln.value;
var mmn=document.form.mmn.value;
var edate=document.form.edate.value;
var Gas=document.form.Gas.value;
var Gas_E=document.form.GroupGas_E.value;
var empstat=document.form.empstat.value;
var EmployeementStatus_E=document.form.EmployeementStatus_E.value;
var Camp=document.form.Camp.value;
var Camp_region=document.form.camp_region.value;

function checkNum(str)
   {
    var l=str.length;
    for(i=0;i<=1;i++)
        {
         if(!(((str.charAt(i)<='9' && str.charAt(i)>='0')) || ((str.charAt(i)<='0' && str.charAt(i)>='0'))))
           {
            return true;
		   }
		 }
      return false;
}

function checkNum_all(str)
   {
    var l=str.length;
    for(i=0;i<=l;i++)
        {
         if(!(((str.charAt(i)<='9' && str.charAt(i)>='0')) || ((str.charAt(i)<='0' && str.charAt(i)>='0'))))
           {
            return true;
		   }
		 }
      return false;
}




if(ms=="" && MaritalStatus_E=="")
{
  alert("Please Select Marital Status");
   document.form.ms.focus();
   return false;

}



if(Camp=="" && Camp_region=="")
{
  alert("Please Select Camp Region");
   document.form.Camp.focus();
   return false;

}

if(empclass=="" && EmployeementClass_E=="")
{

  alert("Please Select EmployeeClass Status");
   document.form.ms.focus();
   return false;
}

if(fname=="")
{
   alert("Please Enter ForMan/Forwoman First Name");
   document.form.fname.focus();
   return false;
}
if(empstat=="" && EmployeementStatus_E==0 )
{
   alert("Please Enter Employeement Status");
   document.form.empstat.focus();
   return false;
}
if(edate=="")
{
   alert("Please Enter Entrydate");
   document.form.edate.focus();
   return false;
}
if(Gas=="" && Gas_E=="")
{
   alert("Please select Gas Group");
   document.form.Gas.focus();
   return false;
}
if(mname=="")
{
   alert("Please Enter ForMan/Forwoman Middle Name");
   document.form.mname.focus();
   return false;

}
if(lname=="")
{
alert("Please Enter ForMan/Forwoman Last Name");
   document.form.lname.focus();
   return false;
}
if(Gender=="" && Gender_E=="")
{
   alert("Please select ForMan/Forwoman Gender");
   document.form.Gender.focus();
   return false;
}
if(nationalid!="")
{
  var e = document.getElementById('nationalid').innerHTML;
var error = '<span class="alert alert-danger"><i class="fa fa-exclamation-triangle"> </i></span>';

if(error==e)
{
alert("Please Make sure National Id is 7(int) and The new Id is 6charcter-5charcter");
document.form.idnational.focus();
return false;
}

}


if(residence!="")
{
var e = document.getElementById('Residence_A').innerHTML;
var error = '<span class="alert alert-danger"><i class="fa fa-exclamation-triangle"> </i></span>';
if(error==e)
{
alert("Please Make Sure Resident ID Starts with (ASC,KEC,GBC,DKC,SKC,ZDC) and Follwed with 8Numbers");
document.form.residentvalue.focus();
return false;
}
}


if(residence=="ASC")
{
alert("Please Make Sure ResidentID  Starts with (ASC) and Follwed with 8 Numbers");
document.form.residentvalue.focus();
return false;
}


if(dob!="")
{
var e = document.getElementById('DOB').innerHTML;
var error = '<span class="alert alert-danger"><i class="fa fa-exclamation-triangle">Year&lt;2001 or Year&gt;1929 </i></span>';

if(error==e)
{
alert("Date of Birth should be Less than 2001 and Greater than 1929");
document.form.dob.focus();
return false;
}

}
if(fname=="")
{
 alert("Please Enter First Name");
   document.form.firstname.value="";
   document.form.firstname.focus();
   return false;
 }
 if((fname.length<=10) && (fname.indexOf("____")==-1))
 {
    
    alert("FirstName::Please Select From the Box Down There Titled under Choose  Names From Here");
    //document.form.firstname.value="";
    document.form.fname.focus();
   return false;
   }

   if(mname=="")
{ 
 alert("Please Enter  Middle Name");
   document.form.mname.value="";
   document.form.mname.focus();
   return false;
 }
 if((mname.length<=10) && (mname.indexOf("____")==-1))
 
 {
    alert("MiddleName::Please Select From the Box Down There Titled under Choose  Names From Here");
  
   //document.form.middlename.value="";
   document.form.mname.focus();
   return false;
   }

    if(lname=="")
{
 alert("Please Enter  LastName Name");
   document.form.lname.value="";
   document.form.lname.focus();
   return false;
 }
 if((lname.length<=10) && (lname.indexOf("____")==-1))
 {
    alert("LastName::Please Select From the Box Down There Titled under Choose  Names From Here");
  
   //document.form.lastname.value="";
   document.form.lname.focus();
   return false;
   }

     if(dob=="")
{
 alert("Please Enter Date of Birth ");
   document.form.dob.value="";
   document.form.dob.focus();
   return false;
 }

  if(residence=="")
{
 alert("Please Enter Residence Name must start with ASC,DKC,ZDC,SKC,SKC,GBC");
   document.form.residentvalue.value="";
   document.form.residentvalue.focus();
   return false;
 }
 if(nationality=="" && Nationality_E=="")
{
 alert("Please select Nationality");
   document.form.nationality.value="";
   document.form.nationality.focus();
   return false;
 }
 if(nationalid=="")
{
 alert("Enter NationalID Please ");
   document.form.nationalid.value="";
   document.form.nationalid.focus();
   return false;
 }
 if(ethinicity=="" && Ethinicity_E=="")
{
 alert("Please select ethinicity ");
   document.form.ethinicity.value="";
   document.form.ethinicity.focus();
   return false;
 }


 if(org=="" && OrganizationName_E=="")
{
 alert("Please Enter CurrentOrganization ");
   document.form.orgg.value="";
   document.form.orgg.focus();
   return false;
 }

  if(inputError=="")
{
 alert("Please Enter EmployeeDate ");
   document.form.inputError.value="";
   document.form.inputError.focus();
   return false;
 }
 if(family_id=="ASF" || family_id=="")
{

alert("Please Make Sure Coupon Family ID  Starts with (ASF) and Follwed with 9 Numbers");
document.form.family_id.focus();
return false;

}

if(family_id!="")
{
var e =document.getElementById('familyid_a').innerHTML;
var error='<span class="alert alert-danger"><i class="fa fa-exclamation-triangle"> </i></span>';
if(error==e)
{
alert("Please Make Sure Coupon Family ID  Starts with (ASF) and Follwed with 9 Numbers");
document.form.family_id.focus();
return false;
}
}

  if(netsalary=="")
{
 alert("Please Enter Net-Salary ");
   document.form.netsalary.value="";
   document.form.netsalary.focus();
   return false;
 }
 if(netsalary>=5000)
{
 alert("Net-Salary Exceeds Governemental Salary Ranges ");
   document.form.netsalary.value="";
   document.form.netsalary.focus();
   return false;
 }

 if(family_id=="")
{
 alert("Please Enter Coupon Family ID Number ");
   document.form.family_id.value="";
   document.form.family_id.focus();
   return false;
 }

  if(filenumber=="" && filenumber_E=="")
{
 alert("Please Enter File Number ");
   document.form.filenumber.value="";
   document.form.filenumber.focus();
   return false;
 }

  if(religion=="" && Religion_E=="")
{
 alert("Please Enter Religion");
   document.form.religion.value="";
   document.form.religion.focus();
   return false;
 }
 
if(mfn=="")
{
 alert("Please Enter Mother First Name");
   document.form.mfn.value="";
   document.form.mfn.focus();
   return false;
 }
 if((mfn.length<=10) && (mfn.indexOf("____")==-1))
 {
    alert("MotherFirstName::Please Select From the Box Down There Titled under Choose  Names From Here");
  
   //document.form.mfn.value="";
   document.form.mfn.focus();
   return false;
   }



   if(mmn=="")
{
 alert("Please Enter Mother Middle Name");
   document.form.mmn.value="";
   document.form.mmn.focus();
   return false;
 }
 if((mmn.length<=10) && (mmn.indexOf("____")==-1))
 {
    alert("MotherMiddleName::Please Select From the Box Down There Titled under Choose  Names From Here");
  
   //document.form.mmn.value="";
   document.form.mmn.focus();
   return false;
   }

   if(mlnn=="")
{
 alert("Please Enter  Mother LastName Name");
   document.form.mln.value="";
   document.form.mln.focus();
   return false;
 }
 if((mlnn.length<=10) && (mlnn.indexOf("____")==-1))
 {
    alert("MotherLastName::Please Select From the Box Down There Titled under Choose  Names From Here");
  
   //document.form.mlnn.value="";
   document.form.mln.focus();
   return false;
   }



if(job=="" ||  job=="____")
{
 alert("Please Enter Current Job");
   document.form.job.value="";
   document.form.job.focus();
   return false;
 }

if((job.length<=10) && (job.indexOf("____")==-1))
 {
    alert("CurrenJob::Please Select From the Box Down There Titled under Choose  Names From Here");
  
   //document.form.mlnn.value="";
   document.form.job.focus();
   return false;
   }




 if(file=="" && pic=="" )
{
   alert("Please Upload An Image");
   document.form.file.focus();
   return false;
}
 
 if(file!="")
{
  var e  = document.getElementById('file_1').innerHTML;
  var error = 0;

if(e=='')
{
   alert("Wait few seconds for Processing");
   document.form.file.focus();
   return false;
}
if(error==e)
{alert("Your Selected File is not Image");
   document.form.file.value="";
   document.form.file.focus();
   return false;
}
 
 }













}














function Route_Employee_Delete(EmployeeID)
{
  
  if(confirm("You are Deleting an Employee with EmployeeID=="+EmployeeID)){window.location='../routes/RouteHandler.php.?EmployeeID='+EmployeeID+'&R=DeleteEmployee';}else{}
 //window.location = '../routes/RouteHandler.php.?R=PersonalInfo';

 
 
}
          

</script>























 <script>
                function showResult_Edit_Modal(str,id) {
                 

            
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
            
          if (id=="Modal")
          {
          xmlhttp.open("GET","Ajax/livesearch_3.php?Modal="+str,true);
           xmlhttp.send();
           document.getElementById(id).focus();
          }
           


        
   
      
}




































</script>