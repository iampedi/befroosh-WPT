<?php
// Avoide Direct Access
if (! defined('ABSPATH')) {
    exit;
}

// Import Phosphor Icons
function befroosh_enqueue_assets()
{
    wp_enqueue_script(
        'phosphor-icons',
        'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1',
        [],
        null,
        true // Load on Footer
    );
}
add_action('wp_enqueue_scripts', 'befroosh_enqueue_assets');

// Remove Gutenberg Block Styles
function remove_gutenberg_block_styles()
{
    wp_dequeue_style('wp-block-library'); // فایل اصلی استایل بلوک‌ها
    wp_dequeue_style('wp-block-library-theme'); // theme.json style
    wp_dequeue_style('global-styles'); // استایل‌های گلوبال از theme.json
}
add_action('wp_enqueue_scripts', 'remove_gutenberg_block_styles', 100);

// Import CSS Files
function mytheme_enqueue_styles()
{
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Add Theme Support
add_theme_support('post-thumbnails');

// Menu Locations
function register_my_menus()
{
    register_nav_menus([
        'primary' => __('Primary Menu', 'your-theme-textdomain'),
        'footer'  => __('Footer Menu', 'your-theme-textdomain'),
    ]);
}
add_action('after_setup_theme', 'register_my_menus');


// Main Menu Classes 
add_filter('nav_menu_css_class', function ($classes, $item, $args, $depth) {
    if ($args->theme_location === 'primary') {
        $classes[] = $depth === 0 ? '' : '';
    }
    return $classes;
}, 10, 4);

// افزودن کلاس دلخواه به <a> لینک‌های منو
add_filter('nav_menu_link_attributes', function ($atts, $item, $args, $depth) {
    if ($args->theme_location === 'primary') {
        $atts['class'] = $depth === 0
            ? 'flex items-center h-12 px-4 font-semibold hover:bg-gray-100 rounded-lg duration-300 hover:text-primary aria-[current=page]:bg-gray-50 aria-[current=page]:text-primary aria-[current=page]:cursor-default'
            : '';
    }
    return $atts;
}, 10, 4);
