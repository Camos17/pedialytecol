		<footer class="col-xs-12 no-padding footerPedialyte">
			<div class="col-xs-12">
				<div class="col-xs-12 contentFooterPedialyte">
					<h2 class="titulo">Contáctanos</h2>
					<div class="col-xs-12 FAQ_Pedialyte">
						<p class="col-xs-12 no-padding text-center">
							<span>
								¿Preguntas, 
							</span>
							<span>
								Sugerencias o 
							</span>
							<span>
								Quieres saber más sobre pedialyte&reg;?
							</span>
							<br class="hidden-sm hidden-md">
							<br class="hidden-sm hidden-lg">
							<span>
								Ponte en contacto con nosotros
							</span>
							<br class="hidden-xs hidden-md">
							<br class="hidden-xs hidden-sm hidden-lg">
							<span class="mailFAQPedialyte">
								<a href="mailto: nutricionatualcance@abbott.com">nutricionatualcance@abbott.com</a>
							</span>
						</p>
					</div>
					<div class="col-xs-12 no-padding privacyPoliciesPedialyte">
						<ul class="col-xs-12 col-sm-10 col-sm-offset-1 no-padding">
							<li class="col-sm-2 col-sm-offset-1 col-lg-offset-2 no-padding">
								<a href="http://www.abbott.com/" target="_blank" >Abbott Global</a>
							</li>
							<li class="col-sm-3 no-padding">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/doc/Términos y Condiciones Página Web.pdf" target="_blank" download>Términos y Condiciones</a>
							</li>
							<li class="col-sm-6 no-padding">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/doc/Política de tratamiento de datos.pdf" target="_blank" download>Politíca de Tratamiento de Datos Personales</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 no-padding copyrightPedialyte">
						<p class="col-xs-12 no-padding">
							<span>&copy; Abbott Laboratories, 2017</span>
						</p>
					</div>
				</div>
			</div>	
		</footer>
		<?php wp_footer(); ?>
		<script>

			$(document).ready(function(){
				$(this).scrollTop(0);
				$('html').animate({scrollTop:0}, 1);
    			$('body').animate({scrollTop:0}, 1);
				var href = window.location.href,
				newUrl = href.substring(0, href.indexOf('#'))
				window.history.replaceState({}, '', newUrl);
			});

			smoothScroll.init({
				// Speed & Easing
				speed: 1300, // Integer. How fast to complete the scroll in milliseconds
				offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
				easing: 'easeInOutCubic' // Easing pattern to use
			});
		</script>
	</body>
</html>