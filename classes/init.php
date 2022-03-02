<?php
require_once './handle/handle.php';
  spl_autoload_register(function($class){
    require_once $_SERVER['DOCUMENT_ROOT'].'/classes/'.$class.'.php';
  })
?>