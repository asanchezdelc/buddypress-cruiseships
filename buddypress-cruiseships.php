<?php
/**
 * Plugin Name: Buddypress Cruisehips
 * Plugin URI: https://github.com/qbanguy/buddypress-cruiseships
 * Description: a buddypress component repurposed from the bp-groups for cruiseship catalog.
 * Version: The plugin's version number. Example: 1.0.0
 * Author: Adrian SanchezdelC
 * Author URI: http://ticadia.com
 * License: A short license name. Example: GPL2
 */


function ship_includes() {
	require( plugin_dir_path( __FILE__ ) . 'bp-ships-loader.php' );
}

function bp_cruisehip_loader() {
	add_action( 'bp_core_components_included',   'ship_includes', 10 );
}

add_action( 'bp_loaded', 'bp_cruisehip_loader', 0 );


?>
