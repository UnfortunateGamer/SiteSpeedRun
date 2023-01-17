<?php 
session_start();
include("../model/update.php");

$id = $_GET['id'];
updateBan($id);

header("location: ../controller/ban.php" );