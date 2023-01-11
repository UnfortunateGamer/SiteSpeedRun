<?php 
ob_start(); 
session_start();
if(isset($_SESSION["message"])){
  echo $_SESSION["message"]; 
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div class="form">
    
    <form action="..\controller\ajoutGame.php" method="GET">
      
      <label for="name">nom du jeu </label><br>
      <input type="text" id="name" name="name"><br>
      
      <label for="description">description:</label><br>
      <input type="description" id="description" name="description"><br>

      <label for="idPicture">id de l'image</label><br>
      <input type="idPicture" id="idPicture" name="idPicture"><br>
      
      <button type="submit" class="btn btn-primary" >ajoutGame</button>
    </form>
  </div>
</body>
</html>
<?php 
$content =ob_get_clean();
$titre = "Ajouter un nouveau jeu";
require "template.php"
?>