<?php
/*
* Plugin Name:       Contact Me
* Plugin URI:        https://github.com/fabriziodeltufo/contact-me
* Description:       Contact Me fixed banner for web sites.
* Version:           1.0.0
* Requires at least: 6.4.2
* Requires PHP:      7.4.33
* Author:            Fabrizio Del Tufo
* Author URI:        https://github.com/fabriziodeltufo
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       fdtcme
* Domain Path:       /languages
*/


/* Security  */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
    // Exit if accessed directly
}

// DEFINE CONST WPPLUGIN_DIR
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );



// STYLE / JS SET TO PLUGIN
function fdtcme_style_and_scripts() {
    wp_enqueue_style( 'fdtcme-style', plugins_url( 'style.css', __FILE__ ) );
    wp_enqueue_script( 'fdtcme-scripts', plugins_url( 'scripts.js', __FILE__ ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'fdtcme_style_and_scripts' );





// HTML FRONT END BANNER

function fdtcme_header_code() {

    $options = get_option( 'contact_me_plugin' );
    
    $label = $options['label'];
    $email = $options[ 'email' ];
    $banner_pos = $options['banner_pos']; // int 100,400,700 - top,midle,bottom

    if ( isset( $options[ 'banner_pos' ] ) ) {
        $banner_pos = esc_html( $options[ 'banner_pos' ] );
        if ($banner_pos == 'TOP'){
            $top_pos = '50';
        }
        if ($banner_pos == 'MIDDLE'){
            $top_pos = '400';
        }
        if ($banner_pos == 'BOTTOM'){
            $top_pos = '600';
        }
   
    }

  
	echo '<div style="top: '. $top_pos . 'px" id="fdtcme-tab" class="fdtcme-banner">';
    echo '<p><a target = "_blank" href="mailto:' . $email . '?subject=Contact From Web Site">' . __( $label, 'fdcme' ) . '</a></p>';

	echo '</div>';
	

}
add_action( 'wp_body_open', 'fdtcme_header_code' );


// PLUGIN BACKEND
include (WPPLUGIN_DIR . 'backend/contact-me-menu.php');
include (WPPLUGIN_DIR . 'backend/contact-me-settings.php');





