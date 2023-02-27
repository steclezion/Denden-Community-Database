<?php
// used to get mysql database connection
class Database{
 
    // specify your own database credentials
    private $host = ".\sqlexpress";
    private $db_name = "camp-denden";
    private $username_sql = "";
    private $username_mysql = "root";
    private $password = "";
   public $servername='localhost';
    public $conn;
 
    // get the database connection
   public function getMSSQLConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("sqlsrv:server=".$this->host. ";Database=" . $this->db_name, $this->username_sql, $this->password);
            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
             $this->conn->setAttribute( PDO::SQLSRV_ATTR_QUERY_TIMEOUT, 1 );
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }



// // get the database For Mysql Connection connection

public function getMysqlConnection(){
 
    $this->conn = null;
try{
    $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->db_name", $this->username_mysql, $this->password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $this->conn;
}

















}
?>
