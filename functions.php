<?php
// Adding a primary menu and more
register_nav_menus(
    array(
        'primary' => 'Menu principale',
        'mobile'  => 'Menu mobile',
        'footer'  => 'Menu pied-de-page'
    )
);

// Loading CSS and JS
function load_my_style_and_script(){
    wp_enqueue_style('my_main_css',get_template_directory_uri().'/assets/css/main.css','',1.0,);
    wp_enqueue_script('my_dropotron_script',get_template_directory_uri().'/assets/js/jquery.dropotron.min.js',array('jquery'),1.0,true);
    wp_enqueue_script('my_browser_script',get_template_directory_uri().'/assets/js/browser.min.js',array(),1.0,true);
    wp_enqueue_script('my_breakpoints_script',get_template_directory_uri().'/assets/js/breakpoints.min.js',array(),1.0,true);
    wp_enqueue_script('my_util_script',get_template_directory_uri().'/assets/js/util.js',array(),1.0,true);
    wp_enqueue_script('my_main_script',get_template_directory_uri().'/assets/js/main.js',array(),1.0,true);
}
add_action('wp_enqueue_scripts','load_my_style_and_script',10);

// Adding thumbnails support
add_theme_support( 'post-thumbnails' );

// Adding custom logo
add_theme_support( 'custom-logo' );

// Adding widgets
register_sidebar(
    array(
        'name' => 'Footer Col1',
        'id'   => 'footer-col-1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<p>',
        'after_title' => '</p>'
    )
    );
    register_sidebar(
        array(
            'name' => 'Footer Col2',
            'id'   => 'footer-col-2',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<p>',
            'after_title' => '</p>'
    )
    );
    register_sidebar(
        array(
            'name' => 'Footer Col3',
            'id'   => 'footer-col-3',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<p>',
            'after_title' => '</p>'
    )
    );
    register_sidebar(
        array(
            'name' => 'Footer Col4',
            'id'   => 'footer-col-4',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<p>',
            'after_title' => '</p>'
    )
    );
