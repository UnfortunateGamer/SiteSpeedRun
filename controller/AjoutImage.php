<?php 

include_once('../model/read.php');
include_once('../model/insert.php');
include_once('../model/connection.php');

// ajouter une image

// Récupération du fichier téléchargé
$fichier = $_FILES['image'];


// Vérification du téléchargement
if (is_uploaded_file($fichier['tmp_name']) && ($fichier['type'] == 'image/jpeg' || $fichier['type'] == 'image/png') && $fichier['size'] <= 100048576) {

  $idPict=readLastIdPicture();
    foreach ($idPict as $id){$idPict = $id['id']+1;}
    $extension = str_replace('image/', '.', $fichier['type']);
  $nom_fichier_final = $idPict . $extension;
   
  // Déplacement du fichier vers le dossier de destination
  $dossier_destination = '../Ressources/';
  $chemain = $dossier_destination . $nom_fichier_final;
  
  move_uploaded_file($fichier['tmp_name'], $chemain);
  InsertPicture($chemain);
  // Affichez un message d'erreur ou redirigez l'utilisateur vers une page d'erreur

}else{echo "non";}

header('Location: ../view/gestionAdmin.php');
//InsertPicture($chemain);

