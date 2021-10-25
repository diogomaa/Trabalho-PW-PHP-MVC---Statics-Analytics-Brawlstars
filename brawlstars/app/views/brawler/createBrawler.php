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
  
    <br>
    <br>

 

    <!-- Portfolio Grid Items -->

    <form action="/brawler/creatBrawler" method="post" enctype="multipart/form-data">
    <label class="text-danger" for="inputFicheiro"><?= $data['brawler']["info"] ?></label>
    <div class="form-group">
        <label class="text-green" for="exampleFormControlInput1" style="color:white;" >ID:</label>
        <input type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Insira ID">
      </div>
      <div class="form-group">
        <label class="text-green" for="exampleFormControlInput1" style="color:white;" >Nome:</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Insira Nome">
      </div>

      <div class="form-group">
        <label class="text-green" for="exampleFormControlInput1" style="color:white;" >Raridade: </label>
        <input type="text" name="rarity" class="form-control" id="exampleFormControlInput1" placeholder="Insira Raridade">
      </div>

      <div class="form-group">
        <label class="text-green" for="exampleFormControlInput1" style="color:white;" >Tipo: </label>
        <input type="text" name="style" class="form-control" id="exampleFormControlInput1" placeholder="Insira Tipo">
      </div>



      <div class="form-group">
        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Vida:</label>
        <input type="number" name="health" class="form-control" id="exampleFormControlInput1" placeholder="Insira Vida">

        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">SUPER:</label>
        <input type="number" name="super" class="form-control" id="exampleFormControlInput1" placeholder="Insira SUPER">

        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Duração de SUPER:</label>
        <input type="number" name="length" class="form-control" id="exampleFormControlInput1" placeholder="Insira Duração de SUPER">
        
        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Velocidade de Recarga:</label>
        <input type="number" name="rld_spd" class="form-control" id="exampleFormControlInput1" placeholder="Insira Velocidade de Recarga">
        
        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Velocidade de Ataque:</label>
        <input type="number" name="atk_spd" class="form-control" id="exampleFormControlInput1" placeholder="Insira Velocidade de Ataque">
        
        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Velocidade: </label>
        <input type="number" step=0.01 name="spd" class="form-control" id="exampleFormControlInput1" placeholder="Insira Velocidade">
        
        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Raio de ataque: </label>
        <input type="number" step=0.01 name="atk_rg" class="form-control" id="exampleFormControlInput1" placeholder="Insira Raio de ataque">
        
        <label class="text-green" for="exampleFormControlTextarea1" style="color:white;">Dano:</label>
        <input type="number" name="damage" class="form-control" id="exampleFormControlInput1" placeholder="Insira Dano">
      
      </div>

      <div class="form-group">
        <label class="text-green" for="inputFicheiro" style="color:white;">Selecione o Ficheiro </label>
        <input type="File" name="imagem" class="form-control" id="ficheiro" placeholder="600">
        <p class="help-block" style="color:#ccc;">Apenas arquivos .jpg/.png de até 1MB.</p>
        <label class="text-danger" for="inputFicheiro"><?= $data['brawler']["info"] ?></label>
        
      </div>
      <button class="mainmenu-area1" type="submit" style="color:white;">Save</button>
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