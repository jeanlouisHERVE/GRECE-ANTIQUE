<nav class="navbar navbar-dark fixed-top col-12 ">
    <div class="container navbar--container d-flex justify-content-between align-items-center col-12" ;>
        <div class="narbar-logo d-flex justify-content-center">
            <a class="navbar--mainlogo logo" href="#">
                <img src="" alt="" width="auto" height="100%" class="d-inline-block align-text-top" alt="">
                <a class="navbar--maintitle ml-3" href="<?= $router->generate('main-home') ?>">grece antique</a>
            </a>
        </div>
        <div class="navbar--menu d-flex justify-content-center align-items-center pt-0 ">
            <ul class="nav justify-content-center  ">
                <li class="nav-item">
                    <a class="nav-link nav-item-btn1 active" aria-current="page" href="<?= $router->generate('main-home') ?>">
                        Accueil
                    </a>
                </li>
                <li class="nav-item nav-item-btn nav-link--article ">
                    <a class="nav-link d-flex align-items-center" href="#">
                        Articles
                        <div class="arrow ml-1">►</div>
                    </a>

                <li class="nav-item">
                    <a class="nav-link " href="#">
                        Contact
                    </a>
                </li>
                <div class="nav--connexion ">
                    <a class="nav-link " href="#">
                        Connexion
                    </a>
                </div>
            </ul>
        </div>
        
    </div>

    <div class=" contenu d-none justify-content-between align-items.center col-12">
                <div class="vide"></div>
                <ul class="nav collapse--menu">
                    <li class="nav-item">
                        <a class="nav-link contenu--item" href="<?= $router->generate('article-list') ?>">
                            Liste complète
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contenu--item " href="#">
                            Liste par catégorie
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link contenu--item" href="#">
                            Les plus vus
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contenu--item" href="#">
                            Les mieux notés
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contenu--item" href="#">
                            Par ordre alphabétique
                        </a>
                    </li>

                </ul>
            </div>
</nav>
