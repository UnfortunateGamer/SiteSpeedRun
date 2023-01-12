<?php 
ob_start();
 
session_start();
include("../model/read.php");

$runNoValid = $_SESSION["runNoValid"];

?>
<table class="table text-center">
 <tr>
    <th>Name</th>
    <th>Time</th>
    <th>Video link</th>
    <th>Validation</th>
    <th>User</th>
  </tr>
  <?php for($i=0;$i<count($runNoValid);$i++) {  ?>
  <tr>
    <td><?php echo $runNoValid[$i]['name']; ?></td>
    <td><?php echo $runNoValid[$i]['time']; ?></td>
    <?php $lienYT= "https://www.youtube.com/embed/" . $runNoValid[$i]['videoLink'];?>
    <td><iframe src= "<?php echo $lienYT; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
    <td>
        <form method="get" action="../controller/actionValidation.php">
        <input type="hidden" name="idRun" value="<?php echo $runNoValid[$i]['id']; ?>">
        <button type="submit">Valider</button>
        </form>
    </td>
    <?php $idUser = $runNoValid[$i]['idUser']; 
    $nameUser = readMyName($idUser);
    echo $nameUser['nickName']
    ?>
    <td><?php echo $nameUser[0]['nickName']; ?></td>
  </tr>
  <?php } ?>
</table>




<?php 
$content =ob_get_clean();
$titre = "Validation";
require ("template.php");
?>