<?php

/**
 * Title: iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw - v3 integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.1
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvancedV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id          = 'ideal-simulator-ideal-advanced-v3';
		$this->name        = 'iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw (v3)';
		$this->provider    = 'ideal-simulator';
		$this->product_url = 'https://www.ideal-checkout.nl/support/ideal-simulator';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvancedV3_ConfigFactory';
	}
}
