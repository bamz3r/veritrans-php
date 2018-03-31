<?php

class VeritransConfigTest extends PHPUnit_Framework_TestCase
{

    public function testReturnBaseUrl() {
        \Veritrans\Config::$isProduction = false;
        $this->assertEquals(
            \Veritrans\Config::getBaseUrl(),
            \Veritrans\Config::SANDBOX_BASE_URL);

        \Veritrans\Config::$isProduction = true;
        $this->assertEquals(
            \Veritrans\Config::getBaseUrl(),
            \Veritrans\Config::PRODUCTION_BASE_URL);
    }

    public function tearDown() {
      \Veritrans\Config::$isProduction = false;
    }
}