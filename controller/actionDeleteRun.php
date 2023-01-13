<?php 
session_start();
include("../model/delete.php");

$idRun = $_GET['idRun'];

DeleteRun($idRun);
header("location: ../controller/validation.php" );