<?php 
ob_start();
 
session_start();
include("../model/read.php");

$utilisateurs = $_SESSION["utilisateurs"];

?>
<table class="table text-center">
 <tr>
    <th>id</th>
    <th>Name</th>
    <th>Firstname</th>
    <th>birthdate</th>
    <th>nickName</th>
    <th>Email</th>
    <th>Banir</th>
  </tr>
  <?php for($i=0;$i<count($utilisateurs);$i++) {  ?>
  <tr>
    <td><?php echo $utilisateurs[$i]['id']; ?></td>
    <td><?php echo $utilisateurs[$i]['name']; ?></td>
    <td><?php echo $utilisateurs[$i]['firstname']; ?></td>
    <td><?php echo $utilisateurs[$i]['birthdate']; ?></td>
    <td><?php echo $utilisateurs[$i]['nickName']; ?></td>
    <td><?php echo $utilisateurs[$i]['Email']; ?></td>
    <td>
        <form method="get" action="../controller/actionBan.php">
        <input type="hidden" name="id" value="<?php echo $utilisateurs[$i]['id']; ?>">
        <button type="submit">Banir</button>
        </form>
    </td>
  </tr>
  <?php } ?>
</table>




<?php 
$content =ob_get_clean();
$titre = "Judge them all ! ";
require ("template.php");
?>