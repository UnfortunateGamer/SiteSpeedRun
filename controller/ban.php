<?php
include("../model/read.php");
    
session_start();
$utilisateurs= NonBani();
$_SESSION["utilisateurs"] = $utilisateurs;
header('Location: ../view/ban.php');