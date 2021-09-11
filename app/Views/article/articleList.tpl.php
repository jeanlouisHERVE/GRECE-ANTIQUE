<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">

    <div class="under--navbar--picture col-12"></div>
    
        <!-- ************************Left side************************ -->
        <div class="row " >
        <?php
              include __DIR__.'/../partials/leftside.tpl.php';
        ?>
        <!-- ************************right side************************ -->
        <aside class="right col-10 list--article--right">
                <h1>
                    Liste des articles
                </h1>
                <?php foreach($titleList as $title): ?>
                    <div class="list--article--righ--div col-12">
                        <div class="list--article--unity">
                            <span class="badge categoryBadge "><?= $title->getCategory()->getName() ?></span>  
                            <a class="list--article--righ--a" href="<?= $router->generate('articleById', ['id' => $title->getId()]) ?>"><h2><?= $title->getTitle()?></h2></a>
                        </div>
                    </div>
                <?php endforeach; ?>

             


        </aside>







        </div>

  