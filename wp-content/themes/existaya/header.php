<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/src/css/main.css">

			<link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/src/images/favicon.png">

			<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">

			<title><?= bloginfo('name') ?></title>

			<?php wp_head(); ?>
		</head>

		<body <?php body_class(); ?>>
			<main class="app">
				<div class="content-menu-mobile d-block d-sm-none">
					<a href="#main-menu"><i class="fas fa-ellipsis-v"></i></a>
				</div>
				<header class="app-header">
					<div class="app-header-top">
						<div class="container">
							<div class="row">
								<div class="col-md-7 col-12">
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
								<div class="col-md-4 offset-md-1 col-12 text-right">
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
								<div class="col-lg-3 col-6 text-center">
									<div class="app-header-logo logo">
										<?php if ( function_exists( 'the_custom_logo' ) ) the_custom_logo(); ?>
									</div>
								</div>
								<div class="col-12 col-lg-7 col-md-12 order-3 order-md-3 order-sm-3 order-lg-2">
									<nav class="app-header-nav" id="main-menu">
										<?php
											wp_nav_menu(
												array(
													'theme_location' => 'top',
													'menu_id'        => 'principal-menu',
												)
											);
										?>
										<div class="button-close d-block d-sm-none"><a href="#"><i class="fas fa-times-circle"></i></a></div>
									</nav>
								</div>
								<div class="col-6 col-lg-2 order-lg-3 text-right">
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
									<?php the_breadcrumb(); ?>
								</div>
							</div>
						</div>
					</div>		
				</header>
				<section class="app-section">
