<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://http://localhost/wordpressplugin/
 * @since      1.0.0
 *
 * @package    Wc_out_of_stock_manager
 * @subpackage Wc_out_of_stock_manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wc_out_of_stock_manager
 * @subpackage Wc_out_of_stock_manager/includes
 * @author     Shivang Technonabs <ojhaakash1996@gmail.com>
 */
class Wc_out_of_stock_manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wc_out_of_stock_manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
