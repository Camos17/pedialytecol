<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Pedialyte Colombia</title>

		<?php wp_head(); ?>

	</head>
	<body>

		<nav class="navbar navbar-default navbar-headerLogos has-feedback">
			<div class="col-xs-12 no-padding containerHeaderLogos">
				<div class="col-xs-6 col-sm-3 logopedialyte">
					<img class="img-responsive LogoPedialyte" src="<?php echo get_bloginfo('template_directory'); ?>/img/LogoPedialyte.png" alt="Pedialyte Colombia">
				</div>
				<div class="col-xs-6 col-sm-9 logopedialyte">
					<img class="pull-right" src="<?php echo get_bloginfo('template_directory'); ?>/img/LogoAbbott.png" alt="Pedialyte Colombia">
				</div>
			</div>
		</nav>

		<nav class="col-xs-12 no-padding navbar navbar-default navbar-menuLinks">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="deployedMenu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="col-sm-12 no-padding nav navbar-nav menuLinks">
						<li>
							<a data-scroll href="#whatIsDehydration">¿Qué es <br class="hidden-xs"> la deshidratación?</a>
						</li>
						<li>
							<a data-scroll href="#">¿Qué causa la <br class="hidden-xs"> deshidratación?</a>
						</li>
						<li>
							<a data-scroll class="customLink" href="#">¿Por qué pedialyte?</a>
						</li>
						<li>
							<a data-scroll href="#">Hidratación <br class="hidden-xs"> y Alimentación</a>
						</li>
						<li class=" lastLink">
							<a data-scroll href="#">¿Cómo prevenir <br class="hidden-xs"> la deshidratación?</a>
						</li>
						<li class="dropdown hidden">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> ¿Por qué pedialyte? <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>