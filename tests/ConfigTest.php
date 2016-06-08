<?php

/**
 * Title: iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw - v3 - Config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.2
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvancedV3_ConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvancedV3_Config();

		$url = $config->get_payment_server_url();

		$this->assertEquals( 'https://www.ideal-checkout.nl/simulator/', $url );
	}

	public function test_certificates() {
		$config = new Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvancedV3_Config();

		$certificates = $config->get_certificates();

		foreach ( $certificates as $certificate ) {
			$this->assertFileExists( $certificate );
		}
	}
}
