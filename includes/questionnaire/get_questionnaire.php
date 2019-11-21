<?php
include ("../includes/requetes.php");
session_start();

// récupére le questionnaire en fonction de la difficulté
$quest = getQuestionnaire($_GET['diff']);

// crée une session avec le questionnaire
$_SESSION['quest'] = serialize($quest);

// crée une session avec le numéro de la question
$_SESSION['numQuest'] = 1;

// crée une session avec la difficulté
$_SESSION['diff'] = $_GET['diff'];

// retournes à la page d'index avec le numéro de question en get
$header = "Location: ../index.php";
header($header);

?>