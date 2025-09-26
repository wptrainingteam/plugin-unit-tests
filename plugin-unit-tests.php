<?php
/**
 * Plugin Name: Plugin Unit Tests
 * Plugin URI:  https://github.com/davidperezgar/plugin-unit-tests
 * Description: Plugin Unit Tests.
 * Version:     1.0.0
 * Author:      davidperez
 * Author URI:  https://github.com/davidperezgar
 * Text Domain: plugin-unit-tests
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Requires at least: 5.4
 * Requires PHP: 7.0
 * Requires Plugins: Required plugins
 *
 * @package     plugin-unit-tests
 * @author      davidperez
 * @copyright   2025 DavidPerez
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 *
 * Prefix:      plunit_
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

define( 'PLUNIT_VERSION', '1.0.0' );
define( 'PLUNIT_PLUGIN', __FILE__ );
define( 'PLUNIT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUNIT_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

require_once PLUNIT_PLUGIN_PATH . 'includes/functions-to-test.php';