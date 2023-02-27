 <script>
function Check_Date(Exit,Entry,Info)
{
    var Information;
    var Check = new Date();
    var Year_a = new Date(Exit);
    var Year_b = new Date(Entry);

     if( Year_b!="")
     {
   
   
   


    Check = (Year_a.getFullYear())-(Year_b.getFullYear());
   if(Check < 0) { alert('Exit Date is should not be Lesser Than that of Entry Date');  
    return false; }
    Information=(Info + " Has been Lived In Denden Camp For about" + Check +" "+ "Years");  
    document.getElementById('stayy').value=Check;
    document.getElementById('RemLeave').value="";
    document.getElementById('Rem').value;
    document.getElementById('RemLeave').value = document.getElementById('Rem').value+Information;
    console.log(Info);
     }
     else

     {

         alert("Dear User Try to Provide All the Necessary Informations for further Processing")
         document.getElementById('Exit').value="";
     }
}


function Check_Date_a(Exit,Entry,Info)
{
    var Information;
    var Check = new Date();
    var Year_b = new Date(Exit);
    var Year_a = new Date(Entry);

     if( Year_b!="")
     {
   
   
   


    Check = (Year_b.getFullYear())-(Year_a.getFullYear());
  
   if(Check < 0) { alert('Exit Date is should not be Lesser Than that of Entry Date');   document.getElementById('EntryDate').value=""; return false; }
    Information=(Info + " Has been Lived In Denden Camp For about" + Check +" "+ "Years");  
    document.getElementById('stayy').value=Check;
    document.getElementById('RemLeave').value="";
    document.getElementById('Rem').value;
    document.getElementById('RemLeave').value = document.getElementById('Rem').value+Information;
    console.log(Info);
     }
     else

     {
 //document.getElementById('Exit').value="";

     }
}



function showResult_address(str,id) 
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
           if(id=="Firstname_ad" && str !="" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?firstname="+str,true);
            xmlhttp.send();
           }
         if(id=="Blocks_add" &&  str !="")
         {
            xmlhttp.open("GET","Ajax/livesearch_3.php?Blocks_add="+str,true);
            xmlhttp.send();

         }

         if( id=="Mid_add" && str !="" )
         {  
            xmlhttp.open("GET","Ajax/livesearch_3.php?Mid_add="+str,true);
            xmlhttp.send();
         }
         if( id=="Tell_add"  && str !="")
         {
            xmlhttp.open("GET","Ajax/livesearch_3.php?Tell_add="+str,true);
            xmlhttp.send();
         }

          }

function showResult_FOS(str,id) 
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
           if(id=="Firstname_afos" )
           {
            xmlhttp.open("GET","Ajax/livesearch_2.php?firstname="+str,true);
            xmlhttp.send();
           }
           

           if(id=="fosname" && (str=="Grade12" || str=="BA" || str=="BSc" || str=="DIPLOMA" || str=="CERTIFICATE" || str=="PHD" || str=="MASTERS" || str=="DOCTOR" ) )
                      {
               var fos = document.getElementById('saved_fos');
               var fos_ = document.getElementById('saved_fos_')
                   fos.style.display="block";
                   fos_.style.display="none";
           xmlhttp.open("GET","Ajax/livesearch_3.php?fosname="+str,true);
            xmlhttp.send();
           }
           if(id=="fosname" && (str=="Illitrate"  || str=="Grade1" || str=="Grade2" || str=="Grade3" || str=="Grade4" || str=="Grade5" || str=="Grade6" || str=="Grade7" || str=="Grade8" || str=="Grade9" || str=="Grade10" || str=="Grade11" ) )
           {
               var fos = document.getElementById('saved_fos');
               var fos_ = document.getElementById('saved_fos_')
                   fos.style.display="none";
                   fos_.style.display="block";
           xmlhttp.open("GET","Ajax/livesearch_3.php?fosname="+str,true);
            xmlhttp.send();
           }

         
           if(id=="FOSNAME")
           {
            xmlhttp.open("GET","Ajax/livesearch_3.php?FOSNAME="+str,true);
            xmlhttp.send();
           }
           if(id=="EducationLevel_fos")
           {
            xmlhttp.open("GET","Ajax/livesearch_3.php?EducationLevel_fos="+str,true);
            xmlhttp.send();
           }

           if(id=="FieldofStudyName_fos" && str!="" )
           {
            xmlhttp.open("GET","Ajax/livesearch_3.php?FOSNAMEE="+str,true);
            xmlhttp.send();

           }
          
        
}















