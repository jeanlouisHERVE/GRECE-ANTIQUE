<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container category--list--main--container col-12 p-0">

            <div class="right  category--list--right col-12 d-flex flex-row align-items-between">
                <div class="divTitle col-12 col-md-11 col-lg-5 ">
                    <h1 class="category--list--main--title ">
                        Liste des categories
                    </h1>
                    <div class="category--list-container d-flex flex-column">
                        <?php foreach ($categories as $category) : ?>
                            <?php $categories ?>
                            <a href="<?= $router->generate('articlesByCategory', ['id' => $category->getId()]) ?>" class=" btn d-flex col-10">
                                <div class="category--list--unity d-flex flex-row justify-content-between align-items-center">
                                    <div class="category--list--h2">
                                        <h2 class="category--list--name"><?= $category->getName() ?></h2>
                                    </div>
                                    <div class="category--list--arrow d-sm-none d-md-flex justify-content-center align-items-center">
                                        <i class="fas fa-chevron-right category--list--arrow--i"></i>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="vide p-0 col-md-1 col-lg-7"></div>
            </div>







        