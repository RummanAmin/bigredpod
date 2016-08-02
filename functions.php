<?php 

	// Hide Wordpress Version
	remove_action('wp_head', 'wp_generator');

	add_theme_support( "title-tag" );
	add_editor_style();

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

  // Add Main Menu
	add_theme_support( 'menus' );

  function register_theme_menus() {
  	register_nav_menus(

  		array(
  			'main-menu' => _( 'Main Menu' )
  		)

  	);
  }

  add_action( 'init', 'register_theme_menus' );

  // Add CSS Files
	function wpt_theme_styles() {
		wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css?family=Lato:400,700,900|Hind:600' );
		wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css' );

	}

	add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

	// Add JS Files
	function wpt_theme_js() {

		wp_enqueue_script( 'modernizr_min_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', '', '', false );	
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

	}

	add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );


	// Remove Image Attributes
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}

	// Featured Image
	add_theme_support( 'post-thumbnails' ); 

	// Add class to Post Images
	function my_content_filter($content) {
    return preg_replace('|<p>(<img[^<]*)</p>|i', '<p class="foo">${1}</p>', $content);
	}
	add_filter('the_content', 'my_content_filter');

	// Custom Excerpt Length
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

 ?>