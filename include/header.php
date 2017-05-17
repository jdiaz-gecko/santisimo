<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Santisimo Downhill | Inicio</title>
    <meta name="description" content="
La mejor accion de MTB llega por octavo año al Valle Sagrado de los Incas, Cusco. Descubre el paraiso que dejaron los Incas para los bikers. Con mucho esfuerzo, esto es Santísimo Downhill.">
    <meta name="keywords" content="Downhill, Bikes, MTB, Peru">
    <meta name="author" content="gecko-btl.com">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- ==============================================
    CSS
    =============================================== -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">


    <!-- ==============================================
    Google Fonts
    =============================================== -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script>
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        ?>
    </script>
</head>

<body>

<!-- Load page -->
<div class="animationload">
    <div class="loader"></div>
</div>

<!-- NAVBAR SECTION -->
<div class="navbar navbar-main navbar-fixed-top">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-12">
                    <div class="top-sosmed pull-right">
                        <a href="#" title=""><span class="fa fa-facebook"></span></a>
                        <a href="#" title=""><span class="fa fa-twitter"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Enduro Del Inka" /></a>

        </div>
        <nav class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">


                <li class="<?php if ($current_page == "index.php"){ echo "active "; }?>"><a href="index.php">INICIO</a></li>
                <li class="<?php if ($current_page == "evento.php"){ echo "active "; }?>"><a href="evento.php">EVENTO</a></li>
                <li class="<?php if ($current_page == "galeria.php"){ echo "active "; }?>"><a href="galeria.php">GALERÍA</a></li>
                <li class="<?php if ($current_page == "noticias.php" || $current_page == "news-single.php" || $current_page == "news-single2.php"|| $current_page == "news-single3.php" || $current_page == "news-single4.php"){ echo "active "; }?>"><a href="noticias.php">NOTICIAS</a></li>
                <li class="<?php if ($current_page == "resultados.php"){ echo "active "; }?>"><a href="resultados.php">RESULTADOS</a></li>
                <li class="<?php if ($current_page == "auspiciadores.php"){ echo "active "; }?>"><a href="auspiciadores.php">AUSPICIADORES</a></li>

            </ul>
        </nav>
    </div>
</div>