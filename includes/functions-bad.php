<?php
/**
 * Wrong / buggy functions for PHPUnit practice
 */

/**
 * Wrong sum function (uses subtraction instead of addition).
 */
function plunit_bad_sum( $a, $b ) {
    return $a - $b; // ❌ should be $a + $b
}

/**
 * Wrong palindrome function (forgets to normalize case and spaces).
 */
function plunit_bad_is_palindrome( $string ) {
    return $string === strrev( $string ); // ❌ fails with "Ana" or "Never odd or even"
}

/**
 * Wrong discount function (applies discount incorrectly).
 */
function plunit_bad_get_discounted_price( $price, $discount ) {
    return $price - $discount; // ❌ subtracts raw number, not percentage
}

/**
 * Wrong factorial function (infinite recursion for n=0).
 */
function plunit_bad_factorial( $n ) {
    return $n * plunit_bad_factorial( $n - 1 ); // ❌ missing base case
}

/**
 * Wrong WooCommerce product stock check (always true).
 */
function plunit_bad_is_product_in_stock( $product_id ) {
    return true; // ❌ ignores real stock
}
