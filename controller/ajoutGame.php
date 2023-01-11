<?php 
include_once('../model/insert.php');
$_SESSION["name"] = $_GET["name"];
$_SESSION["description"] = $_GET["description"];
$_SESSION["idPicture"] = $_GET["idPicture"];

session_start();
if((empty($_GET["name"])) || (empty($_GET["description"]))  || (empty($_GET["idPicture"]))){
    $_SESSION["message"] = "Tout les champs ne sont pas rempli";
    header('Location: ../view/ajoutGame.php');
}
InsertGame($_GET["name"],$_GET["description"],$_GET["idPicture"]);
header('Location: ../view/gestionAdmin.php');