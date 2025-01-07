<?php
 require_once("Controler/stagiaireCtrl.php");
 
  if(isset($_GET['action'])){

    $action =$_GET['action'] ;
    switch($action){
        case 'list':
        lister_stagiaireAction();
        break;

       case 'store':
        ajouter();
        break;

       case 'delete':
        session_start();
        $id =$_SESSION['id'];
        deleteAction($id);
        session_destroy();
        break;

        

    }

  }else   lister_stagiaireAction();



?>