<?php
function mytheme_enqueue_scripts() {
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('theme-styles', get_stylesheet_uri());  // ตรวจสอบให้แน่ใจว่า style.css ถูกโหลด
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

function mytheme_register_nav_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mycustomtheme'),
    ));
}

// ตรวจสอบให้แน่ใจว่า style.css ถูกโหลด

add_action('after_setup_theme', 'mytheme_register_nav_menus');
