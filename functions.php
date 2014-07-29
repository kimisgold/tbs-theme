<?php 

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'other',
        array(
            'labels' => array(
                'name' => __( 'Other Fields' ),
                'singular_name' => __( 'Other Field' )
            ),
        'public' => true,
        'has_archive' => true,
        )
    );
}

?>