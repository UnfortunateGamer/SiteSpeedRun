<?php

session_start();

$_SESSION['isConnected'] = 0;
header('Location:../view/Acceuil.php');

?>