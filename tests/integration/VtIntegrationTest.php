<?php

abstract class VtIntegrationTest extends PHPUnit_Framework_TestCase {
	public static function setUpBeforeClass() {
		\Veritrans\Config::$serverKey = getenv('SERVER_KEY');
		\Veritrans\Config::$clientKey = getenv('CLIENT_KEY');
		\Veritrans\Config::$isProduction = false;
	}

	public function tearDown() {
		// One second interval to avoid throttle
		sleep(1);
	}
}