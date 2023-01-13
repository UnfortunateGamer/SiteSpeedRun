<?php 

include('../model/read.php');
session_start();
$_SESSION["user"] = $_GET["login"];
$_SESSION["mdp"] = $_GET["password"];

$tabUSER = recupInfoUser($_SESSION["user"]);

if($tabUSER != NULL){
    if(password_verify($_SESSION["mdp"], $tabUSER[0]['pswd'])&&$tabUSER[0]['admin']==0){
        $_SESSION['id']=$tabUSER[0]['id'];
        $_SESSION['name']=$tabUSER[0]['name'];
        $_SESSION['firstname']=$tabUSER[0]['firstname'];
        $_SESSION['birthdate']=$tabUSER[0]['birthdate'];
        $_SESSION['email']=$tabUSER[0]['Email'];
        $_SESSION['isConnected']=TRUE;
        //$_SESSION['idPicture']=$tabUSER[0]['idPicture'];
        unset($_SESSION["mdp"]);
        header('Location: ../view/Acceuil.php');
    }
    elseif(password_verify($_SESSION["mdp"], $tabUSER[0]['pswd'])&&$tabUSER[0]['admin']==1){
        $_SESSION['id']=$tabUSER[0]['id'];
        $_SESSION['name']=$tabUSER[0]['name'];
        $_SESSION['firstname']=$tabUSER[0]['firstname'];
        $_SESSION['birthdate']=$tabUSER[0]['birthdate'];
        $_SESSION['email']=$tabUSER[0]['Email'];
        $_SESSION['isConnected']=TRUE;
        //$_SESSION['idPicture']=$tabUSER[0]['idPicture'];
        $_SESSION['admin']=$tabUSER[0]['admin'];
        unset($_SESSION["mdp"]);
        header('Location: ../view/gestionAdmin.php');}
    else{
        $_SESSION["message"] = "Mauvais mot de passe";
        header('Location: ../view/signIn.php');
    }
}else{
    $_SESSION["message"] = "Utilisateur inexistant";
    header('Location: ../view/signIn.php');
}

