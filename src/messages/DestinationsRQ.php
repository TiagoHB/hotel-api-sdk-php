<?php
/**
 * User: TiagoHB
 * Date: 03/06/2020
 * Time: 23:14
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\helpers\Destinations;
use hotelbeds\hotel_api_sdk\types\ApiUri;
use Zend\Http\Request;

/**
 * Class AvailabilityRQ
 * @package hotelbeds\hotel_api_sdk\messages
 */
class DestinationsRQ extends ApiRequest {
	/**
	 * AvailabilityRQ constructor.
	 * @param ApiUri $baseUri
	 * @param Destinations $destDataRQ
	 */
	public function __construct(ApiUri $baseUri, Destinations $destDataRQ) {
		parent::__construct($baseUri, self::DESTINATIONS);
		$this->request->setMethod(Request::METHOD_POST);
		$this->setDataRequest($destDataRQ);
	}
}