<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://http://localhost/wordpressplugin/
 * @since      1.0.0
 *
 * @package    Wc_out_of_stock_manager
 * @subpackage Wc_out_of_stock_manager/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wc_out_of_stock_manager
 * @subpackage Wc_out_of_stock_manager/admin
 * @author     Shivang Technonabs <ojhaakash1996@gmail.com>
 */
class Wc_out_of_stock_manager_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		// Register the admin menu
        add_action( 'admin_menu', array( $this, 'add_plugin_menu' ) );
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wc_out_of_stock_manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_out_of_stock_manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wc_out_of_stock_manager-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wc_out_of_stock_manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_out_of_stock_manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wc_out_of_stock_manager-admin.js', array( 'jquery' ), $this->version, false );

	}

	 /**
     * Add menu pages and submenus.
     *
     * @since    1.0.0
     */
    public function add_plugin_menu() {
        add_menu_page(
            'Out of stock! Manager', // Page title
            'Out of stock! Manager', // Menu title
            'manage_options',        // Capability
            'wc_out_of_stock_manager', // Menu slug
            array( $this, 'display_main_menu_page' ), // Callback function
            'dashicons-upload',    // Icon URL (Dashicons icon)
            9                        // Position
        );

        add_submenu_page(
            'wc_out_of_stock_manager', // Parent slug
            'Out of stock! Manager', // Page title
            'Out of stock! Manager', // Menu title
            'manage_options',        // Capability
            'wc_out_of_stock_manager', // Menu slug
            array( $this, 'display_main_menu_page' ) // Callback function
        );

        add_submenu_page(
            'wc_out_of_stock_manager', // Parent slug
            'Stock Values Configurator', // Page title
            'Stock Values Configurator', // Menu title
            'manage_options',            // Capability
            'stock_values_configurator', // Menu slug
            array( $this, 'display_stock_values_page' ) // Callback function
        );

        add_submenu_page(
            'wc_out_of_stock_manager', // Parent slug
            'Out of Stock! Texts',     // Page title
            'Out of Stock! Texts',     // Menu title
            'manage_options',          // Capability
            'out_of_stock_texts',      // Menu slug
            array( $this, 'display_out_of_stock_texts_page' ) // Callback function
        );
    }

	 /**
     * Display the main menu page.
     *
     * @since    1.0.0
     */
    public function display_main_menu_page() {
        echo '<div class="wrap"><h1>Out of stock! Manager</h1></div>';
    }

    /**
     * Display the stock values configurator page.
     *
     * @since    1.0.0
     */
    public function display_stock_values_page() {
		 // Include the form file
		 include plugin_dir_path( __FILE__ ) . 'partials\shvig-options-configurator.php';
    }

    /**
     * Display the out of stock texts page.
     *
     * @since    1.0.0
     */
    public function display_out_of_stock_texts_page() {
        echo '<div class="wrap"><h1>Out of Stock! Texts</h1></div>';
    }

}
