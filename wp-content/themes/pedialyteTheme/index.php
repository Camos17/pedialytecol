<?php 
/*
Template Name: inicio
*/
?>	
<?php get_header(); ?>
	
	<div class="col-xs-12 no-padding containerHomePedialyte">
		
		<!-- Mobile Carousel -->
		<div class="containerMobileCarousel hidden-sm hidden-md hidden-lg">

			<?php echo do_shortcode('[image-carousel category="mobile_carousel" interval="10000"]'); ?>

			<div id="carousel-example-generic1" class="carousel slide hidden" data-ride="carousel" data-interval="10000">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic1" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic1" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic1" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/ImageSlider_BannerMobile1.png" alt="pedialyte 60 deshidratación vómito_diarrea">
						<div class="carousel-caption">
							...
						</div>
					</div>
					<div class="item">
						<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/ImageSlider_BannerMobile2.png" alt="Pedialyte 30 deshidratación baile">
						<div class="carousel-caption">
							...
						</div>
					</div>
					<div class="item">
						<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/ImageSlider_BannerMobile3.png" alt="Pedialyte 30 deshidratación baile">
						<div class="carousel-caption">
							...
						</div>
					</div>
					<div class="item">
						<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/ImageSlider_BannerMobile4.png" alt="Pedialyte 30 deshidratación baile">
						<div class="carousel-caption">
							...
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left hidden" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right hidden" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<!-- Desktop Carousel -->
		<div class="containerDesktopCarousel hidden-xs">

			<?php echo do_shortcode('[image-carousel category="desktop_carosuel" interval="10000"]'); ?>

			<div id="carousel-example-generic2" class="carousel slide hidden" data-ride="carousel" data-interval="10000">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic2" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic2" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic2" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/ImageSlider_BannerDesktop1.jpg" alt="pedialyte 60 deshidratación vómito_diarrea">
						<div class="carousel-caption">
							...
						</div>
					</div>
					<div class="item">
						<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/ImageSlider_BannerDesktop2.jpg" alt="Pedialyte 30 deshidratación baile">
						<div class="carousel-caption">
							...
						</div>
					</div>
					<div class="item">
						<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/ImageSlider_BannerDesktop3.jpg" alt="Pedialyte 30 deshidratación baile">
						<div class="carousel-caption">
							...
						</div>
					</div>
					<div class="item">
						<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/ImageSlider_BannerDesktop4.jpg" alt="Pedialyte 30 deshidratación baile">
						<div class="carousel-caption">
							...
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left hidden" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right hidden" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		
		<!-- What is Dehydration -->
		<div id="queEsLaDeshidratacion" class="col-xs-12 containerWhatsDehydration customPadding1">
			<div class="col-xs-12 no-padding textoGeneralPedialyte">
				<h1>¿Qué es la deshidratación?</h1>
				<p class="col-xs-12 no-padding generalTextPedialyte">
					<?php the_field("que_es_deshidratacion"); ?>
				</p>
			</div>
			<div class="col-xs-12 no-padding textWhyImportant textoGeneralPedialyte">
				<div class="col-xs-12 col-sm-4 no-padding">
					<div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
						<img class="img-responsive imgDehydration" src="<?php echo get_bloginfo('template_directory'); ?>/img/imgWhatsDehydration1.png" alt="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-8">
					<h3>¿Por qué es tan importante?</h3>
					<p class="col-xs-12 no-padding generalTextPedialyte2">
						<?php the_field('porque_es_tan_impportante'); ?>
					</p>
				</div>
			</div>
			<div class="col-xs-12 no-padding textWhyImportant textoGeneralPedialyte">
				<div class="col-xs-12 col-sm-4 no-padding" style="margin-top: 45px;">
					<div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
						<img class="img-responsive imgDehydration" src="<?php echo get_bloginfo('template_directory'); ?>/img/imgWhatsDehydration2.png" alt="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-8">
					<h3>No todas las deshidrataciones son iguales</h3>
					<p class="col-xs-12 no-padding generalTextPedialyte2">
						<?php the_field('no_son_iguales'); ?>
					</p>
				</div>
			</div>
		</div>

		<!-- Dehydration Causes -->
		<div id="causasDeshidratacion" class="col-xs-12 containerDehydrationCause customPadding1">
			<h2 class="col-xs-12 no-padding">¿Qué causa la deshidratación?</h2>
			<p class="col-xs-12  generalTextPedialyte">
				<?php the_field('que_causa_deshidratacion'); ?>
			</p>
			<div class="col-xs-12 imagesDehydrationCause">
				<div class="col-xs-12 col-sm-6 col-md-4 no-padding imgDehydrationCauses">
					<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/GraphicTexts1.png" alt="">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 no-padding imgDehydrationCauses">
					<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/GraphicTexts2.png" alt="">
				</div>					
				<div class="col-xs-12 col-sm-6 col-md-4 hidden no-padding imgDehydrationCauses">
					<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/GraphicTexts3.png" alt="">
				</div>					
				<div class="col-xs-12 col-sm-6 col-md-4 no-padding imgDehydrationCauses">
					<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/GraphicTexts4.png" alt="">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 hidden no-padding imgDehydrationCauses">
					<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/GraphicTexts5.png" alt="">
				</div>
			</div>
			<div class="col-xs-12 hidden recommendationText">									
				<div class="col-xs-12 col-sm-6 col-md-4 no-padding imgDehydrationCauses visible-xs visible-sm">
					<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/GraphicTexts5.png" alt="">
				</div>
				<div class="col-xs-12 col-sm-5 col-md-10 col-md-offset-1 text">
					<p class="col-xs-12 no-padding">*Se puede presentar una deshidratación leve en viajes aéreos largos, aproximadamente de más de 6 horas. Es importante hidratarse antes, durante y después del vuelo, para contrarrestar los efectos deshidratantes del aire seco de la cabina. <br class="visible-xs"> Fuente: Mayo Clinic: www.mayoclinic.org.
				</div>
				</p>
			</div>
		</div>

		<!-- Why Pedialyte -->
		<div id="porquePedialyte" class="col-xs-12 conatinerWhyPedialyte customPadding1">
			<div class="col-xs-12 textoGeneralPedialyte">
				<h2>¿Por qué <br class="visible-xs"> pedialyte<span class="pedialyteReg2">&reg;</span>?</h2>
				<p class="col-xs-12 no-padding generalTextPedialyte">
					<?php the_field('por_que_pedialyte'); ?>
				</p>
			</div>
			<div class="col-xs-12 textWhatsDehydration textoGeneralPedialyte">
				<h2 class="whyPedialyte">En la deshidratación por diferentes causas,</h2>
				<p class="col-xs-12 whyPedialyteText">
					Pedialyte<span class="pedialyteReg2">&reg;</span> tiene una solución para ti y todos los miembros de tu familia.
				</p>
			</div>
			<div class="col-xs-12 no-padding">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0 imgWhyPedialyte">
					<img class="img-responsive visible-xs" src="<?php echo get_bloginfo('template_directory')?>/img/imgWhyPedialyteMobile1.png" alt="">
					<img class="img-responsive hidden-xs" src="<?php echo get_bloginfo('template_directory')?>/img/imgWhyPedialyteDesktop1.png" alt="">
				</div>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0 imgWhyPedialyte">
					<img class="img-responsive visible-xs" src="<?php echo get_bloginfo('template_directory')?>/img/imgWhyPedialyteMobile2.png" alt="">
					<img class="img-responsive hidden-xs" src="<?php echo get_bloginfo('template_directory')?>/img/imgWhyPedialyteDesktop2.png" alt="">
				</div>
			</div>
		</div>

		<!-- Hydration -->
		<div id="hidratacion" class="col-xs-12 containerHydration customPadding1">
			<div class="col-xs-12 textoGeneralPedialyte">
				<h2 class="whyPedialyte">Hidrata a tu familia y aliméntala correctamente,</h2>
				<p class="col-xs-12 whyPedialyteText">
					Durante la deshidratación por vómito o diarrea.
				</p>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-12 col-sm-6 no-padding chart1">
					<h4>Qué pueden comer</h4>
					<img class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/img/Chart_1.png" alt="">
				</div>
				<div class="col-xs-12 col-sm-6 no-padding chart2">
					<h4>Qué no deberían comer</h4>
					<img class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/img/Chart_2.png" alt="">
				</div>
			</div>
		</div>

		<!-- Prevent Dehydration -->
		<div id="prevenirDeshidratacion" class="col-xs-12 containerPrevent customPadding1">
			<div class="col-xs-12 no-padding textoGeneralPedialyte">
				<h2 class="whyPedialyte">¿Cómo prevenir a tiempo</h2>
				<p class="col-xs-12 whyPedialyteText">
					la deshidratación por diarrea o vómito de tu hijo?
				</p>
			</div>
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-12 col-lg-offset-0">
				<div class="col-xs-12 no-padding preventTips"> 
					<div class="col-xs-12 col-lg-4 preventIcon1 firstPreventTip">
						<div class="col-xs-2 no-padding imgPreventTip1">
							<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/preventIcono1.png" alt="">
						</div>
						<div class="col-xs-10 col-sm-9 preventTextTip1">
							<p>Para ayudar a una mejor hidratación, dale Pedialyte<span class="pedialyteReg">&reg;</span> max 60 con zinc. <br><br> Consulta la dosificación sugerida en la etiqueta del producto.</p>
						</div>
					</div>
					<div class="col-xs-12 col-lg-8 secondPreventTips">
						<div class="col-xs-12 no-padding">
							<div class="col-xs-12 col-lg-6 no-padding preventIcon">
								<div class="col-xs-2 no-padding imgPreventTip">
									<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/preventIcono2.png" alt="">
								</div>
								<div class="col-xs-10 col-sm-9 preventTextTip2">
									<p>No dejes de alimentar <br class="hidden-xs"> a tu hijo.</p>
								</div>
							</div>
							<div class="row no-padding dividerPrevent hidden-lg"></div>
							<div class="col-xs-12 col-lg-6 no-padding preventIcon hidden-lg">
								<div class="col-xs-2 no-padding imgPreventTip">
									<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/preventIcono3.png" alt="">
								</div>
								<div class="col-xs-10 col-sm-9 preventTextTip">
									<p>No le des dulces, gaseosas, jugos ni bebidas hidratantes para deportistas.</p>
								</div>
							</div>
							<div class="col-xs-12 col-lg-6 no-padding preventIcon1 hidden-xs hidden-sm hidden-md">
								<div class="col-xs-2 no-padding imgPreventTip imgPreventDesktop">
									<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/preventIcono4.png" alt="">
								</div>
								<div class="col-xs-10 col-sm-9 preventTextTip3">
									<p>Redhidrátalo lentamente con pedialyte<span class="pedialyteReg">&reg;</span> max 60 con zinc. <br><br> Verifica que el número 60 esté en el frasco.</p>
								</div>
							</div>
							<div class="row no-padding dividerPrevent hidden-lg"></div>
						</div>
						<div class="col-xs-12 no-padding">
							<div class="col-xs-12 col-lg-6 no-padding preventIcon1 hidden-lg">
								<div class="col-xs-2 no-padding imgPreventTip">
									<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/preventIcono4.png" alt="">
								</div>
								<div class="col-xs-10 col-sm-9 preventTextTip3">
									<p>Redhidrátalo lentamente con Pedialyte<span class="pedialyteReg">&reg;</span> max 60 con zinc. <br><br> Verifica que el número 60 esté en el frasco.</p>
								</div>
							</div>
							<div class="col-xs-12 col-lg-6 no-padding preventIcon preventIconDesktop hidden-xs hidden-sm hidden-md">
								<div class="col-xs-2 no-padding imgPreventTip">
									<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/preventIcono3.png" alt="">
								</div>
								<div class="col-xs-10 col-sm-9 preventTextTip">
									<p>No le des dulces, gaseosas, jugos ni bebidas hidratantes para deportistas.</p>
								</div>
							</div>
							<div class="row no-padding dividerPrevent hidden-lg"></div>
							<div class="col-xs-12 col-lg-6 no-padding preventIcon preventIconDesktop lastPreventIcon">
								<div class="col-xs-2 no-padding imgPreventTip">
									<img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/preventIcono5.png" alt="">
								</div>
								<div class="col-xs-10 col-sm-9 preventTextTip">
									<p>No dejes de darle líquidos por temor a provocarle más diarrea o vómito.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Recommend Pedialyte  -->
		<div class="col-xs-12 no-padding containerRecommend">
			<div class="col-xs-12">
				<h2 class="recommend">Pedialyte <span><span class="pedialyteReg2">&reg;</span></span>, el que más recomiendan los médicos en colombia*</h2>
			</div>				
			<div class="col-xs-12 textRecommend">
				<p class="col-xs-12 no-padding customPadding">PEDIALYTE<span class="pedialyteReg3">&reg;</span> 30 mEq con Zinc. Registro Sanitario: INVIMA 2016M-0017049. Indicaciones: prevención temprana de la deshidratación leve por pérdida de líquidos y electrolitos. Pedialyte<span class="pedialyteReg3">&reg;</span> 30 mEq contiene zinc para ayudar a reponer tempranamente el zinc eliminado durante la pérdida de electrolitos y agua. PEDIALYTE<span class="pedialyteReg3">&reg;</span> MAX 60 mEq con Zinc. Registro Sanitario: INVIMA 2016M-0011256-R1. Indicaciones: Tratamiento de la deshidratación moderada a grave por pérdida de líquidos y electrolítos. Pedialyte<span class="pedialyteReg3">&reg;</span> MAX 60 mEq contiene zinc para ayudar a reponer el zinc perdido durante la deshidratación por pérdida de líquidos y electrolitos. Es un medicamento. No exceder su consumo. Leer indicaciones y contraindicaciones en la etiqueta. Si los síntomas persisten consulte a su médico. Medicamento de venta libre. *Reporte IMS CLOSE UP Mayo 2017.
				</p>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>