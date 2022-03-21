<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmaFanZone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Merriweather+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Comforter&family=Hurricane&family=Oswald:wght@400;500;700&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" integrity="sha384-3fdgwJw17Bi87e1QQ4fsLn4rUFqWw//KU0g8TvV6quvahISRewev6/EocKNuJmEw" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="<?= $absoluteUrl ?>/assets/css/style.css">
</head>
<body >
    <header class="container-fluid" id="header">
        <div class="row">
            <div class="logo col-4">
                <a href="<?= $_SERVER['BASE_URI'] ?>">
                    <img class="img-fluid rounded-circle" src="<?= $absoluteUrl ?>/assets/docs/logo-panier-achat-ligne-conception-panier-achat_460848-10303.webp" alt="logo du site">
                </a>
            </div>
            <div class="dropdown d-lg-none col-4 pt-2">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="<?= $_SERVER['BASE_URI'] ?>/">Accueil</a></li>
                  <li><a class="dropdown-item" href="<?= $_SERVER['BASE_URI'] ?>/categories">Catégories</a></li>
                  <li><a class="dropdown-item" href="<?= $_SERVER['BASE_URI'] ?>/bestof">Meilleures ventes</a></li>
                  <li><a class="dropdown-item" href="<?= $_SERVER['BASE_URI'] ?>/nouveautes">Nouveautés</a></li>
                </ul>
            </div>
            <div class="col-4  d-none d-lg-block">
    ²            <nav class="navbar navbar-expand-md"> 
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?= $_SERVER['BASE_URI'] ?>/"">Accueil</a>
                        <a class="navbar-brand" href="<?= $_SERVER['BASE_URI'] ?>/categories">Catégories</a>
                        <a class="navbar-brand" href="<?= $_SERVER['BASE_URI'] ?>/bestof"">Meilleures ventes</a>
                        <a class="navbar-brand" href="<?= $_SERVER['BASE_URI'] ?>/news"">Nouveautés</a>
                    </div>            
                </nav>
            </div>
           
            <div class="col-4 connect-cart pr-0">
                <button class="btn connect-button"><a href="./form.html">Sign in</a></button>
                <a href="" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewbox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                      </svg>
                </a>
            </div>
        </div>
        
       
    </header>

    <main class="container-fluid">
        <h1 class="text-center">AmaFanZone</h1>