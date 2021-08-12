<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Japn
 */

?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head();?>
    <!-- Bootstrap -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">    
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/chosen.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.imagemapster.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/chosen.jquery.min.js"></script>
</head>
<?php get_template_part('google-for-jobs'); ?>
<body <?php body_class();?>>

<?php wp_body_open();?>
<div id="page" class="site">
	<div class="wrapper inner-page">
<!-- HEADER_START -->
	<header id="header" class="header-hp">
    	<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-in-hp">
                	<div class="logo-hp">
                    	<a href="<?php echo get_site_url() ?>">
                        	<img src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt=""/>
                        </a>
                    </div>
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                              	<ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                      	<a class="nav-link" href="<?php echo get_site_url() ?>/about">昼ナビとは</a>
                                    </li>
                                    <li class="nav-item">
                                      	<a class="nav-link" href="<?php echo get_site_url() ?>/job_list">お仕事情報 </a>
                                    </li>
                                    <li class="nav-item">
                                      	<a class="nav-link" href="<?php echo get_site_url() ?>/informations">コラム</a>
                                    </li>
                                    <li class="nav-item">
                                      	<a class="nav-link" href="<?php echo get_site_url() ?>/qa">よくあるご質問</a>
                                    </li>
                              	</ul>
                            </div>
                            <div class="header-right-hp">
                                <div class="contact-btn-main-hp">
                                    <a href="<?php echo get_site_url() ?>/consultation_form" class="contact-btn-hp">相談する</a>
                                </div>
                                <div class="contact-btn-main-hp">
                                    <a href="<?php echo get_site_url() ?>/registration_form" class="contact-btn-hp doc-btn-hp">登録する </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="mobile-menu-icon-hp">
                        <div class="menu-toggle-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="overlay-mobile-menu-hp"></div>
    <div class="clearfix"></div>
<!-- HEADER_END -->
