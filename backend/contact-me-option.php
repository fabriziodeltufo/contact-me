<?php

// SETTING THE OPTIONS: label, email in the banner

// If option is not present, it is created in wp-options table.

if ( !get_option( 'fdtcme_contact_me_plugin' ) ) {
    add_option( 'fdtcme_contact_me_plugin' ) ;
    $options = array(
        'label' => 'Contact Me !',
        'email' => 'info@domain.com',
        'banner_pos' => 'TOP'
    );

    update_option( 'fdtcme_contact_me_plugin', $options );

}

