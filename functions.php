<?php 

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    function btg_register_assets() {
        wp_enqueue_style( 'btg-style', get_template_directory_uri(  ) . '/css/style.css', 1.0);
        wp_enqueue_script( 'btg-script', get_template_directory_uri() . '/js/main.js', array(  ), '1.0', true );
}
    add_action( 'wp_enqueue_scripts', 'btg_register_assets' );

    function btg_register_menus() {
        register_nav_menus( array(
            'header-menu' => 'Header Menu',
            'social-menu' => 'Social Menu',
            'footer-menu' => 'Footer Menu',
            'mention-menu' => 'Mention Menu',
            'page-menu' => 'Page Menu'
        ) );
    }
    add_action( 'init', 'btg_register_menus' );

    // Pages d'options
if( function_exists( 'acf_add_options_page' ) ) {
	
	acf_add_options_page( array(
		'page_title' 	=> 'Options du thème',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position'    	=> 2
	) );
	
}