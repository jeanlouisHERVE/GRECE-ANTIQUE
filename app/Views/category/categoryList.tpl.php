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
            
                <h1 class="list--article--main--title">
                    Liste des categories
                </h1>
            <div class="categorie--list--container col-12">   
                <div class="category--list col-8">
                    <?php foreach($categories as $categorie): ?>
                        
                        <a href="<?= $router->generate('articleByCategory', ['id' => $categorie->getId()]) ?>" class="btn btn-sm btn-warning"><h2><?= $categorie->getName()?></h2></a>
                    <?php endforeach; ?>
                </div>
            </div> 




        </aside>







        </div>

  