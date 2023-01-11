<?php

session_start();
include("../model/read.php");
    $_SESSION["gameName"] = $_GET["gameName"];
    $idGame= readIdGame($_SESSION["gameName"]);
    $idGame= $idGame[0]['id'];
    
    $runNoValid= ReadAllRunNoValidationByIdGame($idGame);
    $_SESSION["runNoValid"] = $runNoValid;
    //var_dump($_SESSION["runNoValid"]);
    header('Location: ../view/validation.php');