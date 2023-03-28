<?php

function home() {
//session_start();
require '../Vues/header.php';
require '../Models/Model.php' ;
require_once '../Vues/home.php';


if(isset($_POST['btnAd'])){
  // header('location: connexionAdmin.php');
 // $idU=$_SESSION['idU'];
   if(isset($_SESSION['idU'])){
       header('location: index.php?control=Article');
   
   }else{
       $erAut='Veuillez vous connecter';
       header('location: index.php?control=connectADmin');
   }
   
}
}

function inscription(){
    require '../Vues/header.php';
require '../Models/Model.php' ;
require_once '../Vues/inscription.php';

}
function Article(){
    require '../Vues/header.php';
    require '../Models/Model.php' ;
    require '../Vues/Article.php';

}
function logout(){

    session_unset();
    session_destroy();
    require '../Vues/header.php';
    require '../Models/Model.php' ; 
    require '../Vues/logout.php';
  }
 

      function connectADmin(){
        require '../Vues/header.php';
        require '../Models/Model.php' ;
        require '../Vues/insAdmin.php';
        
          }

          function AjoutCli(){
            require '../Vues/header.php';
            require '../Models/Model.php' ;
            require '../Vues/inscription.php';
            
        
        }
          