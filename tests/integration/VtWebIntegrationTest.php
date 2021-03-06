<?php
require_once 'VtIntegrationTest.php';

class VtWebIntegrationTest extends VtIntegrationTest {
	public function testVtWeb() {
		$charge_params = VtChargeFixture::build('vtweb');
		$redirect_url = \Veritrans\VtWeb::getRedirectionUrl($charge_params);

		$this->assertRegExp("/https:\/\/vtweb.sandbox.[\w\.]+.[\w\.]+\/v2\/vtweb\/[\w\-]+/", $redirect_url);
	}
}