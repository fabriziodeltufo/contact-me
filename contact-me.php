<?php
/*
* Plugin Name:       Contact Me
* Plugin URI:        https://example.com/plugins/the-basics/
* Description:       Contact Me fixed banner for web sites.
* Version:           1.0.0
* Requires at least: 5.2
* Requires PHP:      7.2
* Author:            Fabrizio Del Tufo
* Author URI:        https://github.com/fabriziodeltufo
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Update URI:        https://example.com/my-plugin/
* Text Domain:       fdtcme
* Domain Path:       /languages
*/

/* Security  */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
    // Exit if accessed directly
}




// Add Style / Js Script to plugin
function fdtcme_style_and_scripts() {
    wp_enqueue_style( 'fdtcme-style', plugins_url( 'style.css', __FILE__ ) );
    wp_enqueue_script( 'fdtcme-scripts', plugins_url( 'scripts.js', __FILE__ ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'fdtcme_style_and_scripts' );





/**
* Add html to left / top of the page
*/

function fdtcme_header_code() {

	echo '<div id="fdtcme-tab" class="fdtcme-banner">';
	echo '<p><a href = "mailto:info@dominio.com?Subject=Contact%20Request%20from%20WebSite" target = "_blank">' . __( 'Contact Me', 'fdcme' ) . '</a></p>';
	echo '</div>';
	

}
add_action( 'wp_body_open', 'fdtcme_header_code' );

