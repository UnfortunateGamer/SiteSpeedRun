<?php
//include_once('connection.php');
function recupAllInfoAdmin(){
    include('connection.php');
    $query = "SELECT * FROM sitespeedrun.user";
    $query_params = array();
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
  }

function recupInfoUser($login){
    include('connection.php');
    $query = "SELECT * FROM sitespeedrun.user where nickName= :nickName";
    $query_params = array(':nickName'=>$login);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
  }

  function recupListGame(){
    include('connection.php');
    $query = "SELECT name FROM sitespeedrun.game";
    //$query_params = array();
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
  }


  

function readIdGame($GameName){
  include('connection.php');
  $query = "SELECT id FROM game WHERE name= :gameName";
  $query_params = array(':gameName'=>$GameName);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchall();
  return (!empty($result)) ? $result: 'NULL';
}


function readTop10($IDGame){
    include('connection.php');
    $query = "SELECT * FROM run WHERE idGame = :game ORDER BY time ASC LIMIT 10";
    $query_params = array(':game'=>$IDGame);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
  }


function readLastIdPicture(){
    require('connection.php');
    $query = "SELECT id FROM picture ORDER BY id DESC LIMIT 1";
    $query_params = array();
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
  }

  function readIdStyle($StyleName){
    include_once('connection.php');
    $query = "SELECT id FROM RunStyle WHERE Name= :styleName ";
    $query_params = array(':styleName'=>$StyleName);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';

  }

  function ReadAllRunNoValidationByIdGame($IdGame){
    include('connection.php');
    $query = "SELECT * FROM run WHERE idGame =:IdGame AND validation IS NULL ";
    $query_params = array(':IdGame' => $IdGame);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
  } 

  function ReadAllRunNoValidation(){
    include_once('connection.php');
    $query = "SELECT * FROM run WHERE validation = :validation ";
    $query_params = array(':validation'=>NULL);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
  } 

  function readMyRuns($idUser){
    include_once('connection.php');
    $query = "SELECT * FROM Run WHERE idUser = :idUser ";
    $query_params = array(':idUser'=>$idUser);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
  }
 
  function readMyID($nickName){
    include_once('connection.php');
    $query = "SELECT id FROM user WHERE nickName = :nickName ";
    $query_params = array(':nickName'=>$nickName);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
  }

  function readMyName($idUser){
    include('connection.php');
    $query = "SELECT nickName FROM user WHERE id = :id ";
    $query_params = array(':id'=>$idUser);
    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $result = $stmt->fetchall();
    return (!empty($result)) ? $result: 'NULL';
}

 ?>