function validate_address()
{

var Blocks = document.forms["myForm"]["Blocks"].value;
var MobileNumber=document.forms["myForm"]["MobileNumber"].value;
var TelephoneNumber=document.forms["myForm"]["TelephoneNumber"].value;

if(MobileNumber!="")
{

var e = document.getElementById('Mid_add').innerHTML;
var error = '<span class="alert alert-danger"><i class="fa fa-exclamation-triangle"> </i></span>';
if(error==e)
{
alert("Mobile Number is Not Correct: It Must Start With 07(followed by 6Numbers)");
//document.forms["myForm"]["MobileNumber"].focus();
return false;
}
}

if(TelephoneNumber!="")
{

var e = document.getElementById('Tell_add').innerHTML;
var error = '<span class="alert alert-danger"><i class="fa fa-exclamation-triangle"> </i></span>';
if(error==e)
{
alert("Tele Number is Not Correct: It Must Start With any Number(followed by 6Numbers)");
//document.forms["myform"]["TeleNumber"].focus();
return false;
}
}
}




function showResult_Spouse(str,id) 
{
var sfname=document.forms["myForm_Spouse"]["sfname"].value;

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
           if(id=="sFirstname_a"  && str!="" )
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?firstname="+str,true);
            xmlhttp.send();
           }
           if(id=="sMiddlename_a"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?middlename="+str,true);
            xmlhttp.send();
           }
           if(id=="sLastname_a"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?lastname="+str,true);
            xmlhttp.send();
           }
          
           if(id=="snationalid"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?NationalID="+str,true);
            xmlhttp.send();
           }
           if(id=="sResidence_A" && str!="" )
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?Residence="+str,true);
            xmlhttp.send();
           }
           if(id=="sDOB"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?DOB="+str,true);
            xmlhttp.send();
           }
           if(id=="sNationality"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?sNationality="+str,true);
            xmlhttp.send();
           }
           if(id=="sEthinicity"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?sEthinicity="+str,true);
            xmlhttp.send();
           }
           if(id=="sorganization"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?sorganization="+str,true);
            xmlhttp.send();

           }
           if(id=="sJobs"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_1.php?sJobs="+str,true);
            xmlhttp.send();

           }




}


function validate_spouse()
{
var netsalarys=document.forms["myForm_Spouse"]["netsalarys"].value;
if(netsalarys>=5000)
{

  alert("Please check Spouse's Net Salary Exceeds 5000");
  return false;
}




}


 function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

 var checkBoxd=document.getElementById("myCheckd");
 var textd=document.getElementById("textd");
  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }

  if (checkBoxd.checked == true){
    textd.style.display = "block";
  } else {
    textd.style.display = "none";
  }

}




function showResult_Dependant(str,id) 
{
var dfname=document.forms["myForm_Dependant"]["dfname"].value;

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
           if(id=="dFirstname_a"  && str!="" )
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dfirstname="+str,true);
            xmlhttp.send();
           }
           if(id=="dMiddlename_a"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dmiddlename="+str,true);
            xmlhttp.send();
           }
           if(id=="dLastname_a"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dlastname="+str,true);
            xmlhttp.send();
           }
          
           if(id=="dnationalid"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dNationalID="+str,true);
            xmlhttp.send();
           }
           if(id=="dResidence_A" && str!="" )
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dResidence="+str,true);
            xmlhttp.send();
           }
           if(id=="dDOB"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dDOB="+str,true);
            xmlhttp.send();
           }
           if(id=="dNationality"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dNationality="+str,true);
            xmlhttp.send();
           }
           if(id=="dEthinicity"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dEthinicity="+str,true);
            xmlhttp.send();
           }
           if(id=="dorganization"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dorganization="+str,true);
            xmlhttp.send();

           }
           if(id=="dJobs"  && str!="")
           {
            xmlhttp.open("GET","Ajax/livesearch_4.php?dJobs="+str,true);
            xmlhttp.send();

           }
      if(id=="drelation"  && str!="" )
      {
        xmlhttp.open("GET","Ajax/livesearch_5.php?drelation="+str,true);
            xmlhttp.send();

      }



}








