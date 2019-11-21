<!DOCTYPE html>
<html lang="en">
<?php include ("includes/class/questionnaire.php"); 
$quest = unserialize($_SESSION['quest']); 
$numQuest = $_SESSION['numQuest'] - 1;
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="CrewStiant">

    <title>Questionnaire AFPA</title>

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
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="chkForm/unset_quest.php">Choix de difficulté</a>
                    </li>
                    <!--
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="questionnaire.html">Questionnaire</a>
                    </li>
                    -->
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="chkForm/classement.php">Classement</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="pub.php">Liens</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="chkForm/deconnexion.php">Se Déconnecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container questionnaire">
            <h4 class="text-center text-uppercase text-secondary mb-0 ">Questionnaire <?php  echo($quest->get_diff()); ?></h4><br>
            <h3 class="text-center text-uppercase text-secondary mb-0 ">
                <?php  if ($numQuest <= 9) {
                            echo("Question ".$_SESSION['numQuest']." : ".$quest->get_question($numQuest));
                        } else {
                            header('Location: chkForm/set_score.php');
                        } 
                ?>
            </h3>
            <figure class="imageflottanteQuestion">
                <img src="
                    <?php
                        echo($quest->get_path($numQuest))
                    ?>
                " class="imageQuestion" alt="Image question">
            </figure>
            <div class="row ligneVraiFaux">
                <div class="col-lg-8 mx-auto">
                    <form name="questionnaire" id="questionnaire" novalidate="novalidate" method="post" action="chkForm/chk_reponse.php">
                        <br>
                        <div class="form-group vraiFaux">
                            <button type="submit" name="Vrai" value="Vrai" class="btn btn-xl btn-success large">VRAI</button>
                            <button type="submit" name="Faux" value="Faux" class="btn btn-xl btn-danger large">FAUX</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>