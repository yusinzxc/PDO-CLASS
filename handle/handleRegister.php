<?php
  function registered(){
    if(isset($_POST['register'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $register = new register($username, $password);
      if($register->insert()){
        return "SUCCESSFULLY REGISTER";
      }else{
        return "FAILED TO REGISTER";
      }
    }
  }
?>