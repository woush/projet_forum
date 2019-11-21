<?php
include ("../includes/requetes.php");
include ("../includes/fonctions.php");
session_start();

//récupère les résultats de la requete sur le score
$res = classement();

//retourne le code html du tableau de score
$_SESSION['classement'] = printHightScore($res);

//unset le questionnaire si il existe
if(isset($_SESSION['quest'])){
    unset($_SESSION['quest']);
}

// si l'utilisateur est connecté récupère son classement
if(isset($_SESSION['login'])){
    //retourne le code html du classement user
    $_SESSION['classUser'] = printClassementByUser($res);
}

header("Location: ../index.php?classement=10");
?>