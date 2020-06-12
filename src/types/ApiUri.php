<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 10/27/2015
 * Time: 3:15 AM
 */

namespace hotelbeds\hotel_api_sdk\types;

use StringTemplate;
use Zend\Uri\Http;

/**
 * Class ApiUri
 * @package hotelbeds\hotel_api_sdk\types
 */
class ApiUri extends Http {
	const BASE_PATH = '/hotel-api';
	const CONTENT_PATH = '/hotel-content-api';
	const API_URI_FORMAT = '{basepath}/{version}';

	/**
	 * Prepare URL for the operation
	 * @param ApiVersion $version Version of API used for client
	 */
	public function prepare(ApiVersion $version, $basepath = null) {
		$strSubs = new StringTemplate\Engine;
		if ($basepath == null) {
			$this->setPath($strSubs->render(self::API_URI_FORMAT,
				["basepath" => self::BASE_PATH,
					"version" => $version->getVersion()]));
		} else {
			$this->setPath($strSubs->render(self::API_URI_FORMAT,
				["basepath" => self::CONTENT_PATH,
					"version" => $version->getVersion()]));
		}
	}
}