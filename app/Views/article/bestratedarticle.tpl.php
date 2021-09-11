<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">

    <div class="under--navbar--picture col-12"></div>
      
        <!-- ************************welcome message************************ -->
        <div class="row " >
               <aside class="left col-10 list--article--right">
                <h1 class="list--article--main--title">
                    Les articles les mieux notés
                </h1>
                <?php foreach($bestRatedArticle as $bestArticle): ?>
                    <div class="list--article--righ--div col-12">
                    <a class="list--article--righ--a" href="<?= $router->generate('articleById', ['id' => $bestArticle->getId()]) ?>"><h2><?= $bestArticle->getTitle()?></h2></a>
                    </div>
                <?php endforeach; ?>





        </aside>