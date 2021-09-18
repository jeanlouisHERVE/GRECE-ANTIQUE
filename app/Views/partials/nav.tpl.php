<nav class="navbar navbar-dark fixed-top col-12 ">
    <div class="container navbar--container  col-12 d-flex justify-content-center align-content-center  justify-content-lg-between" ;>
        <div class="narbar-logo col-sm-12 d-flex justify-content-center align-items-center col-md-5 justify-content-md-start">
            <a class="navbar--mainlogo logo" href="#">
                <img src="<?= $absoluteUrl ?>assets/img/achillecarre.jpg" alt="" width="50px" height="50px" class="d-inline-block align-text-top achille" alt="">
                <div class="navbar--maintitle--div">
                <a class="navbar--maintitle--link ml-3" href="<?= $router->generate('main-home') ?>">grece antique</a>
                </div>
                <img src="<?= $absoluteUrl ?>assets/img/vieuxcarre.jpg" alt="" width="50px" height="50px" class="d-inline-block align-text-top vieux" alt="">
            </a>
        </div>
        <div class="navbar--menu col-12 d-flex justify-content-center align-items-center pt-0 ">
            <ul class="nav bg-primary col-12 flex-column col-md-7 flex-md-row ">
                <li class="nav-item col-12">
                    <a class="nav-link nav-link-navbar nav-item-btn1 active text-center" aria-current="page" href="<?= $router->generate('main-home') ?>">
                        Accueil
                    </a>
                </li>
                <li class="nav-item nav-item-btn nav-link--article col-12 ">
                    <a class="nav-link nav-link-navbar d-flex justify-content-center align-items-center " href="#">
                        <div><p class="m-0"> Articles </p></div>
                        <div class="arrow ml-1">►</div>
                    </a>
                <li class="nav-item col-12 text-center">
                    <a class="nav-link nav-link-navbar " href="<?= $router->generate('contact') ?>">
                        Contact
                    </a>
                </li>
                <div class="nav--connexion col-12 text-center">
                    <a class="nav-link nav-link-navbar" href="<?= $router->generate('aPropos') ?>">
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

        </ul>
    </div>
</nav>