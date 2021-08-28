


<!-- ************************body************************ -->

<body>

    <!-- ************************header************************ -->
    <header>

    </header>

    <!-- ************************container************************ -->

    <div class="container main--container col-12">

        <!-- ************************jumbotron************************ -->

        <div class="jumbotron jumbotron-fluid mt-4 d-flex flex-column justify-content-center col-12 ">
            <div class="container" >
                <div class="fond">
                    <h1 class="jumbotron--homeTitle display-4">Bienvenue</h1>
                    <p class="jumbotron--subTitle">La Grèce Antique accessible à tous</p>
                </div>
            </div>
        </div>
        <!-- ************************welcome message************************ -->
        <div class="row welcome--message d-flex justify-content-center align-items-center col-12">
            <div class="welcome--presentation d-flex flex-column justify-content-center col-5 mr-4" >
                <p class="welcome--presentation--text text-justify">
                    Le Monde Antique peut sembler bien loin à celui qui n’en a qu’une vision partielle. Il est vrai que pendant longtemps on l’a cru réservé à une élite. Les mentalités évoluent et l’accès à la connaissance permet actuellement à quiconque souhaite s’informer de trouver des réponses à ses questions. Vous trouverez donc sur ce site des articles personnels et clairs visant à favoriser un accès facile et ludique à ce monde passionnant.
                </p>
                <p class="welcome--thank"> 
                    Bonne lecture
                </p>
                <a href="<?= $router->generate('article-list') ?>" class="btn welcome--button btn-lg align-self-center active" role="button" aria-pressed="true">Liste des articles</a>
            </div>
           
            <aside class="right col-5 ml-4" >
                <img src="./assets/img/athens-3411147.jpg" alt="" class="right welcome--picture">
            </aside>
        </div>

        <!-- ************************favorite articles************************ -->

        <div class="row favorite-articles d-flex justify-content-around">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="card col-3">
                    <img src="./assets/img/delphi-1919203.jpg" class="card-img-top mt-3" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card--title">Card title</h5>
                        <p class="card--text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary card--link">Go somewhere</a>
                    </div>
                </div>
            <?php } ?>
        </div>


      