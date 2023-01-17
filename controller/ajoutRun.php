<?php
session_start();


include('../model/read.php');
include('../model/insert.php');
$nom =$_GET["name"];
$time =$_GET["time"];
$videoLink =$_GET["videoLink"];
//$User=$_GET["User"];
$gameName=$_GET["NomJeu"];

$idUser= $_SESSION['id'];
$idGame= readIdGame($gameName);
//$idUser= $idUser[0]['id'];
$idGame= $idGame [0]['id'];
InsertRun($nom,$time,$videoLink,$idUser,$idGame);


header('Location: ../view/ajoutRun.php');



