<?php
include('../config/database.php');
include('../config/core.php');
include('../objects/Master.php');
include('../objects/SignIn_Class_.php');
include('../objects/Session_Class_.php');
include('RouteControllerData.php');


define( 'AUTH_KEY',         't`DK%X:>xy|e-Z(BXb/f(Ur`8#~UzUQG-^_Cs_GHs5U-&Wb?pgn^p8(2@}IcnCa|' );
define( 'SECURE_AUTH_KEY',  'D&ovlU#|CvJ##uNq}bel+^MFtT&.b9{UvR]g%ixsXhGlRJ7q!h}XWdEC[BOKXssj' );
define( 'LOGGED_IN_KEY',    'MGKi8Br(&{H*~&0s;{k0<S(O:+f#WM+q|npJ-+P;RDKT:~jrmgj#/-,[hOBk!ry^' );
define( 'NONCE_KEY',        'FIsAsXJKL5ZlQo)iD-pt??eUbdc{_Cn<4!d~yqz))&B D?AwK%)+)F2aNwI|siOe' );
define( 'AUTH_SALT',        '7T-!^i!0,w)L#JK@pc2{8XE[DenYI^BVf{L:jvF,hf}zBf883td6D;Vcy8,S)-&G' );
define( 'SECURE_AUTH_SALT', 'I6`V|mDZq21-J|ihb u^q0F }F_NUcy`l,=obGtq*p#Ybe4a31R,r=|n#=]@]c #' );
define( 'LOGGED_IN_SALT',   'w<$4c$Hmd%/*]`Oom>(hdXW|0M=X={we6;Mpvtg+V.o<$|#_}qG(GaVDEsn,~*4i' );
define( 'NONCE_SALT',       'a|#h{c5|P &xWs4IZ20c2&%4!c(/uG}W:mAvy<I44`jAbup]t=]V<`}.py(wTP%%' );




$Route = new Route();


$Route_Page_Name=$Route->noHTMLnoQuotes($_GET['R']);
@$Route_Page_Time=$_GET['T'];

include('../Controllers/Control_Post_Get_Methods.php');


switch($Route_Page_Name)
{
case sha1(md5(("Login"))) :
include "../Controllers/LoginController/Signin.php";
break;
case "PersonalInfo" :
$PersonalInfo=sha1(md5('PersonalInformation')).time();
echo "<script type=\"text/javascript\">  window.location = \"../views/PersonalInformation.php?R=$PersonalInfo\";   </script>";
break;
case "AddPersonalInfo":
$Route_Page_Name = 'InsertEmployee';
include('../Controllers/EmployeeController/RunEmployeeController.php');
break;
case "DeleteEmployee":
$EmployeeID = $_GET['EmployeeID'];
$Route_Page_Name='DeleteEmployee';
include("../Controllers/EmployeeController/RunEmployeeController.php");
break;
case "ኣሰናድእመባአታዊዳታ":
$መንነት_ቁጽሪ  = $_GET['መለለይቁጽሪ'];
$Route_Page_Name='EditContact';
include("../Controllers/EmployeeController/RunEmployeeController.php");
break;
case "Upper":
$PersonalInfo=sha1('Upper');
echo "<script type=\"text/javascript\">  window.location = \"../views/PersonalInformation.php?Request_Page=$PersonalInfo\";   </script>";
break;

case "Middle":
$PersonalInfo=sha1('Middle');
echo "<script type=\"text/javascript\">  window.location = \"../views/PersonalInformation.php?Request_Page=$PersonalInfo\";   </script>";
break;

case "Lower":
$PersonalInfo=sha1('Lower');
echo "<script type=\"text/javascript\">  window.location = \"../views/PersonalInformation.php?Request_Page=$PersonalInfo\";   </script>";
break;

case "All":
$PersonalInfo=sha1('All');
echo "<script type=\"text/javascript\">  window.location = \"../views/PersonalInformation.php?Request_Page=$PersonalInfo\";   </script>";
break;

case "War-Disabled":
$PersonalInfo=sha1('War-Disabled');
echo "<script type=\"text/javascript\">  window.location = \"../views/PersonalInformation.php?Request_Page=$PersonalInfo\";   </script>";
break;

 
}



























?>