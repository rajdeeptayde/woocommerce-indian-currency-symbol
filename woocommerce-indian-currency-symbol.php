<?php

/**
 * woocommerce-indian-currency-symbol.php
 * This code is released under the GNU General Public License.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @author RajdeepTayde
 * @since 1.0.0
 *
 * Plugin Name: WooCommerce Indian Currency Symbol Using Webrupee
 * Plugin URI: https://facebook.com/rajdeeptayde
 * Description: It shows the Indian currency symbol when Indian Currency INR is set to default currrnce in woocommerce settings.
 * Version: 1.1.1
 * Author: RajdeepTayde
 * Author URI: https://facebook.com/rajdeeptayde
 * License: GPLv3
 */


add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
	switch( $currency ) {
	case 'INR': $currency_symbol = 'Rs. '; break;
	}
	return $currency_symbol;
}


add_action( 'wp_enqueue_scripts', 'wp_webrupee_js' );

function wp_webrupee_js() {
	wp_enqueue_style( 'wp-webrupee-script', plugin_dir_url( __FILE__ ).'css/webrupee.css' );
}
