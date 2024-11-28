<?php
add_action( 'wp_enqueue_scripts', 'add_style_assets' );
function add_style_assets() {
    //Style.ss
    wp_enqueue_style( 'StyleCSS', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/respansive.css', array(), '1.0.0' );
	wp_enqueue_style( 'fontawsome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '1.0.0' );


    // Scripts
    wp_enqueue_script( 'JavaScript', get_template_directory_uri() . '/app.js', array(), '1.0.1', true );
	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true );

}

add_action( 'init', 'theme_setup' );
function theme_setup() {

	register_nav_menus(
		array(
			'one_menu' => __( 'منوی اصلی سایت' ),
			)
	);
}


if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => ' ابزارک های فوتر سایت ',
		'id'   => 'footer-site',
		'description'   => ' کلیه مواردی که باید در قسمت فوتر قرار بگیرد ',
		'before_widget' => '<div class="footer-tow">',
		'before_title'  => '<div class="title-footer">
        <h3>',
		'after_title'   => '</h3>
        </div>',
		'after_widget'  => '</div>'
	));
}


if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ){
	add_image_size( 'productpicture', 240 , 210 , true );
}


// add theme suport for woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
