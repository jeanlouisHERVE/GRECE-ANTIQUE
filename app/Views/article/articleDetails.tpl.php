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
                <h1 class="article--main--title">
                    <?= $articleDetails->getTitle() ?>
                </h1>
                <div class="row">
                    <p class="article--authorId"><?= $articleDetails->getAuthor_Id() ?></p>
                    <p class="article--createdAt"><?= $articleDetails->getCreatedAt() ?></p>
                    <p class="article--author"><?= $articleDetails->getAuthor()->getFirstname() ?></p>
                </div>
                </div>
                    <tr>
                        <td class="article--content"><?= $articleDetails->getContent() ?></td>
                        <td class="article--categoryId"><?= $articleDetails->getCategory_Id() ?></td>
                        <td class="article--createdAt"><?= $articleDetails->getCreatedAt() ?></td>
                        <!-- <td class="article--updatedAt">><?= $articleDetails->getUpdatedAt() ?></td> -->
                    </tr>

            </div>
             




