<?php 
include('../model/update.php');
session_start();
$id = $_SESSION['id'];
 
if (!empty($_GET['NewUserName'])) {
    updateNickName($id,$_GET['NewUserName']);
    $_SESSION["message"] = "tu as bien changé ton Pseudo/log in !";  
    header('Location: ../view/persoPage.php');
      
}
if (!empty($_GET['NewPassword'])&& $_GET['NewPassword'] === $_GET['NewPasswordC']) {
    updatePassword($id,$_GET['NewPassword']);
    $_SESSION["message"] = "Ton mot de passe à bien été modifié "; 
    header('Location: ../view/persoPage.php');   
}
if (empty($_GET['NewPassword']) && empty($_GET['NewUserName'])){
    $_SESSION["message"] = "les champs sont vide "; 
    header('Location: ../view/persoPage.php');
}