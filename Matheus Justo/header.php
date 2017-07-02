<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">


		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugins.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/geral.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/wow/css/libs/animate.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/slick-carousel/slick/slick-theme.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/slick-carousel/slick/slick.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">


		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
        <script src="<?php bloginfo('template_url');?>/js/vendor/modernizr-2.8.3.min.js"></script>


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<nav class="hamburguerMenu">
            <ul>
				<li><a href="<?php bloginfo('home');?>">INICIO</a></li>
                 <?php wp_list_pages('title_li=');?>
            </ul>
         </nav>
		

			<!-- header -->
			<header class="header-top " role="banner">

					<div class="bg-header"></div><!--/bg-header-->
					<div class="container">
						<h1 class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo principal Matheus Justo" class="logo-img">
						</a>
						</h1>
						
						<div class="links wow slideInRight" data-wow-duration="1s" data-wow-delay="1">
							<nav class="nav" role="navigation">
								<ul>
									<li><a href="<?php bloginfo('home');?>">Home</a></li>
                        			<?php wp_list_pages('title_li=');?>
								</ul>
							</nav>
							<a class="toggle" href="#">
								<span class="toggleIcon"></span>
								<span class="toggleIcon"></span>
								<span class="toggleIcon"></span>
							</a>

							<ul class="social">
								<li><a href="https://github.com/MatheusJusto"><i class="fa fa-github"></i></a></li>
								<li><a href="https://www.linkedin.com/in/matheus-garcia-29bb65a1/"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://www.behance.net/matheusgar083f"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
						
						<h2>Olá, meu nome é Matheus Justo</h2>
						<p>trabalho com design e desenvolvimento front-end. <br>
						Fiz este site para mostrar meu estilo de trabalho e também te ajudar a construir um site legal.</p>
						

						<button class="mouse">
							<div class="wheel"></div>
						</button>
					</div><!--/container-->

			</header>
			<!-- /header -->
