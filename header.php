<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<header class="container">
    <div class="row d-flex justify-content-between align-items-center">
        <img src="http://pro-dev.fr/www/b-a-m/wp-content/uploads/2020/06/Bienvenue-au-monde-Logo-HD-Copie.jpg" alt="">
        <h1 class="title">Bienvenue au monde</h1>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light">  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="menu navbar-nav nav justify-content-center">
                <li class="menu-item nav-item mx-5">
                  <a class="nav-link active" href="index.php">Accueil</a>
                </li>
                <li class="menu-item nav-item mx-5">
                  <a class="nav-link" href="index.php/a-propos">A Propos</a>
                </li>
                <li class="menu-item nav-item mx-5">
                  <a class="nav-link" href="index.php/#galerie">Galerie</a>
                </li>
                <li class="menu-item nav-item mx-5">
                  <a class="nav-link" href="index.php/contact">Contact</a>
                </li>
            </ul>
            <!-- <?php wp_nav_menu();?> -->
        </div>
        
    </nav>