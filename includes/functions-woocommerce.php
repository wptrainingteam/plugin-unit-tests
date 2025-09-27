<?php
/**
 * Example WooCommerce functions for PHPUnit testing
 */

/**
 * Get product price with tax included.
 *
 * @param int $product_id
 * @return float|null
 */
function plunit_get_product_price_with_tax( $product_id ) {
    $product = wc_get_product( $product_id );

    if ( ! $product ) {
        return null;
    }

    return wc_get_price_including_tax( $product );
}

/**
 * Check if a product is in stock.
 *
 * @param int $product_id
 * @return bool
 */
function plunit_is_product_in_stock( $product_id ) {
    $product = wc_get_product( $product_id );

    if ( ! $product ) {
        return false;
    }

    return $product->is_in_stock();
}

/**
 * Calculate cart total with discount.
 *
 * @param WC_Cart $cart
 * @param float   $discount Percentage discount (0–100).
 * @return float
 */
function plunit_cart_total_with_discount( $cart, $discount ) {
    if ( $discount < 0 || $discount > 100 ) {
        return $cart->get_total( 'edit' ); // invalid discount, return normal total
    }

    $total = $cart->get_total( 'edit' ); // raw total as float
    return round( $total - ( $total * ( $discount / 100 ) ), 2 );
}
