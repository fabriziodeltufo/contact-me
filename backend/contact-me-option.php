<?php

    // SETTING THE OPTIONS: label, email in the banner
    // If option is not present, it is created in wp-options table.

    if ( !get_option( 'contact_me_plugin' ) ) {
        add_option( 'contact_me_plugin' ) ;
        $options = array(
            'label' => 'Contact Me !',
            'email' => 'info@domain.com',
            // 'top_pos' => '50',
            'banner_pos' => 'TOP'
        );
        update_option( 'contact_me_plugin', $options );

    }