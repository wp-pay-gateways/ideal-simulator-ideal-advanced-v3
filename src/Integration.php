<?php

class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvancedV3_Integration {
	public function __construct() {
		$this->id       = 'ideal-simulator-ideal-advanced-v3';
		$this->name     = 'iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw - v3';
		$this->provider = 'ideal-simulator';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Gateway';
	}
}
