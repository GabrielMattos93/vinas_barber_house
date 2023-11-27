<?php require_once ("includes/templates/header.php")?>
  
  <!-- ================ banner area ================= -->
	<section class="banner-area service" id="service">
		<div class="container h-100">
			<div class="banner-area__content text-center">
        <h1>Nossos Serviços</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php $BASE_URL ?>./">Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Serviços</li>
          </ol>
        </nav>
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

  <?php require_once ("includes/templates/footer.php")?>