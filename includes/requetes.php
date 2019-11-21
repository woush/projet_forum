<?php
include ("class/connect.php");
include ("class/questionnaire.php");

function insertUser($mail,$nom,$prenom,$trancheAge,$pseudo,$mdp) {
    $conn = new Connect();
    $req = $conn->get_connexion()->prepare('INSERT INTO utilisateur (email,nom,prenom,tranche_d_age,pseudo,mdp) VALUES (:email,:nom,:prenom,:tranche_d_age,:pseudo,:mdp)');
    $req->execute(array(
        'email' => $mail,
        'nom' => $nom,
        'prenom' => $prenom,
        'tranche_d_age' => $trancheAge,
        'pseudo' => $pseudo,
        'mdp' => $mdp));
}

function insertScore($pseudo) {
    $conn = new Connect();
    $req = $conn->get_connexion()->prepare('INSERT INTO score (pseudo_user) VALUES (:pseudo)');
    $req->execute(array(
        'pseudo' => $pseudo));
}

function userExist($mail){
    $test = false;
    $conn = new Connect();
    $req = $conn->get_connexion()->prepare('SELECT email FROM utilisateur WHERE email = :email');
    $req->execute(array(
        'email' => $mail));
    
    $res = $req->fetch();

    // s'il y a des résultat
    if ($res){
        $test = true;
    } 
    
    return $test;
}

function pseudoExist($pseudo){
    $test = false;
    $conn = new Connect();
    $req = $conn->get_connexion()->prepare('SELECT pseudo FROM utilisateur WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo));
    
    $res = $req->fetch();

    // s'il y a des résultat
    if ($res){
        $test = true;
    } 
    
    return $test;
}

function getUser($pseudo) {
$conn = new Connect();
$req = $conn->get_connexion()->prepare('SELECT pseudo,mdp FROM utilisateur WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$res = $req->fetch();
return $res;
}

function getQuestionnaire($diff){
$question = array();
$reponse = array();
$photo = array();
$conn = new Connect();
$res = $conn->get_connexion()->query("SELECT question,reponse,path_photo FROM question WHERE type_questionnaire IN('".$diff."') ORDER BY rand() LIMIT 10");
$res->setFetchMode(PDO::FETCH_OBJ);
// ajoute les données récupérées aux tableaux correspondant
    while ($data = $res->fetch()) {
        // ajoute au  tableau question
        array_push($question,$data->question);
        // ajoute au  tableau reponse
        array_push($reponse,$data->reponse);
        // ajoute au  tableau photo
        array_push($photo,$data->path_photo);
    }
// crée l'objet questionnaire
$quest = new Questionnaire($question,$reponse,$photo,$diff);
return $quest;
$res->closeCursor();
}

// récupère les scores et user triés par score
function classement(){
    $conn = new Connect();
    $res = $conn->get_connexion()->query("SELECT pseudo_user, score_total FROM score ORDER BY score_total DESC");
    $res->setFetchMode(PDO::FETCH_OBJ);

    return $res;
}

function your_score($user){
    $conn = new Connect();
    $res = $conn->get_connexion()->query("SELECT pseudo_user, score_total FROM score WHERE pseudo_user = '".$user."'");
    $res->setFetchMode(PDO::FETCH_OBJ);
    while ($data = $res->fetch()) {
       $score = $data->score_total;
    }
    return $score;
}

// entre le score du quizz qui vient d'être joué
function setScoreDiff($score,$pseudo,$coldiff){
    $conn = new Connect();
    $req = $conn->get_connexion()->prepare("UPDATE score SET ".$coldiff." = :score WHERE pseudo_user = :pseudo");
    $req->execute(array(
        'score' => $score,
        'pseudo' => $pseudo));
}

// Calcul du score total
function setScoreTotal($pseudo){
    $conn = new Connect();
    $req = $conn->get_connexion()->prepare("UPDATE score SET score_total = (score_easy + score_medium + score_hard) WHERE pseudo_user = :pseudo");
    $req->execute(array(
        'pseudo' => $pseudo));
}

// Récupère tous les scores pour l'objet Resultat
function getResultat($pseudo){
    $conn = new Connect();
    $res = $conn->get_connexion()->query("SELECT * FROM score WHERE pseudo_user = '".$pseudo."'");
    $res->setFetchMode(PDO::FETCH_OBJ);
    
    return $res;
}
?>