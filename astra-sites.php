<?php
/**
 * Plugin Name: Astra Sites
 * Plugin URI: http://www.wpastra.com/pro/
 * Description: Import sites build with Astra theme.
 * Version: 1.0.5
 * Author: Brainstorm Force
 * Author URI: http://www.brainstormforce.com
 * Text Domain: astra-sites
 *
 * @package Astra Sites
 */

/**
 * Set constants.
 */
if( ! defined( 'ASTRA_SITES_VER' ) ) {
	define( 'ASTRA_SITES_VER',  '1.0.5' );
}

if( ! defined( 'ASTRA_SITES_FILE' ) ) {
	define( 'ASTRA_SITES_FILE', __FILE__ );
}

if( ! defined( 'ASTRA_SITES_BASE' ) ) {
	define( 'ASTRA_SITES_BASE', plugin_basename( ASTRA_SITES_FILE ) );
}

if( ! defined( 'ASTRA_SITES_DIR' ) ) {
	define( 'ASTRA_SITES_DIR',  plugin_dir_path( ASTRA_SITES_FILE ) );
}

if( ! defined( 'ASTRA_SITES_URI' ) ) {
	define( 'ASTRA_SITES_URI',  plugins_url( '/', ASTRA_SITES_FILE ) );
}

/**
 * Set constants.
 *
 * @since 1.0.0
 */
if( ! function_exists( 'astra_sites_setup' ) ) :

	function astra_sites_setup() {
		require_once ASTRA_SITES_DIR . 'classes/class-astra-sites.php';
	}

	add_action( 'plugins_loaded', 'astra_sites_setup' );

endif;

