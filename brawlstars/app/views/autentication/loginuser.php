<?php
require_once("app/views/views/header.php");
require_once("app/views/views/nav.php");
?>
<style>
body  {
  background-image: url("../../IMG/back.jpg");

}
</style>
<section class="page-section portfolio masthead text-white text-center" id="portfolio">
<div class="site-branding-area">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="logo">
          <h1><a href="/"><img src="../../IMG/logo.png"  alt="brawlers"></a></h1>
        </div>
      </div>
      <div>
      </div>
  </div>    
    </div>
  </div>
</div> <!-- End site branding area -->


  <div class="container" style="color:white;">


    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" style="color:white;">Entrar</h2>
<br>


    

    <?php if (isset($data["createuser"]) && !is_null($data["createuser"])) : ?>
      <p class="sign_up_labels"><?= $data["createuser"] ?></p>
    <?php endif; ?>

    <form method="post" action="/autentication/testcredencials">
      <div class="form-group" >
        <label class="sign_up_labels" for="inputEmail" style="color:white;">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">

      </div>
<br>
      <div class="form-group">
        <label class="sign_up_labels" for="inputPassWord" style="color:white;" >Palavra-Passe</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Palavra-Passe">
      </div>
      <div class="form-group">
        <label class="text-danger" for="inputFicheiro"><?= $data["info"] ?></label>
      </div>
      <button type="submit" class="mainmenu-area1">Entrar</button>
    </form>
<br><br>
  </div>
</section>

<h4 class="copyright">Produzido por <b>Diogo Amorim</b> & <b>João Vasconcelos</b></h4>

<!-- Bootstrap core JavaScript -->
<script src="/js/jquery/jquery.min.js"></script>
<script src="/js/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/js/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="/js/jqBootstrapValidation.js"></script>
<script src="/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="/js/style.min.js"></script>

</body>

</html>