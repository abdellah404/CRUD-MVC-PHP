<?php
$title = ' Ajouter User ';
ob_start();

?>
<?php

if(isset($booleen)){
   $color = "danger";
 }  
 else {$color ="success" ;} ;
?>

<span class="badge bg-"></span>
<form action="/first/index.php?action=store" method='POST'>
  <div class="mb-3">
    <label class="form-label">nom</label>
    <input type="text" name="nom" class="form-control" >
    <label class="form-label">prenom</label>
    <input type="text" name="prenom" class="form-control" >
    <label class="form-label">age</label>
    <input type="text" name="age" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>
<?php

 $table = ob_get_clean();
include_once('layout.php');
?>