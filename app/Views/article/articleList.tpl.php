<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">

      
        <!-- ************************Left side************************ -->
        <div class="row " >
        <?php
              include __DIR__.'/../partials/leftside.tpl.php';
        ?>
        <!-- ************************right side************************ -->
        <aside class="right col-10 list--article--right">
                <h1 class="list--article--main--title">
                    Liste des articles
                </h1>
                <?php foreach($titleList as $title): ?>
                    <a href="<?= $router->generate('articleById', ['id' => $title->getId()]) ?>"><h2><?= $title->getTitle()?></h2></a>
                <?php endforeach; ?>

             


        </aside>







        </div>

  