function showResult_operation(str,id) 
{
var fname=document.forms["myForm_Dependant"]["dfname"].value;
var lname=document.getElementById('dlname').value ;
var mname=document.getElementById('dmname').value;
var dob=document.getElementById('dobd').value;
var residentvalue=document.getElementById('dresidentvalue').value;
var organization=document.getElementById('organizationd').value;
var jobs=document.getElementById('jobsd').value;
var netsalary=document.getElementById('netsalaryd').value;
var relation=document.getElementById('realtiond').value;
var data="update";
var datai="insert";
var CheckBox = document.getElementById("myCheckd") ;
var did=document.getElementById('DID').value;
var pid=document.getElementById('PID').value;
var Access=document.getElementById('LOP').value;
var updated = document.getElementById('updated');
var saved = document.getElementById('saved');


 if(fname=="")
    {
alert("Please Enter FirstName");
document.getElementById('dfname').focus();
return false;
    }

     if(mname=="")
    {
alert("Please Enter MiddleName");
document.getElementById('dmane').focus();
return false;
    }


     if(lname=="")
    {
alert("Please Enter LastName");
document.getElementById('dlname').focus();
return false;
    }

    if(dob=="")
    {
alert("Please Enter Date of Birth");
document.getElementById('dobd').focus();
return false;
    }

     if(residentvalue=="")
    {
alert("Please Enter LastName");
document.getElementById('dresidentvalue').focus();
return false;
    }


    if(residentvalue!="")
{
var e = document.getElementById('dResidence_A').innerHTML;
var error = '<span class="alert alert-danger"><i class="fa fa-exclamation-triangle"> </i></span>';
if(error==e)
{
alert("Please Make Sure Resident ID Starts with (ASC,KEC,GBC,DKC,SKC,ZDC) and Follwed with 8Numbers");
ocument.getElementById('dresidentvalue').focus();
return false;
}
}


    if(relation=="")
    {
alert("Please Enter Relation of Dependant with For man or woman of the House");
document.getElementById('realtiond').focus();
return false;
    }






if(CheckBox.checked)
{
  if(netsalary=="")
    {
alert("Please Enter Some Value");
document.getElementById('netsalaryd').focus();
return false;
    }


   if(netsalary>=5000)
    {
alert("Please Netslary of the Dependant Exceeds 5000");
document.getElementById('netsalaryd').focus();
return false;
    }

      if(jobs=="")
    {
alert("Please Enter Current Jobs");
document.getElementById('jobsd').focus();
return false;
    }

        if(jobs.length < 10)
    {
alert("Please Choose Currrent Job from the select Box titled under choose jobs from here ");
document.getElementById('jobsd').focus();
return false;
    }

     if(organization=="")
    {
alert("Please Enter Current Organization");
document.getElementById('organizationd').focus();
return false;
    }



}


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
           if(str=="update" )
           {
            document.getElementById('dfname').value="";
            document.getElementById('dfname').disabled=true;
            document.getElementById('dlname').value ="";
            document.getElementById('dlname').disabled =true;
            document.getElementById('dmname').value="";
            document.getElementById('dmname').disabled=true;
            document.getElementById('dobd').value="";
            document.getElementById('dobd').disabled=true;
            document.getElementById('dresidentvalue').value="";
            document.getElementById('dresidentvalue').disabled=true;
            document.getElementById('organizationd').value="";
            document.getElementById('organizationd').disabled=true;
            document.getElementById('jobsd').value="";
            document.getElementById('jobsd').disabled=true;
            document.getElementById('netsalaryd').value="";
            document.getElementById('netsalaryd').disabled=true;
            document.getElementById('realtiond').value="";
            document.getElementById('realtiond').disabled=true;


            document.getElementById('dfname').focus();
            updated.style.display = "none";
            

xmlhttp.open("GET","Ajax/livesearch_5.php?update="+data+"&Firstname="+fname+"&Middename="+mname+"&Lastname="+lname+"&DOB="+dob+"&Resident="+residentvalue+"&organization="+organization+"&jobs="+jobs+"&Netsalary="+netsalary+"&relation="+relation+"&PID="+pid+"&DID="+did+"&Access="+Access,true);
            xmlhttp.send();
           }

             if(str=="insert" )
           {
            document.getElementById('dfname').value="";
            document.getElementById('dlname').value ="";
            document.getElementById('dmname').value="";
            document.getElementById('dobd').value="";
            document.getElementById('dresidentvalue').value="";
            document.getElementById('organizationd').value="";
            document.getElementById('jobsd').value="";
            document.getElementById('netsalaryd').value="";
            document.getElementById('realtiond').value="";

            
           
            document.getElementById('dfname').focus();
xmlhttp.open("GET","Ajax/livesearch_5.php?insert="+datai+"&Firstname="+fname+"&Middename="+mname+"&Lastname="+lname+"&DOB="+dob+"&Resident="+residentvalue+"&organization="+organization+"&jobs="+jobs+"&Netsalary="+netsalary+"&relation="+relation+"&PID="+pid+"&Access="+Access,true);
            xmlhttp.send();
           }
          
          





}

 function myfunctionaddNew()
{
  var updatedd = document.getElementById('updated');
 var  savedd = document.getElementById('saved');
  //var new =document.getElementById('newed');;
            document.getElementById('dfname').value="";
            document.getElementById('dfname').disabled=false;
            document.getElementById('dlname').value ="";
            document.getElementById('dlname').disabled =false;
            document.getElementById('dmname').value="";
            document.getElementById('dmname').disabled=false;
            document.getElementById('dobd').value="";
            document.getElementById('dobd').disabled=false;
            document.getElementById('dresidentvalue').value="";
            document.getElementById('dresidentvalue').disabled=false;
            document.getElementById('organizationd').value="";
            document.getElementById('organizationd').disabled=false;
            document.getElementById('jobsd').value="";
            document.getElementById('jobsd').disabled=false;
            document.getElementById('netsalaryd').value="";
            document.getElementById('netsalaryd').disabled=false;
            document.getElementById('realtiond').value="";
            document.getElementById('realtiond').disabled=false;
           // document.getElementById('updatedd').innerHTML='';

   updatedd.style.display = "none";
   savedd.style.display = "block";
  // new.style.display="block";

}
















