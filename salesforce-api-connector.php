<?php
/**
 * Plugin Name: 		Salesforce API Connector
 * Plugin URI: 			http://github.com/salesforce-api-connector/
 * Description: 		Connect your WordPress hosted application to Salesforce. The Salesforce API Connector is a conduit for making SOAP API request to your SF organization. Authenticate a single API credential user (non user-specific) to make request to your Salesforce data.
 * Version: 			0.1
 * Author: 				Nick Worth
 * Author URI: 			https://github.com/Xtremefaith/
 * Requires at least: 	3.8
 * Tested up to: 		4.0
 *
 * @package   Salesforce_API_Connector
 * @author    Nick Worth
 * @license   GPL-2.0+
 * @link      http://github.com/salesforce-api-connector/
 * @copyright 2014 Nick Worth
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Main Salesforce_API_Connector Class
 * @class Salesforce_API_Connector
 */
class Salesforce_API_Connector {

	const VERSION = '0.1';
	static $file;
    static $plugin_dir_path;
    static $plugin_dir_url;

    /* Saleforce Connect Apps (Sandbox) */
    static $api_url = '3MVG9_7ddP9KqTzc2Xd5SeKdgzi9VH4TWvOcYNGRs5t5_rGQ149IkNsphdjhCUNWfBxerGt4PrXaZ3TOYqAUd';
    static $consumer_key = '3MVG9_7ddP9KqTzc2Xd5SeKdgzi9VH4TWvOcYNGRs5t5_rGQ149IkNsphdjhCUNWfBxerGt4PrXaZ3TOYqAUd';
    static $consumer_secret = '513404674969391196';

	/**
	 * sf_api_connector Constructor.
	 * @since   1.0
	 * @access public
	 * @return sf_api_connector
	 */
	public function __construct() {

		self::$file = __FILE__;
        self::$plugin_dir_path = plugin_dir_path(__FILE__);
        self::$plugin_dir_url = plugin_dir_url(__FILE__);

		// Include required files
		$this->includes();

		// Hooks
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( $this, 'action_links' ) );
		add_action( 'init', array( $this, 'init' ), 0 );

		// Div Library loading complete
		do_action( 'sf_api_connector_loaded', $this );
	}

	/**
	 * Activate the plugin
	 *
	 * @since   1.0
	 * @return  void
	 */
	public static function activate() {
		#TODO: First time instructions
	}

	/**
	 * Deactivate the plugin
	 *
	 * @since   1.0
	 * @return  void
	 */
	public static function deactivate() {
		#TODO: Determine if deactivate() function is necessary
	}
 
	/**
	 * Show action links on the plugin screen
	 *
	 * @since   1.0
	 * @param 	mixed $links
	 * @return 	array
	 */
	public function action_links( $links ) {
		return array_merge( array(
			'<a href="' . admin_url( 'admin.php?page=sf-connector-settings' ) . '">' . __( 'Settings', 'sf_api_connector' ) . '</a>',
			'<a href="' . esc_url( apply_filters( 'sf_api_connector_docs_url', 'http://www.github.com/sf-api-connector', 'sf_api_connector' ) ) . '">' . __( 'Documentation', 'sf_api_connector' ) . '</a>'
		), $links );
	}

	/**
	 * Include required core files used in admin and on the frontend.
	 */
	private function includes() {
		foreach( glob( self::$plugin_dir_path . '/class-*.php') as $class_path ) {
			require_once( $class_path );
		}

		if ( is_admin() ) {
			foreach( glob( self::$plugin_dir_path . '/admin/class-*.php') as $class_path ) {
				require_once( $class_path );
			}
		}
	}

	/**
	 * Init sf_api_connector when WordPress Initialises.
	 */
	public function init() {
		// Before init action
		do_action( 'before_sf_api_connector_init' );

		// Init action
		do_action( 'sf_api_connector_init' );
	}

	/** Helper functions ******************************************************/

	/**
	 * Get the plugin url.
	 *
	 * @return string
	 */
	public function plugins_url() {
		return untrailingslashit( plugins_url( '/', __FILE__ ) );
	}

	/**
	 * Get the plugin path.
	 *
	 * @return string
	 */
	public function plugin_path() {
		return untrailingslashit( plugin_dir_path( __FILE__ ) );
	}

}

/**
 * Returns the main instance of sf_api_connector to prevent the need to use globals.
 *
 * @since  1.0
 * @return sf_api_connector
 */
if(class_exists('Salesforce_API_Connector')){
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('sf_api_connector', 'activate'));
	register_deactivation_hook(__FILE__, array('sf_api_connector', 'deactivate'));
	new Salesforce_API_Connector;
}