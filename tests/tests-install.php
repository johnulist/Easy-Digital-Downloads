<?php


/**
 * @group edd_activation
 */
class Tests_Activation extends WP_UnitTestCase {
	public function setUp() {
		parent::setUp();
	}

	public function test_settings() {
		global $edd_options;
		$this->assertArrayHasKey( 'purchase_page', $edd_options );
		$this->assertArrayHasKey( 'success_page', $edd_options );
		$this->assertArrayHasKey( 'failure_page', $edd_options );
	}
}
