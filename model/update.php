<?php

function updateNickName($idUser, $NewNickname){
    include('connection.php');
    $query = "UPDATE user SET nickName= :newNickname WHERE id= :id";
    $query_params = array(':id'=>$idUser,':newNickname'=>$NewNickname);
      try{
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
      }
      catch(PDOException $ex){
          die("Failed query : " . $ex->getMessage());
      }
  }

  function updatePassword($idUser, $NewPassword){
    include('connection.php');
      $query = "UPDATE user SET Pswd= :NewPassword WHERE id= :id";
      $query_params = array(':id'=>$idUser ,'NewPassword'=>$NewPassword);
      try{
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
      }
      catch(PDOException $ex){
          die("Failed query : " . $ex->getMessage());
      }
  }

  function updateEmail($idUser, $NewEmail){
    include('connection.php');
      $query = "UPDATE user SET Email=$NewEmail WHERE id= :id";
      $query_params = array(':id'=>$idUser);
      try{
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
      }
      catch(PDOException $ex){
          die("Failed query : " . $ex->getMessage());
      }
  }

  function upadteBan($idUser){
    include('connection.php');
      $query = "UPDATE user SET active=0 WHERE id= :id";
      $query_params = array(':id'=>$idUser);
      try{
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
      }
      catch(PDOException $ex){
          die("Failed query : " . $ex->getMessage());
      }
  }

  function upadteUnBan($idUser){
    include('connection.php');
      $query = "UPDATE user SET active=1 WHERE id= :id";
      $query_params = array(':id'=>$idUser);
      try{
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
      }
      catch(PDOException $ex){
          die("Failed query : " . $ex->getMessage());
      }
  }

  function updateValidationRun($idRun){
    include('connection.php');
      $query = "UPDATE run SET validation=1 WHERE id= :id";
      $query_params = array(':id'=>$idRun);
      try{
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
      }
      catch(PDOException $ex){
          die("Failed query : " . $ex->getMessage());
      }
  }

  


 ?>