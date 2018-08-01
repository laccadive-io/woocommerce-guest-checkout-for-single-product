<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://laccadive.io/
 * @since      1.0.0
 *
 * @package    Wc_Guest_Checkout_Single_Product
 * @subpackage Wc_Guest_Checkout_Single_Product/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wc_Guest_Checkout_Single_Product
 * @subpackage Wc_Guest_Checkout_Single_Product/includes
 * @author     Hussain Thajutheen <hussain@laccadive.io>
 */
class Wc_Guest_Checkout_Single_Product_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wc-guest-checkout-single-product',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
