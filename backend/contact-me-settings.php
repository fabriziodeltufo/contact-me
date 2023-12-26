<?php

function fdtcme_settings_cb() {

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

    // SETTING SECTION : Define ( at least ) one section
    add_settings_section(
        // Unique identifier for the section
        'fdtcme_section',
        // Section Title
        __( 'Complete the banner parameters required.', 'fdtcme' ),
        // Callback for an optional description
        'fdtcme_section_cb',
        // Admin page to add section to
        'fdtcme_page'
    );

    function fdtcme_section_cb() {
        esc_html_e( 'Insert the label you want be shown in the banner and insert the email to mailto when user click on label link', 'fdcme' );
    }

    // LABEL FIELD

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

    function fdtcme_label_field_cb() {

        $options = get_option( 'contact_me_plugin' );

        $label = '';

        if ( isset( $options[ 'label' ] ) ) {
            $label = esc_html( $options[ 'label' ] );
        }

        echo '<input REQUIRED type="text" name="contact_me_plugin[label]" value="' . $label . '" />';

    }

    // EMAIL FIELD
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

    function fdtcme_email_field_cb() {

        $options = get_option( 'contact_me_plugin' );

        $email = '';

        if ( isset( $options[ 'email' ] ) ) {
            $email = esc_html( $options[ 'email' ] );
        }

        echo '<input REQUIRED type="text" name="contact_me_plugin[email]" value="' . $email . '" />';

    }

    // TOP POS FIELD
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

    function fdtcme_banner_pos_field_cb() {



        echo '<input REQUIRED type="text" name="contact_me_plugin[top_pos]" value="' . $top_pos . '" />';
        echo '<br><br>';
        echo '<br><br>';

        echo '<br><br>';


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
   

    // REGISTERING THE SETTINGS //
    register_setting(
        'fdtcme_settings', // form values
        'contact_me_plugin' //option name
    );

    var_dump("dopo register" . $banner_pos);
    var_dump($top_pos);

}

add_action( 'admin_init', 'fdtcme_settings_cb' );