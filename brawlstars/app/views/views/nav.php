
<body id="page-top">

 
    <nav class="navbar navbar-expand-lg bg-secondary " id="mainNav">
        <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="/" >
        <img src="../../IMG/Brawl_Stars_logo.png" >
  
        </a>  
            <button class="navbar-toggler navbar-toggler-right  font-weight-bold yellow text-white " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                <i class="box-shadow-menu"></i>
            </button>



            <div class="mainmenu-area" id="navbarResponsive">
                

                <ul class="navbar-nav ml-auto">

                    <?php if (isAuthenticated()) : ?>

                        <div class="d-md-none">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger" href="/brawler/about">Sobre</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger" href="/brawler/createBrawler">Criar Brawler</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger" href="/autentication/outsession">Sair</a>
                        </li>
                        </div>
                            
                        <li  class="d-none d-md-block">
                            <a class="mainmenu-area" href="/brawler/about">Sobre</a>
                        </li>
                        <li  class="d-none d-md-block">
                            <a class="mainmenu-area" href="/brawler/createBrawler">Criar Brawler</a>
                        </li>
                       
                        <li class="d-none d-md-block">
                            <a class="mainmenu-area" href="/autentication/outsession">Sair</a>
                        </li>
                        </div>


                    <?php endif ?>

                    <?php if (!isAuthenticated()) : ?>

                        <div class="d-md-none">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger" href="/autentication/about">Sobre</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger" href="/autentication/loginuser">Iniciar Sessão</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3  js-scroll-trigger" href="../autentication">Cria uma conta</a>
                        </li>
                        </div>
                        <li  class="d-none d-md-block">
                            <a class="mainmenu-area" href="/autentication/about">Sobre</a>
                        </li>
                        <li class="d-none d-md-block">
                            <a class="mainmenu-area" href="/autentication/loginuser">Iniciar Sessão</a>
                        </li>

                        <li class="d-none d-md-block">
                            <a class="mainmenu-area" href="../autentication">Cria uma conta</a>
                        </li>
            

                    <?php endif ?>


                </ul>
            </div>
            
        </div>
        
    </nav>
    
