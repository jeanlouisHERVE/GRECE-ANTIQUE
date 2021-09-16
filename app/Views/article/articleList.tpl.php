<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="list--article--main--container col-12 ">
        <div class="list--article--under--navbar--picture col-12"></div>
        <div class="list--article--hfilter col-12 flex-sm-column juustify-content-center align-items-center justify-content-center">
            <div class="list--article--h1 mr-0 col-sm-12">
                <h1 class=" col-sm-12 text-center">Liste des articles</h1>
            </div>
            <div class="list--article--top--menu--right flex-sm-row col-12 justify-content-center align-self-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="filters filters--all btn btn-outline-primary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> A - Z
                    </label>
                    <label class="filters filters--date btn btn-outline-primary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> Date
                    </label>
                    <div class="filters filters--category">
                        <a class="filters__choice" href="<?= $router->generate('article-categories') ?>">Voir les catégories</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="list--article--under--picture d-flex justify-content-center">
            <table class="table d-flex flex-column justify-content-center col-12 p-0">
                <tbody class="col-12">
                    <?php foreach ($titleList as $title) : ?>
                        <tr class="list--article--unity d-flex justify-content-center col-12 flex-row">
                            <td class="list--article--column--category col-1"> <span class="badge categoryBadge "><?= $title->getCategory()->getName() ?></span></td>
                            <td class="list--article--column--title col-8">
                                <a class="list--article--a" href="<?= $router->generate('articleById', ['id' => $title->getNumber()]) ?>">
                                    <h2><?= $title->getTitle() ?></h2>
                                </a>
                            </td>
                            <td class="list--article--column--date d-sm-none">
                                <p><?= $title->getCreatedAt("d-m-Y") ?></p>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>