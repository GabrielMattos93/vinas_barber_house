<?php require_once ("includes/templates/header.php");?>
<body>
  
  <!-- ================ Banner da Página ================= -->
	<section class="banner-area about" id="about">
		<div class="container h-100">
			<div class="banner-area__content text-center">
        <h1>Sobre Nos</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php $BASE_URL ?>./">Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sobre nos</li>
          </ol>
        </nav>
			</div>
    </div>
	</section>



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

  <!-- ================ start feature section ================= -->    
  <section class="section-margin--large pt-xl-5">
    <div class="container">
      <div class="section-intro pb-70px">
        <h4 class="section-intro__title">Um pouco sobre nossas estruturas</h4>
        <h2 class="section-intro__subtitle">Prezamos por um ambiente agradável,  <span class="d-block">descontraído, onde o cliente se sinta a vontade.</span></h2>
      </div>

      <div class="row gutters-48">
        <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
          <div class="card text-center card-feature border-style">
            <div class="card-feature__icon"><i class="flaticon-barber-chair"></i></div>
            <h3 class="card-feature__title">Equipamentos confortáveis</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus iure aperiam fuga, maiores dolor voluptatem corporis placeat.</p>
          </div>
				</div>
				
				<div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
          <div class="card text-center card-feature border-style">
            <div class="card-feature__icon"><i class="flaticon-cut"></i></div>
            <h3 class="card-feature__title">Alta Qualidade</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate pariatur optio ratione, saepe qui maiores nam dolores quam vel.</p>
          </div>
				</div>
				
				<div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
          <div class="card text-center card-feature border-style">
            <div class="card-feature__icon"><i class="flaticon-mirror"></i></div>
            <h3 class="card-feature__title">Estilo Moderno</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est labore, magni numquam reiciendis repudiandae, ex sint quas quam dolore.</p>
          </div>
				</div>
				
				<div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
          <div class="card text-center card-feature border-style">
            <div class="card-feature__icon"><i class="flaticon-barbershop"></i></div>
            <h3 class="card-feature__title">Profissionais Experientes</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis reprehenderit voluptatem doloribus, possimus totam quasi est.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ end feature section ================= -->
     
  
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