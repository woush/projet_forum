<?php
include ("class/connect.php");

function getUser($pseudo) {
$conn = new Connect();
$req = $conn->get_connexion()->prepare('SELECT pseudo,mdp FROM administrateur WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$res = $req->fetch();
return $res;
}

// récupère les user triés par tranche d'age
function getallUser(){
    $conn = new Connect();
    $res = $conn->get_connexion()->query("SELECT prenom, nom, pseudo, email, tranche_d_age FROM utilisateur ORDER BY tranche_d_age ASC");
    $res->setFetchMode(PDO::FETCH_OBJ);

    return $res;
}

?>