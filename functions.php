<?php
/**
 * Fastfood functions and definitions
 */

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

add_image_size( 'fastfood-featured-image', 2000, 1200, true );

add_image_size( 'fastfood-thumbnail-avatar', 100, 100, true );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'top'    => __( 'Top Menu', 'fastfood' ),
	'footer' => __( 'Footer Menu', 'fastfood' ),
) );

/*
 * Add classes to main menu
 */
function fastfood_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'top') {
    $classes[] = 'list-inline-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class','fastfood_menu_classes',1,3);



//agregar widget
function dcms_agregar_nueva_zona_widgets() {

	register_sidebar( array(
		'name'          => 'Nueva Zona Widget',
		'id'            => 'id-nueva-zona',
		'description'   => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}

add_action( 'widgets_init', 'dcms_agregar_nueva_zona_widgets' );
