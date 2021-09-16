<!-- ************************body************************ -->

<body class="contact--body">

  <!-- ************************header************************ -->
  <header>

  </header>

  <!-- ************************container************************ -->

  <div class="container main--container--apropos col-sm-12 p-0 d-flex flex-wrap col-lg-12 flex-row">
    <aside class="left--apropos col-sm-12 d-flex flex-column justify-content-center p-5 col-lg-6 ">
      <div class="text--apropos">
        <h1 class="apropos--title">A propos</h1>
        <div class="apropos--content d-flex flex-row align-items-center">
          <img class="apropos--achille d-none d-md-block " src="<?= $absoluteUrl ?>assets/img/achille.jpg" alt="">
          <div class="apropos--paragraphe">
            <p>Le site "Grece Antique" est né en 2009 alors que étudiant en classe préparatoire aux grandes écoles, j'ai eu beaucoup de plaisir à transmettre ma passion au plus grand nombre. Cette première version est restée en ligne jusqu'en 2012</p>
            <p>En 2021, j'ai retrouvé les articles publiés dix ans auparavant et j'ai décidé de rebâtir et de moderniser le site "Grece Antique".  </p>
            <p>J'espère que vous l'apprécierez.</p>
          </div>
        </div>
      </div>
      <a href="<?= $router->generate('article-list') ?>" class="apropos--link col-3"><button type="button" class="btn btn-outline-dark">Bonne visite</button></a>
      
    </aside>
    <aside class="right--apropos col-sm-12 p-0 col-lg-6">
      <div class="apropos--picture "></div>
    </aside>

  </div>