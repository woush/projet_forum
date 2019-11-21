<?php
//session_start();
include ("../includes/class/questionnaire.php");

// récupération des datas
$quest = unserialize($_SESSION['quest']);
$numQuest = $_SESSION['numQuest'] - 1;
$question = $quest->get_question($numQuest);
$reponse = $quest->get_reponse($numQuest);

// check bouton cliké
if (isset($_POST['Vrai'])){
    $repUtil = $_POST['Vrai'];
} else if (isset($_POST['Faux'])){
    $repUtil = $_POST['Faux'];
}

// récupére la bonne réponse
if ($quest->get_reponse($numQuest) == "1"){
    $goodRep = "Vrai";
} else {
    $goodRep = "Faux";
}

// MAJ le score en fonction de la réponse
$quest->verifAnswer($repUtil,$goodRep);

// set la session questionnaire avec le score 
$_SESSION['quest'] = serialize($quest); 

// incrémente le numero de la question
$_SESSION['numQuest'] += 1;

// retournes à la page d'index avec le numéro de question suivante
header('Location: ../index.php');
?>