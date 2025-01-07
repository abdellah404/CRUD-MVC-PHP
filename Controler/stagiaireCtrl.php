<?php

  require_once 'Model/stagiaire.php' ;
  function lister_stagiaireAction(){
    
  $users = listeStagiaire();
  require_once 'View/liste_stagiaire.php';
  }

  function ajouter(){
    create();
    header('location:index.php?action=list');
     
   return create();
   }

   function deleteAction($id){
    require_once 'View/deleteUI.php';
    if(isset($_POST['supprimer'])) {
      delete($id);
      header('location:index.php?action=list');
    }
    else {
      header('location:index.php?action=list');
    }
   }

?>