function showResult_Delete(str,id,DID,PID) 
{
var datai;
 if(confirm("You are deleting a Dependant with DependantID="+DID)){datai="delete";}else{return false;}

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
          
           if(str=="delete" )
           {
            document.getElementById('dfname').focus();
xmlhttp.open("GET","Ajax/livesearch_5.php?delete="+datai+"&DID="+DID+"&PID="+PID,true);
            xmlhttp.send();
           }
          





}



function showResult_operation_address(str,id) 
{

var Hs=document.getElementById('HouseNumber').value;
var B=document.getElementById('Blocks').value;
var Ha=document.getElementById('HouseArea').value;
var mn=document.getElementById('MobileNumber').value;
var Tp=document.getElementById('TelephoneNumber').value;
var PID=document.getElementById('PID').value;
var AID=document.getElementById('AID').value;
var camp_r = document.getElementById('camp_r').value;

var Access=document.getElementById('LOP').value;


if(Hs=="")
{
alert("Please Enter House Number");
document.getElementById('HouseNumber').focus();
return false;
}

if(B=="")
{
alert("Please Enter Blocks Bumber");
document.getElementById('Blocks').focus();
return false;
}

if(Ha=="")
{
alert("Please Enter House Area");
document.getElementById('HouseArea').focus();
return false;
}

if(mn=="")
{
alert("Please Enter Mobile Number");
document.getElementById('MobileNumber').focus();
return false;
}
if(Tp=="")
{
alert("Please Enter TelephoneNumber");
document.getElementById('TelephoneNumber').focus();
return false;
}




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
           if(str=="update" )
           {
var data ="update";
document.getElementById('HouseNumber').value = "";
document.getElementById('Blocks').value ="";
document.getElementById('HouseArea').value = "";
document.getElementById('MobileNumber').value = "";
document.getElementById('TelephoneNumber').value = "";
document.getElementById('HouseNumber').disabled=true;
document.getElementById('Blocks').disabled=true;
document.getElementById('HouseArea').disabled=true;
document.getElementById('MobileNumber').disabled=true;
document.getElementById('TelephoneNumber').disabled=true;


            document.getElementById('HouseNumber').focus();
            updated.style.display = "none";
            

xmlhttp.open("GET","Ajax/livesearch_6.php?update="+data+"&HouseNumber="+Hs+"&Blocks="+B+"&HouseArea="+Ha+"&MobileNumber="+mn+"&TelephonNumber="+Tp+"&Access="+Access+"&PID="+PID+"&AID="+AID+"&CampZone="+camp_r,true);
            xmlhttp.send();
           }

             if(str=="insert" )
           {
            var datai ="insert";     
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

            document.getElementById('HouseNumber').focus();
xmlhttp.open("GET","Ajax/livesearch_6.php?insert="+datai+"&HouseNumber="+Hs+"&Blocks="+B+"&HouseArea="+Ha+"&MobileNumber="+mn+"&TelephonNumber="+Tp+"&Access"+Access+"&PID="+PID+"&CampZone="+camp_r,true);
            xmlhttp.send();
           }
          
}







function AddressResult_Delete(str,id,AID,PID) 
{
var datai="delete";
document.getElementById('HouseNumber').value = "";
document.getElementById('Blocks').value ="";
document.getElementById('HouseArea').value = "";
document.getElementById('MobileNumber').value = "";
document.getElementById('TelephoneNumber').value = "";
document.getElementById('HouseNumber').disabled=true;
document.getElementById('Blocks').disabled=true;
document.getElementById('HouseArea').disabled=true;
document.getElementById('MobileNumber').disabled=true;
document.getElementById('TelephoneNumber').disabled=true;
 if(confirm("You are deleting an Address with AddressID="+AID)){datai="delete";}else{return false;}

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
          
           if(str=="delete" )
           {

            document.getElementById('HouseNumber').focus();
xmlhttp.open("GET","Ajax/livesearch_6.php?delete="+datai+"&AID="+AID+"&PID="+PID,true);
            xmlhttp.send();
           }

}


