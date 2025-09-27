<?php
/**
 * Example WooCommerce tests for PHPUnit
 */

class WooCommerceTest extends WC_Unit_Test_Case {

	protected $product;

	public function setUp(): void {
		parent::setUp();

		// Create a simple product for testing.
		$this->product = new WC_Product_Simple();
		$this->product->set_name( 'Test Product' );
		$this->product->set_regular_price( 100 );
		$this->product->set_stock_quantity( 10 );
		$this->product->save();
	}

	public function test_get_product_price_with_tax() {
		$price_with_tax = plunit_get_product_price_with_tax( $this->product->get_id() );

		$this->assertNotNull( $price_with_tax );
		$this->assertGreaterThanOrEqual( 100, $price_with_tax );
	}

	public function test_is_product_in_stock() {
		$this->assertTrue( plunit_is_product_in_stock( $this->product->get_id() ) );

		$this->product->set_stock_quantity( 0 );
		$this->product->save();

		$this->assertFalse( plunit_is_product_in_stock( $this->product->get_id() ) );
	}

	public function test_cart_total_with_discount() {
		$cart = WC()->cart;
		$cart->empty_cart();
		$cart->add_to_cart( $this->product->get_id(), 2 ); // add 2 products

		$normal_total   = $cart->get_total( 'edit' );
		$discount_total = plunit_cart_total_with_discount( $cart, 20 );

		$this->assertEquals( $normal_total * 0.8, $discount_total );
	}
}
