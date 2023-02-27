<?php
Class  Employee //extends Database
{
   
  // database connection and table name
private $conn;
public $table_name;
public $File_Image_type ;
public $File_Image_Size;
public $File_Image_Name;
public $File_Image_Temp_Name;

  // object Constructor The Object is Initialized Automatically Upon Creation

  public function __construct($db){
  $this->conn = $db;
  }

  public function Employee_Select_Users($table_name)
    {
        //SELECT [EmployeeID ,[LastName],[FirstName]

        $query = "SELECT *  FROM ".$table_name." ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  
    $data = array();
        while($row = $stmt->fetch( PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
    
    return $data;
    
    }
    public function Employee_Select_Users_Where($table_name,$Condition)
    {
        //SELECT [EmployeeID ,[LastName],[FirstName]

       $query = "SELECT *  FROM ".$table_name." where $Condition";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  
    $data = array();
        ($row = $stmt->fetch( PDO::FETCH_ASSOC));
        
            $data[] = $row;
        
    
    return $data;
    
    }
    public function Employee_Max_Users($table_name)
    {
        //SELECT [EmployeeID ,[LastName],[FirstName]

        $query = "SELECT MAX(EmployeeID)  FROM ".$table_name." ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();  

   $row = $stmt->fetch( PDO::FETCH_BOTH);
   
    return $row[0];
    
    }
    public function Employee_Delete_User($table_name,$condition)
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

public function Employee_Insert_Users($table_Data = array(),$table_name)
    {

        $data_array_num = count($table_Data );
		$columns = "";
		$values = "";
		$i=0;
		foreach($table_Data as $key=>$val){ 
			$i++;
            $sep = ($i == $data_array_num)?"":",";
			$columns .= $key.$sep;
			$values .= "'".$val."'".$sep;
        }
 $Query =  "SET IDENTITY_INSERT $table_name ON   ";
 $Query .= "INSERT INTO $table_name ($columns) VALUES ($values)";
    
    $Insert = $this->conn->prepare($Query);
    if ($Insert->execute() === TRUE) {
       return 1;
    } else {
       return 0;
    }
  }
  public function Employee_Update_Users($table_Data = array(),$table_name ,$condition)
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
          $values = "'".$val."'".$sep;
          $columns_values.=$key."=".$values;
      }
        echo $condition;

//$Query =  "SET IDENTITY_INSERT $table_name ON   ";
 $Query = "update $table_name set  $columns_values where $condition ";
  
  $Insert = $this->conn->prepare($Query);
  if ($Insert->execute() === TRUE) {
     return 1;
  } else {
     return 0;
  }
}
    public function Employee_Image_Handler($Path_Photo,$Photo_Size,$File_Image_Name, $File_Image_type,$File_Image_Size,$File_Image_Temp_Name)
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


    public function Message_Success($Message)
    {
       $Messages="<div class='modal fade' id='myModal' role='dialog'>
       <div class='modal-dialog modal-lg'>
         <div class='modal-content'>
           <div class='modal-header'>
           <a href='javascript:Route_Page('Employee')'><button type='button' class='close' >&times;</button></a>
             <h4 class='modal-title'>Modal Header</h4>
           </div>
           <div class='modal-body'>
           $Message
           </div>
           <div class='modal-footer'>
            <a href='javascript:Route_Page('Employee')'> <button type='button' class='btn btn-default' >Close</button></a>
           </div>
         </div>
       </div>
     </div>
   </div>
   
           <style>
         
   #myProgress {
     width: 100%;
   
   }
   
   #myBar {
     width: 0.5%;
     height: 30px;
   
   }
   </style>
  ";

return $Messages;



    }

}
