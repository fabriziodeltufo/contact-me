<?php

// CREATE PLUGIN FORM
function fdtcme_template_cb()
{
    // Double check user capabilities
    if ( !current_user_can('manage_options') ) {
      return;
    }

    include( WPPLUGIN_DIR . 'templates/contact-me-form.php' ); // call to form
}


//  CREATE PLUGIN MENU / PAGE
function fdtcme_plugin_menu()
{
    add_menu_page(
        __( 'Contact Me Plugin - Admin Page', 'fdtcme' ), // page title
        __( 'Contact Me', 'fdtcme' ), // menu title
        'manage_options', // capability
        'fdtcme', // plugin text domain / menu-slug
        'fdtcme_template_cb', // callback fx to output the content (form in the page)
        'dashicons-admin-site', // plugin menu icon
        0 // menu position in the sidebar
    );
}

add_action( 'admin_menu', 'fdtcme_plugin_menu' );