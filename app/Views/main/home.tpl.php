<!DOCTYPE html>
<html>
<head>
	<title>nom du site dans le navigateur</title>
	<link rel="icon" type="image/png" href="logo.png" /> 
	<meta charset="utf-8"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
    <link rel="stylesheet" href="./css/normalize.css">

	<!--Open Graph Required meta tags for SEO-->
	<!-- metadonnées utiles pour améliorer le référencement d'un site internet -->
	<!-- voir json.dl -->
	<!-- sitemap.xml
	robots.txt -->

	<!--Bootstrap Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS for styling and layout-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0caf0a8cc4.js" crossorigin="anonymous"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lexend:wght@300;600&display=swap" rel="stylesheet">

</head>
<body>   
    <nav class="navbar navbar-dark fixed-top  bg-primary" style="height: 100px ; ";>
        <div class="container d-flex justify-content-between col-12" style="background-color:crimson; height: 80px";>
            <div class="logo" style="background-color: coral;">
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                <a class="navbar-brand ml-3" style="text-transform: uppercase; font-family: 'Bebas Neue', cursive; font-size: xx-large ;">grece-antique</a>
            </div>
            <div class="navbar--menu d-flex justify-content-center align-items-center" style="height: 60px; background-color: yellow; font-family: 'Bebas Neue', cursive; font-size: xx-large" ;>
                <ul class="nav justify-content-center  " >
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Articles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Liste des articles</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" >Contact</a>
                    </li> 
                </ul>
            </div>
            <div class="navbar--form d-flex align-items-center" style="background-color: coral;">
                <div class="nav--search">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="nav--connexion ml-4" style="font-family: 'Bebas Neue', cursive; font-size: xx-large">
                    <a class="nav-link " href="#" >Connexion</a>
                </div>  
            </div>
         
        </div>
      </nav>
        
    <div class="container col-8" style="background: #7bc9fe; height: 100vh;">
        <div class="jumbotron" style="background-color: chartreuse;">

        </div>
           <div class="row d-flex align-items-center" style="z-index: 6;">
                <div class="presentation col-6 pt-4" style="background-color: yellowgreen; ">
                    <h1 class="homeTitle" style="font-family: 'Bebas Neue', cursive;">Bienvenue</h1>
                    <p class="websitePresentation text-justify" style="font-size: larger; font-family: 'Lexend', sans-serif;">
                        Le Monde Antique peut sembler bien loin à celui qui n’en a qu’une vision partielle. Il est vrai que pendant longtemps on l’a cru réservé à une élite intellectuelle. Les mentalités heureusement évoluent et l’accès à la connaissance, toujours facilité par les nouvelles technologies, permet actuellement à quiconque souhaite s’informer de trouver des réponses à ses questions. Seulement, pour assimiler une connaissance de manière efficace, il faut que celle-ci ait été clairement présentée. Ce site n’est donc pas une banque de données issue d’un simple recopiage d’ouvrages plus ou moins complexes ni même une association de copier/coller, non, il s’agit, à travers des articles personnels et clairs, de favoriser un accès facile et ludique à ce monde passionnant.        
                    </p>
                    <p style="font-size: larger; font-family: 'Lexend', sans-serif;"> A présent, découvrez tous la civilisation grecque de manière entièrement gratuite.</p>
                </div>
                <aside class="right col-6" style="background-color: violet;">
                    <img src="./assets/img/athens-3411147.jpg" alt="" class="right" style="width: 100%;">
                </aside>
           </div>
           
           <div class="row favorite-articles pt-5 d-flex justify-content-around">
           <?php for ($i = 0 ; $i < 3 ; $i++ ) { ?>
                <div class="card col-4 " style="width: 18rem;">
                    <img src="./assets/img/delphi-1919203.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                </div>
            <?php } ?>
           </div>

           <div class="container--copyright d-flex justify-content-center mt-5">
                 <p style="font-size: larger; font-family: 'Lexend', sans-serif;"> All rights reserved 2021</p>
           </div>
           
    </div>
    
	<script src='script.js'></script>
</body>
<footer class="footer d-flex justify-content-center mt-2" >
    <div class="footer--empty"></div>
    <div class="footer--legal " style="background-color: chartreuse;">
        <ul class=" d-flex  " style="list-style-type: none; font-family: 'Lexend', sans-serif;">
            <li class="footer--legalmentions mr-3" style="background-color: tomato;">Mentions Légales</li>
            <li class="footer--confidentiality mr-3"style="background-color: pink;">Politique de confidentialité</li>
            <li class="footer--informations"style="background-color: blue;">Informations complémentaires</li>
        </ul>
    </div>
    
</footer>