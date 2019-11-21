<?php
session_start();
include("includes/fonctions.php");

if (!(chk_sess_login())) {
    if(!(chk_conn())){
        if(chk_classement()) {
            include ("pages/classement.php");
        }
        else {
            include("pages/inscr.php");
        }
    } else {
        include("pages/seconnecter.php");
    } 
} 
else {
    if (!(chk_diff()) && !(chk_quest()) && !(chk_score()) && !(chk_classement())){
        include("pages/difficulte.php");
    } 
    else {
        if (chk_quest() && !(chk_score())){
            if(chk_classement()) {
                include("pages/classement.php");
            } else {
                include("pages/questionnaire.php");
            }
        } else {
            include("pages/classement.php");
        }
        
    }
}
include("includes/footer.php");
?>