function Verify_Edu(str)
{
document.getElementById('EducationLevel').value=str;
var Foss_s=document.getElementById("FieldofStudyName_fos");
var FieldofStudyName=document.getElementById('FieldofStudyName');
var fosn=document.getElementById("fosn");
if(str=="Grade1" || str=="Grade2" || str=="Grade4" || str=="Grade5" || str=="Grade6" || str=="Grade7" || str=="Illitrate" || str=="Grade8" || str=="Grade9" || str=="Grade10" || str=="Grade11")
{
FieldofStudyName.style.display = "none";
fosn.style.display = "none";
}
else{
    Foss_s.style.display="block";
    FieldofStudyName.style.display = "block";
    document.getElementById('FieldofStudyName').value=""
    fosn.style.display = "block";
   

}


}

function showResult_Fos(str,id)
{

var Access= document.getElementById('LOP').value;
var PID=document.getElementById('PID_FOS').value;

'Empty No FOS'

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
            



           if(str=="update")
           {
   var data ="update";
   var Education_Level=  document.getElementById('EducationLevel').value;
   var Fos=document.getElementById('FieldofStudyName').value;
   var Fid=document.getElementById('FID').value;

 if(Education_Level=="Illitrate"  || Education_Level=="Grade1" || Education_Level=="Grade2" || Education_Level=="Grade3" || Education_Level=="Grade4" || Education_Level=="Grade5" || Education_Level=="Grade6" || Education_Level=="Grade7" || Education_Level=="Grade8" || Education_Level=="Grade9" || Education_Level=="Grade10" || Education_Level=="Grade11" || Education_Level=="Grade12")
 {
 Fos="Empty No FOS";
}

   if(Fos=="")
   {

       alert('Please Enter FieldofStudy Name');
       document.getElementById('fos_insert').focus();
       return false;
   }

   if(Education_Level=="Illitrate"  || Education_Level=="Grade1" || Education_Level=="Grade2" || Education_Level=="Grade3" || Education_Level=="Grade4" || Education_Level=="Grade5" || Education_Level=="Grade6" || Education_Level=="Grade7" || Education_Level=="Grade8" || Education_Level=="Grade9" || Education_Level=="Grade10" || Education_Level=="Grade11" || Education_Level=="Grade12" || Education_Level=="BA" || Education_Level=="BSc" || Education_Level=="DIPLOMA" || Education_Level=="CERTIFICATE" || Education_Level=="PHD" ||  Education_Level=="MASTERS"  || Education_Level=="DOCTOR") 
               {
xmlhttp.open("GET","Ajax/livesearch_3.php?update="+data+"&EducationLevel="+Education_Level+"&PID="+PID+"&Access="+Access+"&PID="+PID+"&Fos="+Fos+"&FID="+Fid,true);
            xmlhttp.send();
        
        }
          else
          {
            alert('Please Enter Education and Your Entry must be Sected from the combo box');
       document.getElementById('EducationLevel').focus();
       return false;

          }
        }










if(str=="insert")
{

   var data ="insert";
   var Education_Level=  document.getElementById('Edu').value;
   var Fos=document.getElementById('fos_insert').value;
   if(Education_Level=="")
   {

       alert('Please Enter Education Level');
       document.getElementById('Edu').focus();
       return false;
   }
   if(Fos=="")
   {

       alert('Please Enter FieldofStudy Name');
       document.getElementById('fos_insert').focus();
       return false;
   }
 

xmlhttp.open("GET","Ajax/livesearch_3.php?insert="+data+"&EducationLevel="+Education_Level+"&PID="+PID+"&Access="+Access+"&PID="+PID+"&Fos="+Fos,true);
            xmlhttp.send();
  
}

if(str=="insert_")
{

   var data ="insert";
   var Education_Level=  document.getElementById('Edu').value;
   var Fos="Empty No FOS";
   if(Education_Level=="")
   {

       alert('Please Enter Education Level');
       document.getElementById('Edu').focus();
       return false;
   }

xmlhttp.open("GET","Ajax/livesearch_3.php?insert="+data+"&EducationLevel="+Education_Level+"&PID="+PID+"&Access="+Access+"&PID="+PID+"&Fos="+Fos,true);
            xmlhttp.send();
  
}
}


