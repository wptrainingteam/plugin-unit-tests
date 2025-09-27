<?php
/**
 * Class FunctionsTest
 * 
 * command: composer test --filter FunctionsTest
 *
 * @package Plugin_Unit_Tests_Done
 */

class FunctionsTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function test_special_characters() {
		$char_special = 'áéíóúñç';
		$char_special_formatted = plunit_remove_special_characters( $char_special );
		$this->assertEquals( 'aeiounc', $char_special_formatted );
	}

	public function test_sum() {
		$sum = plunit_sum( 1, 2 );
		$this->assertEquals( 3, $sum );
	}
	
	public function test_is_palindrome() {
		$is_palindrome = plunit_is_palindrome( 'racecar' );
		$this->assertTrue( $is_palindrome );

		$this->assertTrue( plunit_is_palindrome( 'Ana' ) );
		$this->assertTrue( plunit_is_palindrome( 'A man a plan a canal Panama' ) );
		$this->assertFalse( plunit_is_palindrome( 'WordPress' ) );
	}

	public function test_get_discounted_price() {
		$discounted_price = plunit_get_discounted_price( 100, 10 );
		$this->assertEquals( 90, $discounted_price );
	}
}
