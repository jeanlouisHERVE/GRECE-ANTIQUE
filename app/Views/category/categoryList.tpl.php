<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">

        <div class="under--navbar--picture col-12"></div>

        <!-- ************************Left side************************ -->
        <div class="row ">
            <?php
            include __DIR__ . '/../partials/leftside.tpl.php';
            ?>
            <!-- ************************right side************************ -->
            <aside class="right col-10 list--article--right">

                <h1 class="list--article--main--title">
                    Liste des categories
                </h1>
                <div class="categorie--list--container col-12 ">
                    <?php foreach ($categories as $category) : ?>
                        <?php $categories ?>
                        <a href="<?= $router->generate('articlesByCategory', ['id' => $category->getId()]) ?>" class=" btn col-8 d-flex">
                            <div class="category--list--unity category--list--background--picture col-12 ">
                                <div class="category--list--h2">
                                    <h2 class="category--list--name"><?= $category->getName() ?></h2>
                                </div>
                                <div class="category--list--arrow">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>




            </aside>







        </div>