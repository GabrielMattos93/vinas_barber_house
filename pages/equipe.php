<?php require_once ("includes/templates/header.php")?>
  
  <!-- ================ start banner area ================= -->
	<section class="banner-area team" id="team">
		<div class="container h-100">
			<div class="banner-area__content text-center">
        <h1>Equipe</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Equipe</li>
          </ol>
        </nav>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= --> 


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

  <?php require_once ("includes/templates/footer.php")?>