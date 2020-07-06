<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<meta name="keywords" content="Helvan, Restaurante">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?= base_url("assets/") ?>images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?= base_url("assets/") ?>images/apple-touch-icon.png">
	<link rel="stylesheet" href="<?= base_url("assets/") ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url("assets/") ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url("assets/") ?>css/responsive.css">
	<link rel="stylesheet" href="<?= base_url("assets/") ?>css/custom.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">
				Helvan Restaurante (Logo)
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
					aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="javascript:;">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#menu-box">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="javascript:;">Sobre</a></li>
					<!--
					<li class="nav-item"><a class="nav-link" href="javascript:;">Reservar</a></li>
					-->
					<li class="nav-item"><a class="nav-link" href="javascript:;">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<?php foreach ($slides as $slide): ?>
			<li class="text-center">
				<img src="<?= $slide['src'] ?>" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bem-vindo a <br> Helvan Restaurante</strong></h1>
							<!--
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservar mesa</a></p>
							-->
						</div>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	</div>
</div>
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="<?= $about['src'] ?>" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Benm-vindo a <span>Helvan Restaurante</span></h1>
					<h4>Nossa historia</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut
						at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante
						sodales augue, eget lacinia lectus erat et sem. </p>
					<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a
						pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem
						pulvinar.</p>
					<!--
					<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservar</a>
					-->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-left">
				<p class="lead "><?= $pubs ?></p>
				<!--
				<span class="lead">Michael Strahan</span>
				-->
			</div>
		</div>
	</div>
</div>
<div class="menu-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Menu Especial</h2>
					<!--
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					-->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="special-menu text-center">
					<div class="button-group filter-button-group">
						<button class="active" data-filter="*">Todos</button>
						<button data-filter=".drinks">Bebidas</button>
						<button data-filter=".lunch">Almoco</button>
						<button data-filter=".dinner">Jantar</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row special-list">
			<?php foreach ($menus as $menu): ?>
				<div class="col-lg-4 col-md-6 special-grid <?= $menu['class'] ?>">
					<div class="gallery-single fix">
						<img src="<?= $menu['src'] ?>" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4><?= $menu['nome'] ?></h4>
							<p><?= $menu['desc'] ?></p>
							<h5><?= $menu['preco'] ?></h5>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<div class="gallery-box">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Galeria</h2>
					<!--
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					-->
				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row">
				<?php foreach ($portfolios as $portfolio): ?>
					<div class="col-sm-<?= $portfolio['sm'] ?> col-md-4 col-lg-4">
						<a class="lightbox" href="<?= $portfolio['href'] ?>">
							<img class="img-fluid" src="<?= $portfolio['href'] ?>" alt="Gallery Images">
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Opinião dos consumidores</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						<?php foreach ($custumers as $custumer): ?>
							<div class="carousel-item text-center <?= $custumer['active'] ?>">
								<!--
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle"
									 src="<?= base_url("assets/") ?>images/profile-1.jpg" alt="">
							</div>
							-->
								<h5 class="mt-4 mb-0"><strong
											class="text-warning text-uppercase"><?= $custumer['nome'] ?></strong></h5>
								<h6 class="text-dark m-0"><?= $custumer['prof'] ?></h6>
								<p class="m-0 pt-3"><?= $custumer['coment'] ?></p>
							</div>
						<?php endforeach; ?>

					</div>
					<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Próximo</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Customer Reviews -->

<!-- Start Contact info -->
<div class="contact-imfo-box">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-volume-control-phone"></i>
				<div class="overflow-hidden">
					<h4>Telefone</h4>
					<p class="lead"><?= $contactos['telefone'] ?></p>
				</div>
			</div>
			<div class="col-md-4">
				<i class="fa fa-envelope"></i>
				<div class="overflow-hidden">
					<h4>Email</h4>
					<p class="lead"><?= $contactos['email'] ?></p>
				</div>
			</div>
			<div class="col-md-4">
				<i class="fa fa-map-marker"></i>
				<div class="overflow-hidden">
					<h4>Endereco</h4>
					<p class="lead"><?= $contactos['endereco'] ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Contact info -->

<!-- Start Footer -->
<footer class="footer-area bg-f">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<h3>Sobre nós</h3>
				<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna.
					Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet.
					Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3>Horário</h3>
				<p><span class="text-color">Seg-Sex :</span> 7:00 - 20:00<br/>
					<span class="text-color">Buffe:</span> 7:30 -10:30</p>
				<p><span class="text-color">Sab-Dom :</span> 7:00 - 20:00</p>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3>Contato</h3>
				<p class="lead"><?= $contactos['endereco'] ?></p>
				<p class="lead"><a href="javascript:;"><?= $contactos['telefone'] ?></a></p>
				<p><a href="#"><?= $contactos['email'] ?></a></p>
			</div>

			<div class="col-lg-3 col-md-6">
				<!--
				<h3>Subscribe</h3>
				<div class="subscribe_form">
					<form class="subscribe_form">
						<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..."
							   type="email">
						<button type="submit" class="submit">SUBSCRIBE</button>
						<div class="clearfix"></div>
					</form>
				</div>
				-->
				<ul class="list-inline f-social">
					<li class="list-inline-item"><a href="<?= $social['facebook'] ?>" target="_blank"><i
									class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="<?= $social['twitter'] ?>" target="_blank"><i
									class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="<?= $social['linkedin'] ?>" target="_blank"><i
									class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="<?= $social['google'] ?>" target="_blank"><i
									class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="<?= $social['instagram'] ?>" target="_blank"><i
									class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="company-name">All Rights Reserved. &copy; <?= date('Y') ?> <a href="#"><?= $title ?></a>
						By :
						<a href="https://www.facebook.com/leonardoqquizomba" target="_blank">Leonardo Quizomba</a>
					</p>
				</div>
			</div>
		</div>
	</div>

</footer>
<!-- End Footer -->
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function () {
		FB.init({
			xfbml: true,
			version: 'v7.0'
		});
	};

	(function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = 'https://connect.facebook.net/pt_PT/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
	 attribution=setup_tool
	 page_id="111536920602129"
	 logged_in_greeting="Oi! Como podemos te ajudar?"
	 logged_out_greeting="Oi! Como podemos te ajudar?">
</div>

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
<script src="<?= base_url("assets/") ?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url("assets/") ?>js/popper.min.js"></script>
<script src="<?= base_url("assets/") ?>js/bootstrap.min.js"></script>
<script src="<?= base_url("assets/") ?>js/jquery.superslides.min.js"></script>
<script src="<?= base_url("assets/") ?>js/images-loded.min.js"></script>
<script src="<?= base_url("assets/") ?>js/isotope.min.js"></script>
<script src="<?= base_url("assets/") ?>js/baguetteBox.min.js"></script>
<script src="<?= base_url("assets/") ?>js/form-validator.min.js"></script>
<script src="<?= base_url("assets/") ?>js/contact-form-script.js"></script>
<script src="<?= base_url("assets/") ?>js/custom.js"></script>
</body>
</html>
