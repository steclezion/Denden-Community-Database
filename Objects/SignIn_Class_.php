<?php
Class  Login
{
  // database connection and table name
  private $conn;
  private $table_name = "`auth.appusers`";

  //object properties
  public $ID;
  public $FullName;
  public $User_Name;
  public $Password;
  public $TimeStamp;
  public function __construct($db){
  $this->conn = $db;
  }

  public function Authenticating_Login_PC()
  {
  //$query = "SELECT CONVERT(varchar(32), SUSER_SNAME())";
  //$stmt = $this->conn->query($query);
  //return $stmt->fetch() ;
  }

  public function Authenticating_LoginToMYSQL_PC()
  {
  //$query = "SELECT CONVERT(varchar(32), SUSER_SNAME())";
  //$stmt = $this->conn->query($query);
  return $stmt="SAM-SNOWDEN/DELL";
  }
  
  public function Auth_Login_Information($userName,$Time,$from_Pc,$LogininfnoKeyIdentification,$LogStatus)

{
if($LogStatus=='Sing-in')
{
echo $Query_Insert = "INSERT INTO `auth.logininfo` (UserName,LoginDateTime,LogoutDateTime,FromPC,LoginInfoKeyIdentification)
VALUES('$userName',NOW(),'1900-01-01 00:00:00','$from_Pc','$LogininfnoKeyIdentification') ";
$stmt = $this->conn->prepare($Query_Insert);
$stmt->execute();  
 $Verify=($stmt->rowCount()==1)?$LogininfnoKeyIdentification:'NULL';
return $Verify;
}
if($LogStatus=='Sing-out')
{
 $Query ="update `auth.logininfo`  set LogoutDateTime = NOW() WHERE `LoginInfoKeyIdentification` = '".$LogininfnoKeyIdentification."' ";
$stmt = $this->conn->prepare($Query);
$stmt->execute();  
return $stmt->rowCount();
}
}
  
public function Check_Login($User_Name,$Password)
{
   
 $query = "SELECT *  FROM " .$this->table_name." WHERE `User_Name` = ? and `Password Hash`=? ";
  $this->User_Name= $User_Name;
  $this->Password = $Password;
  $stmt = $this->conn->prepare($query);
  $stmt->bindValue(1, $this->User_Name);
  $stmt->bindValue(2, $this->Password);
  $stmt->execute();  
if ( $stmt->rowCount() == -1)
{
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 //return  $this->FullName = $row['Full Name'];
 return -1 ;

}
else
{
  return $stmt->rowCount();
}

}

}

?>