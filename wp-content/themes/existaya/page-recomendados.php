<?php
/* Template Name: Pagina de Recomendados */

get_header(); ?>

<div class="app-page">
	<div class="app-page-title text-center">
		<h1><i class="fas fa-images"></i> <?= the_title() ?></h1>
	</div>

	<div class="content-articles">
		<div class="container">
			<div class="content-articles-row">
				<div class="content-articles-item">
					<div class="row">
						<div class="col-12 col-md-7">
							<div class="owl-carousel">
								<div class="image-book">
									<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/plantilla.png" alt="">
								</div>
								<div class="image-book">
									<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/plantilla.png" alt="">
								</div>
								<div class="image-book">
									<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/plantilla.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-12 col-md-5">
							<div class="description-book">
								<div class="row align-items-center">
									<div>
										<h6>La literatura une a todos los generos</h6>
										<h1>20% de descuento <br>en tienda virtual</h1>
										<div><span><i class="fas fa-tag"></i> aplica para libros fisicos de la tienda virtual</span></div>
										<div><span><i class="fas fa-calendar"></i> Marzo 12 de 2018 | 00:00 AM - Marzo 12 de 2018 | 11:59 PM</span></div>
										<div>
											<button>Leer más información</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content-articles-item">
					<div class="row">
						<div class="col-12 col-md-7">
							<div class="owl-carousel">
								<div class="image-book">
									<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/plantilla.png" alt="">
								</div>
								<div class="image-book">
									<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/plantilla.png" alt="">
								</div>
								<div class="image-book">
									<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/plantilla.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-12 col-md-5">
							<div class="description-book">
								<div class="row align-items-center">
									<div>
										<h6>Porque dos son mejor que uno</h6>
										<h1>Segundo libro <br>50% de descuento</h1>
										<div><span><i class="fas fa-tag"></i> aplica para libros fisicos de la tienda virtual</span></div>
										<div><span><i class="fas fa-calendar"></i> Marzo 12 de 2018 | 00:00 AM - Marzo 12 de 2018 | 11:59 PM</span></div>
										<div>
											<button>Leer más información</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content-articles-item">
					<div class="row">
						<div class="col-12 col-md-7">
							<div class="owl-carousel">
								<div class="image-book">
									<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/plantilla.png" alt="">
								</div>
								<div class="image-book">
									<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/plantilla.png" alt="">
								</div>
								<div class="image-book">
									<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/plantilla.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-12 col-md-5">
							<div class="description-book">
								<div class="row align-items-center">
									<div>
										<h6>Ciencias Sociales</h6>
										<h1>20% de descuento <br>en Editorial Planeta</h1>
										<div><span><i class="fas fa-tag"></i> aplica para libros fisicos de la tienda virtual</span></div>
										<div><span><i class="fas fa-calendar"></i> Marzo 12 de 2018 | 00:00 AM - Marzo 12 de 2018 | 11:59 PM</span></div>
										<div>
											<button>Leer más información</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bookweek">
		<div class="container">
			<div class="row">
				<div class="col">
					<h3 class="title-top">Libro de la semana <span class="right"><a>Conocer más ></a></span></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-2 col-sm-6">
					<div class="image-caratula">
						<img src="<?= get_stylesheet_directory_uri(); ?>/src/images/caratula.png" alt="">
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-10">
					<div class="description-caratula">
						<h1>El caballero de la armadura oxidada</h1>
						<h3 class="author">Robert Fisher</h3>
						<span class="reseña"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> 3 reseñas</span>
						<span class="price">$57.000</span>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsam rem natus cumque! Ipsa, quae itaque? Tempora, velit. Veniam dolores hic dolorem perspiciatis quia quasi recusandae accusantium, ut eum architecto!
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?= get_stylesheet_directory_uri(); ?>/src/js/jquery.min.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/src/js/owl.carousel.min.js"></script>
<script>
	$(document).ready(function(){
		$(".owl-carousel").owlCarousel({ 
			items: 1, 
			loop: true, 
			autoplay: true, 
			autoplayTimeout: 2500, 
		});
	});
</script>

<?php
get_footer();
