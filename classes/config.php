<?php

  class config {
    private $server_name = 'localhost';
    private $username = 'root';
    private $password = '@Lookup321';
    private $database_name = 'pdo';
    
    function connect(){
      try{
        $conn = new PDO("mysql:host=$this->server_name;dbname=$this->database_name",$this->username, $this->password);
      } catch(PDOException $e){
        echo $e->getMessage();
      }
      return $conn;
    }
  }


?>