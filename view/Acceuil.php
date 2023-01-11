<?php 
ob_start(); 
?>


<table>
  <tr>
    <td><img src="../Ressources/hades.jpg" alt="logo hades" style="width: 150px; height: 150px;">
  </tr>
  <tr>
    <td><a href="hades.php">Hades</a>
</td>
  </tr>
</table>


<?php 
$content =ob_get_clean();
$titre = "SpeedRun.TV";
require "template.php"
?>