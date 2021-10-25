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


  <div class="container">

    <!-- Portfolio Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"  >Editar Brawler</h2>



    <br>
    <form action="/brawler/updateBrawler/<?= $data['brawler'][0]['id'] ?>" method="post" enctype="multipart/form-data">
    <label class="text-danger" for="inputFicheiro"><?= $data['brawler']["info"] ?></label>
      <div class="form-group">
        <label class="text-green" for="exampleFormControlInput1" style="color:white;" >Nome:</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="<?= $data['brawler'][0]['name'] ?>">
      </div>
      <div class="form-group">
        <label class="text-green" for="exampleFormControlInput1" style="color:white;">Raridade:</label>
        <input type="text" name="rarity" class="form-control" id="exampleFormControlInput1" value="<?= $data['brawler'][0]['rarity'] ?>">
      </div>
      <div class="form-group">
        <label class="text-green" for="exampleFormControlInput1" style="color:white;">Tipo:</label>
        <input type="text" name="style" class="form-control" id="exampleFormControlInput1" value="<?= $data['brawler'][0]['style'] ?>">
      </div>
      <div class="form-group">
        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Vida:</label>
        <input type="number" name="health" class="form-control" id="exampleFormControlInput1" value='<?= $data['brawler'][0]['health'] ?>'>

        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">SUPER:</label>
        <input type="number" name="super" class="form-control" id="exampleFormControlInput1" value='<?= $data['brawler'][0]['super'] ?>'>

        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Duração de SUPER:</label>
        <input type="number" name="length" class="form-control" id="exampleFormControlInput1" value='<?= $data['brawler'][0]['length'] ?>'>

        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Velocidade de Recarga:</label>
        <input type="number" name="rld_spd" class="form-control" id="exampleFormControlInput1" value='<?= $data['brawler'][0]['rld_spd'] ?>'>

        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Velocidade de Ataque:</label>
        <input type="number" name="atk_spd" class="form-control" id="exampleFormControlInput1" value='<?= $data['brawler'][0]['atk_spd'] ?>'>

        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Velocidade:</label>
        <input type="number" step=0.01 name="spd" class="form-control" id="exampleFormControlInput1" value='<?= $data['brawler'][0]['spd'] ?>'>

        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Raio de ataque:</label>
        <input type="number"  step=0.01 name="atk_rg" class="form-control" id="exampleFormControlInput1" value='<?= $data['brawler'][0]['atk_rg'] ?>'>

        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Dano:</label>
        <input type="number" name="damage" class="form-control" id="exampleFormControlInput1" value='<?= $data['brawler'][0]['damage'] ?>'>
      </div>

      <div class="form-group">
        <label class="text-green" for="inputFicheiro" style="color:white;">Selecione o Ficheiro </label>
        <input type="File" name="imagem" class="form-control" id="ficheiro" placeholder="600">
        <p class="help-block" style="color:#ccc;">Apenas arquivos .jpg/.png de até 1MB.</p>
        <label class="text-danger" for="inputFicheiro"><?= $data['brawler']["info"] ?></label>
      </div>
      <button class="mainmenu-area1" type="submit">Save</button>
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
