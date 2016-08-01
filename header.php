<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <div id="page">
    
    <div class="band top">
      <header class="layout">
        <a href="<?php echo esc_url( home_url() ) ?>" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo.svg"></a>
        <nav>
          <?php 

              $defaults = array(

                'container' => '',
                'theme_location' => 'main-menu'

              );

              wp_nav_menu ( $defaults );

            ?>
            
          <?php get_search_form(); ?>
        </nav>
      </header>
    </div>