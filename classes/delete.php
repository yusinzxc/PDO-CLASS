<?php 

class delete extends config{
  public $uid;
  public function __construct($uid){
    $this->uid = $uid; 
  }
  public function deleteUser(){
    $con = $this->connect();
    $query = $con->prepare("DELETE FROM user WHERE uid = $this->uid");
    $delete = $query->execute();
    if($delete){
      return true;
    }else{
      return false;
    }
    
  }
}

?>