<?php
require_once("app/views/views/header.php");
require_once("app/views/views/nav.php");

      error_reporting(0);
   
?>

<style>
.body1  {
  background-image: url("../../IMG/back.jpg");

}
</style>
<section class="page-section portfolio masthead text-white text-center" id="portfolio">


  <div class="site-branding-area">
 
    <div class="row">
      <div class="col-12 text-center">
        <div class="logo">
          <h1><a href="/"><img src="../../IMG/logo.png"  alt="brawlers"></a></h1>
        </div>
      </div>
      <div>
      </div>
  </div>
     
  

    <!-- Portfolio Section Heading -->
    

    <label class="text-danger" for="inputFicheiro"><?= $data['brawler']["info"] ?></label>
   
    <div class="btn-group">
    <?php foreach ($data["brawlers"] as $brawler) :  ?>
      <form action="/brawler/DeleteBrawler" method="post">
          <input type="hidden" name="brawler_id" value="<?= $brawler['id'] ?>">
          <button type="submit" class="edit-area">Remover Brawler</button>
        </form>
        <br>
        <form action="/brawler/update" method="post">
          <input type="hidden" name="brawler_id" value="<?= $brawler['id'] ?>">
          <button type="submit" class="edit-area1">Editar Brawler</button>
        </form>
        </div>
      <h2 class="big-title1">
        <?php echo $brawler['name'] ;?>
      </h2>
    <?php ?>

    
    <div class="body1 ">
    <body>


 

    <div class="col-sm-12">
         <div class="brawler-main-img">
           <img class="img-fluid mb-4" width="450px" src="<?= "/assets/" . $brawler['img'] ?>" alt="">
        
         </div>
       

      </div><!--- col-sm-12 END --> 



     

       <div class="col-sm-12">
       <div class="brawler-inner-price">
        <img src="../../IMG/ICONS_BRAWL/Lone-Star.png" class="stats-ico" >
          <span style="color:white;" >Nome: </span><ins style="color:white;"><?php echo $brawler['name']; ?></ins>
        </div>

        <div class="brawler-inner-price">
        <img src="../../IMG/ICONS_BRAWL/star-logo.png" class="stats-ico">
          <span style="color:white;">Raridade: </span><ins style="color:white;"><?php echo $brawler['rarity']; ?></ins>
        </div>

        <div class="brawler-inner-price">
        <img src="../../IMG/ICONS_BRAWL/trophy.png" class="stats-ico">
          <span style="color:white;">Tipo: </span><ins style="color:white;"><?php echo $brawler['style']; ?></ins>
        </div>
      
    

        <!--- prod-infos -->
        <ul class="prod-infos">


          <li>
          <img src="../../IMG/ICONS_BRAWL/Health.png" class="stats-ico">
            <h4 class="infos">Vida: </h4>
             <span style="color:white;" class="infos-value"><?php echo $brawler['health']; ?></span>
          </li>

          <li>
          <img src="../../IMG/ICONS_BRAWL/Super.png" class="stats-ico">
            <h4 class="infos">SUPER: </h4>
             <span style="color:white;" class="infos-value"><?php echo $brawler['super']; ?></span>
          </li>

          <li>
          <img src="../../IMG/ICONS_BRAWL/Info.png" class="stats-ico">
            <h4 class="infos">Duração de SUPER: </h4>
             <span style="color:white;" class="infos-value"><?php echo $brawler['length']; ?> ms</span>
          </li>

          <li>
          <img src="../../IMG/ICONS_BRAWL/ReloadTime.png" class="stats-ico">
            <h4 class="infos">Velocidade de Recarga: </h4>
             <span style="color:white;" class="infos-value"><?php echo $brawler['rld_spd']; ?> ms</span>
          </li>

          <li>
          <img src="../../IMG/ICONS_BRAWL/Damage-Blue.png" class="stats-ico">
            <h4 class="infos">Velocidade de Ataque: </h4>
             <span style="color:white;" class="infos-value"><?php echo $brawler['atk_spd']; ?> ms</span>
          </li>

          <li>
          <img src="../../IMG/ICONS_BRAWL/Speed.png" class="stats-ico">
            <h4 class="infos">Velocidade: </h4>
             <span style="color:white;" class="infos-value"><?php echo $brawler['spd']; ?></span>
          </li>

          <li>
          <img src="../../IMG/ICONS_BRAWL/Range.png" class="stats-ico">
            <h4 class="infos">Raio de ataque: </h4>
             <span style="color:white;" class="infos-value"><?php echo $brawler['atk_rg']; ?></span>
          </li>
          <li>
          <img src="../../IMG/ICONS_BRAWL/Damage.png" class="stats-ico">
            <h4 class="infos">Dano: </h4>
             <span style="color:white;" class="infos-value"><?php echo $brawler['damage']; ?></span>
          </li>

        </ul> <!--- prod-infos END -->
          
      </div><!--- col-sm-6 END --> 

     
      <?php endforeach; ?>

     <br>
      </div>

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