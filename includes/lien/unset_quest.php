<?php
session_start();

unset($_SESSION['quest']);
header('Location: ../index.php');
die();
?>