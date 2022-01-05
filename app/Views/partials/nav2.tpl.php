<div class="nav-container">
  <nav class="navbar">
    <div class="navbar--title--container">
      <img src="<?= $absoluteUrl ?>assets/img/achillecarre.jpg" alt="" width="50px" height="50px" class="d-inline-block align-text-top achille" alt=""> 
      <a href="<?= $router->generate('main-home') ?>"><h1 id="navbar-logo">GreceAntique.fr</h1></a>
      <img src="<?= $absoluteUrl ?>assets/img/vieuxcarre.jpg" alt="" width="50px" height="50px" class="d-inline-block align-text-top vieux" alt="">
    </div>
    <div class="menu-toggle" id="mobile-menu">  
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    <ul class="nav-menu">
      <li><a href="<?= $router->generate('main-home') ?>" class="nav-links">Home</a></li>
      <li><a href="<?= $router->generate('article-list') ?>" class="nav-links">Articles</a></li>
      <li><a href="<?= $router->generate('article-categories') ?>" class="nav-links">Categories</a></li>
      <li><a href="<?= $router->generate('contact') ?>" class="nav-links">Contact</a></li>
      <li><a href="#" class="nav-links nav-links-btn">Connexion</a></li>
    </ul>
  </nav>
</div>
