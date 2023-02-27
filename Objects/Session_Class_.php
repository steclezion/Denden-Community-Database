<?php
Class  Session
{
      // database connection and table name
  private $conn;
  private $table_name = "`auth.appusers`";
    public $ID;
    public $FullName;
    public $User_Name;
    public $Password;

    public function __construct($db){
        $this->conn = $db;
        session_start();
  }


public function Set_Session_Login($User_Name,$Password)
{ 
   

    $_SESSION['User_Name']=$User_Name;
    $_SESSION['Password']=$Password;
    $_SESSION['start']= time();
     // Taking now logged in time.
    // Ending a session in 30 minutes from the starting time.
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
$SESSION_Expire= $_SESSION['expire'];
return  ($_SESSION['User_Name'].":".$_SESSION['Password'].":".$_SESSION['expire'] );
}
public function Expire_Session_Login($User_Name,$Password, $SESSION_Expire)
{ 
    //Check whether the session variable SESS_MEMBER_ID is present or not
    if (!isset($_SESSION['User_Name'])  || !isset( $_SESSION['Password']) ) 
    {
        header("location: ../index.php");
        }
         else {
            $now = time(); // Checking the time now when home page starts.
    
            if ($now > $SESSION_Expire ) 
            {
                session_destroy();
    
              header('location:../Controllers/LoginController/Signout.php');
            }
            }
}
public function Retrive_Full_Name($User_Name,$Password)
{ 

    $query = "SELECT *  FROM " .$this->table_name." WHERE `User_Name` = ? and `Password Hash`=? ";
    $this->User_Name= $User_Name;
    $this->Password = $Password;
    $stmt = $this->conn->prepare( $query );
    $stmt->bindValue(1, $this->User_Name);
    $stmt->bindValue(2, $this->Password);
    $stmt->execute();  
  if ( $stmt->rowCount() == -1)
  {
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
return  $this->FullName = $row['Full Name'];

  
  }
 
}
public function SignOut()
{ 
session_destroy();
header('location:../../');


}


}
?>