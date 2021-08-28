<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">


        <!-- ************************welcome message************************ -->
        <div class="row ">
            <?php
            include __DIR__ . '/../partials/leftside.tpl.php';
            ?>
            <aside class="left col-10 list--article--right">
                <h1 class="list--article--main--title">
                    Article n°
                </h1>


                

                <?php foreach ($articleDetails as $articleDetail) : ?>
                    <h2><?= $articleDetail->getTitle() ?></h2>
                    <tr>
                        <th scope="row"><?= $articleDetail->getId() ?></th>
                        <td><?= $articleDetail->getResume() ?></td>
                        <td><?= $articleDetail->getContent() ?></td>
                        <td><?= $articleDetail->getContent2() ?></td>
                        <td><?= $articleDetail->getContent3() ?></td>
                        <td><?= $articleDetail->getContent4() ?></td>
                        <td><?= $articleDetail->getCategory_Id() ?></td>
                        <td><?= $articleDetail->getCreated_at() ?></td>
                        <td><?= $articleDetail->getUpdated_at() ?></td>
                        <td><?= $articleDetail->getTypeId() ?></td>
                    </tr>
                <?php endforeach; ?>




            </aside>