<?php

function connection(){
    return new PDO('mysql:host=localhost;dbname=test_db', 'root', 'MYHVE8BXFWYT@myhve');
}

function listeStagiaire(){

    try {
        $pdo = connection();
        //request
        $sqlstate = $pdo->query("select * from users");
        //get values 
        $users = $sqlstate->fetchAll(PDO::FETCH_OBJ);
        return $users ;
    }
    catch(PDOException $e){
        echo "error connecting to database " .$e->getMessage();
    }
}



function create(){

    $login = $_POST['login'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $pdo = connection();

   if(isset($login)){

    if(!empty($nom) && !empty($prenom) && !empty($age)){
    $sql = $pdo->prepare('insert into users values(null, ? , ? , ?) ');
    $sql->execute([$nom , $prenom ,$age]);
    return true ;
    }
    else 
    return false;
}


}



function delete($id)
{
    $pod = connection();
    $sql =$pod->prepare('delete from users where id = ?');
    $sql->execute([$id]);
    return $sql ; 
}

?>