<?php
require_once dirname(__FILE__)."/../config.php";

class BaseDao{
  
  protected $connection;
  
    public function __construct(){

try {
  $this->connection = new PDO("mysql:host=".Config::DB_HOST.";port=".Config::DB_PORT.";dbname=".Config::DB_SCHEME,Config::DB_USERNAME, Config::DB_PASSWORD);
  $this->connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  //echo "Connected successfully";
} catch(PDOException $e) {
  //echo "Connection failed: " . $e->getMessage();
}
        
}

    public function insert() {


    }
    public function update(){
        
    }
    public function query($query, $params){
      $stmt= $this->connection->prepare($query);
      $stmt->execute($params);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function query_unique($query, $params){
     $results = $this->query($query,$params);
     return reset($results);
    }
     
  }
    ?>