<?php 
session_start();
include("../model/update.php");

$idRun = $_GET['idRun'];

updateValidationRun($idRun);
header("location: ../controller/validation.php" );