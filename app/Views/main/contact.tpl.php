<!-- ************************body************************ -->

<body class="contact--body">

  <!-- ************************header************************ -->
  <header>

  </header>

  <!-- ************************container************************ -->

  <div class="container main--container--contact col-sm-12 d-flex flex-wrap-reverse col-md-12 flex-row p-0 ">
    <aside class="left--contact col-sm-12 col-lg-6">
    <div class="left--contact--picture">

    </div>
    </aside>
    <aside class="right--contact col-sm-12 d-flex flex-column justify-content-center align-content-center col-lg-6 p-3">
        <h2 class="contact--websitetitle">
          grece antique
        </h2>
        <h1 class="contact--title">
          Contactez-nous
        </h1>
        <form class="needs-validation " novalidate>

          <div class="form-row  d-flex justify-content-between px-3">
            <div class="col-md-6 mb-3 ">
              <label for="validationCustom01">Nom</label>
              <input type="text" class="form-control contact--imput" id="validationCustom01" placeholder="First name" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Prénom</label>
              <input type="text" class="form-control contact--imput" id="validationCustom02" placeholder="Last name" value="Otto" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="validationCustomUsername">Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text contact--imput" id="inputGroupPrepend">@</span>
              </div>
              <input type="text" class="form-control contact--imput" id="validationCustomUsername" placeholder="mark.otto@gmail.com" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          <div class="form-group col-12">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control contact--imput" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form--button col-12 d-flex justify-content-center">
            <button class="btn form--button--contact mx-auto" type="submit">Envoyer</button>
          </div>
        </form>

        <?php
            if (isset($_POST['Message'])) {
              var_dump($_POST);  
              $position_arobase = strpos($_POST['Email'], '@');
                if ($position_arobase === false)
                    echo '<p>Votre email doit comporter un arobase.</p>';
                else {
                    $retour = mail('jeanlouis.herve@hotmail.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
                    if($retour)
                        echo '<p>Votre message a été envoyé.</p>';
                    else
                        echo '<p>Erreur.</p>';
                }
            }
        ?>
    </aside>








  </div>