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
                    Liste des articles par catégorie
                </h1>
            <div class="category--list">
            <?php foreach($categories as $categorie): ?>
                <h2><?= $categorie->getName()?></h2>
            <?php endforeach; ?>

            </div>





        </aside>







        </div>

  