function FOSResult_Delete(str,id,FID,PID) 
{


var datai="delete";
 if(confirm("You are deleting a FieldofStudy with FieldofstudyID="+FID)){datai="delete";}else{return false;}

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
          
           if(str=="delete" )
           {

           // document.getElementById('table_fieldofstudy').focus();
xmlhttp.open("GET","Ajax/livesearch_3.php?delete="+datai+"&FID="+FID+"&PID="+PID,true);
            xmlhttp.send();
           }

}





function SpouseResult_operation(str,id) 

{

var Access= document.getElementById('LOP').value;
var PID=document.getElementById('PID_SPOU').value;
var fname=document.getElementById('sfname').value;
var mname=document.getElementById('smname').value;
var lname=document.getElementById('slname').value;
var dob=document.getElementById('sdob').value;
var nationalid=document.getElementById('sidnational').value;
var residentid=document.getElementById('sresidentvalue').value;
var nationality=document.getElementById('Nationalitys').value;
var Ethinicity=document.getElementById('Ethinicitys').value;
var organizations=document.getElementById('organizations').value;
var jobs=document.getElementById('jobss').value;
var netslary=document.getElementById('netsalarys').value;

var SPID=document.getElementById('SPID').value;
/*
if(SPID !="")
{
    alert('An Occupant Can only have one Spouse/  ሓደ ተቐማጣይ ሓደ/ሓንቲ መጻመዲ ኣለዋ/ዎ');
       document.getElementById('SPID').focus();
       return false;

}
*/
 if(fname=="")
   {

       alert('Please Enter Spouse FirstName');
       document.getElementById('sfname').focus();
       return false;
   }

    if(mname=="")
   {

       alert('Please Enter Spouse MiddleName');
       document.getElementById('smname').focus();
       return false;
   }

    if(lname=="")
   {

       alert('Please Enter Spouse LastName');
       document.getElementById('slname').focus();
       return false;
   }
   if(dob=="")
   {

       alert('Please Enter Spouse Date of Birth');
       document.getElementById('sdob').focus();
       return false;
   }

   if(dob >= "2004-01-01" ||  dob <= "1925-01-01")
   {

       alert('Date of Birth should in a range of 2004-01-01 and  1925-01-0 ');
       document.getElementById('sdob').focus();
       return false;
   }

   if(nationalid=="")
   {

       alert('Please Enter National ID');
       document.getElementById('sidnational').focus();
       return false;
   }

    if(residentid=="")
   {

       alert('Please Enter Resident ID');
       document.getElementById('sresidentvalue').focus();
       return false;
   }
 if(nationality=="")
 {
    alert('Please Enter Nationality');
       document.getElementById('Nationalitys').focus();
       return false;

 }

 if(Ethinicity=="")
{
    alert('Please Enter Ethinicitys');
       document.getElementById('Ethinicitys').focus();
       return false;
}

var myCheck=document.getElementById('myCheck');
if(myCheck.checked)
{
if(organizations=="")
{
    alert('Please Enter  organization');
       document.getElementById('organizations').focus();
       return false;

}
if(jobs=="")
{

    alert('Please Enter Jobs');
       document.getElementById('jobss').focus();
       return false;
}

if(netslary=="")
{
    alert('Please Enter Netsalary');
       document.getElementById('netsalarys').focus();
       return false;
}
if(netslary>=5000)
{
    alert('Netsalary Exceeds 5000');
       document.getElementById('netsalarys').focus();
       return false;
}

}
if(myCheck.checked==false)

{
    organizations="HOUSE WIFE";
    netslary="";
    jobs="";
}
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
if(str=="update")
{ 

   var data ="update";

 document.getElementById('sfname').focus();
xmlhttp.open("GET","Ajax/livesearch_7.php?update="+data+"&Firstname="+fname+"&Middlename="+mname+"&Lastname="+lname+"&DOB="+dob+"&nationalid="+nationalid+"&resident="+residentid+"&nationalilty="+nationality+"&Ethinicity="+Ethinicity+"&organization="+organizations+"&jobs="+jobs+"&netslary="+netslary+"&PID="+PID+"&Access="+Access+"&SID="+SPID,true);
xmlhttp.send();
  
}

if(str=="insert")
{ 

   var data ="insert";
var arr_fname = fname.split("____");
var arr_mname = mname.split("____");
var arr_lname = lname.split("____");
fname = arr_fname[0];
mname = arr_mname[0];
lname =arr_lname[0];
document.getElementById('sfname').value= "";
document.getElementById('smname').value="";
document.getElementById('slname').value="";
document.getElementById('sdob').value="";
document.getElementById('sidnational').value="";
document.getElementById('sresidentvalue').value="";
document.getElementById('Nationalitys').value="";
document.getElementById('Ethinicitys').value="";
document.getElementById('organizations').value="";
document.getElementById('jobss').value="";
document.getElementById('netsalarys').value="";


document.getElementById('sfname').disabled= true;
document.getElementById('smname').disabled= true;
document.getElementById('slname').disabled= true;
document.getElementById('sdob').disabled= true;
document.getElementById('sidnational').disabled= true;
document.getElementById('sresidentvalue').disabled= true;
document.getElementById('Nationalitys').disabled= true;
document.getElementById('Ethinicitys').disabled= true;
document.getElementById('organizations').disabled= true;
document.getElementById('jobss').disabled= true;
document.getElementById('netsalarys').disabled= true;

var Save = document.getElementById('ssaved');
var Update = document.getElementById('supdated');
Save.style.display="none";

xmlhttp.open("GET","Ajax/livesearch_7.php?insert="+data+"&Firstname="+fname+"&Middlename="+mname+"&Lastname="+lname+"&DOB="+dob+"&nationalid="+nationalid+"&resident="+residentid+"&nationalilty="+nationality+"&Ethinicity="+Ethinicity+"&organization="+organizations+"&jobs="+jobs+"&netslary="+netslary+"&PID="+PID+"&Access="+Access,true);
xmlhttp.send();
  
}

}


