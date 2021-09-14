<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">

            <div class="right  categorie--list--right col-12">
                <div class="divTitle col-4">
                    <h1 class="categorie--list--main--title ">
                        Liste des categories
                    </h1>
                </div>
                <div class="categorie--list--container col-7 ">
                    <?php foreach ($categories as $category) : ?>
                        <?php $categories ?>
                        <a href="<?= $router->generate('articlesByCategory', ['id' => $category->getId()]) ?>" class=" btn d-flex col-6">
                            <div class="category--list--unity">
                                <div class="category--list--h2">
                                    <h2 class="category--list--name"><?= $category->getName() ?></h2>
                                </div>
                                <div class="category--list--arrow">
                                    <i class="fas fa-arrow-circle-right category--list--arrow--i"></i>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="vide col-1"></div>
            </div>







        