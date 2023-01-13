<?php 

session_start();
$id = $_GET['id'];
$nickName = $_GET['nickName'];
$newPass = $_GET['Password'];

if (!empty($_GET['userName'])) {
    updateNickName($id,$nickName);    
}
