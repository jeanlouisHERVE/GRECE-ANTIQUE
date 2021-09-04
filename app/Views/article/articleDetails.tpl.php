<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container articlePage article col-12">

        <div class="under--navbar--picture col-12"></div>

        <!-- ************************welcome message************************ -->

        <div class="col-8 article--container">

            <div class="article--entete">
                <div class="article--above--title">
                    <div class="article--category"><a href="#" class="badge badge-info">categorie</a></div>
                    <h1 class="article--main--title"><?= $articleDetails->getTitle() ?></h1>
                </div>
                <div class="article--under--title">
                    <p class="article--createdAt">Publié le : <?= $articleDetails->getCreatedAt() ?></p>
                    <p class="article--author">par <?= $articleDetails->getAuthor()->getFirstname() ?></p>
                </div>

            </div>
            <div class="article--main">
                <tr>
                    <td class="article--content"><?= $articleDetails->getContent() ?></td>
                </tr>
            </div>
        </div>