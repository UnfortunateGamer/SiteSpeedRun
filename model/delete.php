<?php

function deleteRun($idRun){
    include('connection.php');
      $query = "DELETE FROM Run WHERE id= :id";
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