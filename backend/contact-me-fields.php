<?php

/*  -----------------------------------------------------------------------------------------------
SETTING LABEL FIELD
--------------------------------------------------------------------------------------------------- */

function fdtcme_label_field_cb() {

    $options = get_option( 'contact_me_plugin' );

    $label = '';

    if ( isset( $options[ 'label' ] ) ) {
        $label = esc_html( $options[ 'label' ] );
    }

    echo '<input REQUIRED type="text" name="contact_me_plugin[label]" value="' . $label . '" />';

}

add_settings_field(
    // Unique identifier for field
    'fdtcme_label_field',
    // Field Title
    __( 'Label Link', 'fdtcme' ),
    // Callback for field markup
    'fdtcme_label_field_cb',
    // Page to go on
    'fdtcme_page',
    // Section to go in
    'fdtcme_section',
    array( 'class' => 'cme-label' )

);

/*  -----------------------------------------------------------------------------------------------
SETTING EMAIL FIELD
--------------------------------------------------------------------------------------------------- */

function fdtcme_email_field_cb() {

    $options = get_option( 'contact_me_plugin' );

    $email = '';

    if ( isset( $options[ 'email' ] ) ) {
        $email = esc_html( $options[ 'email' ] );
    }

    echo '<input REQUIRED type="text" name="contact_me_plugin[email]" value="' . $email . '" />';

}
add_settings_field(
    // Unique identifier for field
    'fdtcme_email_field',
    // Field Title
    __( 'Email to mailto', 'fdtcme' ),
    // Callback for field markup
    'fdtcme_email_field_cb',
    // Page to go on
    'fdtcme_page',
    // Section to go in
    'fdtcme_section',

    array( 'class' => 'cme-email' )

);

/*  -----------------------------------------------------------------------------------------------
SETTING BANNER POSITION FIELD
--------------------------------------------------------------------------------------------------- */

function fdtcme_banner_pos_field_cb() {

    echo "
        <fieldset>
        <legend>Select a banner position:</legend>

        <div>
        <input type = 'radio' id = 'top' name = 'contact_me_plugin[banner_pos]' value = 'TOP' checked />
        <label for = 'top'>Top</label>
        </div>

        <div>
        <input type = 'radio' id = 'middle' name = 'contact_me_plugin[banner_pos]' value = 'MIDDLE' />
        <label for = 'middle'>Middle</label>
        </div>

        <div>
        <input type = 'radio' id = 'bottom' name = 'contact_me_plugin[banner_pos]' value = 'BOTTOM' />
        <label for = 'bottom'>Bottom</label>
        </div>
        </fieldset>
        ";

}

add_settings_field(
    // Unique identifier for field
    'fdtcme_banner_pos_field',
    // Field Title
    __( 'Banner Position', 'fdtcme' ),
    // Callback for field markup
    'fdtcme_banner_pos_field_cb',
    // Page to go on
    'fdtcme_page',
    // Section to go in
    'fdtcme_section',

    array( 'class' => 'cme-email' )

);