<?php
include_once('../model/read.php');
include_once('../model/insert.php');
$nom =$_GET["name"];
$time =$_GET["time"];
$videoLink =$_GET["videoLink"];
$User=$_GET["User"];
$gameName=$_GET["NomJeu"];

$idUser= readMyID($User);
$idGame= readIdGame($gameName);
$idUser= $idUser[0]['id'];
$idGame= $idGame [0]['id'];
InsertRun($nom,$time,$videoLink,$idUser,$idGame);
header('Location: ../view/ajoutRun.php');



