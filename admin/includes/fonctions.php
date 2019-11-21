<?php

/* check session */
function chk_sess_admin(){
    return isset($_SESSION['admin']);
}

/* check si l'utilisateur veux se connecter */
function chk_conn() {
    return isset($_GET['conn']);
}


// Génère le code HTML pour l'affichage de tous les user de la base
function print_alluser($res){
    $tab = "";

    while ($data = $res->fetch()) {
        $tab .= "<tr><td>".$data->prenom."</td><td>".$data->nom."</td><td>".$data->pseudo."</td><td>".$data->email."</td><td>".$data->tranche_d_age."</td></tr>";
    }
    return $tab;
}

?>