<?php
session_start();

if(isset($_SESSION['admin'])){
    include("includes/all_user.php");
} else {
    //unset la session d'un simple user et propose la co d'un admin
    unset($_SESSION['login']);
    include("includes/co_admin.php");
}
?>
