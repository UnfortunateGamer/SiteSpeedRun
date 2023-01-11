<?php 
ob_start();
 
session_start();
include("../controller/hades.php");

$top10 = $_SESSION["top10"];
$userName= $_SESSION["top10"];
?>

<table class="table text-center">
 <tr>
    <th>Name</th>
    <th>Time</th>
    <th>Video link</th>
    <th>Validation</th>
    <th>ID user</th>
  </tr>
  <?php foreach ($top10 as $run) {  ?>
  <tr>
    <td><?php echo $run['name']; ?></td>
    <td><?php echo $run['time']; ?></td>
    <?php $lienYT= "https://www.youtube.com/embed/" . $run['videoLink'];?>
    <td><iframe src= "<?php echo $lienYT; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
    <?php $validation = $run['validation']; ?>
    <td><img src="<?php echo $validation !== null ? '../Ressources/9.png' : '../Ressources/10.png'; ?>" style="width: 150px; height: 150px;"></td>
    <?php $idUser = $run['idUser']; ?>
    <td><?php echo readMyName($idUser)[0]['nickName']; ?></td>
  </tr>
  <?php } ?>
</table>
<?php 
$content =ob_get_clean();
$titre = "Top 10 run hades";
require ("template.php");
?>