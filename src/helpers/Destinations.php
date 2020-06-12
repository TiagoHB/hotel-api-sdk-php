<?php
/**
 * User: TiagoHB
 * Date: 03/06/2020
 * Time: 16:31 PM
 */

namespace hotelbeds\hotel_api_sdk\helpers;
use hotelbeds\hotel_api_sdk\model\Destination;

/**
 * Class Destination
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property string $fields List of fields you want to receive in the response
 * @property string $codes Filter to limit the results for an specific destination or list of destinations.
 * @property string $countryCodes Filter for a specific country of list of countries.
 * @property string $language Language of the response
 */

class Destinations extends ApiHelper {
	/**
	 * Availability constructor.
	 */
	public function __construct() {
		$this->validFields = [
			"fields" => "string",
			"codes" => "string",
			"countryCodes" => "string",
			"language" => "string",
		];
	}
}