<!DOCTYPE html>
<html lang="en">
<?php 
// si l'utilisateur est connecté crée l'objet resultat
if (isset($_SESSION['login'])){
    include ("includes/class/resultat.php"); 
    $pseudo = $_SESSION['login'];
    $resultat = new Resultat($pseudo);
}

?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="CrewStiant">

    <title>Classement</title>

    <!-- Bootstrap core CSS -->
    <link href="ressources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="ressources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image" href="ressources/img/Flav_Quizz.png">

    <!-- Plugin CSS -->
    <link href="ressources/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="ressources/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <!-- <img class="img-fluid mb-5 d-block mx-auto" src="img/logo_afpa.png" alt="">-->
            <a class="navbar-brand js-scroll-trigger" href="https://www.afpa.fr/" target="blank"><img src="ressources/img/Logo_AFPA_2.png" alt="logo Afpa"></a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">
                            <?php
                                if (!(isset($_SESSION['score']))){
                                    echo("Jouer");
                                } else {
                                    echo("Nouveau questionnaire");
                                }
                            ?>
                        </a>
                    </li>
                    <!--
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Questionnaire</a>
                    </li>
                    
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="">Classement</a>
                    </li>
                    -->
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="pub.php">Liens</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            <?php
                                if (!(isset($_SESSION['login']))){
                                    echo("href=\"index.php?conn=1\">Se connecter");
                                } else {
                                    echo("href=\"chkForm/deconnexion.php\">Se Déconnecter");
                                }
                            ?>    
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">

        <?php if (isset($_SESSION['classUser'])){ ?>

        <h4 class="text-center text-uppercase text-secondary mb-0 ">
        <?php 
            if (isset($_SESSION['classUser'])){
                echo($_SESSION['classUser']); 
            }
        ?>
        </h4>
        <?php }?>

    <!-- Affichage du score si on arrive sur cette page après la fin d'un questionnaire -->
    <h4 class="text-center text-uppercase text-secondary mb-0 ">
        <?php  
        if (isset($_SESSION['diff'])){
            switch ($_SESSION['diff']) {
                case 1:
                    $totalPoint = 10;
                    break;
                case 2:
                    $totalPoint = 20;
                    break;
                case 3:
                    $totalPoint = 40;
                    break;
            }
        } else {
            $totalPoint = 0;
        }
            if (isset($_SESSION['score'])){
            echo("Ton score : ".$_SESSION['score']." / ".$totalPoint); 
            // unset la session score pour retourner à la page du choix du questionnaire
            unset($_SESSION['score']);
            }
        ?>
    </h4><br><br><br>

        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Classement</th>
                        <th>Pseudo</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo($_SESSION['classement']); ?>
                </tbody>
            </table>
        </div>
        <br><br><br>

 <!-- Si l'utilisateur est connecté, affiche ses stats -->
    <?php if (isset($_SESSION['classUser'])){ ?>

        <h5 class="text-center text-uppercase text-secondary mb-0 ">
            Tes resultats
        </h5>
        </br>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Questionnaire</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><a href="chkForm/get_questionnaire.php?diff=1">Facile</a></th>
                        <td><?php echo($resultat->get_scoreEasy()); ?> / 10</td>
                    </tr>
                    <tr>
                        <th><a href="chkForm/get_questionnaire.php?diff=2">Moyen</a></th>
                        <td><?php echo($resultat->get_scoreMedium()); ?> / 20</td>
                    </tr>
                    <tr>
                        <th><a href="chkForm/get_questionnaire.php?diff=3">Difficile</a></th>
                        <td><?php echo($resultat->get_scoreHard()); ?> / 40</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total</th>
                        <td><?php echo($resultat->get_scoreTotal()); ?> / 70</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <h5 class="text-center text-uppercase text-secondary mb-0 ">Cliquez sur un niveau de difficulté pour tenter d'améliorer votre score<br/>Attention : Votre score actuel sera remplacé par le nouveau</h5>
    <?php } ?>
     </header>