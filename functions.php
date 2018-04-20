<?php
wp_enqueue_style('my-custom-style', get_template_directory_uri() . '/style.css', false, '20150320');
wp_enqueue_script( 'my-custom-script', get_bloginfo('template_directory') . '/js/init.js', array( 'jquery' ), '', true );

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
show_admin_bar( false );

function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'assets/images/mosaicadventure2-e1461218851878.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
?>