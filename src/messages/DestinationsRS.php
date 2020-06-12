<?php
/**
 * User: TiagoHB
 * Date: 03/06/2020
 * Time: 23:14
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\model\AuditData;
use hotelbeds\hotel_api_sdk\model\Destination;

/**
 * Class DestinationsRS
 * @package hotelbeds\hotel_api_sdk\messages
 * @property AuditData auditData Relevant internal information
 * @property Destination destinations List of available destinations
 */

class DestinationsRS extends ApiResponse {
	public function __construct(array $rsData) {
		parent::__construct($rsData);
		if (array_key_exists("destinations", $rsData)) {
			$destinationsObject = new Destination($this->destinations);
			$this->destinations = $destinationsObject;
		}
	}

	/**
	 * @return bool Returns True when response destinations list is empty. False otherwise.
	 */
	public function isEmpty() {
		return ($this->destinations->total === 0);
	}

	/**
	 * @return AuditData Return class of audit
	 */
	public function auditData() {
		return new AuditData($this->auditData);
	}
}