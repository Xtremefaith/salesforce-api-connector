<?php
/**
 * Salesforce API Connector Admin
 * @package   Salesforce_API_Connector
 * @author    Nick Worth
 * @license   GPL-2.0+
 * @link      http://github.com/salesforce-api-connector/
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

class Salesforce_API_Connector_Admin {

	public function __construct() {
		add_action('admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	 * Register the administration menu for this plugin into the WordPress Dashboard menu.
	 * @since 1.0.0
	 */
	public function admin_menu() {
		add_options_page( 'Salesforce API Connector','Salesforce API Connector','manage_options','options_salesforce-api-connector', array( $this, 'settings_page' ) );
	}

	/**
	 * Salesforce API Connector Options page
	 * @since 1.0.0
	 */
	public function settings_page(){
		_e('<div class="wrap">
			<img class="alignleft" style="margin:0 10px 10px 0" alt="" src="'.Salesforce_API_Connector::$plugin_dir_url.'assets/images/sf.png" />
			<h2>Saleforce API Connector</h2>
		</div>');
	}

}

add_action( 'sf_api_connector_loaded', 'init_Salesforce_API_Connector_Admin' );
function init_Salesforce_API_Connector_Admin(){ new Salesforce_API_Connector_Admin(); }

?>