<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://sarahrennick.net/
 * @since             1.0.0
 * @package           Rental_Inventory_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       Rental Inventory Manager
 * Plugin URI:        https://github.com/fevered/rental-inventory-manager
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Sarah Rennick
 * Author URI:        https://sarahrennick.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rental-inventory-manager
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rental-inventory-manager-activator.php
 */
function activate_rental_inventory_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rental-inventory-manager-activator.php';
	Rental_Inventory_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rental-inventory-manager-deactivator.php
 */
function deactivate_rental_inventory_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rental-inventory-manager-deactivator.php';
	Rental_Inventory_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rental_inventory_manager' );
register_deactivation_hook( __FILE__, 'deactivate_rental_inventory_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rental-inventory-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rental_inventory_manager() {

	$plugin = new Rental_Inventory_Manager();
	$plugin->run();

}
run_rental_inventory_manager();
