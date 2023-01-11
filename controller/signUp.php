<?php
include('../model/read.php');
include('../model/insert.php');

session_start();
if((empty($_GET["name"])) || (empty($_GET["firstname"]))  || (empty($_GET["email"])) || (empty($_GET["userName"])) || (empty($_GET["birthdate"])) || (empty($_GET["password"])) || (empty($_GET["passwordC"]))){
    $_SESSION["message"] = "Tout les champs ne sont pas remplis";
    header('Location: ../view/signUp.php');
}else if($_GET["password"]!=$_GET["passwordC"]){
    $_SESSION["message"] = "Les deux mot de passe sont différent !";
    header('Location: ../view/signUp.php');
}

$tabUser = recupAllInfoAdmin();
$count=0;
/*
for($i=0;$i<=count($tabUser);$i++){
    if($tabUser[$i]["nickName"]==$_GET["username"]){
        $_SESSION["message"] = "Pseudo déjà utilisé!";
        $count++;
        header('Location: ../view/signUp.php');
    }
}
*/
if($count==0){
    if(strlen($_GET["password"]) >= 8){
        if(preg_match_all("/[A-Z]/",$_GET["password"]) >= 1){
            if(preg_match_all("/[a-z]/",$_GET["password"]) >= 1){
                if(preg_match_all("/[0-9]/",$_GET["password"]) >= 1){
                    if(preg_match_all("/[^A-Z,a-z]/",$_GET["password"]) >= 1){
                        $_GET["password"]=password_hash($_GET["password"], PASSWORD_BCRYPT);
                        unset($_GET["passwordC"]);
                        insertUser($_GET["name"],$_GET["firstname"],$_GET["birthdate"],$_GET["userName"],$_GET["password"],$_GET["email"]);
                        header('Location: ../view/Acceuil.php');
                    }else{
                        $_SESSION["message"] = "Mot de passe incorrect !";
                        header('Location: ../view/signUp.php');
                    }
                }else{
                    $_SESSION["message"] = "Mot de passe incorrect !";
                    header('Location: ../view/signUp.php');
                }
            }else{
                $_SESSION["message"] = "Mot de passe incorrect !";
                header('Location: ../view/signUp.php');
            }
        }else{
            $_SESSION["message"] = "Mot de passe incorrect !";
            header('Location: ../view/signUp.php');
        }
    }else if(strlen($_GET["password"]) < 8){
        $_SESSION["message"] = "Mot de passe trop court!";
        header('Location: ../view/signUp.php');
    }
}
   

?>