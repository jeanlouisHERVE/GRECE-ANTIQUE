<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12 ">

        <!-- ************************jumbotron************************ -->

        <div class=" d-none d-md-block col-12 jumbotron jumbotron-fluid mb-0 mt-4 ">
            <div class="container">
                <div class="fond">

                </div>
            </div>
        </div>
        <!-- ************************welcome message************************ -->
        <div class="row welcome--message col-sm-12 d-flex flex-column-reverse p-0 col-md-12 flex-row col-lg-12 flex-lg-row justify-content-around pt-4 pb-4 align-items-center  ">
            <div class="welcome--presentation d-flex flex-column justify-content-center col-sm-12 col-lg-5 ">
                <p class="welcome--presentation--text text-justify col-sm-12 p-0 pt-4 col-md-12">
                    Le Monde Antique peut sembler bien loin à celui qui n’en a qu’une vision partielle. Il est vrai que pendant longtemps on l’a cru réservé à une élite. Les mentalités évoluent et l’accès à la connaissance permet actuellement à quiconque souhaite s’informer de trouver des réponses à ses questions. Vous trouverez donc sur ce site des articles personnels et clairs visant à favoriser un accès facile et ludique à ce monde passionnant.
                </p>
                <p class="welcome--thank">
                    Bonne lecture
                </p>
                <a href="<?= $router->generate('article-list') ?>" class="btn welcome--button btn-lg col-sm-12 align-self-center active mb-4 col-md-8 col-lg-6" role="button" aria-pressed="true">Liste des articles</a>
            </div>
            <div class="welcome--picture col-sm-12 m-0 p-0 d-md-none col-lg-5 d-lg-block ">
             
            </div>
        </div>

      
