<?php
require_once("app/views/views/header.php");
require_once("app/views/views/nav.php");

?>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>

</html>
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<?php include_once('slider.php'); ?>
<section class="page-section portfolio masthead text-white text-center" id="portfolio">

<h2 class="big-title">Brawlers</h2>
  <div class="container">
  
    <!-- Portfolio Grid Items -->
    <div class="row">
  
      <!-- Portfolio Item 1 -->
      <?php foreach ($data["brawlers"] as $brawler) :  ?>
        <div class="col-xl-3">
          <a href="<?= "/brawler/get/" . $brawler['id'] ?>">
            <div class="portfolio-item mx-auto" style="height: 100%" data-toggle="modal" data-target="#portfolioModal1">
              
              <img class="img-fluid" style="height: 70%" src="<?= "/assets/" . $brawler['img'] ?>" alt="">

              <h2>
                 
                  <img src="../../IMG/ICONS_BRAWL/Lone-Star.png" class="stats-ico">

                   <?php echo $brawler['name']; ?>
                  
                   </h2>

                
              <h>
                 
                 <img src="../../IMG/ICONS_BRAWL/star-logo.png" class="stats-ico">

                  <?php echo $brawler['rarity']; ?>
                 
                  </h>


            </div>
          </a>
        </div>
      <?php endforeach; ?>

    </div>
    <!-- /.row -->
    <br><br>
  </div>

</section>

<h4 class="copyright">Produzido por <b>Diogo Amorim</b> & <b>João Vasconcelos</b></h4>
<script src="../../js/jquery.js"></script>

  <script src="../../js/owl.carousel.min.js"></script>

  <script src="../../js/main.js"></script>
<script type="text/javascript" src="../../js/bxslider.min.js"></script>
  <script type="text/javascript" src="../../js/script.slider.js"></script>
