<?php 
ob_start(); 
?>


<table>
  <tr>
    <td><img src="../Ressources/hades.jpg" alt="logo hades" style="width: 150px; height: 150px;">
  </tr>
  <tr>
    <td>
    <form action="hades.php" method="GET">
      <input type="submit" id="ChoseGame" name="ChoseGame" class="btn btn-primary" value="hades">
    </form> 
</td>
  </tr>
</table>


<?php 
$content =ob_get_clean();
$titre = "SpeedRun.TV";
require "template.php"
?>