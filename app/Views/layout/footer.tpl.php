  <!-- ************************footer************************ -->         
  
    </div>
  <!-- end of main--container -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  </body>
  <!-- end of body -->

  <footer class="footer">
      <div class="footer--empty "></div>
      <div class="footer--legal d-flex justify-content-center align-items-center ">
          <ul class="footer--li d-flex flex-column flex-md-row pt-3">
              <li class="footer--legalmentions footer--li mr-3">
                  <a class="footer--nav-link  " href="=">
                      Mentions légales
                  </a>
              </li>
              <li class="footer--confidentiality mr-3">
                  <a class="footer--nav-link  " href="=">
                      Politique de confidentialité
                  </a>
              </li>
              <li class="footer--apropos mr-3">
                  <a class="footer--nav-link  " href="<?= $router->generate('aPropos') ?>">
                      A propos
                  </a>
              </li>
              <li class="footer--informations">
                  <a class="footer--nav-link  " href="<?= $router->generate('contact') ?>">
                      Contact
                  </a>
              </li>
          </ul>
      </div>
  </footer>
