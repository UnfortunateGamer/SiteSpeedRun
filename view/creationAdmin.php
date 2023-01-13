<?php 
ob_start(); 
session_start();
if(isset($_SESSION["message"])){
    echo $_SESSION["message"]; 
}
if($_SESSION['admin']!=1){
  header('location:Acceuil.php');
}


?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form action="../controller/creationAdmin.php" method="GET">
    <!-- Champ de formulaire pour le nom -->
    <div class="from-group">
      <label for="name">Nom :</label><br>
      <input type="text" class="from-control" id="name" name="name"><br>
    </div>

    <!-- Champ de formulaire pour le prénom -->
    <div class="center">
      <label for="firstname">Prénom :</label><br>
      <input type="text" id="firstname" name="firstname"><br>
    </div>

    <!-- Champ de formulaire pour la date de naissance -->
    <div class="center">
      <label for="birthdate">Date de naissance :</label><br>
      <input type="date" id="birthdate" name="birthdate"><br>
    </div>

    <!-- Champ de formulaire pour l'adresse email -->
    <div class="center">
      <label for="email"> email:</label><br>
      <input type="text" id="email" name="email"><br>
    </div>

    <!-- Champ de formulaire pour le user name-->
    <div class="center">
      <label for="userName">userName :</label><br>
      <input type="text" id="userName" name="userName"><br>
    </div>

    <!-- Champ de formulaire pour le mot de passe -->
    <div class="center">
      <label for="password">Mot de passe :</label><br>
      <input type="password" id="password" name="password"><br>
    </div>

    <!-- Champ de formulaire pour la confirmation de mot de passe -->
    <div class="center">
      <label for="password">Confirmation de mot de passe :</label><br>
      <input type="password" id="password" name="passwordC"><br>
    </div>

    <!-- Bouton de soumission du formulaire -->
    <input type="submit" class="btn btn-primary" value="Envoyer">
  </form>

</body>
</html>

<?php 
$content =ob_get_clean();
$titre = "Ajoute un admin";
require "template.php"
?>