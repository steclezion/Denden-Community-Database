<?php
include '../config/database.php';
include '../objects/Class_Elias_Coffee_Shop.php';
include 'SignIn_Class_.php';
include 'Session_Class_.php';
define('ELIAS_COFFEE_SHOP', '../ELIAS_COFFEE_SHOP/');
define('ELIAS_COFFEE_SHOP_IMAGE_SIZE', 540643700000000000000000000000000000000000000);      // KB
$Requested_Page = $_GET['Requested_Page'];

if (isset($_POST['submit']) || !empty($Requested_Page))
{

$database = new Database();// get database connection
$db = $database->getConnection();
@$Login = new Login($db);// initialize objects

 @$Session_Login= new Session();
 $Employee_Certain_Actions = new Employee($db); //$db DataBase Object object is instantialted up on Creation and Employee Class is Invoked
 $Supplier_Certain_Actions = new Supplier($db);
 $Shipper_Certain_Actions = new Shipper($db);
 $Category_Certain_Actions = new Category($db);
 $Customer_Certain_Actions = new Customer($db);
 $Product_Certain_Actions = new Product($db); //$db DataBase Object
 $Loan_Certain_Actions =    new Loan($db); //$db DataBase Object
 $User_Certain_Actions =    new User($db); //$db DataBase Object
 $LookupItem_Certain_Actions= new LookupItems($db);
 $Settings_Certain_Actions = new Settings($db); //$db DataBase Object



$Requested_Page = $_GET['Requested_Page'];
 include_once '../Controllers/PostControllerData.php';

 //@$Check_Posted_Supplier_Updated= 

  switch ($Requested_Page) {
    case "Check_Signin":
    include_once '../Controllers/Login/check_Signin.php';
    break;
 ///End of The Story Login Accepted OR Denyied///
    case "Employee_Insert":
    include_once '../Controllers/EmployeeController/Employee_Add_Controller.php';
    break;
////End of Employee Insert///////////////////////////
   case "Employee_Update":
   include_once '../Controllers/EmployeeController/Employee_Update_Controller.php';
   break;
///End of Update Employee//////////////////////
case "Supplier_Insert":
include_once '../Controllers/SupplierController/Supplier_Add_Controller.php';
break;
////End of Supplier Insert///////////////////////////
case "Supplier_Update":
include_once '../Controllers/SupplierController/supplier_Update_Controller.php';
break;
///End of Update Supplier//////////////////////
case "Shipper_Insert":
include_once '../Controllers/ShipperController/Shipper_Add_Controller.php';
break;
////End of Shipper Insert///////////////////////////
case "Shipper_Update":
include_once '../Controllers/ShipperController/Shipper_Update_Controller.php';
////////////////Shipper Update//////////////////
break;
case "Category_Insert":
include_once '../Controllers/CategoryController/Category_Add_Controller.php';
////////////////Category Insert/////////////////
break;
case "Category_Update":
include_once '../Controllers/CategoryController/Category_Update_Controller.php';
////////////////Category Update/////////////////
break;
case "Customer_Insert":
include_once '../Controllers/CustomerController/Customer_Add_Controller.php';
////////////////Customer Insert/////////////////
break;
case "Customer_Update":
include_once '../Controllers/CustomerController/Customer_Update_Controller.php';
////////////////Customer Update/////////////////
break;
///////////////////////////////////////////////////////////////
case "ProductCoffeeUnfried_Insert":
include_once '../Controllers/ProductController/ProductUnFried_Add_Controller.php';
////////////////ProductUnfried Insert/////////////////
break;
//////////////////////////////////
case "ProductUnFried_Update":
include_once '../Controllers/ProductController/ProductUnFried_Update_Controller.php';
////////////////ProductUnfried Update/////////////////
break;
///////////////////////////////////////////Prouduct Fried
case "ProductCoffeeFried_Insert":
include_once '../Controllers/ProductController/ProductFried_Add_Controller.php';
////////////////Productfried Add/////////////////
break;
case "ProductFried_Update":
include_once '../Controllers/ProductController/ProductFried_Update_Controller.php';
////////////////ProductFried Update/////////////////
case "ProductCoffeeSold_Insert":
include_once '../Controllers/ProductController/ProductSold_Add_Controller.php';
////////////////ProductFried Update/////////////////
break;
case "ProductSold_Update":
include_once '../Controllers/ProductController/ProductSold_Update_Controller.php';
////////////////ProductSold Update/////////////////
break;
case "Loan_Insert":
include_once '../Controllers/LoanController/Loan_Add_Controller.php';
////////////////ProductFried Update/////////////////
break;
/////////////////////////////////////////////UserControl
case "User_Insert":
include_once '../Controllers/UserController/User_Add_Controller.php';
////////////////ProductFried Update/////////////////
break;
case "User_Update":
include_once '../Controllers/UserController/User_Update_Controller.php';
////////////////ProductSold Update/////////////////
break;
case "LookUpItem_Insert":
include_once '../Controllers/SettingController/LookUpsController/LookUp_Add_Controller.php';
////////////////LookupItem Insert/////////////////
break;
case "LookUpItem_Update":
include_once '../Controllers/SettingController/LookUpsController/LookUp_Update_Controller.php';
////////////////LookupItem Update/////////////////
break;
case "DashboardRed":
////////////////DashBoard Update/////////////////
$Data = array('ThemeSettings'=>'red','TextAlign'=>'danger' ); $condition='SettingsID='.'1';//An Arrray is set in order to be Inserted into DataBase
$Settings_Selected=$Settings_Certain_Actions->Update_Users($Data,'CDBO.Settings',$condition);
$_SESSION['LookUpItem']='';
$_SESSION['LookUpType']='';
$_SESSION['UserConfig']='';
$_SESSION['Prefrences']='active';
$Http = "../views/Settings.php";
header("location:$Http");
break;
case "DashboardBlack":
////////////////DashBoard Update/////////////////
$Data = array('ThemeSettings'=>'black','TextAlign'=>'inverse' ); $condition='SettingsID='.'1';//An Arrray is set in order to be Inserted into DataBase
$Settings_Selected=$Settings_Certain_Actions->Update_Users($Data,'CDBO.Settings',$condition);
$_SESSION['LookUpItem']=' ';
$_SESSION['UserConfig']='';
$_SESSION['Prefrences']='active';
$Http = "../views/Settings.php";
header("location:$Http");
break;
case "DashboardBlue":
////////////////DashBoard Update/////////////////
$Data = array('ThemeSettings'=>'blue','TextAlign'=>'primary' ); $condition='SettingsID='.'1';//An Arrray is set in order to be Inserted into DataBase
$Settings_Selected=$Settings_Certain_Actions->Update_Users($Data,'CDBO.Settings',$condition);
$_SESSION['LookUpItem']='';
$_SESSION['LookUpType']='';
$_SESSION['UserConfig']='';
$_SESSION['Prefrences']='active';
$Http = "../views/Settings.php";
header("location:$Http");
break;
case "DashboardOrange":
////////////////DashBoard Update/////////////////
$Data = array('ThemeSettings'=>'orange','TextAlign'=>'warning' ); $condition='SettingsID='.'1';//An Arrray is set in order to be Inserted into DataBase
$Settings_Selected=$Settings_Certain_Actions->Update_Users($Data,'CDBO.Settings',$condition);
$_SESSION['LookUpItem']='';
$_SESSION['LookUpType']='';
$_SESSION['UserConfig']='';
$_SESSION['Prefrences']='active';
$Http = "../views/Settings.php";
header("location:$Http");
break;
case "DashboardYellow":
////////////////DashBoard Update/////////////////
$Data = array('ThemeSettings'=>'yellow','TextAlign'=>'info' ); $condition='SettingsID='.'1';//An Arrray is set in order to be Inserted into DataBase
$Settings_Selected=$Settings_Certain_Actions->Update_Users($Data,'CDBO.Settings',$condition);
$_SESSION['LookUpItem']='';
$_SESSION['LookUpType']='';
$_SESSION['UserConfig']='';
$_SESSION['Prefrences']='active';
$Http = "../views/Settings.php";
header("location:$Http");
break;
case "DashboardGreen":
////////////////DashBoard Update/////////////////
$Data = array('ThemeSettings'=>'green','TextAlign'=>'success' ); $condition='SettingsID='.'1';//An Arrray is set in order to be Inserted into DataBase
$Settings_Selected=$Settings_Certain_Actions->Update_Users($Data,'CDBO.Settings',$condition);
$_SESSION['LookUpItem']='';
$_SESSION['LookUpType']='';
$_SESSION['UserConfig']='';
$_SESSION['Prefrences']='active';
$Http = "../views/Settings.php";
header("location:$Http");
break;
case "Settings_Update":
////////////////DashBoard Update/////////////////
include_once '../Controllers/SettingController/SettingsController/Settings_Update_Controller.php';
break;
case "LookUpType_Insert":
////////////////DashBoard Update/////////////////
include_once '../Controllers/SettingController/LookUptypeController/LookUpType_Add_Controller.php';
break;
case "LookUpType_Update":
////////////////DashBoard Update/////////////////
include_once '../Controllers/SettingController/LookUptypeController/LookUpType_Update_Controller.php';
break;


default:
echo "Your favorite color is neither red, blue, nor green!";


  }

}










?>