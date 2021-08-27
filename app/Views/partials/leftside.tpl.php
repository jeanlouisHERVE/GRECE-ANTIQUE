<aside class="left col-2 list--article--left">
        <ul class="nav collapse--menu ">
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
                    <li class="nav-item ">
                        <a class="nav-link contenu--item" href="<?= $router->generate('article-views') ?>">
                            Les plus vus
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contenu--item" href="<?= $router->generate('article-rates') ?>">
                            Les mieux notés
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contenu--item" href="<?= $router->generate('article-alphabetical') ?>">
                            Par ordre alphabétique
                        </a>
                    </li>

                </ul>

        </aside>
        