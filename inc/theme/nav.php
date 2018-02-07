<?php

function firetoss_nav_setup() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'firetoss_seed' ),
    ) );
    register_nav_menus( array(
        'visitor' => esc_html__( 'Visitor', 'firetoss_seed' ),
    ) );
    register_nav_menus( array(
        'footer' => esc_html__( 'Footer', 'firetoss_seed' ),
    ) );
    register_nav_menus( array(
        'visitor_footer' => esc_html__( 'Visitor Footer', 'firetoss_seed' ),
    ) );
}

add_action( 'after_setup_theme', 'firetoss_nav_setup' );

