<?php

	get_template_part( '/inc/tgm/class-tgm-plugin-activation');
/**
 * Recommended plugins.
 */
function food_grocery_store_proregister_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Contact Form 7', 'food-grocery-store' ),
			'slug'             => 'contact-form-7',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),	
		array(
			'name'             => __( 'WooCommerce', 'food-grocery-store' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'GTranslate', 'food-grocery-store' ),
			'slug'             => 'gtranslate',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Currency Switcher for WooCommerce', 'food-grocery-store' ),
			'slug'             => 'currency-switcher-woocommerce',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'YITH WooCommerce Wishlist', 'food-grocery-store' ),
			'slug'             => 'yith-woocommerce-wishlist',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'food_grocery_store_proregister_recommended_plugins' );