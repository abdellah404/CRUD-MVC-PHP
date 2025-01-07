<?php
$title = ' vouler Confirmer la suppression ? ';
session_start();
$_SESSION['id'] = $_GET['id']; 
ob_start();
?>

<form action="/first/index.php?action=delete" method="POST">
    <input type="submit" class="btn btn-danger" value="supprimer" name="supprimer">
    <input type="submit" class="btn btn-success" value="annuler" name="annuler">
</form>



<?php
 $table = ob_get_clean();
include_once('layout.php');
?>