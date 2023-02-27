
function Route_Page(Page)
{
  var e =Page;
  var str = "Visit W3Schools!"; 
  var n = str.search("W3Schools");

 if(e == 'PersonalInfo')
 {window.location = '../routes/RouteHandler.php.?R=PersonalInfo';}

 if(e == 'PersonalInfo_Modal')
 {window.location = '../../../routes/RouteHandler.php.?R=PersonalInfo';}

 if(e == 'Singout')
 {
 if(confirm("You are Singing Out!!")){window.location = '../Controllers/LoginController/Signout.php';}else{}
 }
if(e == 'Upper')
 {window.location = '../routes/RouteHandler.php.?R=Upper';}


 if(e == 'Lower')
 {window.location = '../routes/RouteHandler.php.?R=Lower';}


 if(e == 'Middle')
 {window.location = '../routes/RouteHandler.php.?R=Middle';}


 if(e == 'All')
 {window.location = '../routes/RouteHandler.php.?R=All';}
 
 if(e == 'War')
 {window.location = '../routes/RouteHandler.php.?R=War-Disabled';}
}

function Route_Employee_Delete(EmployeeID)
{
  
  if(confirm("You are Deleting an Employee  From records of all Tables  ካብ ኩሉ ሰንጥረጅ ትድምስስ ስለዘለኻ/ኺ ርግጸኛ ድኻ/ኺ with PID="+EmployeeID)){window.location='../routes/RouteHandler.php.?R=PersonalInfo';}else{}
 //window.location = '../routes/RouteHandler.php.?R=PersonalInfo';

 
 
}
function call()
{if(confirm("You are Singing Out!!")){window.location='Signout.php';}else{}
}
//Ajax Request To Live_Search.php File Live
