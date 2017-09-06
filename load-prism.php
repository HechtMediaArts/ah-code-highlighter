<?php
/**
 *Plugin Name: AH Code Highlighter
 * Plugin URI: https://andreas-hecht.com/prism-syntax-highlighter/
 * Description: Dead simple to use and extrem lightweigt Code Highlighting with 7 different themes. Based on Lea Verou's Prism.js.
 * Version: 2.0.3
 * Author: Andreas Hecht
 * Author URI: https://andreas-hecht.com
 * Based on a Plugin from Truchot Guillaume - WP Syntax Highlighter
 * License: GPL-3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Load Functions
 * 
 * @since 2.0.0
 */
require_once( 'ah-prism-syntax-highlighter.php' );


/**
 * Load Options Page
 * 
 * @since 2.0.0
 */
require_once( 'prism-admin-settings.php' );


/**
 * Load Functions CSS Files
 * 
 * @since 2.0.0
 */
require_once( 'inc/prism-functions.php' );


/**
 * Add plugin action links.
 *
 * Add a link to the settings page on the plugins.php page.
 *
 * @since 2.0.0
 *
 * @param  array  $links List of existing plugin action links.
 * @return array         List of modified plugin action links.
 */
function prism_plugin_action_links( $links ) {

	$links = array_merge( array(
		'<a href="' . esc_url( admin_url( '/options-general.php?page=prism' ) ) . '">' . __( 'Settings', 'textdomain' ) . '</a>'
	), $links );

	return $links;

}
add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'prism_plugin_action_links' );
