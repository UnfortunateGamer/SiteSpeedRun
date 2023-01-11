<?php

session_start();
include('../model/read.php');
    
$GameName="hades";
$idGame= readIdGame($GameName);
$idGame= $idGame[0]['id'];
$_SESSION["idHades"] = $idGame;
$top10 = readTop10($idGame);
$_SESSION["top10"] = $top10;
