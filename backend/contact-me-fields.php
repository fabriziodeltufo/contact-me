<?php

/*  -----------------------------------------------------------------------------------------------
SETTING LABEL FIELD
--------------------------------------------------------------------------------------------------- */

add_settings_field(
    // Unique identifier for field
    'fdtcme_label_field',
    // Field Title
    __( 'Label', 'fdtcme' ),
    // Callback for field markup
    'fdtcme_label_field_cb',
    // Page to go on
    'fdtcme_page',
    // Section to go in
    'fdtcme_section',
    array( 'class' => 'cme-label' )

);

function fdtcme_label_field_cb() {

    $options = get_option( 'fdtcme_contact_me_plugin' );

    $label = '';

    if ( isset( $options[ 'label' ] ) ) {
        $label = esc_html( $options[ 'label' ] );
    }

    echo '<input REQUIRED type="text" name="fdtcme_contact_me_plugin[label]" value="' . $label . '" />';

}



/*  -----------------------------------------------------------------------------------------------
SETTING EMAIL FIELD
--------------------------------------------------------------------------------------------------- */

add_settings_field(
    // Unique identifier for field
    'fdtcme_email_field',
    // Field Title
    __( 'Email', 'fdtcme' ),
    // Callback for field markup
    'fdtcme_email_field_cb',
    // Page to go on
    'fdtcme_page',
    // Section to go in
    'fdtcme_section',

    array( 'class' => 'cme-email' )

);

function fdtcme_email_field_cb() {

    $options = get_option( 'fdtcme_contact_me_plugin' );

    $email = '';

    if ( isset( $options[ 'email' ] ) ) {
        $email = esc_html( $options[ 'email' ] );
    }

    echo '<input REQUIRED type="text" name="fdtcme_contact_me_plugin[email]" value="' . $email . '" />';

}


/*  -----------------------------------------------------------------------------------------------
SETTING BANNER POSITION FIELD
--------------------------------------------------------------------------------------------------- */

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

    $options = get_option( 'fdtcme_contact_me_plugin' );
    $banner_pos = $options[ 'banner_pos' ];

    // var_dump( $banner_pos );

    // int 50, 400, 700 - top, midle, bottom

    if ( isset( $options[ 'banner_pos' ] ) ) {
        $banner_pos = esc_html( $options[ 'banner_pos' ] );

        if ( $banner_pos == 'TOP' ) {

            echo "
            <fieldset>  
            <div>
            <input type = 'radio' id = 'top' name = 'fdtcme_contact_me_plugin[banner_pos]' value = 'TOP' checked />
            <label for = 'top'>Top</label>
            </div>
    
            <div>
            <input type = 'radio' id = 'middle' name = 'fdtcme_contact_me_plugin[banner_pos]' value = 'MIDDLE' />
            <label for = 'middle'>Middle</label>
            </div>
    
            <div>
            <input type = 'radio' id = 'bottom' name = 'fdtcme_contact_me_plugin[banner_pos]' value = 'BOTTOM' />
            <label for = 'bottom'>Bottom</label>
            </div>
            </fieldset>
            ";
        }

        if ( $banner_pos == 'MIDDLE' ) {
            echo "
            <fieldset>
            <div>
            <input type = 'radio' id = 'top' name = 'fdtcme_contact_me_plugin[banner_pos]' value = 'TOP'  />
            <label for = 'top'>Top</label>
            </div>

            <div>
            <input type = 'radio' id = 'middle' name = 'fdtcme_contact_me_plugin[banner_pos]' value = 'MIDDLE' checked />
            <label for = 'middle'>Middle</label>
            </div>

            <div>
            <input type = 'radio' id = 'bottom' name = 'fdtcme_contact_me_plugin[banner_pos]' value = 'BOTTOM' />
            <label for = 'bottom'>Bottom</label>
            </div>
            </fieldset>
            ";

        }

        if ( $banner_pos == 'BOTTOM' ) {
            echo "
            <fieldset>   
            <div>
            <input type = 'radio' id = 'top' name = 'fdtcme_contact_me_plugin[banner_pos]' value = 'TOP'  />
            <label for = 'top'>Top</label>
            </div>
    
            <div>
            <input type = 'radio' id = 'middle' name = 'fdtcme_contact_me_plugin[banner_pos]' value = 'MIDDLE'  />
            <label for = 'middle'>Middle</label>
            </div>
    
            <div>
            <input type = 'radio' id = 'bottom' name = 'fdtcme_contact_me_plugin[banner_pos]' value = 'BOTTOM' checked />
            <label for = 'bottom'>Bottom</label>
            </div>
            </fieldset>
            ";

        }

    }

}


