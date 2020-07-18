<?php

/**
- widgety, sidebar`y
- funkcjonalności motywu
*/

add_action( 'widgets_init', 'landing_sidebars' );
function landing_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'stopka-1',
            'name'          => __( 'Stopka 1' ),
            'description'   => __( 'Widget zawierający zawartoś lewej kolumny stopki.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'stopka-2',
            'name'          => __( 'Stopka 2' ),
            'description'   => __( 'Widget zawierający zawartoś prawej kolumny stopki.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
}