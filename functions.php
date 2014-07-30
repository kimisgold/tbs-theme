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

/* Code snippet from http://http://css-tricks.com/snippets/php/get-current-page-url/ */

function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}

function getCurrentBook() {
  $tbs = 'thesebrokenstars';
  $tsw = 'wordpress';
  $currentUrl = getUrl(); 
  $currentBook = (strpos($currentUrl, $tsw)) ? 'tsw' : 'tbs';
  return $currentBook;
}

?>