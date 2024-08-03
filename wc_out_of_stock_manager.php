<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://http://localhost/wordpressplugin/
 * @since             1.0.0
 * @package           Wc_out_of_stock_manager
 *
 * @wordpress-plugin
 * Plugin Name:       WC Out Of Stock Manager
 * Plugin URI:        https://http://localhost/wordpressplugin/
 * Description:       Easily assign custom warning low stock values to all your products/categories!
Edit all inventory values directly from WordPress dashboard!
 * Version:           1.0.0
 * Author:            Shivang Technonabs
 * Author URI:        https://http://localhost/wordpressplugin//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc_out_of_stock_manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WC_OUT_OF_STOCK_MANAGER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wc_out_of_stock_manager-activator.php
 */
function activate_wc_out_of_stock_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc_out_of_stock_manager-activator.php';
	Wc_out_of_stock_manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wc_out_of_stock_manager-deactivator.php
 */
function deactivate_wc_out_of_stock_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc_out_of_stock_manager-deactivator.php';
	Wc_out_of_stock_manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wc_out_of_stock_manager' );
register_deactivation_hook( __FILE__, 'deactivate_wc_out_of_stock_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wc_out_of_stock_manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wc_out_of_stock_manager() {

	$plugin = new Wc_out_of_stock_manager();
	$plugin->run();

}
run_wc_out_of_stock_manager();
