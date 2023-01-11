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
  <!-- Div conteneur pour le formulaire -->
  <div class="form">
    <!-- Formulaire de connexion -->
    <form action="..\controller\signIn.php" method="GET">
      <!-- Champ de connexion -->
      <label for="login">Login:</label><br>
      <input type="text" id="login" name="login"><br>

      <!-- Champ de mot de passe -->
      <label for="password">Mot de passe:</label><br>
      <input type="password" id="password" name="password"><br>

      <!-- Bouton de connexion -->
      <button type="submit" class="btn btn-primary" >Se connecter</button>
    </form>
  </div>
</body>
</html>
<?php 
$content =ob_get_clean();
$titre = "connecte toi chacal";
require "template.php"
?>