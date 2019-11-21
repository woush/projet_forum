<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="CrewStiant">

    <title>Liens utiles</title>

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
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Questionnaire</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php?classement=10">Classement</a>
                    </li>
                    <!--
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="pub.html">Liens</a>
                    </li>
                    -->
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
    <section id="contact">
        <div class="container pub">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="ressources/img/declic.jpg" alt="image Declic">
                <div class="card-body">
                    <h5 class="card-title">Declic</h5>
                    <p class="card-text">Vous avez entre 18 et 25 ans et vous êtes en recherche d'emploi ?
                                        Vous souhaitez essayer un nouveau métier ou en découvrir de nouveaux ?
                                        Vous souhaitez conforter votre projet professionnel avant de vous engager dans un parcours de formation ou chercher un emploi ?
                                        Le programme DECLIC POUR L'ACTION vous permet, dans votre centre Afpa de proximité, de tester des métiers grandeur nature, de réfléchir à votre projet professionnel et de gagner en confiance.</p>
                    <a href="https://www.afpa.fr/actualites/declic-pour-l-action" class="card-link">Je découvre Declic</a>
                </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="ressources/img/metis.jpg" alt="image Metisse">
                <div class="card-body">
                    <h5 class="card-title">Métis</h5>
                    <p class="card-text">Pierre angulaire de la digitalisation de l’Afpa, Métis est une  plateforme nationale, reliée au système d’information de l’Afpa. Elle intègre les guides formateurs, les livrets stagiaires et toutes les ressources pédagogiques mises à disposition par la Direction de l’ingénierie et de l’Innovation Pédagogique de l’Afpa</p>
                    <a href="https://www.afpa.fr/espace-presse/l-afpa-accelere-sa-transformation-digitale" class="card-link">Je découvre Métis</a>
                </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="" alt="image GRN168">
                <div class="card-body">
                    <h5 class="card-title">GRN 168</h5>
                    <p class="card-text">description</p>
                    <a href="#" class="card-link">lien</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="ressources/vendor/jquery/jquery.min.js"></script>
    <script src="ressources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="ressources/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="ressources/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="ressources/js/jqBootstrapValidation.js"></script>
    <script src="ressources/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="ressources/js/freelancer.min.js"></script>

</body>

</html>