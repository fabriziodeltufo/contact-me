<?php

function fdtcme_settings_cb() {

    include ( WPPLUGIN_DIR . 'backend/contact-me-option.php' );

    include ( WPPLUGIN_DIR . 'backend/contact-me-section.php' );

    include ( WPPLUGIN_DIR . 'backend/contact-me-fields.php' );

    // REGISTERING THE SETTINGS //
    register_setting(
        'fdtcme_settings', // form values
        'contact_me_plugin' //option name
    );

}

add_action( 'admin_init', 'fdtcme_settings_cb' );