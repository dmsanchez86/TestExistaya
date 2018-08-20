			</section>
			<footer class="app-footer">
				<div class="app-footer-main">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-8">
								<div class="row">
									<div class="col-12 col-md-5">
										<div class="app-footer-logo logo">
											<?php if ( function_exists( 'the_custom_logo' ) ) the_custom_logo(); ?>
										</div>
										<div class="description">
											<b><?= bloginfo('name') ?> S.A</b><br>
											NIT: 890.301.951-0 <br>
											Dirección: Cra. 5 N° 11-50 Cali - Valle del Cauca <br>
											Email: <a href="mailto:servicioalcliente@librerianacional.com">servicioalcliente@librerianacional.com</a> <br>
											Teléfono: <a href="tel:+5728841114">(57) 2 844 11 14</a> <br><br>

											<b>Confederación Colombiana de Consumidores</b>
											<a target="_blank" href="http://www.ccconsumidores.org.co">www.ccconsumidores.org.co</a>
										</div>
									</div>
									<div class="col-12 col-md-3">
										<div class="app-footer-nav">
											<h5>Corporativo</h5>
											<ul>
												<li><a href="#">Quiénes Somos</a></li>
												<li><a href="#">Sedes</a></li>
												<li><a href="#">Café</a></li>
												<li><a href="#">Regala un Bono</a></li>
												<li><a href="#">Eventos</a></li>
											</ul>
										</div>
									</div>
									<div class="col-12 col-md-4">
										<div class="app-footer-nav">
											<h5>Centro de Ayuda</h5>
											<ul>
												<li><a href="#">PQRS</a></li>
												<li><a href="#">Preguntas frecuentes</a></li>
												<li><a href="#">Política de tratamientos de datos</a></li>
												<li><a href="#">Política para cambio de mercancía</a></li>
												<li><a href="#">Manuales</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="pagos">
									<div>
										<span>Aceptamos todos los medios de pago</span>
										<span><img src="<?= get_stylesheet_directory_uri(); ?>/src/images/pagos.png" alt=""></span>
									</div>
									<span>
										Pagos Seguros con: <img src="<?= get_stylesheet_directory_uri(); ?>/src/images/payu.png" alt="">
									</span>
								</div>
								<div class="social">
									<a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									<a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
									<a href="#" class="social-link"><i class="fab fa-google-plus-g"></i></a>
									<a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="app-footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-12">
								<div class="contact">
									&copy; Libreria Nacional <?= Date('Y') ?> - Todos los derechos reservados
								</div>
							</div>
							<div class="col-md-3 offset-md-2 col-12 text-right">
								<div class="powered">
									Powered by <a href="http://dmsanchez86.github.io" target="_blank"> @dmsanchez86</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</main>
		<?php wp_footer(); ?>
	</body>
</html>
