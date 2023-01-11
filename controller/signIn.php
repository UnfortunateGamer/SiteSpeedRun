<?php 

include('../model/read.php');
session_start();
$_SESSION["user"] = $_GET["login"];
$_SESSION["mdp"] = $_GET["password"];

$count = 0;

$tabUSER = recupAllInfoAdmin();
echo($tabUSER[0]['login']);
$countTab = count($tabUSER);


for($i=0; $i<=$countTab; $i++){
    if($tabUSER[$i]['nickName'] == $_SESSION["user"]){
        $count++;
        if(password_verify($_SESSION["mdp"], $tabUSER[$i]['pswd'])||$tabUSER[$i]['admin']==0){
            header('Location: ../view/Acceuil.php');
        }
        elseif(password_verify($_SESSION["mdp"], $tabUSER[$i]['pswd'])||$tabUSER[$i]['admin']==1){
            header('Location: ../view/gestionAdmin.php');}
        else{
            $_SESSION["message"] = "Mauvais mot de passe";
            header('Location: ../view/signIn.php');
        }
    }
}
if($count==0){
        $_SESSION["message"] = "Utilisateur inexistant";
        header('Location: ../view/signIn.php');
    }
