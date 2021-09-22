<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light pr-3 pl-3">
  <a class="navbar-brand" href="#">Grece Antique</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse bg-light " id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?= $router->generate('main-home') ?>">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $router->generate('article-list') ?>">Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $router->generate('article-categories') ?>">Catégories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $router->generate('aPropos') ?>">A propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $router->generate('contact') ?>">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" >
      <input class="form-control mr-sm-2 form--input" type="search" placeholder="Rechercher un article" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0 form--button" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>


<!-- <nav class="navbar navbar-dark fixed-top col-12 ">
    <div class="container navbar--container  col-12 d-flex justify-content-center align-content-center flex-md-row justify-content-lg-between" ;>
        <div class="narbar-logo col-sm-12 d-flex justify-content-center align-items-center col-md-4 justify-content-md-start">
            <a class="navbar--mainlogo logo" href="#">
                <img src="<?= $absoluteUrl ?>assets/img/achillecarre.jpg" alt="" width="50px" height="50px" class="d-inline-block align-text-top achille" alt="">
                <div class="navbar--maintitle--div">
                <a class="navbar--maintitle--link ml-3" href="<?= $router->generate('main-home') ?>">grece antique</a>
                </div>
                <img src="<?= $absoluteUrl ?>assets/img/vieuxcarre.jpg" alt="" width="50px" height="50px" class="d-inline-block align-text-top vieux" alt="">
            </a>
        </div>
        <div class="navbar--menu col-12 d-flex justify-content-center align-items-center pt-0 col-md-8 col-lg-6">
            <ul class="nav col-12 flex-column flex-md-row justify-content-md-end">
                <li class="nav-item col-12 col-md-3 ">
                    <a class="nav-link nav-link-navbar nav-item-btn1 active text-center" aria-current="page" href="<?= $router->generate('main-home') ?>">
                        Accueil
                    </a>
                </li>
                <li class="nav-item nav-item-btn nav-link--article col-12 col-md-3  ">
                    <a class="nav-link nav-link-navbar d-flex justify-content-center align-items-center " href="#">
                        <div><p class="m-0"> Articles </p></div>
                        <i class="fas fa-chevron-right arrow ml-3"></i>
                    </a>
                <li class="nav-item col-12 text-center col-md-2 ">
                    <a class="nav-link nav-link-navbar " href="<?= $router->generate('contact') ?>">
                        Contact
                    </a>
                </li>
                <div class="nav--connexion col-12 p-0 text-center col-md-4 ">
                    <a class="nav-link nav-link-navbar " href="<?= $router->generate('aPropos') ?>">
                        A propos
                    </a>
                </div>
            </ul>
        </div>

    </div>

    <div class=" contenu d-none justify-content-between align-items-center col-12">
        <div class="vide"></div>
        <ul class="nav collapse--menu">
            <li class="nav-item">
                <a class="nav-link contenu--item" href="<?= $router->generate('article-list') ?>">
                    Liste complète
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link contenu--item " href="<?= $router->generate('article-categories') ?>">
                    Liste par catégorie
                </a>
            </li>
            <!-- <li class="nav-item ">
                <a class="nav-link contenu--item" href="<?= $router->generate('article-views') ?>">
                    Les plus vus
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link contenu--item" href="<?= $router->generate('article-rates') ?>">
                    Les mieux notés
                </a>
            </li> -->
<!-- <li class="nav-item">
                <a class="nav-link contenu--item" href="<?= $router->generate('article-alphabetical') ?>">
                    Par ordre alphabétique
                </a>
            </li> -->

<!-- </ul>
    </div>
</nav> -->