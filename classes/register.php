<?php

  class register extends config{
    public $username;
    public $password;
    
    public function __construct($username, $password){
      $this->username = $username;
      $this->password = $password; 
    }
    function insert(){
      $con = $this->connect();
      $inserted = $con->exec("INSERT INTO `user`(`username`, `password`) VALUES ('$this->username','$this->password')");
      if($inserted){
        return true;
      }else {
        return false;
      }
    }
  }

?>