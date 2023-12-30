<?php

function fdtcme_settings_cb() {

    include ( FDTCME_PLUGIN_DIR . 'backend/contact-me-option.php' );

    include ( FDTCME_PLUGIN_DIR . 'backend/contact-me-section.php' );

    include ( FDTCME_PLUGIN_DIR . 'backend/contact-me-fields.php' );

    // REGISTERING THE SETTINGS //
   register_setting(
        'fdtcme_settings', // form values
        'fdtcme_contact_me_plugin' //option name
    );



}

add_action( 'admin_init', 'fdtcme_settings_cb' );

