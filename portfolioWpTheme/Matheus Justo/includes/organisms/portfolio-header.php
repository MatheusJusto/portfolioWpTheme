<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Matheus Justo | Portfolio</title>
        <meta name="description" content="Matheus Justo, desenvolvedor front-end e designer. site para contato e exibição de projetos realizados">
        <meta name="author" content="Matheus Justo"/>
        <meta name="canonical" link=""/>
        <meta name="robots" content="index" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugins.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/geral.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/wow/css/libs/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/lightbox2/dist/css/lightbox.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/portfolio.css">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
        <script src="<?php bloginfo('template_url');?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav class="hamburguerMenu">
            <ul>
               <li><a href="<?php bloginfo('home');?>">INICIO</a></li>
                <?php wp_list_pages('title_li=');?>
            </ul>
         </nav>
         <div class="layout">
             <header class='header-top'>
                <div class="container">
                    <h1 class="logo">
                    <a href="index.html">
                        <img src="<?php bloginfo( 'template_url' )?>/img/logo.png" alt="logo principal Matheus Justo">
                    </a>
                    </h1>
                    
                    <div class="links">
                        <nav>
                            <ul>
                                <li><a href="<?php bloginfo('home');?>">INICIO</a></li>
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

                    <h2>PORTFOLIO</h2>
                </div><!--/container-->
            </header>