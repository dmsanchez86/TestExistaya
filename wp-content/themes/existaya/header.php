<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/src/css/main.css">

			<link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/src/images/favicon.png">

			<?php wp_head(); ?>
		</head>

		<body <?php body_class(); ?>>
			<main class="app">
				<header class="app-header">
					<div class="app-header-top">
						<div class="container">
							<div class="row">
								<div class="col-md-7 col-xs-12">
									<div class="contact">
										Contacto: <a href="tel:+5728841114"> (+57) 2 884 11 14</a>
									</div>
									<div class="social">
										<a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
										<a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
										<a href="#" class="social-link"><i class="fab fa-google-plus-g"></i></a>
										<a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
								<div class="col-md-4 offset-md-1 col-xs-12 text-right">
									<div class="help">
										<a href="#"> Centro de Ayuda</a>
									</div>
									<div class="account">
										<a href="#" class="account-link"><i class="far fa-user"></i> Mi Cuenta</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="app-header-main">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="app-header-logo logo">
										<a href="#" title="<?php bloginfo( 'name' ); ?>">
											<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
										</a>
									</div>
								</div>
								<div class="col-7">
									<nav class="app-header-nav">
										<ul>
											<li><a href="#">Libros</a></li>
											<li><a href="#">Ebooks</a></li>
											<li><a href="#">Recomendados</a></li>
											<li><a href="#">Novedades</a></li>
											<li><a href="#">Blogs</a></li>
											<li><a href="#">Promociones</a></li>
										</ul>
									</nav>
								</div>
								<div class="col text-right">
									<div class="app-header-main-icons">
										<span class="search">
											<a href="#"><i class="fas fa-search"></i></a>
										</span>
										<span class="heart">
											<a href="#"><i class="far fa-heart"></i></a>
										</span>
										<span class="shopping">
											<a href="#"><i class="fas fa-shopping-cart"></i></a>
											<a href="#">0</a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="app-header-breadcrumb">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="">
										<a href="#">Home</a> / <a href="#" class="active">Promociones</a>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</header>
				<section class="app-section">
