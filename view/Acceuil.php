<?php 
ob_start(); 
session_start();
include("../controller/acceuil.php");
$listGame = $_SESSION['listGame'];

?>


<table>
<?php
foreach($listGame as $game){ 
?>

    <tr>
      <td>
        <img src="../Ressources/hades.jpg" alt="logo hades" style="width: 150px; height: 150px;">
      </td>
    </tr>
    <tr>
      <td>
        <form action="hades.php" method="GET">
          <input type="submit" id="ChoseGame" name="ChoseGame" class="btn btn-primary" value="<?php echo $game['name']?>">
        </form> 
      </td>
    </tr>

<?php  }
?>
</table>


<?php 
$content =ob_get_clean();
$titre = "SpeedRun.TV";
require "template.php"
?>