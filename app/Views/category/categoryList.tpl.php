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
            <div class="categorie--list--container col-12 bg-primary">   
                    <?php foreach($categories as $category): ?>
                        <div class="category--list--unity col-8 ">
                            <a href="<?= $router->generate('articlesByCategory', ['id' => $category->getId()]) ?>" class=" btn col-12 d-flex">
                                <h2><?= $category->getName()?></h2>  
                            </a>
                            <div class="category--list--arrow">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>        
                        </div>    
                    <?php endforeach; ?>
            </div> 




        </aside>







        </div>

  