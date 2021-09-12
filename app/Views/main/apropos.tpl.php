<!-- ************************body************************ -->

<body class="contact--body">

  <!-- ************************header************************ -->
  <header>

  </header>

  <!-- ************************container************************ -->

  <div class="container main--container--apropos col-12 p-0 d-flex">
    <aside class="left--apropos col-6 p-5">
      <div class="text--apropos">
        <h1 class="apropos--title">A propos</h1>
        <div class="apropos--content d-flex flex-row">
          <img class="apropos--achille" src="<?= $absoluteUrl ?>assets/img/achille.jpg" alt="">
          <div class="apropos--paragraphe">
            <p>Le site "Grece Antique" est né en 2009 alors que étudiant en classe préparatoire aux grandes écoles, j'ai ressenti le besoin de transmettre ma passion au plus grand nombre. Cette première version est restée en ligne jusqu'en 2012</p>
            <p>En 2021, j'ai retrouvé les articles publiés dix ans plus tôt et j'ai décidé de rebâtir et de moderniser le site "Grece Antique". J'espère que vous l'apprécierez </p>
          </div>
        </div>
      </div>
      <a href="<?= $router->generate('article-list') ?>" class="apropos--link col-3"><button type="button" class="btn btn-outline-info">Consulter les articles</button></a>
      
    </aside>
    <aside class="right--apropos p-0 col-6">
      <div class="apropos--picture "></div>
    </aside>

  </div>