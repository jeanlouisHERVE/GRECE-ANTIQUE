<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">

        <div class="articlesByCategory--under--navbar--picture col-12"></div>

       
            <!-- ************************main part************************ -->
            <div class="articlesByCategory--main col-12 ">
                <h1 class="articlesByCategory--main--title">Liste des articles par catégorie</h1>
                <div class="articlesByCategory--list">
                <table class="articlesByCategory--table table d-flex flex-column justify-content-center align-items-center col-11">
                <tbody class="col-12">
                    <?php foreach ($articlesByCategory as $articleByCategory) : ?>
                        <tr class="articlesByCategory--unity d-flex justify-content-center col-12 ">
                            
                            <td class="articlesByCategory--column--category col-1"> <span class="badge categoryBadge "><?= $articleByCategory->getCategory()->getName() ?></span></td>
                            <td class="articlesByCategory--column--title col-8"><a class="list--article--a" href="<?= $router->generate('articleById', ['id' => $articleByCategory->getNumber()]) ?>">
                                    <h2><?= $articleByCategory->getTitle() ?></h2>
                                </a>
                            </td >  
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>