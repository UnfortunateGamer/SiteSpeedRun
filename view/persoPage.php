<?php 
ob_start(); 

session_start();
//echo($_SESSION["isConnected"]);

if($_SESSION["admin"]==0){
        echo('<style type="text/css">#admin{visibility:blank;}</style>');
        //echo($_SESSION["isConnected"]);
    }else {
        echo('<style type="text/css">#admin{visibility:hidden; }</style>');
        //echo($_SESSION["isConnected"]);
    }


?>

<form action="../controller/persoPage.php" method="get" >
    <div class="center">
        <p>Attention si tu change ton pseudo cela affectera ton log in !</p>
      <label for="userName">changer ton pseudo :</label><br>
      <input type="text" id="userName" name="userName"><br>
    </div>
        
    <div class="center">
      <label for="password">Mot de passe :</label><br>
      <input type="password" id="password" name="password"><br>
    </div>

    <div class="center">
      <label for="password">Confirmation de mot de passe :</label><br>
      <input type="password" id="password" name="passwordC"><br>
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