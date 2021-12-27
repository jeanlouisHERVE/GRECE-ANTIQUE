<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="list--article--main--container col-12 d-flex flex-column justify-content-center">
        <div class="list--article--under--navbar--picture "></div>
        <div class="list--article--hfilter d-flex justify-content-center align-items-center justify-content-md-between">
            <div class="list--article--h1 col-sm-6 col-md-4">
                <h1 class="text-left">Liste des articles</h1>
            </div>
            <div class="list--article--top--menu--right col-md-4">
                <div class="btn-group btn-group-toggle " data-toggle="buttons">
                    <!-- <label class="filters filters--all btn btn-outline-primary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> A - Z
                    </label>
                    <label class="filters filters--date btn btn-outline-primary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> Date
                    </label> -->
                    <div class="filters filters--category">
                        <a class="filters__choice" href="<?= $router->generate('article-categories') ?>">Voir les catégories</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="list--article--under--picture d-flex justify-content-center col-sm-12 p-0 mt-3 col-lg-10">
            <table class="table d-flex flex-column justify-content-center col-12 p-0">
                <tbody class="col-12 p-0">
                    <?php foreach ($titleList as $title) : ?>
                        <tr class="list--article--unity d-flex justify-content-center col-12 p-0  flex-row">
                            <td class="list--article--column--category  d-none d-md-block col-2"> <span class="badge categoryBadge"><?= $title->getCategory()->getName() ?></span></td>
                            <td class="list--article--column--title col-11 col-md-8 ">
                                <a class="list--article--a" href="<?= $router->generate('articleById', ['id' => $title->getNumber()]) ?>">
                                    <h2><?= $title->getTitle() ?></h2>
                                </a>
                            </td>
                            <td class="list--article--column--date d-none d-lg-flex col-md-2">
                                <p><?= $title->getCreatedAt("d-m-Y") ?></p>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>