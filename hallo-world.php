<?php
/**
 * File to handle saving and display of Personio XML for single position.
 *
 * @package personio-integration-example
 */

// prevent direct access.
defined( 'ABSPATH' ) || exit;

use PersonioIntegrationLight\PersonioIntegration\Extensions_Base;
use PersonioIntegrationLight\Plugin\Settings;

/**
 * Object to handle availability-checks for positions.
 */
class Hallo_World extends Extensions_Base {
	/**
	 * The internal name of this extension.
	 *
	 * @var string
	 */
	protected string $name = 'hallo_world';

	/**
	 * Name of the setting field which defines its state.
	 *
	 * @var string
	 */
	protected string $setting_field = 'personioIntegrationExampleStatus';

	/**
	 * Internal name of the used category.
	 *
	 * @var string
	 */
	protected string $extension_category = 'positions';

	/**
	 * Initialize this plugin.
	 *
	 * @return void
	 */
	public function init(): void {
		// bail if extension is not enabled.
		if ( ! $this->is_enabled() ) {
			return;
		}

		// TODO Add here your custom extension functionalities.
	}

	/**
	 * Return label of this extension.
	 *
	 * @return string
	 */
	public function get_label(): string {
		return __( 'Hallo World', 'personio-integration-example' );
	}

	/**
	 * Return whether this extension is enabled (true) or not (false).
	 *
	 * @return bool
	 */
	public function is_enabled(): bool {
		return 1 === absint( Settings::get_instance()->get_setting( $this->get_settings_field_name() ) );
	}

	/**
	 * Return the description for this extension.
	 *
	 * @return string
	 */
	public function get_description(): string {
		return __( 'Hallo World Example for an extension of positions.', 'personio-integration-example' );
	}

	/**
	 * Whether this extension is enabled by default (true) or not (false).
	 *
	 * @return bool
	 */
	protected function is_default_enabled(): bool {
		return false;
	}
}
