<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           wp-bootstrap-recent
 *
 * @wordpress-plugin
 * Plugin Name:       Responsive Bootstrap Recent Posts Slider
 * Plugin URI:        https://github.com/Narthur/wp-bootstrap-recent
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nathan Arthur
 * Author URI:        http://NathanArthur.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-bootstrap-recent
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
namespace {
	if ( ! defined( 'WPINC' ) ) {
		die;
	}
}

namespace bootstrap_slider_space {
	function activate() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-bootstrap_slider-activator.php';
		Plugin_Name_Activator::activate();
	}

	function deactivate() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-bootstrap_slider-deactivator.php';
		Bootstrap_Slider_Deactivator::deactivate();
	}

	register_activation_hook( __FILE__, 'activate_plugin_name' );
	register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

	require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';

	function run() {

		$plugin = new bootstrap_slider();
		$plugin->run();

	}

	run();
}
