<?php
include ("../includes/requetes_admin.php");
include ("../includes/fonctions.php");
session_start();

// parse les entrées de l'utilisateur

if (isset($_POST['pseudo_conn']) && isset($_POST['mdp_conn'])) {
/*récupère les valeurs*/
$pseudo = $_POST['pseudo_conn'];

$res = getUser($pseudo);

if (!$res){
    /* il n'y a pas de résultat*/

    /*le pseudo n'existe pas on retourne sur la page de connexion*/
    $_SESSION['error']="Pseudo ou mot de passe erronné";

    header('Location: ../index.php?conn=10');
} 
else {
    /*verifie le mot de passe */
    $OKmdp = password_verify($_POST['mdp_conn'],$res['mdp']);

    if (!$OKmdp){
        /* si le mot de passe est incorrect */
        $_SESSION['error']="Pseudo ou mot de passe erronné";

        /*mdp incorrect on retourne sur la page de connexion*/

        header('Location: ../index.php?conn=10');
    }
    else {
        /* set la session */
        $_SESSION['admin'] = $_POST['pseudo_conn'];
        $res = getallUser();
        $_SESSION['utilisateurs'] = print_alluser($res);
        if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
        }

        /*revient sur la page d'accueil*/
        header('Location: ../index.php');
    }
}
    
}

else {
   
   /*revient sur la page d'accueil*/
    header('Location: ../index.php');
}
?>