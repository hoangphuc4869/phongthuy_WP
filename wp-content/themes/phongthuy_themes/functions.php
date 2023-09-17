<?php

// /* Disable WordPress Admin Bar for all users */
// add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

// support woocommerce



function my_custom_wc_theme_support()
{

    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-lightbox');

    add_theme_support('wc-product-gallery-slider');
    // add_theme_support('wc-product-gallery-zoom');
}
add_action('after_setup_theme', 'my_custom_wc_theme_support');

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu PC'),
			'menu-2' => __('Menu Footer'),
			'menu-3' => __('Menu Footer 2'),
            'menu-4' => __('Menu Service')
		)
	);
}
add_action('init', 'm_register_menu');


// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


// thanh tìm kiếm

function search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <input type="search" class="search-field" value="' . get_search_query() . '" name="s" id="s" placeholder="Tìm kiếm..."/>

    <button type="submit"><i class="far fa-search"></i></button>
    </form>';
 
    return $form;
	}
	add_shortcode( 'wp_search_form', 'search_form' );


/**
 Change a currency symbol đ to VND
 */
 add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2); 
 function change_existing_currency_symbol( $currency_symbol, $currency ) {
 switch( $currency ) {
 case 'VND': $currency_symbol = 'VND'; break;
 }
 return $currency_symbol;
 }


/**
 * Rename "home" in breadcrumb
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
function wcc_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Apartment'
    $defaults['home'] = 'Trang chủ';
    return $defaults;
}



// sửa nut add to cart

add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
 
/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function custom_woocommerce_product_add_to_cart_text() {
    global $product;
    
    $product_type = $product->product_type;
    
    switch ( $product_type ) {
        case 'external':
            return __( 'Buy product', 'woocommerce' );
        break;
        case 'grouped':
            return __( 'View products', 'woocommerce' );
        break;
        case 'simple':
            return __( 'Đặt hàng', 'woocommerce' );
        break;
        case 'variable':
            return __( 'Đặt hàng', 'woocommerce' );
        break;
        default:
            return __( 'Read more', 'woocommerce' );
    }
    
}


// xóa input trong checkout

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_company']);
     // unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_postcode']);
     unset($fields['billing']['billing_address_2']);
     unset($fields['billing']['billing_state']);
     return $fields;
}


//Thay đổi thứ tự sorting
add_filter( 'woocommerce_catalog_orderby', 'misha_change_sorting_options_order', 5 );
 
function misha_change_sorting_options_order( $options ){
 
    $options = array(
 
        //'menu_order' => __( 'Default sorting', 'woocommerce' ), // you can change the order of this element too
        'featured'      => __( 'Sản phẩm nổi bật', 'woocommerce' ),
        'price'      => __( 'Giá tăng dần', 'woocommerce' ), // I need sorting by price to be the first
        'price-desc' => __( 'Giá giảm dần', 'woocommerce' ),
        'oldest_to_recent' => __( 'Cũ nhất', 'woocommerce' ), 
        'date'       => __( 'Mới nhất', 'woocommerce' ), 
 
        // and leave everything else without changes
        'popularity' => __( 'Bán chạy nhất', 'woocommerce' ),
        
        
 
    );
 
    return $options;
 
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);