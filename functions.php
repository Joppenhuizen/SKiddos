<?php
if ( ! function_exists( 'skiddotheme_setup' ) ) {

	function skiddotheme_setup() {

		register_nav_menus( array(
			'menu-top' => esc_html__( 'Header Menu', 'skiddotheme' ),
		) );

	}
}
add_action( 'after_setup_theme', 'skiddotheme_setup' );

function custom_post_types() {
    register_post_type('personeel',
                       array(
                           'labels'      => array(
                               'name'          => 'Personeel',
                               'singular_name' => 'Personeel',
                               'add_new' => 'Personeel toevoegen',
                               'edit_item' => 'Personeel aanpassen',
                               'new_item' => 'Personeel toevoegen',
                               'view_item' => 'Personeel bekijken',
                           ),
                           'public'      => true,
                           'has_archive' => true,
                           'menu_icon'	 => 'dashicons-groups'
                       )
    );
    register_post_type('type_opvang',
                       array(
                           'labels'      => array(
                               'name'          => 'Type Opvang',
                               'singular_name' => 'Type Opvang',
                               'add_new' => 'Nieuw type toevoegen',
                               'edit_item' => 'Type aanpassen',
                               'new_item' => 'Nieuw type toevoegen',
                               'view_item' => 'Type bekijken',
                           ),
                           'public'      => true,
                           'menu_icon'   => 'dashicons-buddicons-activity',
                       )
    );
    register_post_type('testimonials',
                       array(
                           'labels'      => array(
                               'name'          => 'Testimonials',
                               'singular_name' => 'Testimonial',
                               'add_new' => 'Testimonial toevoegen',
                               'edit_item' => 'Testimonial aanpassen',
                               'new_item' => 'Testimonial toevoegen',
                               'view_item' => 'Testimonial bekijken',
                           ),
                           'public'      => true,
                           'publicly_queryable'  => false,
                           'menu_icon'   => 'dashicons-star-filled'
                       )
    );
}
add_action('init', 'custom_post_types');

define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

include_once( MY_ACF_PATH . 'acf.php' );

add_filter('acf/settings/url', 'my_acf_settings_url');

function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

add_filter('acf/settings/save_json', 'acf_json_save_point');
 
function acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/includes/acf';
    return $path;
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Thema Opties',
		'menu_title'	=> 'Thema Opties',
		'menu_slug' 	=> 'thema-opties',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Thema Footer Gegevens',
		'menu_title'	=> 'Thema Footer Gegevens',
		'parent_slug'	=> 'thema-opties',
	));

}

function skiddo_scripts() {


  global $template;

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.min.css' );
	wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/dist/js/jquery-3.4.1.min.js', array(), '1.0.0', true );
 	wp_enqueue_script( 'skiddo-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );
 	wp_enqueue_style( 'skiddo-style', get_stylesheet_uri() );
  wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/dist/js/slick.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/dist/css/slick.css' );
  wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css' );

  if(basename( $template ) === 'page-galerij.php')
  {
    wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/dist/css/lightbox.min.css' );
    wp_enqueue_script( 'lightbox-script', get_stylesheet_directory_uri() . '/dist/js/lightbox.min.js', array('jquery'), '1.0.0', true );
  }

    
}
add_action('wp_enqueue_scripts','skiddo_scripts');



function archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'archive_title' );

?>