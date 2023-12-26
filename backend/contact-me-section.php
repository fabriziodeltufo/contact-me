<?php

// SETTING SECTION : Define ( at least ) one section

function fdtcme_section_cb() {
    esc_html_e( 'Insert the banner label, the contact email and banner position', 'fdcme' );
}

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