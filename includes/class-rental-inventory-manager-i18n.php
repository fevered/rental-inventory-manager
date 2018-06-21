<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://sarahrennick.net/
 * @since      1.0.0
 *
 * @package    Rental_Inventory_Manager
 * @subpackage Rental_Inventory_Manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rental_Inventory_Manager
 * @subpackage Rental_Inventory_Manager/includes
 * @author     Sarah Rennick <sarah.rennick@gmail.com>
 */
class Rental_Inventory_Manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rental-inventory-manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
