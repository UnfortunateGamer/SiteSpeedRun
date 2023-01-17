<?php 
ob_start(); 

session_start();
/*if(isset($_SESSION["message"])){
    echo $_SESSION["message"]; 
}*/
//require_once("../controller/gestionAdmin.php");
if($_SESSION['admin']!=1){
  header('location:Acceuil.php');
}


?>

<form action="../controller/AjoutImage.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <input type="hidden" name="MAX_FILE_SIZE" value="100048576"> 
        <label for="formFile" class="form-label mt-4">Ajouter une image</label>
        <input class="form-control" type="file" name='image' accept="image/jpeg,image/png" id="formFile">
        <input type="submit" class="btn btn-primary" value="Envoyer">
    </div>
    </p>
    </p>
</form>
    <div class="form-group">
      <button onclick="window.location.href = 'creationAdmin.php';"class="btn btn-primary">Créer un administrateur</button>
    </div>
    </p>
    <div class="form-group">
      <button onclick="window.location.href = 'ajoutGame.php';"class="btn btn-primary">ajout d'un jeu</button>
    </div>
</form>
<form action="../controller/validation.php"  method="get">
    <label for="gameName">nom du jeu:</label><br>
        <input type="text" id="gameName" name="gameName"><br>
        <button type="submit" class="btn btn-primary" >Validation</button>
</form>

<form action="../controller/ban.php">
  <input type="submit" class="btn btn-primary" value="Banir des utilisateurs">
</form>';
<?php 
$content =ob_get_clean();
$titre = "Rule them all";
require "template.php"
?>