function SpouseResult_Delete(str,id,SID,PID) 
{


var datai="delete";
 if(confirm("You are deleting a Spouse  with SpouseID="+SID)){datai="delete";}else{return false;}

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
          
           if(str=="delete" )
           {

           // document.getElementById('table_fieldofstudy').focus();
xmlhttp.open("GET","Ajax/livesearch_7.php?delete="+datai+"&SID="+SID+"&PID="+PID,true);
            xmlhttp.send();
           }

}





function   LeaveResult_operation(str,id)
{

var Access= document.getElementById('LOP').value;
var PID=document.getElementById('PID_Leave').value;
var LID=document.getElementById('LID').value;
var PID=document.getElementById('PID_Leave').value;
var EntryDate=document.getElementById('EntryDate').value ;
var ExitDate=document.getElementById('Exit').value ;
var Num_of_Yr=document.getElementById('stayy').value ;
var Remark =document.getElementById('RemLeave').value;
if(EntryDate == "")
{

    alert("Please Select Entry Date");
    document.getElementById('EntryDate').focus();
    return false;
    
}
if(ExitDate == "")
{

    alert("Please Select Exit Date");
    document.getElementById('Exit').focus();
    return false;
    
}

if(Num_of_Yr==NaN || Num_of_Yr=="" || Num_of_Yr==0 )
 {alert("One of The date is not Selected Please try again by selecting any possible date of entry and Exit") ;
 return false;}

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
            


var save = document.getElementById('saved_Leave');
var update = document.getElementById('updated_Leave');

 if(str=="update")
{
var data ="update";

document.getElementById('LID').value="";
document.getElementById('Exit').value ="";
document.getElementById('stayy').value = "";
document.getElementById('Rem').value="";
document.getElementById('RemLeave').value = "";
document.getElementById('LID').disabled=true;
document.getElementById('EntryDate').disabled = true;
document.getElementById('Exit').disabled = true;
document.getElementById('stayy').disabled = true;
document.getElementById('Rem').disabled=true;
document.getElementById('RemLeave').disabled = true;

update.style.display = "none";
save.style.display="none"

xmlhttp.open("GET","Ajax/livesearch_7.php?update_Leave="+data+"&EntryDate="+EntryDate+"&ExitDate="+ExitDate+"&Access="+Access+"&Numberofyear="+Num_of_Yr+"&Remark="+Remark+"&LID="+LID+"&PID="+PID,true);
xmlhttp.send();
}



if(str=="insert")
{
var data ="insert";

var PID=document.getElementById('PID_Leave').value;
var EntryDate=document.getElementById('EntryDate').value ;
var ExitDate=document.getElementById('Exit').value ;
var Num_of_Yr=document.getElementById('stayy').value ;
var Remark =document.getElementById('RemLeave').value;

document.getElementById('LID').value="";
document.getElementById('Exit').value ="";
document.getElementById('stayy').value = "";
document.getElementById('Rem').value="";
document.getElementById('RemLeave').value = "";

document.getElementById('LID').disabled=true;
document.getElementById('EntryDate').disabled = true;
document.getElementById('Exit').disabled = true;
document.getElementById('stayy').disabled = true;
document.getElementById('Rem').disabled=true;
document.getElementById('RemLeave').disabled = true;

update.style.display = "none";
save.style.display="none"

xmlhttp.open("GET","Ajax/livesearch_7.php?insert_Leave="+data+"&EntryDate="+EntryDate+"&ExitDate="+ExitDate+"&Access="+Access+"&Numberofyear="+Num_of_Yr+"&Remark="+Remark+"&PID="+PID,true);
xmlhttp.send();
}


}


