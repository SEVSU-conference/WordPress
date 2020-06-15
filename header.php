<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edu
 */
global $redux_demo;
?>
<!DOCTYPE html>
<html>
<head>
    <title><?bloginfo( 'name' );?></title>
<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
<!--    <link href="css/fonts.css" rel="stylesheet">-->
<!--    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css"> -->
<!--     owl-carousel -->
<!--    <link rel="stylesheet" href="owl-carousel/owl.carousel.min.css">-->
<!--    <link rel="stylesheet" href="owl-carousel/owl.theme.default.css">-->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <?wp_head();?>
    <!-- Иконка фавикона. Узнать про другие способы вставки -->
<!--    <link rel="icon" href="img/favicon.ico" type="image/x-icon">-->
    <meta charset="utf-8">

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="container">
        <div class="header-inner">
            <a href=""><img class="logo" src=<?echo get_template_directory_uri()."/assets/img/logo.png";?> alt="logo"></a>
            <nav class="navbar">
                <ul>
<!--                --><?//wp_nav_menu(
//			array(
//				'theme_location' => 'menu-1',
//                'container_class'        => 'navbar',
//			)
//			);?>
                <?php if($redux_demo['blocks'][1]==true):?><li><a href="#main">Главная</a></li><?endif;?>
                <?php if($redux_demo['blocks'][2]==true):?><li><a href="#description">О проекте</a></li><?endif;?>
                <?php if($redux_demo['blocks'][3]==true):?><li><a href="#tracks">Треки</a></li><?endif;?>
                <?php if($redux_demo['blocks'][4]==true):?><li><a href="#speakers">Спикеры</a></li><?endif;?>
                <?php if($redux_demo['blocks'][5]==true):?><li><a href="">Мероприятия</a></li><?endif;?>
                <?php if($redux_demo['blocks'][6]==true):?><li><a href="">Купить билеты</a></li><?endif;?>
                <?php if($redux_demo['blocks'][7]==true):?><li><a href="">Партнеры</a></li><?endif;?>
                </ul>
            </nav>
        </div>
    </div>
</header>


<!--<!doctype html>-->
<!--<html --><?php //language_attributes(); ?><!-->-->
<!--<head>-->
<!--	<meta charset="--><?php //bloginfo( 'charset' ); ?><!--">-->
<!--	<meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--	<link rel="profile" href="https://gmpg.org/xfn/11">-->
<!---->
<!--	--><?php //wp_head(); ?>
<!--</head>-->
<!---->
<!--<body --><?php //body_class(); ?><!-->-->
<?php //wp_body_open(); ?>
<!--<div id="page" class="site">-->
<!--	<a class="skip-link screen-reader-text" href="#primary">--><?php //esc_html_e( 'Skip to content', 'edu' ); ?><!--</a>-->
<!---->
<!--	<header id="masthead" class="site-header">-->
<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) :
//				?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--				--><?php
//			else :
//				?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--				--><?php
//			endif;
//			$edu_description = get_bloginfo( 'description', 'display' );
//			if ( $edu_description || is_customize_preview() ) :
//				?>
<!--				<p class="site-description">--><?php //echo $edu_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><!--</p>-->
<!--			--><?php //endif; ?>
<!--		</div><!-- .site-branding -->-->
<!---->
<!--		<nav id="site-navigation" class="main-navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'edu' ); ?><!--</button>-->
<!--			--><?php
//			wp_nav_menu(
//				array(
//					'theme_location' => 'menu-1',
//					'menu_id'        => 'primary-menu',
//				)
//			);
//			?>
<!--		</nav><!-- #site-navigation -->-->
<!--	</header><!-- #masthead -->-->
