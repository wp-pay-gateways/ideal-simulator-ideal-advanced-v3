<?php

class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvancedV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id       = 'ideal-simulator-ideal-advanced-v3';
		$this->name     = 'iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw - v3';
		$this->provider = 'ideal-simulator';
	}
}