function LeaveResult_Delete(str,id,LID,PID) 
{


var datai="delete_Leaveinfo";
 if(confirm("You are deleting a LeaveInfo  with LeaveID="+LID)){datai="delete";}else{return false;}

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
          
           if(str=="delete" )
           {

           // document.getElementById('table_fieldofstudy').focus();
xmlhttp.open("GET","Ajax/livesearch_7.php?delete_Leave="+datai+"&LID="+LID+"&PID="+PID,true);
            xmlhttp.send();
           }
        }









function  HealthResult_operation(str,id)
{

var Access= document.getElementById('LOP').value;
var PID=document.getElementById('PID_Health').value;


var HID=document.getElementById('HID').value ;
var Duration_In_Years=document.getElementById('DIY').value;
var DieseaseType=document.getElementById('DTF').value;
var Remark=document.getElementById('Remark_Health').value;
var Severity_update=document.getElementById('Severity_update').value;


var save = document.getElementById('saved_Health');
var update = document.getElementById('updated_Health');
var Severty_update = document.getElementById('Severity_update');
var Disease=document.getElementById('Disease');



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
            
if(id=='DT' && str!="")
{

xmlhttp.open("GET","Ajax/livesearch_6.php?DT="+str,true);
xmlhttp.send(); 
}


 if(str=="update")
{
var data ="update";
var HID=document.getElementById('HID').value;
var PID=document.getElementById('PID_Health').value;

document.getElementById('HID').disabled=true;
document.getElementById('DIY').disabled = true;
document.getElementById('DTF').disabled =true;
document.getElementById('Remark_Health').disabled = true;
document.getElementById('Severity_update').disabled=true;

update.style.display = "none";
save.style.display="none"
Severty_update.style.display="none";

if(Duration_In_Years == "")
{

    alert("Please Enter Duration in Years");
    document.getElementById('DIY').focus();
    return false;
    
}
if(DieseaseType == "")
{

    alert("Please Enter Disease Type");
    document.getElementById('DTF').focus();
    return false;
    
}

if(Severity_update == "")
{

    alert("Please Enter Severity Type");
    document.getElementById('Severity_update').focus();
    return false;
    
}
xmlhttp.open("GET","Ajax/livesearch_8.php?update_Health="+data+"&Duration_In_Year="+Duration_In_Years+"&DieseaseType="+DieseaseType+"&PID="+PID+"&Severity_update="+Severity_update+"&Remark="+Remark+"&Access="+Access+"&HID="+HID,true);
xmlhttp.send();
}


if(str=="insert")
{
    if(Duration_In_Years == "")
{

    alert("Please Enter Duration in Years");
    document.getElementById('DIY').focus();
    return false;
    
}
if(DieseaseType == "")
{

    alert("Please Enter Disease Type");
    document.getElementById('DTF').focus();
    return false;
    
}

if(Severity_update == "")
{

    alert("Please Enter Severity Type");
    document.getElementById('Severity_update').focus();
    return false;
    
}
var data ="insert";
document.getElementById('HID').disabled=true;
document.getElementById('DIY').disabled = true;
document.getElementById('DTF').disabled =true;
document.getElementById('Remark_Health').disabled = true;
document.getElementById('Severity_update').disabled=true;

update.style.display = "none";
save.style.display="none"
Severty_update.style.display="none";
//var PID=document.getElementById('PID_Health').value;
xmlhttp.open("GET","Ajax/livesearch_8.php?insert_Health="+data+"&Duration_In_Year="+Duration_In_Years+"&DieseaseType="+DieseaseType+"&PID="+PID+"&Severity_update="+Severity_update+"&Remark="+Remark+"&Access="+Access,true);
xmlhttp.send();
}


}


function HealthResult_Delete(str,id,HID,PID) 
{


var datai="delete_Leaveinfo";
 if(confirm("You are deleting a HealthInfo  with HealthID="+HID)){datai="delete";}else{return false;}

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
          
           if(str=="delete" )
           {

           // document.getElementById('table_fieldofstudy').focus();
xmlhttp.open("GET","Ajax/livesearch_8.php?delete_Health="+datai+"&HID="+HID+"&PID="+PID,true);
            xmlhttp.send();
           }
        }








































</script>