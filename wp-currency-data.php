<?php
/**
 * Plugin Name:     WP Currency Data
 * Plugin URI:      https://github.com/davsilveira/wp-currency-data
 * Description:     A plugin to show Currency data in a website
 * Author:          Darvin da Silveira
 * Author URI:      https://www.linkedin.com/in/darvin-da-silveira-9b016155/
 * Text Domain:     wp-currency-data
 * Domain Path:     /languages
 * Version:         0.0.1
 *
 * @package         DavSilveira\WpCurrencyData
 */

namespace DavSilveira\WpCurrencyData;

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'WPCURRENCYDATA_PLUGIN_FILE' ) ) {
    define('WPCURRENCYDATA_PLUGIN_FILE', __FILE__);
	define('WPCURRENCYDATA_PLUGIN_URL', plugins_url('/', __FILE__));
    define('WPCURRENCYDATA_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
}

require_once dirname(__FILE__)."/vendor/autoload.php";

// Load WP CLI command(s) on demand.
if ( defined( 'WP_CLI' ) && WP_CLI ) {
    require WPCURRENCYDATA_PLUGIN_DIR . 'src/WpCurrencyDataCLI.php';
}

/**
 * Returns the main instance of this plugin.
 *
 * @return WpCurrencyData
 */
function wp_currency_data() {
	return WpCurrencyData::instance();
}

wp_currency_data();