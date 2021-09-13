<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">

        <div class="categorie--list--under--navbar--picture col-12"></div>

            <div class="right  categorie--list--right col-12">

                <h1 class="categorie--list--main--title m-0 pt-3 pl-3">
                    Liste des categories
                </h1>
                <div class="categorie--list--container col-12 ">
                    <?php foreach ($categories as $category) : ?>
                        <?php $categories ?>
                        <a href="<?= $router->generate('articlesByCategory', ['id' => $category->getId()]) ?>" class=" btn col-4 d-flex">
                            <div class="category--list--unity category--list--background--picture col-12 ">
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
            </div>







        