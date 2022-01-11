<?php
class Database{
  private $server_name = "localhost:3307";
  private $username = "root";
  private $password = "";  //For Mac users, password  is "root"
  private $db_name = "the_company";
  protected $conn;

  public function __construct(){
    $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
    // $conn holds the connection to the database 
    // Use $this->conn each time you interact with the db

    // If there is an error with the connection 
    if($this->conn->connect_error){
      die("Unable to connect to database: " . $this->conn->connect_error);
    }
    // terminate the current script
    // same as exit
  }

}
?>