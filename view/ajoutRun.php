<?php 
ob_start(); 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form action="../controller/ajoutRun.php" method="GET">
    <div class="from-group">
      <label for="name">Nom de la run :</label><br>
      <input type="text" class="from-control" id="name" name="name"><br>
    </div>

    <div class="center">
      <label for="time">time :</label><br>
      <input type="text" id="time" name="time"><br>
    </div>

    <div class="center">
      <label for="videoLink">lien de la vidéo :</label><br>
      <input type="text" id="videoLink" name="videoLink"><br>
    </div>

    <div class="center">
      <label for="User"> pseudo:</label><br>
      <input type="text" id="User" name="User"><br>
    </div>

    
    <div class="center">
      <label for="NomJeu">Nom Jeu :</label><br>
      <input type="text" id="NomJeu" name="NomJeu"><br>
    </div>

    <input type="submit" class="btn btn-primary" value="Envoyer">
  </form>

</body>
</html>

<?php 
$content =ob_get_clean();
$titre = "Ajoute ta run ";
require "template.php"
?>