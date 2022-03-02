<?php

  function deleteUser(){
    if(!empty($_GET['uid'])){
      $uid = $_GET['uid'];
      $delete = new delete($uid);
      if($delete->deleteUser()){
        echo "Successfully";
      }
    }
  }



?>