<?php

session_start();
require_once("../model/read.php");



    $GameName="hades";
    $idGame= readIdGame($GameName);
    $idGame= $idGame[0]['id'];
    
    $top10= readTop10($idGame);
    
    


include_once('../view/hades.php');