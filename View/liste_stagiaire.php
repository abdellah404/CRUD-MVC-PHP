<?php
$title = ' List des Stagiaires ';
session_start();
ob_start();
?>

<a href="View/createUI.php" class="btn btn-primary">Ajouter</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">age</th>
      <th scope="col">operation</th>
      
    </tr>
  </thead>
  <tbody>
    
     <?php
    foreach($users as $user):
     ?>

    <?php

      if($user->age > 20 ){
          $color = 'success';
      }
      else { $color = 'danger' ; }
    ?>

    <tr>
        <td><?= $user->id ?></td>
        <td><?= $user->nom ?></td>
        <td><?=$user->prenom ?></td>
        <td><span class="badge rounded bg-<?= $color?>" > <?=$user->age ?></span>
        </td>
        <td>
            <form action="post">
            <input type="submit" value="edit" class=" btn btn-primary btn-sm">
            <a href="View/deleteUI.php?id=<?= $user->id ?>" class=" btn btn-danger btn-sm" >Supprimer</a>
            </form>

        </td>
    
    </tr>
 <?php
   endforeach;
 ?>
    
  </tbody>
</table>

<?php
 $table = ob_get_clean();
include_once('View/layout.php');
?>