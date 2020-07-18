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

	register_sidebar(
        array(
            'id'            => 'features',
            'name'          => __( 'Features' ),
            'description'   => __( 'Sidebar listy wyróżniających cech produktu.' ),
            'before_widget' => '
            	<div id="%1$s" class="widget %2$s d-flex flex-row mb-5 align-items-start">
            		<div class="mr-5">
            			<img src="https://via.placeholder.com/150" class="rounded-circle feature-img">
        			</div>
        			<div>',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}