<?php

session_start();
include('../model/read.php');
$tabGame = recupListGame();
$_SESSION['listGame'] = $tabGame;

?>