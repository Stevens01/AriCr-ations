<?php
  //if(2 !== session_status()){
    session_start();
  //}
    
  require_once '../Controllers/MainController.php';      //reference pour notifier le chemin
 
  if(isset($_GET['control'])){

        $_GET['control']();
  }else{

    home();
  }   
  
?>