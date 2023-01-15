<?php 
ob_start(); 

session_start();
if(isset($_SESSION["message"])){
  echo $_SESSION["message"]; 
}

if($_SESSION["admin"]==0){
        echo('<style type="text/css">#admin{visibility:blank;}</style>');
        
    }else {
        echo('<style type="text/css">#admin{visibility:hidden; }</style>');
        
    }


?>

<form action="../controller/persoPage.php" method="GET" >
    <div class="center">
        <p>Attention si tu change ton pseudo cela affectera ton log in !</p>
      <label for="NewUserName">changer ton pseudo :</label><br>
      <input type="text" id="NewUserName" name="NewUserName"><br>
    </div>
        
    <div class="center">
      <label for="NewPassword">Mot de passe :</label><br>
      <input type="NewPassword" id="NewPassword" name="NewPassword"><br>
    </div>

    <div class="center">
      <label for="NewPassword">Confirmation de mot de passe :</label><br>
      <input type="NewPassword" id="NewPassword" name="NewPasswordC"><br>
    </div>
</p>
    <input type="submit" class="btn btn-primary" value="Envoyer">

</form>
<form>
  <input type="button" class="btn btn-primary" id="admin" value="Aller à la page d'administration" onclick="window.location.href='gestionAdmin.php'">
</form>

<?php 
$content =ob_get_clean();
$titre = "Bonjour " .$_SESSION['user'];
require "template.php"
?>