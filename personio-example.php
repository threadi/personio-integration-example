<?php
/**
 * Plugin Name:       Personio Integration Example
 * Description:       Demo-Plugin for an extension for Personio Integration Light
 * Requires at least: 4.9.24
 * Requires PHP:      8.0
 * Version:           1.0.0
 * Author:            laOlaWeb
 * Author URI:        https://laolaweb.com
 * Requires Plugins:  personio-integration-light
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       personio-integration-example
 *
 * @package personio-integration-example
 */

add_action(
	'plugins_loaded',
	function () {
		// add the class.
		require_once __DIR__ . '/hallo-world.php';

		// add the extension.
		add_filter( 'personio_integration_extend_position_object', 'personio_integration_example_add_extension' );
	}
);

/**
 * Add the custom extension.
 *
 * @param array $list List of extensions.
 *
 * @return array
 */
function personio_integration_example_add_extension( array $list ): array {
	$list[] = 'Hallo_World'; // must be the class name, if you use namespaces add them here too.
	return $list;
}
