<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">

        <div class="articlesByCategory--under--navbar--picture col-12"></div>

       
            <!-- ************************main part************************ -->
            <div class="articlesByCategory--main col-12 p-0">
                <h1 class="articlesByCategory--main--title">Liste par catégorie</h1>
                <div class="articlesByCategory--list p-0">
                <table class="articlesByCategory--table table d-flex p-0 flex-column justify-content-center align-items-center col-12">
                <tbody class="articlesByCategory--tbody col-12 p-0">
                    <?php foreach ($articlesByCategory as $articleByCategory) : ?>
                        <tr class="articlesByCategory--unity d-flex justify-content-center col-12 p-0">   
                            <td class="articlesByCategory--column--category d-md-flex justify-content-start col-2"> <span class="badge categoryBadge"><?= $articleByCategory->getCategory()->getName() ?></span></td>
                            <td class="articlesByCategory--column--title d-flex justify-content-start align-items-center col-10 col-md-8">
                                <a class="list--article--a" href="<?= $router->generate('articleById', ['id' => $articleByCategory->getNumber()]) ?>">
                                    <h2><?= $articleByCategory->getTitle() ?></h2>
                                </a>
                            </td >  
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>