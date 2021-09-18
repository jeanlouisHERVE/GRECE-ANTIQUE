<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container articlePage article col-12">

        <div class="article--under--navbar--picture col-12"></div>

        <!-- ************************welcome message************************ -->

        <div class="article--container col-12 col-md-8">

            <div class="article--entete d-flex flex-column align-content-end">
                <div class="article--above--title">
                    <div class="article--category"><a href="<?= $router->generate('articlesByCategory', ['id' => $articleDetails->getCategory_Id()]) ?>" class="badge articleBadge "><?= $articleDetails->getCategory()->getName() ?></a></div>
                    <h1 class="article--main--title"><?= $articleDetails->getTitle() ?></h1>
                </div>
                <div class="article--under--title d-flex align-content-center flex-row">
                    <p class="article--createdAt">Publié le : <?= $articleDetails->getCreatedAt("d-m-Y") ?></p>
                    <p class="article--author">par <?= $articleDetails->getAuthor()->getFirstname() ?></p>
                </div>
            </div>
            <div class="article--main">
                <tr>
                    <td class="article--content"><?= $articleDetails->getContent() ?></td>
                </tr>
            </div>
        </div>