<?php require_once ("includes/templates/header.php");?>
  <!-- ================ end header Area ================= -->  
  
  <main class="site-main">
    
    <!-- ================  Hero banner ================= -->    
    <section class="hero-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="hero-banner__img">
              <img class="img-fluid" src="<?php  $BASE_URL ?>./assets/img/banner/<?php echo $imagem['hero-banner'] ?>" alt="Banner fixo no topo do site">
            </div>
          </div>
          <div class="col-md-6 pl-xl-4">
            <div class="hero-banner__content">
              <h1>Seu Cabelo, Sua Barba, Seu Estilo.</h1>
              <p>Meu nome é Vinícius Correia, eu sou sócio-fundador da Vina´s Barber House. Eu sempre gostei de ambientes que me fizessem sentir bem, e é exatamente isso que queremos proporcionar ao nosso cliente, um ambiente onde ele se sinta confortável e entre amigos.</p>
              <button class="button button-hero"><i class="fab fa-whatsapp"></i> Quero Agendar Agora </button>
              <img src="<?php $BASE_URL ?>./assets/img/<?php echo $imagem['assinatura']?>" alt="Assinatura do Vinícius Correia">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end hero banner ================= -->    


    <!-- ================  Sobre Nós ================= -->    
    <section class="section-margin about-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <div class="about__content">
              <div class="section-intro">
                <h4 class="section-intro__title">Sobre Nós</h4>
                <h2 class="section-intro__subtitle">Barbearia moderna com conceito "all in one place" para tornar sua experiência mais incrível.</h2>
              </div>
              <p>A barbearia Vina´s Barber House, era um desejo de muito tempo do Vinícius em ter a sua própria barbearia, após 2 anos trabalhando para uma pequena franquia do Rio de Janeiro, ele resolveu abrir a Vina´s, que atualmente já completa 6 anos de existência. Nosso objetivo é proporcionar aos homens um ambiente descontraído e agradável enquanto ele cuida da sua aparência.</p>
              <a class="button" href="sobre-nos">Saiba Mais</a>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-2">
            <div class="about__img">
              <img class="img-fluid" src="<?php $BASE_URL ?>./assets/img/home/<?php echo $imagem['sobre-nos-01']?>" alt="imagem do barbeiro fazendo barbaterapia em um cliente">
              <img src="<?php $BASE_URL ?>./assets/img/home/<?php echo $imagem['sobre-nos-02']?>" alt="Imagem do barbeiro fazendo a barba tradicional com a navalha" class="about__img--small img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end Sobre nós ================= -->     


    <!-- ================ video institucional ================= --> 
    <section class="video-area section-margin--large">
      <div class="container">
        <div class="row justify-content-center align-items-center flex-column text-center">
          <h3>Conheça o Ambiente</h3>
          <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=e_Zud-9Evs0">
            <img src="./assets/img/home/play-icon.png" alt="">
          </a>
          <p>05:35</p>
        </div>
      </div>  
    </section>
    
    <!-- ================ Nossos Serviços ================= -->      
    <section class="section-margin--large">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Nossos Serviços</h4>
          <h2 class="section-intro__subtitle">O que oferecemos aos <span class="d-block">nossos clientes.</span></h2>
        </div>
        <div class="row gutters-48 card-service-wrapper">
          <div class="col-lg-4">
            <div class="card text-center card-service border-style">
              <div class="card-service__icon"><i class="flaticon-cut"></i></div>
              <h3 class="card-service__title">Corte na Tesoura</h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tristique est ac rutrum porttitor. Sed nibh nibh, cursus ac ipsum non, porta venenatis nisl. Aenean venenatis dictum est, quis cursus dolor egestas a. </p>
              <div>
                <a class="button button-service" href="#">Saiba Mais</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-center card-service border-style">
              <div class="card-service__icon"><i class="flaticon-barbershop"></i></div>
              <h3 class="card-service__title">Bigode </h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tristique est ac rutrum porttitor. Sed nibh nibh, cursus ac ipsum non, porta venenatis nisl. Aenean venenatis dictum est, quis cursus dolor egestas a.</p>
              <div>
                <a class="button button-service" href="#">Saiba Mais</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-center card-service border-style">
              <div class="card-service__icon"><i class="flaticon-wellness"></i></div>
              <h3 class="card-service__title">Corte na Máquina</h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tristique est ac rutrum porttitor. Sed nibh nibh, cursus ac ipsum non, porta venenatis nisl. Aenean venenatis dictum est, quis cursus dolor egestas a.</p>
              <div>
                <a class="button button-service" href="#">Saiba Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ Servico end ================= -->      
    
    <!-- ================ equipe ================= -->      
    <section class="section-padding--large bg-soapstone">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Equipe</h4>
          <h2 class="section-intro__subtitle">Colaboradores que <span class="d-block">que fazem parte do time.</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="<?php $BASE_URL ?>./assets/img/team/<?php echo $imagem['equipe1']?>" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Léo Aguiar</a></h4>
                    <p>Barbeiro</p>
                  </div>
                  <ul class="card-team__social">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="<?php $BASE_URL ?>./assets/img/team/<?php echo $imagem['equipe2']?>" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Felipe Lopes</a></h4>
                    <p>Barbeiro</p>
                  </div>
                  <ul class="card-team__social">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="<?php $BASE_URL ?>./assets/img/team/<?php echo $imagem['equipe3']?>" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Vinícios Corrêa</a></h4>
                    <p>Barbeiro</p>
                  </div>
                  <ul class="card-team__social">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <!-- ================ equipe end ================= -->      

    <!-- ================ Nossos Preços ================= -->      
    <section class="section-margin--large pricing-relative">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Preços de Serviços</h4>
          <h2 class="section-intro__subtitle">Veja os nossos pacotes <span class="d-block">completos.</span></h2>
        </div>
        <div class="row gutters-48">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <div class="card text-center card-pricing border-style">
              <div class="card-pricing__header">
                <h3>Corte de Cabelo + Barba</h3>
                <p>Corte na Máquina + Barba Desenhada</p>
              </div>
              <div class="card-pricing__price">
                <h2>R$ 60,00 </h2>
              </div>
              <ul class="card-pricing__list">
                <li>Corte na Máquina</li>
                <li>Barba Desenhada Serrada</li>
                <li>Barba terapia</li>
              </ul>
              <div class="mb-5">
                <a class="button button-pricing" href="#">Agendar</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <div class="card text-center card-pricing border-style">
              <div class="card-pricing__header">
                <h3>Corte de Cabelo + Barba e Bigode</h3>
                <p>Corte na tesoura + barba lenhador e bigode</p>
              </div>
              <div class="card-pricing__price">
                <h2>R$ 92,00 </h2>
              </div>
              <ul class="card-pricing__list">
                <li>Corte na Tesoura</li>
                <li>Bigode modelado</li>
                <li>Barba lenhador</li>
                <li>Barba terapia</li>
               
              </ul>
              <div class="mb-5">
                <a class="button button-pricing" href="#">Agendar</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <div class="card text-center card-pricing border-style">
              <div class="card-pricing__header">
                <h3>Alisamento e tratamento capílar</h3>
                <p>Alisamento + tratamento capilar</p>
              </div>
              <div class="card-pricing__price">
                <h2>R$ 99.00</h2>
              </div>
              <ul class="card-pricing__list">
                <li>Alisamento</li>
                <li>Tratamento capilar </li>
                <li>Hidratação</li>

              </ul>
              <div class="mb-5">
                <a class="button button-pricing" href="#">Agendar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ preço end ================= -->      


  


  

  </main>      

<?php require_once ("includes/templates/footer.php")?>