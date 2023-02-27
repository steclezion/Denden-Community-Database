<?php

interface MasterDB_HEALTHRELATED
{
    function Select_Users($table_name);
    function Select_($Values);
    function Select_Users_Where($table_name,$Condition);
    function Max_Users($table_name,$CoumnName);
    function Count_Users($table_name,$CoumnName);
    function Delete_Users($table_name,$Condition);
    function Insert_Users($table_Data = array(),$table_name);
    function Update_Users($table_Data = array(),$table_name ,$condition);
    function Message($Message,$Page_Route);
    function Select_FixedElements($Values,$TableName);
    function Select_FixedElements_Where($Values,$TableName,$Condition);
    function check_ResidentID($ResidentIDValue);
    function ControlImage($image);
    function check_Employee_Hire_Date($Date);
    function Generate_Random($Date,$CampRegion, $PID);
    function check_CouponNumberID($CouponNumber);
    function Check_File_Coupon($filenumber,$table_name,$ColumnName);
    function check_Tele_Number($Mobile);
    function  check_Mobile_Number($Mobile);
}
class Master implements MasterDB_HEALTHRELATED 
{
    protected $conn;
    public $table_name;

     // object Constructor The Object is Initialized Automatically Upon Creation
public function __construct($db){
    $this->conn = $db;
    }
    public function __call($name, $arguments){
        return "A function with name: ".$name." does not exist\n";
        }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function Check_File_Coupon($filenumber,$table_name,$ColumnName)
{
   if($filenumber!="")
   {
    $query = "SELECT $ColumnName  from $table_name where $ColumnName=$filenumber ";
    $stmt = $this->conn->prepare($query);
    @$stmt->execute();  
    @$data = array();
    @$row = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$Row_Count= $stmt->rowCount();
    @$Data = ($Row_Count==1)?'Error':1 ;
 
    return $Data;
   }
   else{
    $Data="2";
    return $Data;
   }



   
    
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function check_All_Status($Status)
{
if($Status == '' && $Status !=0000000 && $Sta )
{
return 'Error';
}

else
{
    return 1;
}

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function  check_Mobile_Number($Mobile)
{  //$Mobile = intval($Mobile);
    if (Master::check_All_Status(($Mobile) == 1 && $Mobile !=' ' ) &&  !preg_match("/^[-=a-z ]*$/",$Mobile )==True)
    {  
        $Count_Eight_Charcter = strlen(trim($Mobile));
        $verify_Eight_Charcter =( preg_match("/^[0-9]*$/",$Mobile )==1 ) ? 1:'Invalid'; 
        $check_Mobile = ($Count_Eight_Charcter==8 &&  $verify_Eight_Charcter==1) ?  $Mobile : 'Error';
       return $check_Mobile;
    }
  else

  {
$check_Mobile = 'Error';
    return $check_Mobile;

  }

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function  check_Tele_Number($Mobile)
{ $Mobile = intval($Mobile);
    if (Master::check_All_Status(($Mobile) == 1 && $Mobile !='0'  ) &&  !preg_match("/^[-=a-z ]*$/",$Mobile )==True)
    {
        $Count_Eight_Charcter = strlen(trim($Mobile));
        $verify_Eight_Charcter =( preg_match("/^[0-9]*$/",$Mobile )==1 ) ? 1:'Invalid'; 
        $check_Mobile = ($Count_Eight_Charcter==6 &&  $verify_Eight_Charcter==1) ?  $Mobile : 'Error';
       return $check_Mobile;
    }
  else

  {
$check_Mobile = 'Error';
    return $check_Mobile;

  }

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function Generate_Random($Date,$CampRegion, $PID)
{
    $date=date_create($Date);
    $Date_Year = date_format($date,"Y");
    //switch($CampRegion) {case 'UPPER':$region=0;break;case 'MIDDLE': $region=1;break;case "LOWER":$region=2;break;}
    
    if($PID[0]=='0' && $PID[1]=='0' && $PID[2]=='0' && $PID[3]=='0')
    {
       $ID=$PID[4]+1; 
       $ID='0000'.$ID;
    }
    else if($PID[0]=='0' && $PID[1]=='0' && $PID[2]=='0' )
    {
       $ID=$PID[3]+1; 
       $ID='000'.$ID;
    }
    else if($PID[0]=='0' && $PID[1]=='0' )
    {
       $ID=$PID[2]+1; 
       $ID='00'.$ID;
    }
    else if($PID[0]=='0'  )
    {
       $ID=$PID[1]+1; 
       $ID='0'.$ID;
    }
    else{
        $ID+1;
    }

$PID=$Date_Year."-".$CampRegion."-".$ID;
  return $PID;


}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function check_Employee_Hire_Date($Date)
{
    $date=date_create($Date);
    $Date_Year = date_format($date,"Y");
    $Date_Month = date_format($date,"m");
    $Date_Date = date_format($date,"d");

    $Date_Year_check = ($Date_Year >= 1950 &&  $Date_Year <= 2020 &&  $Date_Month >=1 && $Date_Month <= 12 &&  $Date_Date >= 1 && $Date_Date <=31 ) ? 1 : 'Error';

    return $Date_Year_check;

}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function Select_($Values)
    {
        $query = "SELECT $Values as L";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  
        $data = array();
        while($row = $stmt->fetch( PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
    
    return $data;

    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Public function ControlImage($imageFileType)
    {
        // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif","mp4","avi","mpeg");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
     return 1;
    }
    else
    return 'Error';
}
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Select_FixedElements($Values,$TableName)
    {
        $query = "SELECT $Values as L from $TableName order by L ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  
        $data = array();
        while($row = $stmt->fetch( PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
    
    return $data;

    }
    public function Select_FixedElements_Where($Values,$TableName,$Condition)
    {
       $query = "SELECT $Values as L from $TableName where $Condition";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  
        $data = array();
        while($row = $stmt->fetch( PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
    
    return $data;

    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Select_Users($table_name)
    {
        //SELECT [EmployeeID ,[LastName],[FirstName]

     $query = "SELECT * FROM ".$table_name."  Limit 0,500 ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  
    $data = array();
        while($row = $stmt->fetch( PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
    
    return $data;
    
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Select_Users_Where($table_name,$Condition)
    {
        //SELECT [EmployeeID ,[LastName],[FirstName]

      $query = "SELECT *  FROM ".$table_name." where $Condition Limit 0,500";
       $stmt = $this->conn->prepare($query);
     $stmt->execute();  
        $data = array();
       while($row = $stmt->fetch( PDO::FETCH_ASSOC))
        
          {  $data[] = $row;}
        
    
    return $data;
    
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Max_Users($table_name,$ColumnName)
    {
        //SELECT [EmployeeID ,[LastName],[FirstName]

         $query = "SELECT MAX($ColumnName) as L  FROM ".$table_name." order by L ASC ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  

   $row = $stmt->fetch( PDO::FETCH_BOTH);
   
    return $row[0];
    
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Count_Users($table_name,$ColumnName)
    {
        //SELECT [EmployeeID ,[LastName],[FirstName]

        $query = "SELECT COUNT($ColumnName)  FROM ".$table_name." ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  

   $row = $stmt->fetch( PDO::FETCH_BOTH);
   
    return $row[0];
    
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Delete_Users($table_name,$condition)
    {
        
     $query = "delete from $table_name  where $condition ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  

        if ($stmt->execute() === TRUE) {
            return 1;
         } else {
            return 0;
         }
    
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Insert_Users($table_Data = array(),$table_name)
    {

        $data_array_num = count($table_Data );
		$columns = "";
		$values = "";
		$i=0;
		foreach($table_Data as $key=>$val){ 
			$i++;
            $sep = ($i == $data_array_num)?"":",";
            if($key=='Photo' || $key=='Picture')
            {
                $columns .= $key.$sep;
                $values .= "'".$val."'".$sep;
            }
            else{
                $columns .= $key.$sep;
		    	$values .= "N'".$val."'".$sep;
            }
			
        }
 //$Query =  "SET IDENTITY_INSERT $table_name ON   ";
$Query = "INSERT INTO $table_name ($columns) VALUES ($values)";

    $Insert = $this->conn->prepare($Query);
    if ($Insert->execute() === TRUE) {
       return 1;
    } else {
       return 0;
    }
  }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  public function Update_Users($table_Data = array(),$table_name ,$condition)
  {

      $data_array_num = count($table_Data );
      $columns = "";
      $values = "";
      $columns_values='';
      $i=0;
      foreach($table_Data as $key=>$val){ 
          $i++;
          $sep = ($i == $data_array_num)?"":",";
          //$columns .= $key;
         
          if($key=='Photo')
          {
            $values = "'".$val."'".$sep;
            $columns_values.=$key."=".$values;
          }
          else
          {
            $values = "N'".$val."'".$sep;
            $columns_values.=$key."=".$values;
          }
      }
  

//$Query =  "SET IDENTITY_INSERT $table_name ON   ";
  $Query = "update $table_name set  $columns_values where $condition ";
  
  $Update = $this->conn->prepare($Query);
  if ($Update->execute() === TRUE) {
     return 1;
  } else {
     return 0;
  }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function Message($Message,$page)
    {
       $Messages="<script type=\"text/javascript\"> alert( \"$Message  \"); window.location='$page'  </script>";
       return $Messages;



    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function check_ResidentID($ResidentIDValue)
    {  $ResidentID = array();
       $ResidentID = array('ASC','SKC','ZDC','KEC','GBC','DKC');
       $First_Three_Charcters = (substr(trim($ResidentIDValue) ,0,3) );
       $Second_Eight_Charcter = ((substr(trim(($ResidentIDValue)) ,3,11) ));
       $Next_charcters = (($Second_Eight_Charcter));
       $Next_charcters =  ( (preg_match("/^[0-9]*$/",$Second_Eight_Charcter))==1 ) ? $Second_Eight_Charcter : 'Error';
       $Eight_charcters = (substr($Next_charcters,0,12) );
       $Resident_Length= strlen($ResidentIDValue);
    if ( in_array($First_Three_Charcters,$ResidentID) && (strlen($Eight_charcters)==8  &&  $Resident_Length==11)  )
    { return 1;  }
    else
    { return 'Error'; }
    
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function check_CouponNumberID($CouponNumber){

    $CouponID = array();
    $CouponID = array('ASF');
    $First_Three_Charcters = (substr(trim($CouponNumber) ,0,3) );
    $Second_Nine_Charcter = ((substr(trim(($CouponNumber)) ,3,12) ));
    $Next_charcters = (($Second_Nine_Charcter));
    $Next_charcters =  ( (preg_match("/^[0-9]*$/",$Second_Nine_Charcter))==1 ) ? $Second_Nine_Charcter : 'Error';
    $Nine_charcters = (substr($Next_charcters,0,15) );
 if ( in_array($First_Three_Charcters,$CouponID) && (strlen($Nine_charcters)==9  )  )
 { return 1;  }
 else
 { return 'Error'; }


}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   public function check_NationalID($NationalID)
{
   
   if ((Master::check_All_Status($NationalID) == 1)  && ($NationalID !=0) )
   {
    $count_seven_charcter= (preg_match("/^[0-9]*$/",$NationalID)==1) ? strlen($NationalID) : '';
    $Count_Six_Charcter = substr(trim($NationalID),0,6);
    $Count_Six_Charcter =(preg_match("/^[0-9]*$/",$Count_Six_Charcter )==1 ) ?substr($NationalID,0,6):'Invalid';
    $Count_Hiphen_Charter = (substr(trim(($NationalID)) ,6,1) == '-'  && (preg_match("/^[0-9-]*$/",$NationalID)==1 ) ) ? '-':'Invalid';
    $Count_Five_Charcters = substr(trim(($NationalID)) ,7,5);
    $Count_Five_Charcters = ( preg_match("/^[0-9]*$/",$Count_Five_Charcters )==1 ) ?substr($NationalID,7,5):'Invalid';
    $sum_of_National_ID = strlen( $Count_Six_Charcter) + strlen($Count_Hiphen_Charter) + strlen($Count_Five_Charcters); 

if( $count_seven_charcter == 7) 
{return $NationalID;}
elseif($sum_of_National_ID == 12 && $Count_Hiphen_Charter !='Invalid'  )
{
return $NationalID;
}
else
{
return 'Error';
}
}

   else

   {
       
 return 'NULL';

   }

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function check_Birth_Date($Date)
{
   $date=date_create($Date);
   $Date_Year = date_format($date,"Y");
   $Date_Month = date_format($date,"m");
   $Date_Date = date_format($date,"d");
   $Date_Year_check = ($Date_Year > 1922 &&  $Date_Year <= 2002 &&  $Date_Month >=1 &&   $Date_Month <= 12 &&  $Date_Date >= 1 && $Date_Date <=31 ) ? 1 : 'Error';
  return $Date_Year_check;
}


}


class Employee extends Master
{
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Image_Handler($Path_Photo,$Photo_Size,$File_Image_Name, $File_Image_type,$File_Image_Size,$File_Image_Temp_Name)
     {
        function random( $length )
        {
          // Set allowed charspdf
          $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
          $sam=$length.$chars;
          $hash="";
          for ( $i = 0; $i < $length; $i++ )
          {
            $hash .= substr($chars,mt_rand(0, strlen($sam)),1);
          }
    
         return $hash;
        }
      // Upload and Rename File
        $this->File_Image_Name=$File_Image_Name;
        $this->File_Image_type = $File_Image_type ;
        $this->File_Image_Size = $File_Image_Size;
        $this->File_Image_Temp_Name=$File_Image_Temp_Name;
   
        $random_gen = random(12);
       
        $file_basename = substr($File_Image_Name, 0, strripos($File_Image_Name, '.')); // get file Name
        $file_ext = substr($File_Image_Name, strripos($File_Image_Name, '.')); // get file extension
     
        $target_dir = $Path_Photo;
        $target_file = $target_dir . basename( $this->File_Image_Name);
        // Select file type
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       $image_base64 = base64_encode(file_get_contents( $this->File_Image_Temp_Name) );
       $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
       $allowed_file_types = array('.jpeg','.jpg','.png','.JPG','.JPEG','.PNG','.GIF','.gif'); 
 
       if (in_array($file_ext,$allowed_file_types) && ($File_Image_Size < $Photo_Size))
       {   
            $newfilename =  $file_basename.$random_gen.$file_ext; // Rename file
       
            if (file_exists($Path_Photo.$newfilename))
            {   // file already exists error
                return '0'."^"."Image_Repeated"; 
            }
            else
            {
                return '1'."^".$image."^".$Path_Photo."^".$newfilename ; 
            }
        
        }
        else{
            return '0'."^"."Format of The Image is Invalid The Picture Uploaded is Not Picture"; 

        }
    }
}

class Supplier extends Master
{

}

Class Shipper extends Master
{


}

Class Category extends Employee
{

   
}
Class Customer extends Employee
{

    public function Insert_Userss($table_Data = array(),$table_name)
    {

        $data_array_num = count($table_Data );
		$columns = "";
		$values = "";
		$i=0;
		foreach($table_Data as $key=>$val){ 
			$i++;
            $sep = ($i == $data_array_num)?"":",";
            if($key=='Photo')
            {
                $columns .= $key.$sep;
                $values .= "'".$val."'".$sep;
            }
            else{
                $columns .= $key.$sep;
		    	$values .= "N'".$val."'".$sep;
            }
        }

   $Query = "INSERT INTO $table_name ($columns) VALUES ($values)";
    
    $Insert = $this->conn->prepare($Query);
    if ($Insert->execute() === TRUE) {
       return 1;
    } else {
       return 0;
    }
  }
}

Class Product extends Master
{
    public function Insert_Products($table_Data = array(),$table_name)
    {

        $data_array_num = count($table_Data );
		$columns = "";
		$values = "";
		$i=0;
		foreach($table_Data as $key=>$val){ 
			$i++;
            $sep = ($i == $data_array_num)?"":",";
            if($key=='Photo')
            {
                $columns .= $key.$sep;
                $values .= "'".$val."'".$sep;
            }
            else{
                $columns .= $key.$sep;
		    	$values .= "N'".$val."'".$sep;
            }
        }
// $Query =  "SET IDENTITY_INSERT $table_name ON   ";
 $Query = "INSERT INTO $table_name ($columns) VALUES ($values)";
    
    $Insert = $this->conn->prepare($Query);
    if ($Insert->execute() === TRUE) {
       return 1;
    } else {
       return 0;
    }
  }
  public function Fetch_Date_Table_Indvidually($Date,$tableName,$OrderedColoumn)
  {
$Query = "SELECT TOP 1 
dATEPART(yyyy,$Date) AS OrderYear, DATEPART(mm,$Date) AS OrderMonth,DATEPART(dd,$Date) AS OrderDay FROM $tableName  ORDER BY 
$OrderedColoumn DESC";
$stmt = $this->conn->prepare($Query);
$stmt->execute();  
$data = array();
while($row = $stmt->fetch( PDO::FETCH_ASSOC))
{
    $data[] = $row;
}

return $data;
  } 
  
  public function Fetch_Data_Table_Indvidually($ColumnData,$tableName,$OrderedColoumn)
  {
$Query = "SELECT TOP 1 $ColumnData as L  FROM $tableName  ORDER BY  $OrderedColoumn DESC";
$stmt = $this->conn->prepare($Query);
$stmt->execute();  
$data = array();
while($row = $stmt->fetch( PDO::FETCH_ASSOC))
{
    $data[] = $row;
}

return $data;
  }


}
Class Loan extends Master
{}
Class LookupItems extends Customer
{}
Class User  extends  Customer 
{}
Class Settings  extends  Customer 
{}
?>