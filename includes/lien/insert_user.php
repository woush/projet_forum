<?php
include ("../includes/requetes.php");
include ("../includes/fonctions.php");
session_start();

// parse les entrées de l'utilisateur

if (isset($_POST['nom'])){
    /*récupère les valeurs*/
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $trancheAge = $_POST['trancheAge'];
    $pseudo = htmlspecialchars($_POST['pseudo_inscr']);
    $mdp = password_hash($_POST['mdp_inscr'],PASSWORD_DEFAULT);

    
    // s'il y'a des insultes dans le pseudo, nom, email et prénom
    $insulte_or_not=chk_insultes($pseudo,$nom,$email,$prenom);
    if($insulte_or_not==false){
        $_SESSION['error'] = "Veuillez utiliser des mots corrects svp";
        header('Location: ../index.php');
        die();
    }

    // si l'utilisateur existe
    if (pseudoExist($pseudo)){
        $_SESSION['error'] = "Le pseudo est déjà utilisé";
        header('Location: ../index.php');
        die();
    }
    
    // si l'utilisateur existe
    if (userExist($email)){
        $_SESSION['error'] = "L'utilisateur existe déjà";
        header('Location: ../index.php');
        die();
    }

    
    // entre l'utilisateur en bdd
    insertUser($email,$nom,$prenom,$trancheAge,$pseudo,$mdp);
    insertScore($pseudo);

    // Set la session pour aller à la page de choix de difficulté
    $_SESSION['login'] = $pseudo;

    // Unset la session error si elle existe
    if (isset($_SESSION['error'])){
        unset($_SESSION['error']);
    }
       
    
    
    // Boucle sur l'index vers page du choix de difficulté du questionnaire
    header('Location: ../index.php');
        
    

}
else {
    
    /*revient sur la page d'accueil*/
    header('Location: ../index.php');
}
?>