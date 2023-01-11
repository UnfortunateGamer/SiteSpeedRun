<?php 
session_start();
require_once("../model/update.php");

$idRun = $_GET['idRun'];

updateValidationRun($idRun);
header("../controller/validation.php" );