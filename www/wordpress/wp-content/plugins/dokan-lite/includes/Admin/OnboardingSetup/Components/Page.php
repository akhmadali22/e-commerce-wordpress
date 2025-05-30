<?php

namespace WeDevs\Dokan\Admin\OnboardingSetup\Components;

use WeDevs\Dokan\Abstracts\SettingsElement;

/**
 * Page Class.
 */
class Page extends SettingsElement {

	/**
	 * Settings Element type.
	 *
	 * @var string $type Settings Element type.
	 */
	protected $type = 'page';

	/**
	 * Data validation.
	 *
	 * @param mixed $data Data for validation.
	 *
	 * @return bool
	 */
	public function data_validation( $data ): bool {
		return is_array( $data );
	}

	/**
	 * Sanitize data for storage.
	 *
	 * @param mixed $data Data for sanitization.
	 *
	 * @return array|string
	 */
	public function sanitize_element( $data ) {
		return wp_unslash( $data );
	}


	/**
	 * Escape data for display.
	 *
	 * @param array $data Data for display.
	 *
	 * @return array
	 */
	public function escape_element( $data ): array {
		return $data;
	}
}
