<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">


        <!-- ************************Left side************************ -->
        <div class="row ">
            <?php
            include __DIR__ . '/../partials/leftside.tpl.php';
            ?>
            <!-- ************************right side************************ -->
            <aside class="right col-10 list--article--right">
                <h1 class="list--alphabetical--main--title">
                    Liste des articles par ordre alphabetique
                </h1>
                <div class="alphabetical--order--container col-12">
                    <div class="alphabetical--order col-8">
                        <?php foreach ($alphabeticalOrder as $alphabeticalOrder) : ?>

                            <a href="<?= $router->generate('articleById', ['id' => $alphabeticalOrder->getId()]) ?>" class="btn btn-sm btn-warning">
                                <h2><?= $alphabeticalOrder->getTitle() ?></h2>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>






            </aside>







        </div>