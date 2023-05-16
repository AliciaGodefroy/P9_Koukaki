<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div id="menu">             
                <ul>
                    <li><a class="menu-lnk" href="#story">Histoire</a></li>
                    <li><a class="menu-lnk" href="#characters">Personnages</a></li>               
                    <li><a class="menu-lnk" href="#place">Lieu</a></li>
                    <li><a class="menu-lnk" href="#studio">Studio Koukaki</a></li>
                </ul>
                <p class="menu-img menu-mention">STUDIO KOUKAKI</p>  
                <img class="menu-img menu-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                <img class="menu-img flower flower-1" src="<?php echo get_template_directory_uri() . '/assets/images/orchid.png'; ?> " alt="Fleur violette">
                <img class="menu-img flower flower-2" src="<?php echo get_template_directory_uri() . '/assets/images/Sunflower.png'; ?> " alt="Tournesol">
                <img class="menu-img flower flower-3" src="<?php echo get_template_directory_uri() . '/assets/images/random_flower.png'; ?> " alt="Fleur jaune & violette">
                <img class="menu-img flower flower-4" src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?> " alt="Fleur orange">
                <img class="menu-img flower flower-5" src="<?php echo get_template_directory_uri() . '/assets/images/hibiscus_footer.png'; ?> " alt="Grande fleur">
                <img class="menu-img cat cat-1" src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/purple-cat.svg'; ?> " alt="Chat violet">
                <img class="menu-img cat cat-2" src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/grey-cat.svg'; ?> " alt="Chat gris">
                <img class="menu-img cat cat-3" src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/orange-cat.svg'; ?> " alt="Chat orange">              
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->