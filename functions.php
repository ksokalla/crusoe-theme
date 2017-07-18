<?php

register_nav_menus( array(
	'menu-crusoe' => 'Menu Crusoe',
	) );

function RolandMenu( ) {

$menu_name = 'menu-crusoe'; // specify custom menu slug

$menu_list ='';

if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {

$menu = wp_get_nav_menu_object($locations[$menu_name]);

$menu_items = wp_get_nav_menu_items($menu->term_id);foreach( $menu_items as $menu_item ) {

if( $menu_item->menu_item_parent == 0 ) {

$parent = $menu_item->ID;

$menu_array = array();

foreach( $menu_items as $submenu ) {

if( $submenu->menu_item_parent == $parent ) {

$bool = true;

$menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li> ' ."\n";

}}

if( $bool == true && count( $menu_array ) > 0 ) {

$menu_list .= '<li class="dropdown">' ."\n";

$menu_list .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $menu_item->title . ' <span class="caret"></span></a>' ."\n";

$menu_list .= '<ul class="dropdown-menu dropdown_costumize">' ."\n";

$menu_list .= implode( "\n", $menu_array );

$menu_list .= '</ul>' ."\n";

} else {

$menu_list .= '<li>' ."\n";

$menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";

$menu_list .= '<li>' ."\n";

}

}

// end <li>

}

} else {

$menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';

}

echo $menu_list;

}


/*-------enqueue scripts and styles---------*/

function styles_and_scripts() {
    
	wp_enqueue_style( 'analogue-font', get_template_directory_uri() .'/stylesheet.css',array(), '1.0.0' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css',array(),'3.3.4' );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() .'/style.css',array(), '1.0.0' );
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() .'/css/font-awesome.min.css',array(),'4.0.3' );
	wp_enqueue_style( 'slick-slider-styles', get_stylesheet_directory_uri() .'/slick/slick.css',array(), '1.0.0' ); 
    wp_enqueue_style( 'slick-slider-theme-styles', get_template_directory_uri() .'/slick/slick-theme.min.css',array(), '1.0.0' ); 
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans+Condensed:300|Open+Sans:300,400,700', false ); 
    wp_enqueue_style( 'responsive-style', get_template_directory_uri() .'/css/responsive.css',array(), '1.0.0' );
    wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri() .'/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'slick-slider', get_stylesheet_directory_uri() .'/slick/slick.js', array( 'jquery' ) );
	wp_enqueue_script( 'scroll-reveal', get_stylesheet_directory_uri() .'/js/scrollreveal.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() .'/js/custom.js', array( 'slick-slider', 'jquery' ), '1.0.0', true );
    
}

add_action( 'wp_enqueue_scripts', 'styles_and_scripts' );



if ( function_exists('register_sidebar') ) {

   register_sidebar(array(
   'before_widget' => '<li id="%1$s" class="widget %2$s">',
   'after_widget' => '</li>',
   'before_title' => '<h2 class="widgettitle">',
   'after_title' => '</h2>'
   ));

}

if ( function_exists('register_sidebar') ) {

   register_sidebar(array(
   'name' => 'sidebar 1',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
    ));

   register_sidebar(array(
   'name' => 'footer sidebar 1',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));

}

add_theme_support( 'post-thumbnails' );

function crusoe_custom_logo_setup() {
    $defaults = array(
        'height'      => 44,
        'width'       => 90,
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'crusoe_custom_logo_setup' );

?>
	