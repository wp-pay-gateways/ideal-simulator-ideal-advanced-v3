<?php

/**
 * Title: iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw - v3 integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvancedV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id       = 'ideal-simulator-ideal-advanced-v3';
		$this->name     = 'iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw - v3';
		$this->provider = 'ideal-simulator';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvancedV3_ConfigFactory';
	}
}
