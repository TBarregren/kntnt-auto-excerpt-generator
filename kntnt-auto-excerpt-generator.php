<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Auto Excerpt Generator
 * Plugin URI:        https://github.com/kntnt/kntnt-auto-excerpt-generator
 * GitHub Plugin URI: https://github.com/kntnt/kntnt-auto-excerpt-generator
 * Description:       Creates a better auto excerpt than builtin.
 * Version:           2.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       kntnt-auto-excerpt-generator
 * Domain Path:       /languages
 */

namespace Kntnt\Auto_Excerpt_Generator;

defined( 'WPINC' ) || die;

// Define WP_DEBUG as TRUE and uncomment next line to debug this plugin.
// define( 'KNTNT_AUTO_EXCERPT_GENERATOR', true );

spl_autoload_register( function ( $class ) {
	$ns_len = strlen( __NAMESPACE__ );
	if ( 0 == substr_compare( $class, __NAMESPACE__, 0, $ns_len ) ) {
		require_once __DIR__ . '/classes/' . strtr( strtolower( substr( $class, $ns_len + 1 ) ), '_', '-' ) . '.php';
	}
} );

new Plugin();
