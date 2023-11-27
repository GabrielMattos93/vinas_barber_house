<?php 
require_once ("includes/data/imagem.php"); 
require_once ("includes/data/configuracoes.php"); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo titulo(); ?></title>
  <meta name="description" content="Site profissional para barbearia do portfólio da brutecode | desenvolvimento web"> 
  <?php foreach($imagens as $imagem): ?>
	<link rel="icon" href="<?php $BASE_URL ?>assets/img/<?php echo $imagem['favicon']?>" type="image/png">

  <link rel="stylesheet" href="<?php $BASE_URL ?>assets/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php $BASE_URL ?>assets/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?php $BASE_URL ?>assets/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?php $BASE_URL ?>assets/vendors/flat-icon/flaticon.css">
	<link rel="stylesheet"href="<?php $BASE_URL ?>assets/vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="<?php $BASE_URL ?>assets/vendors/Magnific-Popup/magnific-popup.css">	
  <link rel="stylesheet" href="<?php $BASE_URL ?>assets/vendors/OwlCarousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php $BASE_URL ?>assets/vendors/OwlCarousel/owl.carousel.min.css">

  <link rel="stylesheet" href="<?php $BASE_URL ?>assets/css/style.css">
</head>
<body>
  <!-- ================ Header ================= -->  
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!--Agrupamento para melhor exibição em dispositivos móveis -->
					<a class="navbar-brand logo_h" href="<?php $BASE_URL ?>"><img src="<?php $BASE_URL ?>assets/img/<?php echo $imagem['logo']?>" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="./">Principal</a></li>
							<li class="nav-item"><a class="nav-link" href="sobre-nos">Sobre Nós</a></li>
							<li class="nav-item"><a class="nav-link" href="servicos">Serviços</a></li>
                            <li class="nav-item"><a class="nav-link" href="precos">Preços</a></li>
                            <li class="nav-item"><a class="nav-link" href="equipe">Equipe</a></li>
                            <li class="nav-item"><a class="nav-link" href="contato">Contato</a></li>
        
						</ul>
					</div>
				</div>
			</nav>
		</div>
        <?php endforeach; ?>

	</header>