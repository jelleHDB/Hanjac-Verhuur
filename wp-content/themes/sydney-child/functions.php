<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}



if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
       'page_title'    => 'Footer Settings',
       'menu_title'    => 'Footer Settings',
       'menu_slug'     => 'footer-settings',
       'capability'    => 'edit_posts',
       'redirect'      => false
   ));

}





?>