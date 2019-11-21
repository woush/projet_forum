<?php
/* ----------------------------------------
-----------     Fonctions PARSE    --------
-----------------------------------------*/

/* check session */
function chk_sess_login(){
    return isset($_SESSION['login']);
}

/* Erreur pseudo/mail utilisé */
function chk_error_pseudo() {
    if (isset($_GET['pseudo'])){
        if ($_GET['pseudo']=='error'){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function chk_error_mail() {
    if (isset($_GET['mail'])){
        if ($_GET['mail']=='error'){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

/* check si une insulte est présente dans les champs */ 
function chk_insulte(){
    if (isset($_GET['pseudo'])){
        if ($_GET['pseudo']=='insulte'){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function chk_insultes($pseudo,$nom,$email,$prenom){
    //tableau de mots proscrits
    $array_insultes=array("con","cul","merde","fuck","batard","connard","connasse","encule","pute","putain","petasse","negro","bougnoule","cretin","idiot","fumier");

    //insertion des données dans un tableau pour faire le comparatif
    $array_entree=array($pseudo,$nom,$email,$prenom);

    //on boucle sur la chaine d'entrée pour comparer les mots, si une insultes est présente on retourne false sinon true
    for($i=0;$i<sizeof($array_entree);$i++) {
        if(in_array(trim(strtolower($array_entree[$i])),$array_insultes)){
            return false;
        }
        else{
            return true;
        } 
    } 

}

/* check si la difficulté a été choisie */
function chk_diff() {
    return isset($_GET['diff']);
}

/* check si l'utilisateur veux se connecter */
function chk_conn() {
    return isset($_GET['conn']);
}

// check si l'utilisateur a choisi ue difficulté
function chk_quest() {
    return isset($_SESSION['quest']);
}

// check si l'utilisateur a fini le questionnaire
function chk_score() {
    return isset($_SESSION['score']);
}

function chk_classement(){
    return isset($_GET['classement']);
}

/* ----------------------------------------
--     Fonctions pour le classement   -----
-----------------------------------------*/

// Génère le code HTML pour le classement TOP
function printHightScore($res){
    $tab = "";
    $cpt = 1;
    $scorePrec = 0;
    while ($data = $res->fetch()) {
        // conditions pour afficher les 10 premiers, même s'il y'a des égalités
        if ($cpt <= 10 || $cpt > 10 && $data->score_total == $scorePrec) {
            if ($data->score_total != $scorePrec) {
                $tab .= "<tr><td>".$cpt."</td><td>".$data->pseudo_user."</td><td>".$data->score_total."</td></tr>";
            } else {
                $tab .= "<tr><td>.</td><td>".$data->pseudo_user."</td><td>".$data->score_total."</td></tr>";
            }
            $scorePrec =$data->score_total;
            $cpt++;
        } else {
            break;
        }
    }
    return $tab;
}

// Génère le code HTML pour le classement de l'utilisateur
function printClassementByUser($res){
    $pseudo = strtolower($_SESSION['login']);
    $classement = "";
    $cpt = 1;
    $scorePrec = 0;
    $position = 1 ;

    while ($data = $res->fetch()) {
    // si le score correspond au score précédent
        if ($data->score_total != $scorePrec) {
            $position = $cpt;
        }

        // gère l'affichage s'il est premier ou autre 
        if ($position == 1){
            $str = "er";
        } else {
            $str = "ème";
        }

        
        // si le pseudo correspond affiche le score et break la boucle
        if (strtolower($data->pseudo_user) == $pseudo){
            $classement = "Pour le moment tu es ".$position.$str." avec ".$data->score_total." points";
            break;   
        }

        $scorePrec = $data->score_total;
        $cpt++;
    }
    return $classement;
}