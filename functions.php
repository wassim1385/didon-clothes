<?php
/**
 * Juliane Felken functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Juliane Felken
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/customizer.php';

add_action( 'wp_enqueue_scripts', 'juliane_scripts' );

function juliane_scripts() {
    //include bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.6.1', true);
    //include bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.6.1', 'all' );
    //Main Styles
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all' );
    //Google fonts
    wp_enqueue_style( 'google-fonts', get_template_directory_uri() . '/inc/fonts/stylesheet.css');
    //Flex slider CSS AND JS
    wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true);
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true);
    //include bootstrap CSS
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );

}

add_action( 'after_setup_theme', 'juliane_config', 0 );

function juliane_config() {
    register_nav_menus( 
        array(
            'juliane_main_menu' => 'Juliane Main Menu',
            'juliane_footer_menu' => 'Juliane Footer Menu'
        )
    );

    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width'    => 255,
        'product_grid'          => array(
            'default_rows'      => 10,
            'min_rows'          => 5,
            'max_rows'          => 10,
            'default_columns'   => 1,
            'min_columns'       => 1,
            'max_columns'       => 1
        )
    ) );
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('custom-logo', array(
        'height'        => 85,
        'width'         => 160,
        'flex_height'   => true,
        'flex_width'    => true,
    ));

    add_image_size( 'juliane-slider-image', 1920, 800, array( 'center', 'center' ) );
    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }
}

if( class_exists('WooCommerce') ) {
    require get_template_directory() . '/inc/wc-modifications.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'juliane_woocommerce_header_add_to_cart_fragment' );

function juliane_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

