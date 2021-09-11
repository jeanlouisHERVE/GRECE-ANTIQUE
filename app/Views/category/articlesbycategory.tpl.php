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
            <aside class="right col-10 articlesByCategory--right">
                <h1 class="articlesByCategory--main--title">Liste des articles par catégorie</h1>
                <div class="articlesByCategory--list">
                    <?php foreach ($articlesByCategory as $articleByCategory) : ?>
                            <div class="articlesByCategory--unity col-8 ">
                                <a href="<?= $router->generate('articleById', ['id' => $articleByCategory->getNumber()]) ?>" class=" btn col-12 d-flex">
                                    <span class="badge categoryBadge "><?= $articleByCategory->getCategory()->getName() ?></span>    
                                    <h2><?= $articleByCategory->getTitle() ?> </h2>
                                </a>
                            </div>
                    <?php endforeach; ?>

                </div>
            </aside>