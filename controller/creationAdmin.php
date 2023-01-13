<?php
include('../model/read.php');
include('../model/insert.php');

session_start();
if((empty($_GET["name"])) || (empty($_GET["firstname"]))  || (empty($_GET["email"])) || (empty($_GET["userName"])) || (empty($_GET["birthdate"])) || (empty($_GET["password"])) || (empty($_GET["passwordC"]))){
    $_SESSION["message"] = "Tout les champs ne sont pas remplis";
    header('Location: ../view/creationAdmin.php');
}else if($_GET["password"]!=$_GET["passwordC"]){
    $_SESSION["message"] = "Les deux mot de passe sont différent !";
    header('Location: ../view/creationAdmin.php');
}

$tabUser = recupAllInfoAdmin();
$count=0;



for($i=0;$i<=count($tabUser);$i++){
    if($tabUser[$i]["nickName"]==$_GET["userName"]){
        $_SESSION["message"] = "Pseudo déjà utilisé!";
        $count++;
        var_dump($tabUser);
        echo($_GET["userName"]);
        header('Location: ../view/creationAdmin.php');
    }
}

if($count==0){
    if(strlen($_GET["password"]) >= 8){
        if(preg_match_all("/[A-Z]/",$_GET["password"]) >= 1){
            if(preg_match_all("/[a-z]/",$_GET["password"]) >= 1){
                if(preg_match_all("/[0-9]/",$_GET["password"]) >= 1){
                    if(preg_match_all("/[^A-Z,a-z]/",$_GET["password"]) >= 1){
                        $_GET["password"]=password_hash($_GET["password"], PASSWORD_BCRYPT);
                        unset($_GET["passwordC"]);
                        insertAdmin($_GET["name"],$_GET["firstname"],$_GET["birthdate"],$_GET["userName"],$_GET["password"],$_GET["email"]);
                        $_SESSION['id']=$tabUSER[0]['id'];
                        $_SESSION['name']=$tabUSER[0]['name'];
                        $_SESSION['firstname']=$tabUSER[0]['firstname'];
                        $_SESSION['birthdate']=$tabUSER[0]['birthdate'];
                        $_SESSION['email']=$tabUSER[0]['Email'];
                        $_SESSION['isConnected']=TRUE;   
                        $_SESSION['admin']=$tabUSER[0]['admin'];
                        header('Location: ../view/gestionAdmin.php');
                    }else{
                        $_SESSION["message"] = "Mot de passe incorrect !";
                        header('Location: ../view/creationAdmin.php');
                    }
                }else{
                    $_SESSION["message"] = "Mot de passe incorrect !";
                    header('Location: ../view/creationAdmin.php');
                }
            }else{
                $_SESSION["message"] = "Mot de passe incorrect !";
                header('Location: ../view/creationAdmin.php');
            }
        }else{
            $_SESSION["message"] = "Mot de passe incorrect !";
            header('Location: ../view/creationAdmin.php');
        }
    }else if(strlen($_GET["password"]) < 8){
        $_SESSION["message"] = "Mot de passe trop court!";
        header('Location: ../view/creationAdmin.php');
    }
}
   

?>