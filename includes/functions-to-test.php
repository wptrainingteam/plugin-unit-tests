<?php
/**
 * Examples of functions to format data
 *
 * @package    plugin-unit-tests
 * @author     davidperez
 * @copyright  2025 DavidPerez
 * @version    1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Remove special characters.
 *
 * @param string $string The string to remove special characters from.
 * @return string
 */
function plunit_remove_special_characters( $string ) {
	$replacements = array(
		'á' => 'a',
		'é' => 'e',
		'í' => 'i',
		'ó' => 'o',
		'ú' => 'u',
		'ñ' => 'n',
		'ç' => 'c',
		'Á' => 'A',
		'É' => 'E',
		'Í' => 'I',
		'Ó' => 'O',
		'Ú' => 'U',
		'Ñ' => 'N',
		'Ç' => 'C',
	);
	$string = strtr( $string, $replacements );
	return preg_replace( '/[^a-zA-Z0-9]/', '', $string );
}


/**
 * Sum two numbers.
 *
 * @param int|float $a The first number.
 * @param int|float $b The second number.
 * @return int|float
 */
function plunit_sum( $a, $b ) {
	return $a + $b;
}


/**
 * Multiply two numbers.
 *
 * @param int|float $a The first number.
 * @param int|float $b The second number.
 * @return int|float
 */
function plunit_multiply( $a, $b ) {
	return $a * $b;
}

/**
 * Check if a string is palindrome.
 *
 * @param string $string The string to check.
 * @return bool
 */
function plunit_is_palindrome( $string ) {
	$clean = strtolower( preg_replace( '/[^a-z0-9]/i', '', $string ) );
	return $clean === strrev( $clean );
}

/**
 * Get discounted price.
 *
 * @param float $price The price to discount.
 * @param float $discount Discount in percentage (0-100).
 * @return float
 */
function plunit_get_discounted_price( $price, $discount ) {
	if ( $discount < 0 || $discount > 100 ) {
			return $price; // invalid discount.
	}

	return round( $price - ( $price * ( $discount / 100 ) ), 2 );
}
