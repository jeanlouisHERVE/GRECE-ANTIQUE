<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container articlePage article col-12">

    <div class="under--navbar--picture col-12"></div>
    
        <!-- ************************welcome message************************ -->
       
            <div class="col-6 article--container bg-primary">
                <h1 class="article--main--title">
                    <?= $articleDetails->getTitle() ?>
                </h1>
                    <tr>
                        <td class="article--content"><?= $articleDetails->getContent() ?></td>
                        <td class="article--categoryId"><?= $articleDetails->getCategory_Id() ?></td>
                        <td class="article--createdAt"><?= $articleDetails->getCreatedAt() ?></td>
                        <!-- <td class="article--updatedAt">><?= $articleDetails->getUpdatedAt() ?></td> -->
                    </tr>

            </div>
             




