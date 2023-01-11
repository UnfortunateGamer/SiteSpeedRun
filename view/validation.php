<?php 
ob_start();
 
session_start();

$runNoValid = $_SESSION["runNoValid"];
$userName= $_SESSION["runNoValid"];
var_dump($runNoValid);
?>
<table class="table text-center">
 <tr>
    <th>Name</th>
    <th>Time</th>
    <th>Video link</th>
    <th>Validation</th>
    <th>ID user</th>
  </tr>
  <?php foreach ($runNoValid as $run) {  ?>
  <tr>
    <td><?php echo $run['name']; ?></td>
    <td><?php echo $run['time']; ?></td>
    <?php $lienYT= "https://www.youtube.com/embed/" . $run['videoLink'];?>
    <td><iframe src= "<?php echo $lienYT; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
    <td>
        <form method="get" action="../controller/actionValidation.php">
        <input type="hidden" name="idRun" value="<?php echo $idRun['idRun']; ?>">
        <button type="submit">Valider</button>
        </form>
    </td>
    <?php $idUser = $run['idUser']; ?>
    <td><?php echo readMyName($idUser)[0]['nickName']; ?></td>
  </tr>
  <?php } ?>
</table>
<?php 
$content =ob_get_clean();
$titre = "Validation";
require ("template.php");
?>