<?php

session_start();
require_once("../model/read.php");


    $_SESSION["gameName"] = $_GET["gameName"];
    $idGame= readIdGame($_SESSION["gameName"]);
    $idGame= $idGame[0]['id'];
    
    $runNoValid= ReadAllRunNoValidationByIdGame($idGame);
    
    


include_once('../view/validation.php');